<!DOCTYPE html>
<html>

<?php
require_once "data.php";
?>



<!--  
*** PLEASE READ ***
Copyright 2016, Dominic Ritchey
Please do not re-use without express permission of the developer.
Property of Dominic Ritchey. For permissions, contact dominicritchey@email.virginia.edu. -->  
    <head>
        <title>Farber Lab - Home</title>

        <?php

        get_style_link('home');
        get_script_link();

        ?>

        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Farber Lab - Center for Public Health Genomics">

    </head>
    <body>
        <div id="header-container">
            <div id="header">
                <img src="DNA_white.jpg">
                <a href="<?php get_link('home', 'home') ?>">
                    <div id="logo">
                        <p>The</p>
                        <p><strong>Farber</strong></p>
                        <p>Lab</p>
                    </div> <!-- logo -->
                </a> 
                <div id="nav">
                    <a href="<?php get_link('home', 'home') ?>"><p class="selected-nav">HOME</p></a>
                    <a href="<?php get_link('home', 'about') ?>"><p>ABOUT</p></a>
                    <a href="<?php get_link('home', 'people') ?>"><p>PEOPLE</p></a>
                    <a href="<?php get_link('home', 'publications') ?>"><p>PUBLICATIONS</p></a>
                    <a href="<?php get_link('home', 'contact') ?>"><p>CONTACT</p></a>
                </div> <!-- nav -->
                <div id="header-img-box">
                    <a href="https://med.virginia.edu/" class="header-logo"><img src="medicine_white.gif"></a>
                    <a href="http://cphg.virginia.edu/" class="header-logo"><img src="cphglogowhite.gif"></a>
                </div> <!-- header-img-box -->
            </div> <!-- header -->
        </div> <!-- header-container -->
        <div id="menu" class="hidden">
            <a href="javascript:void(0)">
                <div id="menu-top">
                     <div id="menu-logo">
                        <div></div> <!-- top logo bar -->
                        <div></div> <!-- middle logo bar -->
                        <div></div> <!-- low logo bar -->
                    </div> <!-- menu-logo -->
                </div> <!-- menu-top -->
            </a>
            <div class="drop-down">
                <a href="#" class="nav-link">
                    <p class="selected-nav">HOME</p>
                </a>
                <a href="#" ><p>ABOUT</p></a>
                <a href="#" ><p>PEOPLE</p></a>
                <a href="#" ><p>PUBLICATIONS</p></a>
                <a href="#" ><p>CONTACT</p></a>
            </div> <!-- drop-down -->
        </div> <!-- menu -->
        <div id='big-box'>
            
        </div><!--/big-box-->
        <div id="footer"> 
            <p><strong>CONNECT</strong></p>
            <div id="footer-img-wrapper">
                <a href="http://facebook.com"><img src="fb_button.png"></a>
                <a href="http://linkedin.com"><img src="linkedin_button.png"></a>
                <a href="http://twitter.com"><img src="twitter_button.png"></a>
                <a href="tel:4342435946"><img src="phone.svg"></a> 
                <a href="mailto:crf2s@virginia.edu"><img src="email.svg"></a>
            </div> <!-- footer-img-wrapper --> 
        </div> <!-- footer -->
    </body>
</html>

<!-- All images are open-source / labeled for reuse -->