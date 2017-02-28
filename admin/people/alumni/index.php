<?php

require_once "../../scripts/Authenticator.php";
require_once "../../scripts/display_injector.php";

session_start();

if (isset($_SESSION['authenticator'])) {
    if ($_SESSION['authenticator']->status !== Authenticator::AUTH_OK) {
        header('location: ../index.php?status=improper_access');
    }
} else {
    header('location: ../index.php?status=improper_access');
}

?>
<html>
<head>
    <link rel="stylesheet" href="../../../stylesheets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../stylesheets/master.css">
    <script src="../../../scripts/jquery.js"></script>
</head>
<body onload="load_all_people()">
<?php


?>
<div class="panel panel-primary row col-xs-12">
    <div class="panel-heading">
        <h3>Manage Alumni</h3>
    </div>
    <div class="panel-body">
        <p>You're logged in as <b><?php echo $_SESSION['admin']->getEmail() ?></b></p>
    </div>
    <div class="panel-footer">
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-default" onclick="location.href = '../../home';">
                 <span class="glyphicon glyphicon-triangle-left"></span> Go Back to Home
            </button>
            <button type="button" class="btn btn-sm btn-default" onclick="location.href = '../../people';">
                <span class="glyphicon glyphicon-triangle-left"></span> Go Back to Manage People
            </button>
            <button type="button" class="btn btn-sm btn-danger" onclick="location.href = '../../';">
                <span class="glyphicon glyphicon-remove"></span> Log Out
            </button>
        </div>
    </div>
</div>
<div class="container">
    <div class="btn-group">
        <button class="btn btn-md btn-primary" onclick="display_all_alumni()">
            <span class="glyphicon glyphicon-user"></span> Show All Alumni
        </button>
        <button class="btn btn-md btn-primary" onclick="display_add_new_alumni_form()">
            <span class="glyphicon glyphicon-plus"></span> Add New Alumni
        </button>
    </div>
    <div id="display-frame">

    </div>
</div>

<script type="text/javascript">

    var state = {};
    state.all_people = [];

    function load_all_people() {

        var ajax_target = '../../scripts/fetch_all_alumni.php';

        $.post(ajax_target,'', function(data) {

            state.all_people = JSON.parse(data);
            display_all_alumni();

        });
    }

    function display_all_alumni() {

        clear_display();

        var len = state.all_people.length;

        var html = "<div class='row row-header row-padded'>" +
            "<div class='col-xs-3'>" +
            "<b>Name</b>" +
            "</div>" +
            "<div class='col-xs-3'>" +
            "<b>Title</b>" +
            "</div>" +
            "<div class='col-xs-2'>" +
            "<b>Category</b>" +
            "</div>" +
            "</div>";

        for (var i = 0 ; i < len ; i++)
            html += generate_display_for_alumni(i);

        $("#display-frame").html( html );

    }


    function generate_display_for_alumni(index = -1) {

        if (index != -1)
            var person = state.all_people[index];

        if (person != null) {

            var category = person.category == null ? '' :
                person.category == 'ug' ? 'Undergraduate' :
                    person.category == 'gr' ? 'Graduate' : '';

            return "" +
                "<div class='row row-padded'>" +
                "   <div class='col-xs-3'>" +
                "       <b>" + person.last + ", " + person.first + "</b>" +
                "   </div>" +
                "   <div class='col-xs-3'>" +
                "       <p>" + person.title + "</p>" +
                "   </div>" +
                "   <div class='col-xs-2'>" +
                "       <p>" + category + "</p>" +
                "   </div>" +
                "   <div class='col-xs-3 btn-group'>" +
                "       <button class='btn btn-sm btn-success' onclick='display_edit_alumni("+ index +")'>" +
                "           <span class='glyphicon glyphicon-edit'></span> Edit" +
                "       </button>" +
                "       <button class='btn btn-sm btn-danger' onclick='submit_delete_alumni("+ index +")'>" +
                "           <span class='glyphicon glyphicon-trash'></span> Delete" +
                "       </button>" +
            "       </div>" +
            "   </div>";
        }
    }

    function display_edit_alumni(index = -1) {
        clear_display();
    }

    function submit_delete_alumni (index = -1) {

        var ajax_target = '../../scripts/submit_delete_alumni.php';

        var a = index != 1 ?
            state.all_people[index] :
            null;

        if (a != null) {

            $.post(ajax_target, JSON.stringify(a), function(data) {
                state.all_people[index] = null;
                shift_people_array();
                display_all_alumni();
            });

        }

    }


    function shift_people_array() {

        var arr = [];

        for (var i = 0; i < state.all_people.length; i++)
            if (state.all_people[i] != null)
                arr.push(state.all_people[i]);

        state.all_people = arr;

    }

    function clear_display() {
        $("#display-frame").html(null)
    }
</script>
</body>
</html>
