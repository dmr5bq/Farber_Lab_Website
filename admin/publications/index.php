<?php

require_once "../scripts/auth_check.php";
require_once "../scripts/display_injector.php";

check_authentication();

?>

<head>
    <link rel="stylesheet" href="../../stylesheets/bootstrap/css/bootstrap.css">
    <script src="../../scripts/jquery.js"></script>
</head>
<body onload="initialize()">
    <?php generate_header( $_SESSION['admin'], 'Publications' ) ?>
    <div class="container">
        <div class="row col-xs-12" id="display-frame">

        </div>
    </div>

    <script type="text/javascript">

        state = {};

        state.all_publications = [];

        function initialize() {

            var ajax_target = '../scripts/fetch_all_publications.php';

            $.post(ajax_target, null, function(data) {
                state.all_publications = JSON.parse(data);
                display_default();
            });
        }

        function display_default() {

            var html = '';

            html += generate_publication_table_header();

            for (var i = 0 ; i < state.all_publications.length; i++) {
                html += generate_display_for_publication(i);
            }

            $('#display-frame').html(html);
        }

        function generate_display_for_publication(pub_ind = -1) {
            var output = '';
            if (pub_ind != -1) {
                var pub = state.all_publications[pub_ind];

                var title = pub.title;
                var authors = pub.authors;
                var link = pub.link;
                var published_in = pub.published_in;
                var year = pub.year;


                output += "<div class='row'>";
                output += "     <div class='col-xs-4'>";
                output += "         <b><a href='" + link + "'>" + title.substr(0, 50) + "...</a></b>";
                output += "     </div>";
                output += "     <div class='col-xs-2'>";
                output += "         <p>" + authors.substr(0, 30) + "...</p>";
                output += "     </div>";
                output += "     <div class='col-xs-3'>";
                output += "         <p>" + published_in + "</p>";
                output += "     </div>";
                output += "     <div class='col-xs-1'>";
                output += "         <p>" + year + "</p>";
                output += "     </div>";
                output += "     <div class='col-xs-2 btn-group'>";
                output += "         <button class='btn btn-primary' onclick='display_edit_publication(" + pub_ind + ")'>";
                output += "             <span class='glyphicon glyphicon-edit'></span>";
                output += "         </button>";
                output += "         <button class='btn btn-danger'>";
                output += "             <span class='glyphicon glyphicon-trash'></span>";
                output += "         </button>";
                output += "     </div>";
                output += "</div>";
            }

            return output;

        }

        function generate_publication_table_header() {
            var output = "";

            output += "<div class='row'>";
            output += "     <div class='col-xs-4'>";
            output += "         <b>Title</b>";
            output += "     </div>";
            output += "     <div class='col-xs-2'>";
            output += "         <b>Authors</b>";
            output += "     </div>";
            output += "     <div class='col-xs-3'>";
            output += "         <b>Journal</b>";
            output += "     </div>";
            output += "     <div class='col-xs-1'>";
            output += "         <b>Year</b>";
            output += "     </div>";
            output += "</div>";
            output += "<hr>";

            return output;
        }

        function display_publication_year(year = 0) {

        }

        function display_edit_publication(pub_ind = -1) {
            clear_display();

            var output = '';

            if (pub_ind != -1) {

                var pub = state.all_publications[pub_ind];

                var title = pub.title;
                var authors = pub.authors;
                var link = pub.link;
                var published_in = pub.published_in;
                var year = pub.year;
                var date = pub.date;

                output += "<h3>Edit Publication</h3>";
                output += "<div class='row'>";
                output += "     <div class='col-xs-3'>";
                output += "         <p>Title</p>";
                output += "     </div>";
                output += "     <div class='col-xs-9'>";
                output += "         <input size='100' type='text' id='title' value='" + title + "'/>";
                output += "     </div>";
                output += "</div>";
                output += "<div class='row'>";
                output += "     <div class='col-xs-3'>";
                output += "         <p>Authors</p>";
                output += "     </div>";
                output += "     <div class='col-xs-9'>";
                output += "         <input size='100' type='text' id='authors' value='" + authors + "'/>";
                output += "     </div>";
                output += "</div>";
                output += "<div class='row'>";
                output += "     <div class='col-xs-3'>";
                output += "         <p>Journal</p>";
                output += "     </div>";
                output += "     <div class='col-xs-9'>";
                output += "         <input size='100' type='text' id='published_in' value='" + published_in + "'/>";
                output += "     </div>";
                output += "</div>";
                output += "<div class='row'>";
                output += "     <div class='col-xs-3'>";
                output += "         <p>Date</p>";
                output += "     </div>";
                output += "     <div class='col-xs-9'>";
                output += "         <input size='100' type='text' id='date' value='" + date + "'/>";
                output += "     </div>";
                output += "</div>";
                output += "<div class='row'>";
                output += "     <div class='col-xs-3'>";
                output += "         <p>Year</p>";
                output += "     </div>";
                output += "     <div class='col-xs-9'>";
                output += "         <input size='100' type='text' id='year' value='" + year + "'/>";
                output += "     </div>";
                output += "</div>";
                output += "<div class='row'>";
                output += "     <div class='col-xs-3'>";
                output += "         <p>Link</p>";
                output += "     </div>";
                output += "     <div class='col-xs-9'>";
                output += "         <input size='100' type='text' id='link' value='" + link + "'/>";
                output += "     </div>";
                output += "</div>";
                output += "<div class='row'>";
                output += "     <div class='col-xs-3'>";
                output += "         <button type='button' class='btn btn-md btn-primary'><span class='glyphicon glyphicon-send'></span> Submit</button>";
                output += "     </div>";
                output += "</div>";
            }

            $('#display-frame').html(output);
        }

        function submit_edit_publication(pub_ind = -1) {

            var ajax_target = '../scripts/submit_edit_publication.php';

        }

        function delete_publication(pub_ind = -1) {

        }

        function add_new_publication() {

        }

        function display_add_publication() {

        }


        function display_all_publication_years(years=[]) {

        }


        function refresh() {

        }

        function clear_display() {
            $("#display-frame").html(null);
        }

    </script>
</body>

