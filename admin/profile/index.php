<?php


require_once "../scripts/auth_check.php";
require_once "../scripts/display_injector.php";
require_once "../../scripts/Admin.php";

check_authentication();

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../stylesheets/bootstrap/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
    <?php

    generate_header( $_SESSION['admin'] )

    ?>
    <div class="container container-fluid">
        <div class="btn-group" role="group" id="button-frame">

                <?php

                $email = $_SESSION["admin"]->getEmail();

                $first = $_SESSION["admin"]->getFirst();

                $last = $_SESSION["admin"]->getLast();


                ?>

                <button id="btn-0" type="button" class="btn btn-lg btn-default" onclick="display_update_password_form('<?php echo $email ?>')">Update Password</button>

                <button id="btn-1" type="button" class="btn btn-lg btn-default" onclick="display_update_information_form('<?php echo $first ?>', '<?php echo $last ?>', '<?php echo $email ?>')">Update Information</button>

                <button id="btn-2" type="button" class="btn btn-lg btn-default" onclick="display_update_preferences_form('<?php echo $email ?>')">Update Preferences</button>
        </div>
        <div id="display-frame">

        </div>
    </div>
</body>

<script type="text/javascript">

    var admin_email = '<?php echo $_SESSION['admin']->getEmail() ?>';

    function display_update_password_form(email) {

        clear_display();

        var
            html = "<div class='row'>";

            html += "<div class='col-xs-2'>";

                html += "<p>Old Password</p>";

            html += "</div>";

            html += "<div class='col-xs-4'>";

                html += "<input type='password' id='old-password'/>";

            html += "</div>";

            html += "</div>";

            html += "<div class='row'>";

            html += "<div class='col-xs-2'>";

                html += "<p>New Password</p>";

            html += "</div>";

            html += "<div class='col-xs-4'>";

                html += "<input type='text' id='new-password'/>";

            html += "</div>";

            html += "</div>";

             html += "<div class='row'>";

            html += "<div class='col-xs-2'>";

                html += "<p>Confirm Password</p>";

            html += "</div>";

            html += "<div class='col-xs-4'>";

                html += "<input type='text' id='conf-password'/>";

            html += "</div>";

            html += "</div>";

            html += "<div class='col-xs-4'>";

                html += "<button class='btn btn-md btn-primary' onclick='submit_new_password(\"" + email + "\")'> Update Password </button>";

            html += "</div>";

        html += "</div>";

        $("#display-frame").html( html );

        refresh_buttons();

    }

    function submit_new_password(email) {

        var old_password = $("#old-password").val();
        var new_password = $("#new-password").val();
        var confirmed_password = $("#conf-password").val();

        if (new_password != confirmed_password)  {
            alert("Passwords do not match — please try again!");
            return false;
        }

        var json_obj = {};

        json_obj.old_password = old_password;
        json_obj.new_password = new_password;
        json_obj.email = email;

        json_data = JSON.stringify(json_obj);

        confirm ("This action cannot be undone. Are you sure you want to change your password?");

        var update_script = "../scripts/update_password.php";

        $.post(update_script, json_data, function(data) {

            console.log(data);

            switch (data) {

                case "1":
                    generate_alert_fail_change_password();
                    break;

                case "0":
                    generate_alert_success_change_password();
                    break;

                default:
                    generate_alert_warning_error();


            }

        });

    }

    function generate_alert_fail_change_password() {

        clear_display();

        var html = "<div class='col-xs-12'>";

            html += "<div class='alert alert-danger' role='alert'>";

            html += "<p>Your password could not be changed. Please try again. You may have entered the wrong password.</p>";

        html += "</div>";

        html += "</div>";

        $("#display-frame").html( html );

    }

    function generate_alert_success_change_password() {

        clear_display();

        refresh_buttons();

        var html = "<div class='col-xs-12'>";

        html += "<div class='alert alert-success' role='alert'>";

        html += "<p>Your password was successfully changed.</p>";

        html += "</div>";

        html += "</div>";

        $("#display-frame").html( html );

    }

    function generate_alert_success_change_information() {

        clear_display();

        refresh_buttons();

        var html = "<div class='col-xs-12'>";

        html += "<div class='alert alert-success' role='alert'>";

        html += "<p>Your information was updated.</p>";

        html += "</div>";

        html += "</div>";

        $("#display-frame").html( html );
    }

    function generate_alert_warning_error() {

        clear_display();

        refresh_buttons();

        var html = "<div class='col-xs-12'>";

        html += "<div class='alert alert-warning' role='alert'>";

        html += "<p>Something went wrong. Check your internet connection.</p>";

        html += "</div>";

        html += "</div>";

        $("#display-frame").html( html );

    }

    function display_update_information_form(first, last, email) {

        clear_display();

        var html = "<div class='row'>";

            html += "<div class='col-xs-2'>";

                 html += "<p>First Name</p>";

            html += "</div>";

            html += "<div class='col-xs-4'>";

                html += "<input type='text' id='new-first' value='" + first + "'/>";

            html += "</div>";

            html += "</div>";

            html += "<div class='row'>";

                html += "<div class='col-xs-2'>";

                    html += "<p>Last Name</p>";

                html += "</div>";

                html += "<div class='col-xs-4'>";

                    html += "<input type='text' id='new-last' value='" + last + "'/>";

                html += "</div>";

            html += "</div>";

            html += "<div class='row'>";

                html += "<div class='col-xs-2'>";

                    html += "<p>Email Address</p>";

                html += "</div>";

                html += "<div class='col-xs-4'>";

                    html += "<input type='text' id='new-email' value='" + email + "'/>";

                html += "</div>";

            html += "</div>";

                html += "<div class='col-xs-4'>";

                    html += "<button class='btn btn-md btn-primary' onclick='submit_information_form(\"" + email + "\")'> Update Information </button>";

                html += "</div>";

        html += "</div>";

        $("#display-frame").html( html );

    }

    function submit_information_form( old_email ) {

        var json_obj = {};

        json_obj.old_email = old_email;
        json_obj.new_email = $("#new-email").val();
        json_obj.new_first = $("#new-first").val();
        json_obj.new_last = $("#new-last").val();

        json_data = JSON.stringify(json_obj);

        var update_script = "../scripts/update_info.php";

        $.post(update_script, json_data, function(data) {

            switch (data) {

                case "0":
                    generate_alert_success_change_information();
                    break;

                default:
                    generate_alert_warning_error();
            }

        });

    }

    function refresh_buttons() {

        refresh_script = '../scripts/refresh_state.php';

        input = {'admin_email':admin_email};


        $.post(refresh_script, JSON.stringify(input), function(data) {

                var response = JSON.parse(data);

                admin_email = response.admin_email;

                var admin_first = response.admin_first;

                var admin_last = response.admin_last;

                var new_func_0 = 'display_update_password_form("' + admin_email + '")' ;

                var new_func_1 = 'display_update_information_form("' + admin_first + '", "' + admin_last + '" , "' + admin_email + '" )' ;

                var new_func_2 = 'display_update_preferences_form("' + admin_email + '")' ;

                $('#btn-0').attr('onclick', new_func_0);

                $('#btn-1').attr('onclick', new_func_1);

                $('#btn-2').attr('onclick', new_func_2);

                /*
                * TODO:
                * write function that will access the admin by the id and not the email alone in the scripts to ensure accuracy
                *
                * */
            }

        );

    }

    function display_update_preferences_form() {

        clear_display();
    }

    function clear_display() {
        $("#display-frame").html('');
    }

</script>
</html>



