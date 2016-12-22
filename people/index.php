<!DOCTYPE html>
<html>
<!--  
*** PLEASE READ ***
Copyright 2016, Dominic Ritchey
Please do not re-use without express permission of the developer.
Property of Dominic Ritchey. For permissions, contact dominicritchey@email.virginia.edu. -->  
    
    
    <!-- TO DO:
        Fix script to separate button controls. Don't want Alumni to control Team and vice versa.            -->
    <head>
        <title>Farber Lab - People</title>
        
        <link rel="stylesheet" href="people.css">
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
       <div id="header-container" name='top'>
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
                    <a href="javascript:void(0);"><p class="selected-nav">PEOPLE</p></a>
                    <a href="Publications.html"><p>PUBLICATIONS</p></a>
                    <a href="Contact.html"><p>CONTACT</p></a>
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
                <a href="#" ><p>HOME</p></a>
                <a href="#" ><p class="selected-nav">ABOUT</p></a>
                <a href="#" ><p>PEOPLE</p></a>
                <a href="#" ><p>PUBLICATIONS</p></a>
                <a href="#" ><p>CONTACT</p></a>
            </div> <!-- drop-down -->
        </div> <!-- menu -->
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
                    <img src="arrow-collapse.png">
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
                    <div class='person-box students'>
                        <img class='person-photo' src='web_al.jpg'>
                        <div class='person-text hidden'>
                            <p>Basel Al-Barghouthi </p>
                            <p> Graduate Researcher </p>
                            
                            <a href='mailto:placeholder@virginia.edu'>
                                <div>
                                    <img src='email_logo_only.png'>
                                </div>
                            </a>
                            
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box staff'>
                        <img class='person-photo' src='web_calabrese.jpg'>
                        <div class='person-text hidden'>
                            <p>Gina Calabrese </p>
                            <p>Senior Lab Specialist </p>
                            
                            <a href='mailto:gmc7e@virginia.edu'>
                                <div>
                                    <img src='email_logo_only.png'>
                                </div>
                            </a>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box students'>
                        <img class='person-photo' src='web_chambers.jpg'>
                        <div class='person-text hidden'>
                            <p> Charlotte Chambers </p>
                            <p> Undergraduate Researcher </p>
                            
                            <a href='mailto:placeholder@virginia.edu'>
                                <div>
                                    <img src='email_logo_only.png'>
                                </div>
                            </a>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                     <div class='person-box faculty'>
                        <img class='person-photo' src='web_farber.jpg'>
                        <div class='person-text'>
                            <p> Charles R. Farber, Ph.D. </p>
                            <p> Principal Investigator </p>
                            
                            <a href='mailto:placeholder@virginia.edu'>
                                <div>
                                    <img src='email_logo_only.png'>
                                </div>
                            </a>
                        </div><!-- /person-text -->
                    </div>
                    <div class='person-box faculty'>
                        <img class='person-photo' src='web_mesner.jpg'>
                        <div class='person-text hidden'>
                            <p> Larry Mesner, Ph.D. </p>
                            <p> Assistant Professor </p>
                        </div><!-- /person-text -->
                        
                        <a href='mailto:ldm2v@virginia.edu'>
                                <div>
                                    <img src='email_logo_only.png'>
                                </div>
                            </a>
                    </div><!-- /person-box -->
                    <div class='person-box students'>
                        <img class='person-photo' src='web_ritchey.JPG'>
                        <div class='person-text hidden'>
                            <p> Dominic Ritchey </p>
                            <p> Webmaster (Undergraduate)</p>
                        </div><!-- /person-text -->
                        
                        <a href='mailto:placeholder@virginia.edu'>
                                <div>
                                    <img src='email_logo_only.png'>
                                </div>
                            </a>
                    </div><!-- /person-box -->
                    <div class='person-box students'>
                        <img class='person-photo' src='web_rotzin.jpg'>
                        <div class='person-text hidden'>
                            <p> Robert Rotzin </p>
                            <p> Graduate Researcher </p>
                            
                            <a href='mailto:placeholder@virginia.edu'>
                                <div>
                                    <img src='email_logo_only.png'>
                                </div>
                            </a>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box students'>
                        <img class='person-photo' src='web_sabik.jpg'>
                        <div class='person-text hidden'>
                            <p> Olivia Sabik </p>
                            <p> Graduate Researcher </p>
            
                            <a href='mailto:ols5fg@virginia.edu'>
                                <div>
                                    <img src='email_logo_only.png'>
                                </div>
                            </a>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box faculty'>
                        <img class='person-photo' src='female_placeholder.jpg'>
                        <div class='person-text hidden'>
                            <p> Ingrid Braenne, Ph.D. </p>
                            <p> Senior Scientist </p>
                            
                            <a href='mailto:placeholder@virginia.edu'>
                                <div>
                                    <img src='email_logo_only.png'>
                                </div>
                            </a>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
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
                    <div class='person-box ug'>
                        <div class='person-text'>
                            <p> Katherine Dickinson </p>
                            <p> Undergraduate Researcher </p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box ug'>
                        <div class='person-text'>
                            <p> Deepannita Hossain </p>
                            <p> Undergraduate Researcher </p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box gr'>
                        <div class='person-text'>
                            <p> Archilleas Pitsillides</p>
                            <p> Postdoctoral Fellow </p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box gr'>
                        <div class='person-text'>
                            <p> Brianne Ray</p>
                            <p> Postdoctoral Fellow </p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                      <div class='person-box gr'>
                        <div class='person-text'>
                            <p> Samrat Mandal</p>
                            <p> Rotational Student Researcher </p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box gr'>
                    <div class='person-text'>
                            <p>Will Chronister</p>
                            <p> Rotational Student Researcher </p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box gr'>
                    <div class='person-text'>
                            <p>Annoush Anderson</p>
                            <p> Rotational Student Researcher </p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box gr'>
                    <div class='person-text'>
                            <p>Kyree Thomas</p>
                            <p> SRRP Student </p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box gr'>
                        <div class='person-text'>
                            <p>Caitlin Cook</p>
                            <p> Medical Student Summer Intern </p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box ug'>
                        <div class='person-text'>
                            <p>Daniel Yu</p>
                            <p> Undergraduate Researcher (Chemistry) </p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box ug'>
                        <div class='person-text'>
                            <p>Jennie Swain</p>
                            <p> Undergraduate Researcher (Chemistry) </p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box gr'>
                        <div class='person-text'>
                            <p>Greg Hong</p>
                            <p>Medical Student Summer Intern</p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box --> 
                    <div class='person-box ug'>
                        <div class='person-text'>
                            <p>Eric Lum</p>
                            <p>Undergraduate Researcher</p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box --> 
                    <div class='person-box ug'>
                        <div class='person-text'>
                            <p>Rachel Madenjian</p>
                            <p>Undergraduate Researcher</p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box --> 
                    <div class='person-box ug'>
                        <div class='person-text'>
                            <p>Ellie Balakhanlou</p>
                            <p>Undergraduate Researcher</p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box --> 
                    <div class='person-box ug'>
                        <div class='person-text'>
                            <p>Peter Phau</p>
                            <p>Undergraduate Researcher</p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box gr'>
                        <div class='person-text'>
                            <p>Stephen R. Williams</p>
                            <p>Postdoctoral Fellow</p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box ug'>
                        <div class='person-text'>
                            <p>Vikram Bhasin</p>
                            <p>Undergraduate Researcher (Computer Science)</p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                    <div class='person-box ug'>
                        <div class='person-text'>
                            <p>Keven Nguyen</p>
                            <p>Undergraduate Researcher (Biology)</p>
                        </div><!-- /person-text -->
                    </div><!-- /person-box -->
                </div><!-- /photo-wrapper -->
            </div><!-- /big-box -->
        <!--FOOTER CODE-->
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