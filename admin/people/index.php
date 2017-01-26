<?php

require_once "../scripts/auth_check.php";
require_once "../scripts/display_injector.php";

check_authentication();

?>
<head>
    <link rel="stylesheet" href="../../stylesheets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../stylesheets/master.css">
    <script src="../../scripts/jquery.js"></script>
</head>
<body onload="load_all_people()">
    <?php

    generate_header( $_SESSION['admin'], 'People' );

    ?>

    <div class="container">
        <div class="btn-group">
            <button class="btn btn-md btn-primary" onclick="display_all_people()">
                <span class="glyphicon glyphicon-user"></span> Show All Team Members
            </button>
        </div>
        <div id="display-frame">

        </div>
    </div>

    <script type="text/javascript">

        var state = {};

        state.all_people = [];

        function load_all_people() {

            ajax_target = '../scripts/fetch_all_people.php';


            $.post(ajax_target,'', function(data) {

                state.all_people = JSON.parse(data);

            });
        }

        function display_all_people() {

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

            for (var i = 0 ; i < len ; i++) {

                html += generate_display_for_person(i);

            }

            $("#display-frame").html( html );

        }

        function display_add_new_people_form() {
            issue_not_config_warning();
        }

        function refresh() {
            issue_not_config_warning();
        }

        function display_people_category() {
            issue_not_config_warning();
        }

        function submit_delete_people(index = -1) {

            person = state.all_people[index];

            if (person != null) {

                var ajax_target = '../scripts/delete_people.php';

                $.post(ajax_target, JSON.stringify(person), function(data) {

                    state.all_people[index] = null;

                    reposition_people_array();

                    display_all_people();
                })

            }

        }

        function reposition_people_array() {
            var len = state.all_people.length;

            var new_array = [];

            for (var i = 0 ; i < len ; i++) {
                if (state.all_people[i] == null || state.all_people == undefined) {
                    console.log("null spot found");
                } else {
                    new_array.push(state.all_people[i]);
                }
            }

            state.all_people = new_array;
        }

        function submit_add_people_form() {
            issue_not_config_warning();
        }

        function generate_display_for_person(index = -1) {

            person = state.all_people[index];

            if (person != null) {

                category = person.category == null ? '' :
                                person.category == 'students' ? 'Student' :
                                    person.category == 'staff' ? 'Staff Member' :
                                        person.category == 'faculty' ? 'Faculty Member' : '';

                email_link = person.email == '' || person.email == null || person.email == undefined ? '' :
                                "<button class='btn btn-sm btn-primary' onclick=''>" +
                                    "<span class='glyphicon glyphicon-envelope'></span> Email" +
                                "</button>";

                return "" +
                    "<div class='row row-padded'>" +
                        "<div class='col-xs-3'>" +
                            "<b>" + person.last + ", " + person.first + "</b>" +
                        "</div>" +
                        "<div class='col-xs-3'>" +
                            "<p>" + person.title + "</p>" +
                        "</div>" +
                        "<div class='col-xs-2'>" +
                            "<p>" + category + "</p>" +
                        "</div>" +
                        "<div class='col-xs-3 btn-group'>" +
                            "<button class='btn btn-sm btn-danger' onclick='submit_delete_people("+ index +")'>" +
                                "<span class='glyphicon glyphicon-trash'></span> Delete" +
                            "</button>" +
                            "<button class='btn btn-sm btn-warning'>" +
                                "<span class='glyphicon glyphicon-warning-sign'></span> Retire" +
                            "</button>" +
                            email_link +
                        "</div>" +
                    "</div>";
            }
        }

        function issue_not_config_warning() {
            alert("This function has not been configured; see the web administrator.");
        }


    </script>

</body>
