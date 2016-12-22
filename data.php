<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 12/22/16
 * Time: 10:27 AM
 */

$link_home = 'index.php';
$link_about = 'about/';
$link_publications = 'publications/';
$link_people = 'people/';
$link_contact = 'contact/';

$link_root = '../';

$style_root = 'stylesheets/';
$style_master = 'master.css';

$style_home = 'home.css';
$style_about = $link_root.$style_root.'about.css';
$style_people = $link_root.$style_root.'people.css';
$style_publications = $link_root.$style_root.'publications.css';
$style_contact = $link_root.$style_root.'contact.css';

function get_style_link($section) {
    $style_root = 'stylesheets/';
    $link_root = '../';

    if ($section == 'home') {
        $path = $style_root.$section.'.css';
    } else {
        $path = $link_root.$style_root.$section.'.css';
    }

    echo "
        <link rel='stylesheet' href='$path'>
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
        ";


}

function get_link($origin, $section) {
    $link_root = '../';

    if ($origin == 'home') {
        echo $section.'/';
    } else if ($origin == $section) {
        echo 'javascript:void(0);';
    } else {
        echo $link_root.$section;
    }
}

function get_script_link() {
    echo "
        <!-- jQuery link MUST come first --> 
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
        <script src=\"master.js\"></script>
        <script src='scripts/master.js'></script>
        ";
}