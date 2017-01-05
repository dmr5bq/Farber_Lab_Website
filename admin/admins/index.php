<?php

require_once "../scripts/auth_check.php";
require_once "../scripts/display_injector.php";
require_once "../../scripts/retrieval.php";

check_authentication();

?>

<head>
    <link rel="stylesheet" href="../../stylesheets/bootstrap/css/bootstrap.css">
    <script src="../../scripts/jquery.js"></script>
</head>
<body onload="initialize()">
    <?php generate_header( $_SESSION['admin'] ) ?>

    <div class="container container-fluid">
        <div class="row" id="display-frame" onload="display_default()">
        </div>
    </div>

    <script type="text/javascript">

        var current_admins = [];

        function initialize() {

            var ajax_target = '../scripts/get_all_admins.php';

            $.post( ajax_target, null, function( data ) {

                current_admins = [];

                var adm_obj = JSON.parse(data);

                for ( var i = 0 ; i < adm_obj.length ; i++ )
                    current_admins.push(adm_obj[i]);
                }
            );

        }

        function display_default() {
            display_all_admins();
        }

        function display_all_admins() {

        }

        function display_add_new_admin() {

        }

        function send_reset_password() {

        }

        function suspend_admin(admin) {

        }

        function reactivate_admin(admin){

        }

        function add_admin() {

        }

        function delete_admin(admin){

        }

        function display_admin(admin) {

        }

        function display_admins(admins) {

        }

    </script>

</body>

