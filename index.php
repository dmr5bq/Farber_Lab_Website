<!DOCTYPE html>
<html>

<?php
require_once "data.php";
require_once "display_injector.php";
?>

<!--  
*** PLEASE READ ***
Copyright 2016, Dominic Ritchey
Please do not re-use without express permission of the developer.
Property of Dominic Ritchey. For permissions, contact dominicritchey@email.virginia.edu.
-->

    <head>
        <title>Farber Lab - Home</title>

        <?php
        print_style_link('home');
        print_script_link('home');
        print_meta_info();
        ?>
    </head>
    <body onload="load_background('home')">
        <?php generate_header('home'); ?>
        <div id='big-box'>
            
        </div><!--/big-box-->
        <?php generate_footer('home') ?>
    </body>
</html>

<!-- All images are open-source / labeled for reuse -->