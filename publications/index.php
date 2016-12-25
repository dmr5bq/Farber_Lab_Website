<!DOCTYPE html>

<?php

    require_once "../data.php";
    require_once "../display_injector.php";

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

    ?>

    </head>
    <body onload="load_background('publications')">
            <?php

                generate_header('publications');

            ?>

            <div id='pub-nav' class='hidden'>
                <ul>    
                    <li>
                        <p>Go to:</p>
                    </li>
                    <li>
                        <a href="#2014-list">
                            <p>2014</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2013-list">
                            <p>2013</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2012-list">
                            <p>2012</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2011-list">
                            <p>2011</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2010-list">
                            <p>2010</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2009-list">
                            <p>2009</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2008-list">
                            <p>2008</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2007-list">
                            <p>2007</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2006-list">
                            <p>2006</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2006-list">
                            <p>2005</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2004-list">
                            <p>2004</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2003-list">
                            <p>2003</p>
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
            </div><!--/pub-nav-->
            <div id="big-box">
                <h1>Our Publications</h1>
                <div id="lower-pub-nav" class="pub-nav">
                    <ul>    
                    <li>
                        <p>Go to:</p>
                    </li>
                    <li>
                        <a href="#2014-list">
                            <p>2014</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2013-list">
                            <p>2013</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2012-list">
                            <p>2012</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2011-list">
                            <p>2011</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2010-list">
                            <p>2010</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2009-list">
                            <p>2009</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2008-list">
                            <p>2008</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2007-list">
                            <p>2007</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2006-list">
                            <p>2006</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2006-list">
                            <p>2005</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2004-list">
                            <p>2004</p>
                        </a>
                    </li>
                    <li>
                        <a href="#2003-list">
                            <p>2003</p>
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
                </div>
                <div id='date-box-wrapper'>
                    <div class="date-box" id='v2-first-date-box'>
                        <div>
                            <h3>2014</h3>
                        </div><!-- /date-box div -->
                        <div>
                            <a href=javascript:void(0); id="2014-collapse" class='collapse'>
                                <img src="../assets/arrow-collapse.png" class="pub-arrow">
                            </a>
                            <a href=javascript:void(0); id="2014-expand" class="hidden expand">
                                <img src="../assets/arrow-expand.png" class="pub-arrow">
                            </a>
                        </div> <!-- /date-box div -->
                    </div> <!-- /date-box -->
                    <ul id="2014-list" name="2014-list">
                        <li>

            </div><!--/big-box-->
            <?php

                 generate_footer('publications');

            ?>
    </body>
</html>
<!-- All images are open-source / labeled for reuse -->