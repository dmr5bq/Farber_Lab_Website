<?php

// TODO TODO TODO TODO function is broken


require_once "../scripts/auth_check.php";
require_once "../scripts/display_injector.php";
require_once "../../scripts/Admin.php";
require_once "../../scripts/retrieval.php";

check_authentication();

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../stylesheets/bootstrap/css/bootstrap.css">
    <script src="../../scripts/jquery.js"></script>
</head>
<body>
    <?php

    generate_header( $_SESSION['admin'] );

    ?>
    <div class="container container-fluid">
        <div class="btn-group" role="group" id="button-frame">

                <?php

                $email = $_SESSION["admin"]->getEmail();

                $first = $_SESSION["admin"]->getFirst();

                $last = $_SESSION["admin"]->getLast();


                ?>

                <button id="btn-0" type="button" class="btn btn-lg btn-default" onclick="display_update_password_form('<?php echo $email ?>')">Update Password</button>

                <button id="btn-1" type="button" class="btn btn-lg btn-default" onclick="display_update_information_form()">Update Information</button>

                <button id="btn-2" type="button" class="btn btn-lg btn-default" onclick="display_update_preferences_form('<?php echo $email ?>')">Update Preferences</button>
        </div>
        <div id="display-frame">

        </div>
    </div>
</body>

<script type="text/javascript">

    var admin_first = '<?php echo fetch_admin_by_email($_SESSION['admin']->getEmail())->getFirst() ?>';
    var admin_last = '<?php echo fetch_admin_by_email($_SESSION['admin']->getEmail())->getLast() ?>';
    var admin_email = '<?php echo $_SESSION['admin']->getEmail() ?>';




    function display_update_password_form( email ) {

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

        var html = "<div class='col-xs-12'>";

        html += "<div class='alert alert-success' role='alert'>";

        html += "<p>Your password was successfully changed.</p>";

        html += "</div>";

        html += "</div>";

        $("#display-frame").html( html );

    }

    function generate_alert_success_change_information() {

        clear_display();

        var html = "<div class='col-xs-12'>";

        html += "<div class='alert alert-success' role='alert'>";

        html += "<p>Your information was updated.</p>";

        html += "</div>";

        html += "</div>";

        $("#display-frame").html( html );
    }

    function generate_alert_warning_error() {

        clear_display();

        var html = "<div class='col-xs-12'>";

        html += "<div class='alert alert-warning' role='alert'>";

        html += "<p>Something went wrong. Check your internet connection.</p>";

        html += "</div>";

        html += "</div>";

        $("#display-frame").html( html );

    }

    function display_update_information_form() {

        clear_display();

        var html = "<div class='row'>";

                html += "<div class='col-xs-2'>";

                     html += "<p>First Name</p>";

                html += "</div>";

                html += "<div class='col-xs-4'>";

                    html += "<input type='text' id='new-first' value='" + admin_first + "'/>";

                html += "</div>";

            html += "</div>";

            html += "<div class='row'>";

                html += "<div class='col-xs-2'>";

                    html += "<p>Last Name</p>";

                html += "</div>";

                html += "<div class='col-xs-4'>";

                    html += "<input type='text' id='new-last' value='" + admin_last + "'/>";

                html += "</div>";

            html += "</div>";

                html += "<div class='col-xs-4'>";

                    html += "<button class='btn btn-md btn-primary' onclick='submit_information_form(\"" + admin_email + "\")'> Update Information </button>";

                html += "</div>";

        html += "</div>";

        $("#display-frame").html( html );

    }

    function submit_information_form(old_email) {

        var json_obj = {};

        json_obj.email = old_email;
        json_obj.new_first = $("#new-first").val();
        json_obj.new_last = $("#new-last").val();

        admin_first = json_obj.new_first ;
        admin_last = json_obj.new_last;

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



    function display_update_preferences_form() {

        clear_display();
    }

    function clear_display() {
        $("#display-frame").html('');
    }

</script>
</html>



