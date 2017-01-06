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

    <div class="container container-fluid" onload="display_default()">
        <div class="row" id="display-frame" >
        </div>
    </div>

    <script type="text/javascript">

        var current_admins = [];
        var selected_admin = null;
        var active_admin = '<?php echo $_SESSION['admin']->getEmail() ?>';



        function clear_admins() {
            for (var i = 0 ; i < current_admins.length ; i++) {
                current_admins.pop();
            }
        }

        function initialize() {

            var ajax_target = '../scripts/get_all_admins.php';

            clear_admins();

            $.post( ajax_target, null, function( data ) {

                var adm_obj = JSON.parse(data);

                for ( var i = 0 ; i < adm_obj.length ; i++ ) {
                    current_admins.push(adm_obj[i]);
                }
                    display_default();
                });
        }

        function display_default() {
            display_all_admins();
        }


        function display_all_admins() {
            display_admins(current_admins);
        }

        function generate_back_button() {
            return "<button class='btn btn-md' onclick='display_default()'><span class='glyphicon glyphicon-triangle-left'></span> Go Back</button>";
        }


        function display_add_new_admin() {

            clear_display();

            var html = "" + generate_back_button() +
                "<h2>Invite a New Administrator</h2>" +
                "<div class='row'>";

            html += "<div class='col-xs-2'>";

            html += "<p>First Name</p>";

            html += "</div>";

            html += "<div class='col-xs-4'>";

            html += "<input type='text' id='first'/>";

            html += "</div>";

            html += "</div>";

            html += "<div class='row'>";

            html += "<div class='col-xs-2'>";

            html += "<p>Last Name</p>";

            html += "</div>";

            html += "<div class='col-xs-4'>";

            html += "<input type='text' id='last'/>";

            html += "</div>";

            html += "</div>";

            html += "<div class='row'>";

            html += "<div class='col-xs-2'>";

            html += "<p>Email</p>";

            html += "</div>";

            html += "<div class='col-xs-4'>";

            html += "<input type='text' id='email'/>";

            html += "</div>";

            html += "</div>";

            html += "<div class='col-xs-4'>";

            html += "<button class='btn btn-md btn-primary' onclick='add_admin()'><span class='glyphicon glyphicon-send'></span> Send Invite</button>";

            html += "</div>";

            html += "</div>";

            $("#display-frame").html( html );


        }

        function send_reset_password() {

        }

        function suspend_admin(admin) {

        }

        function reactivate_admin(admin){

        }

        function add_admin() {

        }


        function delete_admin (email) {

            console.log(0);

            var ajax_target = '../scripts/delete_admin.php';

            confirm ('This action cannot be undone. Are you sure that you want to delete user ' + email + '?');

            console.log(1);

            $.post( ajax_target, JSON.stringify(email) , function (data) {
                console.log(data);
            });

            if (active_admin == email) {
                window.location = '..?status=admin_deleted';
            } else {
                window.location = '../admins/';
            }

        }

        function display_admin(admin) {

            if (active_admin == admin.email) {
                return '' +
                    '<div class="row">' +
                        '<div class="col-xs-3">' +
                            admin.first + ' ' + admin.last + ' <span class=\'label label-warning\'><span class=\'glyphicon glyphicon-star\'></span></span> ' +
                        '</div>' +
                        '<div class="col-xs-4">' +
                            admin.email +
                        '</div>' +
                        '<div class="col-xs-5 btn-group">' +
                            "<button class='btn btn-primary btn-sm' onclick=\"location.href = \'../profile/\'\"><span class='glyphicon glyphicon-edit'></span> Edit</button>" +
                            "<button class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-open-file'></span> Reset</button>" +
                            "<button class='btn btn-danger btn-sm' onclick=\'delete_admin(\"" + admin.email + "\")\'><span class='glyphicon glyphicon-trash'></span> Delete</button>" +
                        '</div>' +
                    '</div>';
            } else return '' +
                '<div class="row">' +
                    '<div class="col-xs-3">' +
                        admin.first + ' ' + admin.last +
                    '</div>' +
                    '<div class="col-xs-4">' +
                        admin.email +
                    '</div>' +
                    '<div class="col-xs-5 btn-group">' +
                        "<button class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-edit'></span> Edit</button>" +
                        "<button class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-open-file'></span> Reset</button>" +
                        "<button class='btn btn-danger btn-sm' onclick=\'delete_admin(\"" + admin.email + "\")\'><span class='glyphicon glyphicon-trash'></span> Delete</button>" +
                '</div>' +
                '</div>';

        }

        function display_admins(admins = []) {

            var len = admins.length;

            var html = '' +
                '<div class="row col-xs-12 btn-group">' +
                    '<button class="btn btn-primary btn-md" onclick=\'display_add_new_admin()\'><span class=\'glyphicon glyphicon-plus\'></span> Create Administrator</button>' +
                    '<button class="btn btn-success btn-md"><span class=\'glyphicon glyphicon-refresh\'></span> Refresh</button>' +
                '</div>' +
                '<div class="row">' +
                '<div class="col-xs-3">' +
                    '<b>Name</b>' +
                '</div>' +
                '<div class="col-xs-4">' +
                    '<b>Email</b>' +
                '</div>' +
                '<div class="col-xs-5">' +
                '</div>' +
                '</div><br/>';

            for (var i = 0 ; i < len ; i++) {
                html += display_admin( admins[i])  + "<br/>" ;
            }


            $("#display-frame").html( html );

        }

        function clear_display() {
            $("#display-frame").html('');
        }


    </script>

</body>

