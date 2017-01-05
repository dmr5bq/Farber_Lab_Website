<?php

require_once "../scripts/auth_check.php";
require_once "../scripts/display_injector.php";

check_authentication();

?>

<head>
    <link rel="stylesheet" href="../../stylesheets/bootstrap/css/bootstrap.css">
</head>
<body>
    <?php generate_header( $_SESSION['admin'] ) ?>

    <script type="text/javascript">

        function initialize() {

        }

        function display_default() {

        }

        function display_publication_year(year = 0) {

        }

        function edit_publication(publication = null) {

        }

        function delete_publication(publication = null) {

        }

        function add_new_publication() {

        }

        function display_add_publication() {

        }

        function display_edit_publication(publication = null) {

        }

        function display_all_publication_years(years=[]) {

        }

        function save_publication(publication = null) {

        }

    </script>
</body>

