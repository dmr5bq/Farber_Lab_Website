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
        <div class="row btn-group">
            <button class="btn btn-primary" onclick="display_default()">
                <span class="glyphicon glyphicon-th-list"></span> View All Publications
            </button>
            <button class="btn btn-primary" onclick="display_add_publication()">
                <span class="glyphicon glyphicon-plus"></span> Add New Publication
            </button>
        </div>
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

            var html = '<h3>All Publications</h3>';

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
                output += "         <button class='btn btn-danger' onclick='submit_delete_publication(" + pub_ind + ")'>";
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
                output += "         <button onclick='submit_edit_publication(" + pub_ind + ")' type='button' class='btn btn-md btn-primary'><span class='glyphicon glyphicon-send'></span> Submit</button>";
                output += "     </div>";
                output += "</div>";
            }

            $('#display-frame').html(output);
        }

        function submit_edit_publication(pub_ind = -1) {

            var ajax_target = '../scripts/submit_edit_publication.php';
            var ajax_data = undefined;

            if (pub_ind != -1) {

                var pub = state.all_publications[pub_ind];

                pub.title = $("#title").val();
                pub.authors = $("#authors").val();
                pub.date = $("#date").val();
                pub.published_in = $("#published_in").val();
                pub.year = $("#year").val();
                pub.link = $("#link").val();

                ajax_data = JSON.stringify(pub);

                $.post(ajax_target, ajax_data, function (data) {
                    display_default();
                });
            }

        }

        function submit_delete_publication(pub_ind = -1) {

            var ajax_target = '../scripts/submit_delete_publication.php';
            var ajax_data = state.all_publications[pub_ind]['id'];

            $.post(ajax_target, ajax_data, function(data) {
                state.all_publications[pub_ind] = null;
                shift_publications_array();
                display_default();
            });

        }

        function shift_publications_array() {

            var arr = [];

            for (var i = 0; i < state.all_publications.length; i++)
                if (state.all_publications[i] != null)
                    arr.push(state.all_publications[i]);

            state.all_publications = arr;

        }


        function display_add_publication() {
            clear_display();

            var html = "<h2>Add New Publication</h2>";

            html += "<style>input {width: 85%;}</style>";

            html += "<div class='row'>";

            html += "   <div class='col-xs-2'>";

            html += "       <p>Title</p>";

            html += "   </div>";

            html += "   <div class='col-xs-10'>";

            html += "       <input type='text' id='title'/>";

            html += "   </div>";

            html += "</div>";

            html += "<div class='row'>";

            html += "   <div class='col-xs-2'>";

            html += "       <p>Authors</p>";

            html += "   </div>";

            html += "   <div class='col-xs-10'>";

            html += "       <input type='text' id='authors'/>";

            html += "   </div>";

            html += "</div>";

            html += "<div class='row'>";

            html += "   <div class='col-xs-2'>";

            html += "       <p>Journal</p>";

            html += "   </div>";

            html += "   <div class='col-xs-4'>";

            html += "       <input type='text' id='published_in'/>";

            html += "   </div>";

            html += "</div>";

            html += "<div class='row'>";

            html += "   <div class='col-xs-2'>";

            html += "       <p>Date</p>";

            html += "   </div>";

            html += "   <div class='col-xs-4'>";

            html += "       <input type='text' id='date'/>";

            html += "   </div>";

            html += "</div>";

            html += "<div class='row'>";

            html += "   <div class='col-xs-2'>";

            html += "       <p>Year</p>";

            html += "   </div>";

            html += "   <div class='col-xs-4'>";

            html += "       <input type='text' id='year'/>";

            html += "   </div>";

            html += "</div>";

            html += "<div class='row'>";

            html += "   <div class='col-xs-2'>";

            html += "       <p>Link</p>";

            html += "   </div>";

            html += "   <div class='col-xs-10'>";

            html += "       <input type='text' id='link'/>";

            html += "   </div>";

            html += "</div>";

            html += "   <div class='row col-xs-4'>";

            html += "       <button class='btn btn-md btn-primary' onclick='submit_add_publication()'>" +

                "               <span class='glyphicon glyphicon-check'></span> Submit" +

                "           </button>";

            html += "   </div>";

            html += "</div>";

            $("#display-frame").html( html );
        }

        function submit_add_publication() {

            var ajax_target = '../scripts/submit_add_publication.php';

            var pub = {};

            pub.title = $("#title").val();
            pub.authors = $("#authors").val();
            pub.date = $("#date").val();
            pub.published_in = $("#published_in").val();
            pub.year = $("#year").val();
            pub.link = $("#link").val();

            var ajax_data = JSON.stringify(pub);

            $.post(ajax_target, ajax_data, function(data) {
                initialize();
                display_default();
            });

        }

        function clear_display() {
            $("#display-frame").html(null);
        }

    </script>
</body>

