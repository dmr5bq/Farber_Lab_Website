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
            <button class="btn btn-md btn-primary" onclick="display_add_new_people_form()">
                <span class="glyphicon glyphicon-plus"></span> Add New Team Member
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

            for (var i = 0 ; i < len ; i++) {

                html += generate_display_for_person(i);
            }

            html += generate_frame_clear_button();

            $("#display-frame").html( html );

        }

        function display_add_new_people_form() {
            clear_display();

            var html = "<h2>Add New Team Member</h2>";

            html += "<div class='row'>";

            html += "   <div class='col-xs-2'>";

            html += "       <p>First Name</p>";

            html += "   </div>";

            html += "   <div class='col-xs-4'>";

            html += "       <input type='text' id='first'/>";

            html += "   </div>";

            html += "</div>";

            html += "<div class='row'>";

            html += "   <div class='col-xs-2'>";

            html += "       <p>Last Name</p>";

            html += "   </div>";

            html += "   <div class='col-xs-4'>";

            html += "       <input type='text' id='last'/>";

            html += "   </div>";

            html += "</div>";

            html += "<div class='row'>";

            html += "   <div class='col-xs-2'>";

            html += "       <p>Email</p>";

            html += "   </div>";

            html += "   <div class='col-xs-4'>";

            html += "       <input type='text' id='email'/>";

            html += "   </div>";

            html += "</div>";

            html += "<div class='row'>";

            html += "   <div class='col-xs-2'>";

            html += "       <p>Job Title</p>";

            html += "   </div>";

            html += "   <div class='col-xs-4'>";

            html += "       <input type='text' id='title'/>";

            html += "   </div>";

            html += "</div>";

            html += "<div class='row'>";

            html += "   <div class='col-xs-2'>";

            html += "       <p>Category</p>";

            html += "   </div>";

            html += "   <div class='col-xs-4'>";

            html += "       <select id='category'>";

            html += "           <option value='students'>Student</option>";

            html += "           <option value='staff'>Staff</option>";

            html += "           <option value='faculty'>Faculty</option>";

            html += "       </select>";

            html += "   </div>";

            html += "</div>";

            html += "   <div class='row col-xs-4'>";

            html += "       <button class='btn btn-md btn-primary' onclick='submit_add_people_form()'>" +

                "               <span class='glyphicon glyphicon-check'></span> Submit" +

                "           </button>";

            html += "   </div>";

            html += "</div>";

            $("#display-frame").html( html );
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
                });
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

            var json_obj = {};

            var first = $('#first').val();
            var last = $('#last').val();
            var email = $('#email').val();
            var title = $('#title').val();
            var category = $('#category').val();

            json_obj.first = first;
            json_obj.last = last;
            json_obj.email = email;
            json_obj.title = title;
            json_obj.category = category;

            var ajax_target = '../scripts/add_people.php';

            var ajax_data = JSON.stringify(json_obj);

            $.post(ajax_target, ajax_data, function(data) {
                console.log(data);
            });

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
                            "<button class='btn btn-sm btn-success' onclick='display_edit_people("+ index +")'>" +
                                "<span class='glyphicon glyphicon-edit'></span> Edit" +
                            "</button>" +
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

        function generate_edit_display_for_person(index = -1) {

            if (index != -1) {

                var person = state.all_people[index];

                var post_target = '../scripts/edit_person_not_ajax.php';

                var student_select = person.category == 'students' ? 'selected=\'selected\'' : '';
                var staff_select = person.category == 'staff' ? 'selected=\'selected\'' : '';
                var faculty_select = person.category == 'faculty' ? 'selected=\'selected\'' : '';


                var html = "<h2>Editing <span class='highlight-text-1'>" + person.first + " " + person.last + "</span></h2>";

                html += "<form action='" + post_target + "' method='post' enctype='multipart/form-data'>";

                html += "<input type='hidden' id='id' name='id' value='"+ person.id +"'>";

                html += "<div class='row'>";

                html += "   <div class='col-xs-2'>";

                html += "       <p>First Name</p>";

                html += "   </div>";

                html += "   <div class='col-xs-4'>";

                html += "       <input type='text' name='first' id='first' value='" + person.first + "'/>";

                html += "   </div>";

                html += "</div>";

                html += "<div class='row'>";

                html += "   <div class='col-xs-2'>";

                html += "       <p>Last Name</p>";

                html += "   </div>";

                html += "   <div class='col-xs-4'>";

                html += "       <input type='text' name='last' id='last' value='" + person.last + "'/>";

                html += "   </div>";

                html += "</div>";

                html += "<div class='row'>";

                html += "   <div class='col-xs-2'>";

                html += "       <p>Email</p>";

                html += "   </div>";

                html += "   <div class='col-xs-4'>";

                html += "       <input type='text' name='email' id='email' value='" + person.email + "'/>";

                html += "   </div>";

                html += "</div>";

                html += "<div class='row'>";

                html += "   <div class='col-xs-2'>";

                html += "       <p>Job Title</p>";

                html += "   </div>";

                html += "   <div class='col-xs-4'>";

                html += "       <input type='text' name='title' id='title' value='" + person.title + "'/>";

                html += "   </div>";

                html += "</div>";

                html += "<div class='row'>";

                html += "   <div class='col-xs-2'>";

                html += "       <p>Category</p>";

                html += "   </div>";

                html += "   <div class='col-xs-4'>";

                html += "       <select name='category' id='category'>";

                html += "           <option value='students' " + student_select + ">Student</option>";

                html += "           <option value='staff' " + staff_select + ">Staff</option>";

                html += "           <option value='faculty' " + faculty_select + ">Faculty</option>";

                html += "       </select>";

                html += "   </div>";

                html += "</div>";

                html += "<div class='row'>";

                html += "   <div class='col-xs-2'>";

                html += "       <p>Add or Change Image</p>";

                html += "   </div>";

                html += "   <div class='col-xs-4'>";

                html += "       <input type='file' name='image' id='image'/>";

                html += "   </div>";

                html += "</div>";

                html += "   <div class='row col-xs-4'>";

                html += "       <button class='btn btn-md btn-primary'>" +

                    "               <span class='glyphicon glyphicon-check'></span> Submit" +

                    "           </button>";

                html += "   </div>";

                html += "</div></form>";

                return html;
            }
            else return null;
        }

        function display_edit_people(index = -1) {

            if (index != -1) {
                clear_display();

                person = state.all_people[index];

                $('#display-frame').html(generate_edit_display_for_person(index));

            }
        }


        function issue_not_config_warning() {
            alert("This function has not been configured; see the web administrator.");
        }

        function generate_frame_clear_button() {
            return "<button class='btn btn-md btn-warning' onclick='clear_display()'>" +
                    "<span class='glyphicon glyphicon-remove'></span>" +
                "</button>";
        }

        function clear_display() {
            $("#display-frame").html(null);
        }


    </script>


</body>
