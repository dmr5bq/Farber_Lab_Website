<?php

require_once "../scripts/auth_check.php";
require_once "../scripts/display_injector.php";

check_authentication();

?>

<head>
    <link rel="stylesheet" href="../../stylesheets/bootstrap/css/bootstrap.css">
</head>
<body>
     <?php

     generate_header( $_SESSION['admin'], 'About' );

     ?>

    <script type="text/javascript">

        about_sections = [];

        function initialize() {

        }

        function display_default() {

        }

        function display_about_section(about_section = null) {

        }

        function display_all_about_section_titles(about_sections = []) {

        }

        function display_edit_about_section(about_section = null) {

        }

        function display_edit_project(project = null) {

        }

        function display_add_new_project() {

        }

        function display_add_new_about_section() {

        }

        function delete_about_section(about_section = null) {

        }

        function delete_project(project = null) {

        }

        function save_project(project) {

        }

        function save_about_section(about_section) {

        }

        function refresh() {

        }

    </script>
</body>
