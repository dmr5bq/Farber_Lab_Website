<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 12/23/16
 * Time: 9:12 AM
 */

require_once 'data.php';

function generate_header($section) {

    if ($section == 'home')
        $img_path = 'assets/';
    else
        $img_path = '../assets/';

   echo "<div id=\"header-container\" name='top'>
            <div id=\"header\">
                <img src=\"".$img_path."DNA_white.jpg\">
                <a href=\"" . get_link($section, 'home') . "\">
                    <div id=\"logo\">
                        <p>The</p>
                        <p><strong>Farber</strong></p>
                        <p>Lab</p>
                    </div> <!-- logo -->
                </a> 
                <div id=\"nav\">
                    <a href=\"" . get_link($section, 'home') . "\"><p>HOME</p></a>
                    <a href=\"" . get_link($section, 'about') . "\"><p>ABOUT</p></a>
                    <a href=\"" . get_link($section, 'people') . "\"><p>PEOPLE</p></a>
                    <a href=\"" . get_link($section, 'publications') . "\"><p>PUBLICATIONS</p></a>
                    <a href=\"" . get_link($section, 'contact') . "\"><p>CONTACT</p></a>
                </div> <!-- nav -->
                <div id=\"header-img-box\">
                    <a href=\"https://med.virginia.edu/\" class=\"header-logo\"><img src=\"".$img_path."medicine_white.gif\"></a>
                    <a href=\"http://cphg.virginia.edu/\" class=\"header-logo\"><img src=\"".$img_path."cphglogowhite.gif\"></a>
                </div> <!-- header-img-box -->
            </div> <!-- header -->
        </div> <!-- header-container -->
        <div id=\"menu\" class=\"hidden\">
            <a href=\"javascript:void(0)\">
                <div id=\"menu-top\">
                     <div id=\"menu-logo\">
                        <div></div> <!-- top logo bar -->
                        <div></div> <!-- middle logo bar -->
                        <div></div> <!-- low logo bar -->
                    </div> <!-- menu-logo -->
                </div> <!-- menu-top -->
            </a>
            <div class=\"drop-down\">
                <a href=\"" . get_link($section, 'home') . "\" ><p>HOME</p></a>
                <a href=\"" . get_link($section, 'about') . "\" ><p>ABOUT</p></a>
                <a href=\"" . get_link($section, 'people') . "\" ><p>PEOPLE</p></a>
                <a href=\"" . get_link($section, 'publications') . "\" ><p>PUBLICATIONS</p></a>
                <a href=\"" . get_link($section, 'contact') . "\" ><p>CONTACT</p></a>
            </div> <!-- drop-down -->
        </div> <!-- menu -->";
}

function generate_footer($section) {


    if ($section == 'home')
        $img_path = 'assets/';
    else
        $img_path = '../assets/';

    echo "        
        <div id=\"footer\"> 
            <p><strong>CONNECT</strong></p>
            <div id=\"footer-img-wrapper\">
                <a href=\"http://facebook.com\"><img src=\"".$img_path."fb_button.png\"></a>
                <a href=\"http://linkedin.com\"><img src=\"".$img_path."linkedin_button.png\"></a>
                <a href=\"http://twitter.com\"><img src=\"".$img_path."twitter_button.png\"></a>
                <a href=\"tel:4342435946\"><img src=\"".$img_path."phone.svg\"></a> 
                <a href=\"mailto:crf2s@virginia.edu\"><img src=\"".$img_path."email.svg\"></a>
            </div> <!-- footer-img-wrapper --> 
        </div> <!-- footer -->";
}