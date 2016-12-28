<!DOCTYPE html>

<?php

    require_once "../scripts/data.php";
    require_once "../scripts/display_injector.php";
    require_once "../Settings.php";
    require_once "../scripts/retrieval.php";
    require_once "../scripts/Publication.php";

?>
<!--  
*** PLEASE READ ***
Copyright 2016, Dominic Ritchey
Please do not re-use without express permission of the developer.
Property of Dominic Ritchey. For permissions, contact dominicritchey@email.virginia.edu. 
-->  
    
<!-- TEMPLATES 

        Single Publication Template:
        <li> <div>
            <a href="X"><p class="article-name">NAME</p></a>
            <p>Authors</p>
            <p><em>Journal</em></p>
            <p>XXX XX, 20XX</p> </div>
        </li> 

-->   
<html>
    <head>
        <title>Farber Lab - Publications</title>
    <?php

        print_style_link('publications');
        print_script_link('publications');
        print_meta_info();



        // PHP FUNCTIONS


        function display_publications_from_year( $year ) {

            echo "<ul id=\"$year-list\" class='year-list'>";

            $publications_from_year = fetch_publications_from_year($year); // will be the result of the publication fetch function

            if ($publications_from_year != null) {

                foreach ($publications_from_year as $publication) {


                    if ($publication instanceof Publication)
                        $publication->generate_display();
                    else die ("Thrown by display_publications_from_year: Non-Publication object found");

                }
            }

            echo "</ul>";
        }

        function display_year_header($year) {
            echo "
                                <div class=\"date-box\" id='$year-header'>
                                    <div>
                                        <h3>$year</h3>
                                    </div><!-- /date-box div -->
                                    <div>
                                        <a href=javascript:void(0); id=\"$year-collapse\" class='collapse' onclick='collapse_year( $year )'>
                                            <img src=\"../assets/arrow-collapse.png\" class=\"pub-arrow\">
                                        </a>
                                        <a href=javascript:void(0); id=\"$year-expand\" class=\"hidden expand\" onclick='expand_year( $year )'>
                                            <img src=\"../assets/arrow-expand.png\" class=\"pub-arrow\">
                                        </a>
                                    </div> <!-- /date-box div -->
                                </div> <!-- /date-box -->
                        ";
        }

        function generate_publications_nav() {
            $part_1 = "
                    <div id='pub-nav' class='nav'>
                        <ul>    
                            <li>
                                <p>Go to:</p>
                            </li>";
                            
            $all_pub_years = fetch_publication_years_array();

            $part_2 = "";

            foreach ($all_pub_years as $year) {
                $part_2 .= "
                            <li>
                                <a href=\"#$year-list\">
                                    <p>$year</p >
                                </a >
                            </li >
                 ";

            }

            $part_3 = "
                    </ul>
                    <ul id='second-ul'>
                        <li>
                            <a href=\"javascript:void(0);\" id=\"expand-top\" onclick='show_all_publications()'>
                                <p>Show All</p>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0);\" id=\"collapse-top\" onclick='hide_all_publications()'>
                                <p>Hide All</p>
                            </a>
                        </li>
                    </ul>
                    <a id=\"pub-nav-arrow\" href='#top'>
                        <img src=\"../assets/arrow-collapse.png\">
                    </a>
                </div><!--/pub-nav-->
                ";

            echo $part_1.$part_2.$part_3;
        }

    ?>

    </head>
    <body onload="load_background('publications')">

            <?php

                generate_header('publications');
                generate_publications_nav();

            ?>

            <div id="big-box">

                <h1>Our Publications</h1>

                <div id='date-box-wrapper'>

                    <?php

                    $all_pub_years = fetch_publication_years_array();

                        foreach($all_pub_years as $year) {

                            display_year_header( $year );
                            display_publications_from_year( $year );

                        }
                    ?>

                </div> <!-- /date-box-wrapper -->
            </div><!--/big-box-->

            <?php

                 generate_footer('publications');

            ?>
    </body>
</html>
<!-- All images are open-source / labeled for reuse -->