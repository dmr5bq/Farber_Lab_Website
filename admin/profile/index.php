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

    generate_header( $_SESSION['admin'], 'My Profile' );

    ?>
    <div class="container container-fluid">

        <div class="btn-group row" role="group" id="button-frame">

                <?php

                $email = $_SESSION["admin"]->getEmail();

                $first = $_SESSION["admin"]->getFirst();

                $last = $_SESSION["admin"]->getLast();


                ?>

                <button id="btn-0" type="button" class="btn btn-lg btn-primary" onclick="display_update_password_form('<?php echo $email ?>')">
                    <span class="glyphicon glyphicon-certificate"></span> Update Password
                </button>

                <button id="btn-1" type="button" class="btn btn-lg btn-primary" onclick="display_update_information_form()">
                    <span class="glyphicon glyphicon-user"></span>  Update Information
                </button>

                <button id="btn-2" type="button" class="btn btn-lg btn-primary" onclick="display_update_preferences_form('<?php echo $email ?>')">
                    <span class="glyphicon glyphicon-pencil"></span>  Update Preferences
                </button>

                <button id="btn-3" type="button" class="btn btn-lg btn-danger" onclick="delete_admin('<?php echo $email?>')">
                    <span class="glyphicon glyphicon-trash"></span> Deactivate My Account
                </button>


                <button id='panel-button' class="btn btn-lg btn-warning" onclick="panel_up()"><span id="panel-symbol" class="glyphicon glyphicon-triangle-top"></span></button>

        </div>
        <div id="display-frame" class="row">

        </div>

    </div>
</body>

<script type="text/javascript">

    var admin_first = '<?php echo fetch_admin_by_email($_SESSION['admin']->getEmail())->getFirst() ?>';
    var admin_last = '<?php echo fetch_admin_by_email($_SESSION['admin']->getEmail())->getLast() ?>';
    var admin_email = '<?php echo $_SESSION['admin']->getEmail() ?>';


    function panel_up() {

        var $symbol = $('#panel-symbol');

        $symbol.removeClass('glyphicon-triangle-top');
        $symbol.addClass('glyphicon-triangle-left');

        $('#display-frame').html(null);

    }




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

        if (!confirm ("This action cannot be undone. Are you sure you want to change your password?")) return;

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

        var html = "<div class='col-xs-8'>";

            html += "<div class='alert alert-danger' role='alert'>";

            html += "<p>Your password could not be changed. Please try again. You may have entered the wrong password.</p>";

        html += "</div>";

        html += "</div>";

        $("#display-frame").html( html );

    }

    function generate_alert_success_change_password() {

        clear_display();

        var html = "<div class='col-xs-8'>";

        html += "<div class='alert alert-success' role='alert'>";

        html += "<p>Your password was successfully changed.</p>";

        html += "</div>";

        html += "</div>";

        $("#display-frame").html( html );

    }

    function generate_alert_success_update_preferences() {

        clear_display();

        var html = "<div class='col-xs-8'>";

        html += "<div class='alert alert-success' role='alert'>";

        html += "<p>Your preferences have been updated. </p>";

        html += "</div>";

        html += "</div>";

        $("#display-frame").html( html );

    }

    function generate_alert_success_change_information() {

        clear_display();

        var html = "<div class='col-xs-8'>";

        html += "<div class='alert alert-success' role='alert'>";

        html += "<p>Your information was updated.</p>";

        html += "</div>";

        html += "</div>";

        $("#display-frame").html( html );
    }

    function generate_alert_warning_error() {

        clear_display();

        var html = "<div class='col-xs-8'>";

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


    function submit_preferences_form(email) {

        var receive_emails = $('#receive-emails').is(":checked") ? 1 : 0;

        var ajax_target = '../scripts/submit_preferences.php';

        var json_obj = {};

        json_obj.receive_emails = receive_emails;
        json_obj.email = email;

        var json_str = JSON.stringify(json_obj);

        $.post(ajax_target, json_str,function (data) { generate_alert_success_update_preferences() });

    }


    function display_update_preferences_form() {

        clear_display();

        var html = "<div class='row'>";

        html += "<div class='col-xs-2'>";

        html += "<p>Receive Emails for New Messages?</p>";

        html += "</div>";

        html += "<div class='col-xs-1'>";

        html += "<input type='checkbox' id='receive-emails' class='input-lg' checked='true'/>";

        html += "</div>";

        html += "</div>";

        html += "<div class='col-xs-4'>";

        html += "<button class='btn btn-md btn-primary' onclick='submit_preferences_form(\"" + admin_email + "\")'> Update Preferences </button>";

        html += "</div>";

        html += "</div>";

        $("#display-frame").html( html );
    }

    function clear_display() {
        $("#display-frame").html('');
    }

    function delete_admin (email) {

        var ajax_target = '../scripts/delete_admin.php';

        if (!confirm ('This action cannot be undone. Are you sure that you want to delete user ' + email + '?'))
            return;


        $.post( ajax_target, JSON.stringify(email))
            .then(
                window.location = '..?status=admin_deleted'
            );

    }

</script>
</html>



