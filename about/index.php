<!DOCTYPE html>

<?php

    require_once "../scripts/data.php";
    require_once "../scripts/display_injector.php";
    require_once "../scripts/AboutSection.php";
    require_once "../scripts/Project.php";
    require_once "../Settings.php";
?>

<html>
<!--  
*** PLEASE READ ***
Copyright 2016, Dominic Ritchey
Please do not re-use without express permission of the developer.
Property of Dominic Ritchey. For permissions, contact dominicritchey@email.virginia.edu. -->  
    <head>
        <title>Farber Lab - About</title>

        <?php

            print_style_link('about');
            print_script_link('about');
            print_meta_info();

        ?>
    </head>
    <body onload="load_background('about')">

            <?php

                generate_header('about');
                generate_nav(load_sections());
            ?>

        <div id="big-box">
            <h1>About Our Lab</h1>
            <?php
                $sections = load_sections();

                foreach ($sections as $section) {
                    $section->generate_display();
                } ?>
            <p>Current Projects</p>
                <table>
                    <?php

                        foreach (load_projects() as $project) {
                            $project->generate_preview_display();
                        }  ?>
                </table> <!-- table 2 --> 
            </div>   <!-- big-box -->
        <!--FOOTER CODE-->
        <?php generate_footer('about') ?>
    </body>
</html>

<!-- All images are open-source / labeled for reuse -->

<?php

function load_sections() {
    $datafile = '../'.Settings::$about_sections_data_filename;

    $sections_str = file_get_contents($datafile);

    $primary_delim = "/\n";
    $secondary_delim = '///';

    $sections_array = explode($primary_delim, $sections_str);

    $sections = array();

    foreach($sections_array as $row) {

        $row = explode($secondary_delim, $row);

        try {
            $sections[] = new AboutSection($row[0], $row[1]);
        } catch ( Exception $e ) {
            echo $e->getTraceAsString();
        }
    }

    return $sections;
}

function load_projects() {

    $datafile = '../'.Settings::$about_projects_data_filename;

    $proj_str = file_get_contents($datafile);

    $primary_delim = "\n";
    $secondary_delim = ":+";

    $proj_array = explode($primary_delim, $proj_str);

    $projects = array();

    foreach($proj_array as $row) {

        $row = explode($secondary_delim, $row);

        try {
            $projects[] = new Project($row[0], $row[1]);
        } catch ( Exception $e ) {
            echo $e->getTraceAsString();
        }
    }

    return $projects;

}

function generate_nav( $sections ) {

    echo "
                   <div id='about-nav'>
                        <ul>
                            <li>
                                <p>Go to:</p>
                            </li>";


    foreach ($sections as $section) {

        echo "
                            <li>
                                <a href='#$section->link_name'>
                                    <p>$section->display_name</p>
                                </a>
                            </li>";

    }


    echo "
                            <li>
                                <a href='#projects'>
                                    <p>Current Projects</p>
                                </a>
                            </li>
                        </ul>
                        <a id=\"about-nav-arrow\" href='#top'>
                            <img src=\"../assets/arrow-collapse.png\">
                        </a>
                     </div><!--/about-nav-->";
}
?>