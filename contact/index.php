<!DOCTYPE html>
<html>
<!--
*** PLEASE READ ***
Copyright 2016, Dominic Ritchey
Please do not re-use without express permission of the developer.
Property of Dominic Ritchey. For permissions, contact dominicritchey@email.virginia.edu.
-->
<?php

    require_once "../scripts/data.php";
    require_once "../scripts/display_injector.php";
    require_once "../scripts/PHPMailer/PHPMailerAutoload.php";




?>
    <head>
        <title>Farber Lab - Contact</title>
        
        <?php

        print_style_link('contact');
        print_script_link('contact');
        print_meta_info();

        ?>

        <script type="text/javascript">

            function send_email() {

                var ajax_dst = '../scripts/contact_ajax.php';

                var name = $('#name').val();
                var email = $('#email').val();
                var subject = $('#subject').val();
                var message = $('#msg').val();

                var wrapper = {};
                wrapper.name = name;
                wrapper.email = email;
                wrapper.subject = subject;
                wrapper.message = message;

                var json_obj = JSON.stringify(wrapper);

                $.post(ajax_dst, json_obj, function() {
                    // TODO TODO TODO
                });

            }

        </script>
    </head>
    <body onload="load_background('contact')">
        <div id="total-wrapper">

          <?php generate_header('contact') ?>

            <div id="content-wrapper">
                <div id="body-left" class="body-box">
                    <div id="img-box">
                        <h4>Want to know more? Connect with us here.</h4>
                        <a href="#"><img src="../assets/fb_button.png"></a>
                        <a href="#"><img src="../assets/twitter_button.png"></a>
                        <a href="#"><img src="../assets/linkedin_button.png"></a>
                    </div> <!-- /img-box -->
                    <div id='map-box'>
                        <h4>Paying a visit? Find us here.</h4>
                        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:500px;width:400px;'><div id='gmap_canvas' style='height:500px;width:500px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(38.0343916,-78.5004123),mapTypeId: google.maps.MapTypeId.HYBRID};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(38.0343916,-78.5004123)});infowindow = new google.maps.InfoWindow({content:'<strong>Farber Lab - 3817 Old Medical School</strong><br>Hospital Drive, Charlottesville, VA 22908<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                    </div> <!-- /map-box -->
                </div> <!-- /body-left -->
                <div id="body-right" class="body-box">
                    <div>
                        <h4>Have a question for us?</h4>
                            <div>
                                <label for="name"><p>Name:</p></label>
                                <input type="text" id="name" name="name" required/>
                            </div> <!-- /form row 0 -->
                            <div>
                                <label for="email"><p>Email:</p></label>
                                <input type="email" id="email" name="email" required/>
                            </div> <!-- /form row 1 -->
                            <div>
                                <label for="mail"><p>Subject:</p></label>
                                <input type="text" id="subject" name="subject" required/>
                            </div> <!-- /form row 2 -->
                            <div>
                                <label for="msg"><p>Message:</p></label>
                                <textarea id="msg" name="msg" placeholder="Enter your questions, comments, or concerns."></textarea>
                            </div> <!-- /form row 3 -->
                            <button type="button" onclick="send_email()">Send Email</button>
                    </div> <!-- /form-wrapper -->
                </div> <!-- /body-right -->
            </div> <!-- /content-wrapper -->
        </div> <!-- /total-wrapper -->   
    </body>
</html>
<!-- All images are open-source / labeled for reuse -->

<?php

function init_mailer($mailer)
{
    $mailer->IsSMTP(); // telling the class to use SMTP
    $mailer->SMTPAuth = true; // enable SMTP authentication
    $mailer->SMTPSecure = "tls"; // sets tls authentication
    $mailer->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server; or your email service
    $mailer->Port = 587; // set the SMTP port for GMAIL server; or your email server port
    $mailer->Username = "cs4640homework2@gmail.com"; // email username
    $mailer->Password = "8782Dom!!"; // email password
}


?>