<!DOCTYPE html>
<html>
<!--  
*** PLEASE READ ***
Copyright 2016, Dominic Ritchey
Please do not re-use without express permission of the developer.
Property of Dominic Ritchey. For permissions, contact dominicritchey@email.virginia.edu. 
-->  
    <head>
        <title>Farber Lab - Contact</title>
        
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="master.css">
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Farber Lab - Center for Public Health Genomics">
        
        <!-- jQuery link MUST come first --> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="master.js"></script>
    </head>
    <body>
        <div id="total-wrapper">
           <div id="header-container">
                <div id="header">
                    <img src="DNA_white.jpg">
                    <a href="index.html">
                        <div id="logo">
                            <p>The</p>
                            <p><strong>Farber</strong></p>
                            <p>Lab</p>
                        </div> <!-- logo -->
                    </a> 
                    <div id="nav">
                        <a href="index.html"><p>HOME</p></a>
                        <a href="About.html"><p>ABOUT</p></a>
                        <a href="People.html"><p>PEOPLE</p></a>
                        <a href="Publications.html"><p>PUBLICATIONS</p></a>
                        <a href="javascript:void(0);"><p class="selected-nav">CONTACT</p></a>
                    </div> <!-- /nav -->
                    <div id="header-img-box">
                        <a href="https://med.virginia.edu/" class="header-logo"><img src="medicine_white.gif"></a>
                        <a href="http://cphg.virginia.edu/" class="header-logo"><img src="cphglogowhite.gif"></a>
                    </div> <!-- /header-img-box -->
                </div> <!-- /header -->
            </div> <!-- /header-container -->
            <div id="menu" class="hidden">
                <a href="javascript:void(0)">
                    <div id="menu-top">
                         <div id="menu-logo">
                            <div></div> <!-- /top logo bar -->
                            <div></div> <!-- /middle logo bar -->
                            <div></div> <!-- /low logo bar -->
                        </div> <!-- /menu-logo -->
                    </div> <!-- /menu-top -->
                </a>
                <div class="drop-down">
                    <a href="#" ><p>HOME</p></a>
                    <a href="#" ><p>ABOUT</p></a>
                    <a href="#" ><p>PEOPLE</p></a>
                    <a href="#" ><p>PUBLICATIONS</p></a>
                    <a href="#" ><p class="selected-nav">CONTACT</p></a>
                </div> <!-- /drop-down -->
            </div> <!-- /menu -->
            <div id="content-wrapper">
                <div id="body-left" class="body-box">
                    <div id="img-box">
                        <h4>Want to know more? Connect with us here.</h4>
                        <a href="#"><img src="fb_button.png"></a>
                        <a href="#"><img src="twitter_button.png"></a>
                        <a href="#"><img src="linkedin_button.png"></a>
                    </div> <!-- /img-box -->
                    <div id='map-box'>
                        <h4>Paying a visit? Find us here.</h4>
                        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:500px;width:400px;'><div id='gmap_canvas' style='height:500px;width:500px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(38.0343916,-78.5004123),mapTypeId: google.maps.MapTypeId.HYBRID};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(38.0343916,-78.5004123)});infowindow = new google.maps.InfoWindow({content:'<strong>Farber Lab - 3817 Old Medical School</strong><br>Hospital Drive, Charlottesville, VA 22908<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                    </div> <!-- /map-box -->
                </div> <!-- /body-left -->
                <div id="body-right" class="body-box">
                    <div>
                        <h4>Have a question for us?</h4>
                        <form action="form-to-email.php" method="post" enctype="text/plain">
                            <div>
                                <label for="name"><p>Name:</p></label>
                                <input type="text" id="name" />
                            </div> <!-- /form row 0 -->
                            <div>
                                <label for="mail"><p>Email:</p></label>
                                <input type="email" id="mail" />
                            </div> <!-- /form row 1 -->
                            <div>
                                <label for="mail"><p>Subject:</p></label>
                                <input type="subject" id="subject"/>
                            </div> <!-- /form row 2 -->
                            <div>
                                <label for="msg"><p>Message:</p></label>
                                <textarea id="msg">Enter your questions, comments, or concerns.</textarea>
                            </div> <!-- /form row 3 -->
                            <button type="submit">Send Email</button>
                        </form> <!-- /form -->
                    </div> <!-- /form-wrapper -->
                </div> <!-- /body-right -->
            </div> <!-- /content-wrapper -->
        </div> <!-- /total-wrapper -->   
    </body>
</html>
<!-- All images are open-source / labeled for reuse -->