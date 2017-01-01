<?php


require_once "../scripts/auth_check.php";
require_once "../scripts/display_injector.php";
require_once "../../scripts/Admin.php";

check_authentication();

?>

<head>
    <link rel="stylesheet" href="../../stylesheets/bootstrap/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
    <?php

    generate_header( $_SESSION['admin'] )

    ?>
    <div class="container container-fluid">
        <div class="row">
            <div class="col-xs-2">
                <button type="button" class="btn btn-lg btn-default" onclick="display_update_password_form('<?php echo $_SESSION["admin"]->getEmail(); ?>')">Update Password</button>
            </div>
            <div class="col-xs-2">
                <button type="button" class="btn btn-lg btn-default" onclick="display_update_information_form('<?php echo $_SESSION["admin"]->getEmail(); ?>')">Update Information</button>
            </div>
            <div class="col-xs-2">
                <button type="button" class="btn btn-lg btn-default" onclick="display_update_preferences_form('<?php echo $_SESSION["admin"]->getEmail(); ?>')">Update Preferences</button>
            </div>
        </div>
        <div class="row" id="display-frame">

        </div>
    </div>
</body>

<script type="text/javascript">

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

    }

    function submit_new_password(email) {

        var old_password = $("#old-password").val();
        var new_password = $("#new-password").val();
        var confirmed_password = $("#conf-password").val();

        console.log(old_password + " " + new_password + " " + confirmed_password);

        if (new_password != confirmed_password)  {
            alert("Passwords do not match — please try again!");
            return false;
        }

        var json_obj = {};

        json_obj.old_password = old_password;
        json_obj.new_password = new_password;
        json_obj.email = email;

        json_data = JSON.stringify(json_obj);

        //confirm ("This action cannot be undone. Are you sure you want to change your password?");

        var update_script = "../scripts/update_password.php";

        $.post(update_script, json_data, function(data) {
            alert(data);
        });


    }

    function display_update_information_form() {

    }

    function display_update_preferences_form() {

    }

    function clear_display() {
        $("#display-frame").html( null );
    }

</script>



