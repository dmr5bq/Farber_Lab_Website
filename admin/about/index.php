<?php

require_once "../scripts/auth_check.php";
require_once "../scripts/display_injector.php";

check_authentication();

?>

<head>
    <link rel="stylesheet" href="../../stylesheets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../stylesheets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../stylesheets/master.css">
    <script src="../../scripts/jquery.js"></script>
</head>
<body onload="initialize() ">
     <?php

     generate_header( $_SESSION['admin'], 'About' );

     ?>
     <div class="container" id="display-frame">


     </div>


    <script type="text/javascript">

        var state = {};

        state.titles = [];
        state.sections = [];

        function initialize() {

            var ajax_target = '../scripts/fetch_about_sections.php';

            $.post(ajax_target, null, function (data) {

                var sections = JSON.parse(data);
                state.titles = sections[0];
                state.sections = sections[1];
            });

        }

        function display_default() {
            var html = "";

            for ( var i = 0 ; i < state.titles.length; i++ ) {
                html += generate_about_section_display(i);
            }

            $("#display-frame").html(html);
        }

        function generate_about_section_display(index = -1) {

            if (index != -1) {

                var html = '';

                html += '<div class=\'row\'>';
                html += '   <div class=\'row col-xs-12\'>';
                html += '       <b>' + state.titles[index] + '</b>';
                html += '   </div>';
                html += '   <div class=\'row col-xs-12\'>';
                html += '       ' + state.sections[index];
                html += '   </div>';
                html += '</div>';

                return html;

            } else return '';

        }

        function expand_section(index) {

        }

        function hide_section(index) {

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
