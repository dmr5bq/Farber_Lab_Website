<!DOCTYPE html>
<html>

<?php

    require_once "../data.php";
    require_once "../display_injector.php";
    require_once "../scripts/TeamMember.php";
    require_once "../scripts/Alumni.php";
    require_once "../scripts/functions.php";

?>


<!--  
*** PLEASE READ ***
Copyright 2016, Dominic Ritchey
Please do not re-use without express permission of the developer.
Property of Dominic Ritchey. For permissions, contact dominicritchey@email.virginia.edu. -->  

    <head>
        <title>Farber Lab - People</title>

        <?php

            print_style_link('people');
            print_script_link('people');
            print_meta_info();

        ?>
    </head>
    <body onload="load_background('people')">
       <?php

        generate_header('people');

       ?>
        <div id='people-nav'>
                <ul>    
                    <li>
                        <p>Go to:</p>
                    </li>
                    <li>
                        <a href="#team">
                            <p>Our Team</p>
                        </a>            
                    </li>
                    <li>
                        <a href="#alumni">
                            <p>Alumni</p>
                        </a>
                    </li>
                </ul>
                <ul id='second-ul'>
                    <li>
                        <a href="javascript:void(0);" id="expand-top">
                            <p>Show All</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="collapse-top">
                            <p>Hide All</p>
                        </a>
                    </li>
                </ul>
                <a id="pub-nav-arrow" href='#top'>
                    <img src="../assets/arrow-collapse.png">
                </a>
            </div><!--/people-nav-->
            <div id='big-box'>
                <h1>Our Team</h1>
                <div id='people-selector'>
                    <div id="lower-pub-nav" class="pub-nav">
                        <ul>    
                            <li>
                                <p>Show Only:</p> <!-- Not linked -->
                            </li>
                            <li>
                                <a href="javascript:void(0);" id='faculty'>
                                    <p>Faculty</p>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" id='staff'>
                                    <p>Staff</p>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" id='students'>
                                    <p>Students</p>
                                </a>
                            </li>
                        </ul>
                        <ul id='lower-second-ul'>
                            <li>
                                <a href="javascript:void(0);" id="expand-top">
                                    <p>Show All</p>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" id="collapse-top">
                                    <p>Hide All</p>
                                </a>
                            </li>
                        </ul>
                    </div> <!-- /lower-pub-nav -->
                </div><!-- /people-selector -->
                <div id='photo-wrapper' class='people-with-photos'>

                <?php

                    $all_tm = fetch_all_team_members();

                    foreach ($all_tm as $tm) {

                        $has_img = $tm['has_image'] == 1;

                        $tm_obj = TeamMember::create_team_member($tm['first'], $tm['last'], $tm['email'], $tm['title'], $tm['category'], $has_img);

                        $tm_obj->generate_display();
                    }


                ?>

                </div><!-- /photo-wrapper -->
                <h1>Alumni</h1>
                <div id='people-selector'>
                    <div id="lower-pub-nav" class="pub-nav">
                        <ul>    
                            <li>
                                <p>Show Only:</p>
                            </li>
                            <li>
                                <a href="javascript:void(0);" id='ug'>
                                    <p>Undergraduate</p>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" id='gr'>
                                    <p>Graduate</p>
                                </a>
                            </li>
                        </ul>
                        <ul id='lower-second-ul'>
                            <li>
                                <a href="javascript:void(0);" id="expand-top-2">
                                    <p>Show All</p>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" id="collapse-top-2">
                                    <p>Hide All</p>
                                </a>
                            </li>
                        </ul>
                    </div><!-- /lower-pub-nav -->
                </div><!-- /people-selector -->
                <div id='photo-wrapper' class='people-without-photos'>

                <?php

                $all_alums = fetch_all_alumni();

                foreach ($all_alums as $alum) {

                    $alum_obj = Alumni::create_alumni($alum['first'], $alum['last'], $alum['title'], $alum['category']);

                    $alum_obj->generate_display();
                }

                ?>

                </div><!-- /photo-wrapper -->
            </div><!-- /big-box -->
        <!--FOOTER CODE-->
       <?php
            generate_footer('people');
       ?>
    </body>
</html>

<!-- All images are open-source / labeled for reuse -->