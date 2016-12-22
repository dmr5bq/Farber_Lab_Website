<!DOCTYPE html>
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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>Farber Lab - Publications</title>
        <meta name="description" content="Farber Lab - Center for Public Health Genomics">
        <link rel="stylesheet" href="publications.css"> <!-- Publications stylesheet -->
        
        <link rel="stylesheet" href="master.css">
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> <!-- font -->
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'> <!-- font2 -->
        
         <!-- jQuery link MUST come first --> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> <!-- jQuery -->
        <script src="master.js"></script><!-- JS/jQuery -->
    </head>
    <body>
        <div id="total-wrapper" name='top'>
            <div id="header-container">
                <div id="header">
                    <img src="DNA_white.jpg" >
                    <a href="index.html">
                        <div id="logo">
                            <p>The</p>
                            <p><strong>Farber</strong></p>
                            <p>Lab</p>
                        </div><!--/logo-->
                    </a>
                    <div id="nav">
                        <a href="index.html"><p>HOME</p></a>
                        <a href="About.html"><p>ABOUT</p></a>
                        <a href="People.html"><p>PEOPLE</p></a>
                        <a href="javascript:void(0);">
                            <p class="selected-nav">PUBLICATIONS</p>
                        </a>
                        <a href="Contact.html"><p>CONTACT</p></a>
                    </div><!-- /nav -->
                    <div id="header-img-box">
                        <a href="https://med.virginia.edu/" class="header-logo"><img src="medicine_white.gif"></a>
                        <a href="http://cphg.virginia.edu/" class="header-logo"><img src="cphglogowhite.gif"></a>
                    </div><!-- /header-img-box -->
                </div><!-- /header --> 
            </div><!-- /header-container -->
            <div id="menu" class="hidden">
                <a href="javascript:void(0)">
                    <div id="menu-top">
                         <div id="menu-logo">
                            <div></div> <!--/top-bar-->
                            <div></div> <!--/middle-bar-->
                            <div></div> <!--/bottom-bar-->
                        </div> <!--/menu-logo-->
                    </div> <!--/menu-top-->
                </a>
                <div class="drop-down">
                    <a href="#"><p>HOME</p></a>
                    <a href="#"><p>ABOUT</p></a>
                    <a href="#"><p>PEOPLE</p></a>
                    <a href="#"><p class="selected-nav">PUBLICATIONS</p></a>
                    <a href="#"><p>CONTACT</p></a>
                </div><!-- /drop-down -->
            </div><!-- /menu -->
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
                    <img src="arrow-collapse.png">
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
                                <img src="arrow-collapse.png" class="pub-arrow">
                            </a>
                            <a href=javascript:void(0); id="2014-expand" class="hidden expand">
                                <img src="arrow-expand.png" class="pub-arrow">
                            </a>
                        </div> <!-- /date-box div -->
                    </div> <!-- /date-box -->
                    <ul id="2014-list" name="2014-list">
                        <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/24789909">
                                    <p class="article-name"><em>Bicc1</em> is a genetic determinant of osteoblastogenesis and bone mineral density</p>
                                </a>
                                <p>Mesner LD, Ray B, Hsu YH, Manichaikul A, Lum E, Bryda EC, Rich SS, Rosen CJ, Criqui MH, Allison M, Budoff MJ, Clemens TL, <strong>Farber CR</strong></p>
                                <p><em>Journal of Clincial Investigation</em></p>
                                <p>May 1, 2014</p>
                            </div> <!-- /li div -->
                        </li> 
                        <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/24519609">
                                    <p class="article-name">Glucagon regulates hepatic kisspeptin to impair insulin secretion </p>
                                </a>
                                <p><strong>Farber CR</strong>, Reich A, Barnes AM, Becerra P, Rauch F, Cabral WA, Bae A, Quinlan A, Glorieux FH, Clemens TL, Marini JC  </p>
                                <p><em>Cell Metabolism</em></p>
                                <p>April 1, 2014</p>
                            </div> <!-- /li div -->
                        </li> 
                        <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/24703698">
                                    <p class="article-name">A novel IFITM5 mutation in severe atypical osteogenesis imperfecta type VI impairs osteoblast production of pigment epithelium‐derived factor </p>
                                </a>
                                <p>Song WJ, Mondal P, Wolfe A, Alonso LC, Stamateris R, Ong BW, Lim OC, Yang KS, Radovick S, Novaira HJ, Farber EA, <strong>Farber CR</strong>, Turner SD, Hussain MA </p>
                                <p><em>Journal of Bone and Mineral Research</em></p>
                                <p>May 19, 2014</p>     
                            </div><!-- /li div -->
                        </li>
                        <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/24703698">
                                    <p class="article-name">Bioenergetics during calvarial osteoblast differentiation reflect strain differences in bone mass </p>
                                </a>
                                <p>Guntur AR, Le PT, <strong>Farber CR</strong>, Rosen CJ</p>
                                <p><em>Endicrinology</em></p>
                                <p>January 17, 2014</p>
                            </div><!-- /li div -->
                        </li>
                        <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/24416236">
                                    <p class="article-name">Trps1 differentially modulates the bone mineral density between male and female mice and its polymorphism associates with BMD differently between women and men</p>
                                </a>
                                <p>Wang L, Lu W, Zhang L, Huang Y, Scheib R, Liu X, Myers L, Lu L, <strong>Farber CR</strong>, Liu G, Wang CY, Deng H, Williams RW, Wang Y, Gu W, Jiao Y</p>
                                <p><em>PLoS One</em></p>
                                <p>January 8, 2014</p>
                            </div><!-- /li div -->
                        </li> 
                    </ul>
                    <div class="date-box">
                        <div>
                            <h3>2013</h3>
                        </div><!-- /date-box div -->
                        <div>
                            <a href=javascript:void(0); id="2013-collapse" class='collapse'>
                                <img src="arrow-collapse.png" class="pub-arrow">
                            </a>
                            <a href=javascript:void(0); id="2013-expand" class="hidden expand">
                                <img src="arrow-expand.png" class="pub-arrow">
                            </a>
                        </div> <!-- /date-box div -->
                    </div> <!-- /date-box -->
                    <ul id="2013-list" name="2013-list">
                        <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/22802146">
                                    <p class="article-name">Systems genetics: a novel approach to dissect the genetic basis of osteoporosis</p>
                                </a>
                                <p><strong>Farber CR</strong></p>
                                <p><em>Current Osteoporosis Reportsl</em></p>
                                <p>September 1, 2013</p>
                            </div><!-- /li div -->
                        </li>
                        <li> 
                            <div>
                            <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/23559675"><p class="article-name">MicroRNA-93 controls perfusion recovery after hindlimb ischemia by modulating expression of multiple genes in the cell cycle pathway </p></a>
                                <p>Hazarika S, <strong>Farber CR</strong>, Dokun AO, Pitsillides AN, Wang T, Lye RJ, Annex BH</p>
                                <p><em>Circulation</em></p>
                                <p>April 4, 2013 </p> 
                            </div><!-- /li div -->
                        </li>
                        <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/23486184">
                                    <p class="article-name">Quantitative trait loci for bone mineral density and femoral morphology in an advanced intercross population of mice </p>
                                </a>
                                <p>Leamy LJ, Kelly SA, Hua K, <strong>Farber CR</strong>, Pomp D</p>
                                <p><em>Bone</em></p>
                                <p>February 26, 2013</p> 
                            </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/23316444">
                                    <p class="article-name">Systems-level analysis of genome-wide association data </p>
                                </a>
                                <p><strong>Farber CR</strong></p>
                                <p><em>G3: Genes|Genomes|Genetics</em></p>
                                <p>January 1, 2013</p> 
                            </div><!-- /li div -->
                        </li>
                    </ul> 
                    <div class="date-box">
                        <div>
                            <h3>2012</h3>
                        </div><!-- /date-box div -->
                        <div>
                            <a href=javascript:void(0); id="2012-collapse" class='collapse'>
                                <img src="arrow-collapse.png" class="pub-arrow">
                            </a>
                            <a href=javascript:void(0); id="2012-expand" class="hidden expand">
                                <img src="arrow-expand.png" class="pub-arrow">
                            </a>
                        </div> <!-- /date-box div -->
                    </div> <!-- /date-box -->
                    <ul id="2012-list" name="2012-list">
                        <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/23300464">
                                    <p class="article-name">Systems genetic analysis of osteoblast-lineage cells</p>
                                </a>
                                <p>Calabrese G, Bennett BJ, Orozco L, Kang HM, Eskin E, Dombret C, De Backer O, Lusis AJ, <strong>Farber CR</strong></p>
                                <p><em>G3: Genes|Genomes|Genetics</em></p>
                                <p>December 27, 2012</p>
                            </div><!-- /li div -->
                        </li>
                        <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/23101632">
                                    <p class="article-name">Unraveling inflammatory responses using systems genetics and gene-environment interactions in macrophages</p>
                                </a>
                                <p>Orozco LD, Bennett BJ, <strong>Farber CR</strong>, Ghazalpour A, Pan C, Che N, Wen P, Qi HX, Mutukulu A, Siemers N, Neuhaus I, Yordanova R, Gargalovic P, Pellegrini M, Kirchgessner T, Lusis AJ</p>
                                <p><em>Cell</em></p>
                                <p>October 26, 2012</p>
                            </div><!-- /li div -->
                        </li>
                        <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/22892838">
                                    <p class="article-name">Hybrid mouse diversity panel: a panel of inbred mouse strains suitable for analysis of complex genetic traits</p>
                                </a>
                                <p>Ghazalpour A, Rau CD, <strong>Farber CR</strong>, Bennett BJ, Orozco LD, van Nas A, Pan C, et al.</p>
                                <p><em>Mammalian Genome</em></p>
                                <p>October 23, 2012</p>
                            </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/22505625">
                                    <p class="article-name">Increasing association mapping power and resolution in mouse genetic studies through the use of meta-analysis for structured populations</p>
                                </a>
                                <p>Furlotte NA, Kang EY, Van Nas A, <strong>Farber CR</strong>, Lusis AJ, Eskin E</p>
                                <p><em>Genetics</em></p>
                                <p>July 19, 2012</p>
                            </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/22367040">
                                    <p class="article-name">Genome scans for transmission ratio distortion regions in mice</p>
                                </a>
                                <p>Casellas J, Gularte RJ, <strong>Farber CR</strong>, Varona L, Mehrabian M, Schadt EE, Lusis AJ, Attie AD, Yandell BS, Medrano JF</p>
                                <p><em>Genetics</em></p>
                                <p>May 19, 2012</p>
                            </div><!-- /li div -->
                        </li>
                    </ul> 
                    <div class="date-box">
                        <div>
                            <h3>2011</h3>
                        </div><!-- /date-box div -->
                        <div>
                            <a href=javascript:void(0); id="2011-collapse" class='collapse'>
                                <img src="arrow-collapse.png" class="pub-arrow">
                            </a>
                            <a href=javascript:void(0); id="2011-expand" class="hidden expand">
                                <img src="arrow-expand.png" class="pub-arrow">
                            </a>
                        </div> <!-- /date-box div -->
                    </div> <!-- /date-box -->
                    <ul id="2011-list" name="2011-list">
                         <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/21638317">
                                    <p class="article-name">Identification of quantitative trait loci influencing skeletal architecture in mice: emergence of Cdh11 as a primary candidate gene regulating femoral morphology</p>
                                </a>
                                <p><strong>Farber CR</strong>, Kelly SA, Baruch E, Yu D, Hua K, Nehrenberg DL, de Villena FP, Buus RJ, Garland T Jr, Pomp D</p>
                                <p><em>Journal of Bone and Mineral Research</em></p>
                                <p>September 26, 2011</p>
                            </div><!-- /li div -->
                        </li>
                        <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/21695224"><p class="article-name">Comparative analysis of proteome and transcriptome variation in mouse</p></a>
                                <p>Ghazalpour A, Bennett B, Petyuk VA, Orozco L, Hagopian R, Mungrue IN, <strong>Farber CR</strong>, Sinsheimer J, Kang HM, Furlotte N, Park CC, Wen PZ, Brewer H, Weitz K, Camp DG 2nd, Pan C, Yordanova R, Neuhaus I, Tilford C, Siemers N, Gargalovic P, Eskin E, Kirchgessner T, Smith DJ, Smith RD, Lusis AJ</p>
                                <p><em>PLoS Genetics</em></p>
                                    <p>June 7, 2011 </p>
                            </div><!-- /li div -->
                        </li>
                        <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/21673958"><p class="article-name">Hippocampal gene expression analysis highlights Ly6a/Sca-1 as candidate gene for previously mapped novelty induced behaviors in mice</p></a>
                                <p>de Jong S, Kas MJ, Kiernan J, de Mooij-van Malsen AG, Oppelaar H, Janson E, Vukobradovic I, <strong>Farber CR</strong>, Stanford WL, Ophoff RA</p>
                                <p><em>PLoS One</em></p>
                                <p>June 6, 2011 </p>
                            </div><!-- /li div -->
                        </li>
                        <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/20954177"><p class="article-name">Systems genetics analysis of mouse chondrocyte differentiation</p></a>
                                <p>Suwanwela J, <strong>Farber CR</strong>, Haung BL, Song B, Pan C, Lyons KM, Lusis AJ</p>
                                <p><em>Journal of Bone and Mineral Research</em></p>
                                <p>April 26, 2011 </p>
                            </div><!-- /li div -->
                        </li>
                        <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/21490954"><p class="article-name">Mouse genome-wide association and systems genetics identify Asxl2 as a regulator of bone mineral density and osteoclastogenesis</p></a>
                                <p><strong>Farber CR</strong>, Bennett BJ, Orozco L, Zou W, Lira A, Kostem E, Kang HM, Furlotte N, Berberyan A, Ghazalpour A, Suwanwela J, Drake TA, Eskin E, Wang QT, Teitelbaum SL, Lusis AJ</p>
                                <p><em>PLoS Genetics</em></p>
                                <p>April 7, 2011</p>
                            </div><!-- /li div -->
                        </li>
                        <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/21410935">
                                    <p class="article-name">Gene networks associated with conditional fear in mice identified using a systems genetics approach</p>
                                </a>
                                <p>Park CC, Gale GD, de Jong S, Ghazalpour A, Bennett BJ, <strong>Farber CR</strong>, Langfelder P, Lin A, Khan AH, Eskin E, Horvath S, Lusis AJ, Ophoff RA, Smith DJ</p>
                                <p><em>BMC Systems Biology</em></p>
                                <p>March 16, 2011</p>
                            </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/21357449">
                                    <p class="article-name">Genetic analyses involving microsatellite ETH10 genotypes on bovine chromosome 5 and performance trait measures in Angus- and Brahman-influenced cattle</p
                                        ></a>
                                <p>DeAtley KL, Rincon G, <strong>Farber CR</strong>, Medrano JF, Luna-Nevarez P, Enns RM, VanLeeuwen DM, Silver GA, Thomas MG</p>
                                <p><em>Journal of Animal Science</em></p>
                                <p>March 16, 2011</p>
                            </div><!-- /li div -->
                        </li>
                    </ul> 
                    <div class="date-box">
                        <div>
                            <h3>2010</h3>
                        </div><!-- /date-box div -->
                        <div>
                            <a href=javascript:void(0); id="2010-collapse" class='collapse'>
                                <img src="arrow-collapse.png" class="pub-arrow">
                            </a>
                            <a href=javascript:void(0); id="2010-expand" class="hidden expand">
                                <img src="arrow-expand.png" class="pub-arrow">
                            </a>
                        </div> <!-- /date-box div -->
                    </div> <!-- /date-box -->
                    <ul id="2010-list" name="2010-list">
                         <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/20499364">
                                    <p class="article-name">Identification of a gene module associated with BMD through the integration of network analysis and genome-wide association data</p>
                                </a>
                                <p><strong>Farber CR</strong></p>
                                <p><em>Journal of Bone and Mineral Research</em></p>
                                <p>November 25, 2010</p>
                             </div><!-- /li div -->
                        </li>
                        <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/20624276"><p class="article-name">Serious limitations of the QTL/microarray approach for QTL gene discovery</p></a>
                                <p>Verdugo RA, <strong>Farber CR</strong>, Warden CH, Medrano JF</p>
                                <p><em>BMC Biology</em></p>
                                <p>July 12, 2010</p>
                            </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/20548944">
                                    <p class="article-name">An integration of genome-wide association study and gene expression profiling to prioritize the discovery of novel susceptibility Loci for osteoporosis-related traits</p>
                                </a>
                                <p>Hsu YH, Zillikens MC, Wilson SG, <strong>Farber CR</strong>, Demissie S, Soranzo N, Bianchi EN, Grundberg E, Liang L, Richards JB, Estrada K, Zhou Y, van Nas A, Moffatt MF, Zhai G, Hofman A, van Meurs JB, Pols HA, Price RI, Nilsson O, Pastinen T, Cupples LA, Lusis AJ, Schadt EE, Ferrari S, Uitterlinden AG, Rivadeneira F, Spector TD, Karasik D, Kiel DP</p>
                                <p><em>PLoS Genetics</em></p>
                                <p>June 10, 2010</p>
                            </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/20054062">
                                    <p class="article-name">A high-resolution association mapping panel for the dissection of complex traits in mice</p>
                                </a>
                                <p>Bennett BJ, <strong>Farber CR</strong>, Orozco L, Kang HM, Ghazalpour A, Siemers N, Neubauer M, Neuhaus I, Yordanova R, Guan B, Truong A, Yang WP, He A, Kayne P, Gargalovic P, Kirchgessner T, Pan C, Castellani LW, Kostem E, Furlotte N, Drake TA, Eskin E, Lusis AJ</p>
                                <p><em>Genome Research</em></p>
                                <p>February 20, 2010</p>
                            </div><!-- /li div -->
                        </li>
                    </ul> 
                    <div class="date-box">
                        <div>
                            <h3>2009</h3>
                        </div><!-- /date-box div -->
                        <div>
                            <a href=javascript:void(0); id="2009-collapse" class='collapse'>
                                <img src="arrow-collapse.png" class="pub-arrow">
                            </a>
                            <a href=javascript:void(0); id="2009-expand" class="hidden expand">
                                <img src="arrow-expand.png" class="pub-arrow">
                            </a>
                        </div> <!-- /date-box div -->
                    </div> <!-- /date-box -->
                    <ul id="2009-list" name="2009-list">
                         <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/20032064">
                                    <p class="article-name">Segregation analysis of a sex ratio distortion locus in congenic mice</p>
                                </a>
                                <p>Casellas J, <strong>Farber CR</strong>, Verdugo RA, Medrano JF</p>
                                <p><em>Journal of Heredity</em></p>
                                <p>December 23, 2009</p>
                             </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC3626446/">
                                    <p class="article-name">Future of osteoporosis genetics: enhancing genome-wide association studies</p>
                                </a>
                                <p><strong>Farber CR</strong>, Lusis AJ </p>
                                <p><em>Journal of Heredity</em></p>
                                <p>December 23, 2009</p>
                            </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/19519791">
                                    <p class="article-name">Polymorphisms in the STAT6 gene and their association with carcass traits in feedlot cattle</p>
                                </a>
                                <p>Rincon G, Farber EA, <strong>Farber CR</strong>, Nkrumah JD, Medrano JF</p>
                                <p><em>Animal Genetics</em></p>
                                <p>June 8, 2009</p>
                            </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/19399551">
                                    <p class="article-name">Evidence of maternal QTL affecting growth and obesity in adult mice</p>
                                </a>
                                <p>Casellas J, <strong>Farber CR</strong>, Gularte RJ, Haus KA, Warden CH, Medrano JF</p>
                                <p><em>Mammalian Genome</em></p>
                                <p>May 20, 2009</p>
                            </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/19336533">
                                    <p class="article-name">Genetic dissection of a major mouse obesity QTL (Carfhg2): integration of gene expression and causality modeling</p>
                                </a>
                                <p><strong>Farber CR</strong>, Aten JE, Farber EA, de Vera V, Gularte R, Islas-Trejo A, Wen P, Horvath S, Lucero M, Lusis AJ, Medrano JF</p>
                                <p><em>Physiological Genomics</em></p>
                                <p>May 13, 2009</p>
                            </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/19270708">
                                    <p class="article-name">Validation of candidate causal genes for obesity that affect shared metabolic pathways and networks</p>
                                </a>
                                <p>Yang X, Deignan JL, Qi H, Zhu J, Qian S, Zhong J, Torosyan G, Majid S, Falkard B, Kleinhanz RR, Karlsson J, Castellani LW, Mumick S, Wang K, Xie T, Coon M, Zhang C, Estrada-Smith D,<strong>Farber CR</strong>, Wang SS, van Nas A, Ghazalpour A, Zhang B, Macneil DJ, Lamb JR, Dipple KM, Reitman ML, Mehrabian M, Lum PY, Schadt EE, Lusis AJ, Drake TA</p>
                                <p><em>Nature Genetics</em></p>
                                <p>March 8, 2009</p>
                            </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/18767929">
                                    <p class="article-name">An integrative genetics approach to identify candidate genes regulating BMD: combining linkage, gene expression, and association</p>
                                </a>
                                <p><strong>Farber CR</strong>, van Nas A, Ghazalpour A, Aten JE, Doss S, Sos B, Schadt EE, Ingram-Drake L, Davis RC, Horvath S, Smith DJ, Drake TA, Lusis AJ</p>
                                <p><em>Journal of Bone and Mineral Research</em></p>
                                <p>January 24, 2009</p>
                            </div><!-- /li div -->
                        </li>
                    </ul>
                    <div class="date-box">
                        <div>
                            <h3>2008</h3>
                        </div><!-- /date-box div -->
                        <div>
                            <a href=javascript:void(0); id="2008-collapse" class='collapse'>
                                <img src="arrow-collapse.png" class="pub-arrow">
                            </a>
                            <a href=javascript:void(0); id="2008-expand" class="hidden expand">
                                <img src="arrow-expand.png" class="pub-arrow">
                            </a>
                        </div> <!-- /date-box div -->
                    </div> <!-- /date-box -->
                    <ul id="2008-list" name="2008-list">
                         <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/18439298">
                                    <p class="article-name">Overexpression of Scg5 increases enzymatic activity of PCSK2 and is inversely correlated with body weight in congenic mice.</p>
                                </a>
                                <p><strong>Farber CR</strong>, Chitwood J, Lee SN, Verdugo RA, Islas-Trejo A, Rincon G, Lindberg I, Medrano JF</p>
                                <p><em>BMC Genetics</em></p>
                                <p>April 25, 2008</p>
                             </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/18358333">
                                    <p class="article-name">Integrating global gene expression analysis and genetics</p>
                                </a>
                                <p><strong>Farber CR</strong>, Lusis AJ</p>
                                <p><em>Advances in Genetics</em></p>
                                <p>April 25, 2008</p>
                            </div><!-- /li div -->
                        </li>
                    </ul>  
                    <div class="date-box">
                        <div>
                            <h3>2007</h3>
                        </div><!-- /date-box div -->
                        <div>
                            <a href=javascript:void(0); id="2007-collapse" class='collapse'>
                                <img src="arrow-collapse.png" class="pub-arrow">
                            </a>
                            <a href=javascript:void(0); id="2007-expand" class="hidden expand">
                                <img src="arrow-expand.png" class="pub-arrow">
                            </a>
                        </div> <!-- /date-box div -->
                    </div> <!-- /date-box -->
                    <ul id="2007-list" name="2007-list">
                         <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/17694346">
                                    <p class="article-name">Dissection of a genetically complex cluster of growth and obesity QTLs on mouse chromosome 2 using subcongenic intercrosses</p>
                                 </a>
                                <p><strong>Farber CR</strong>, Medrano JF</p>
                                <p><em>Mammalian Genome</em></p>
                                <p>September 18, 2007</p>
                            </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/17110492">
                                    <p class="article-name">Fine mapping reveals sex bias in quantitative trait loci affecting growth, skeletal size and obesity-related traits on mouse chromosomes 2 and 11</p>
                                </a>
                                <p><strong>Farber CR</strong>, Medrano JF</p>
                                <p><em>Genetics</em></p>
                                <p>January 17, 2007</p>
                            </div><!-- /li div -->
                        </li>
                    </ul> 
                    <div class="date-box" >
                        <div>
                            <h3>2006</h3>
                        </div><!-- /date-box div -->
                        <div>
                            <a href=javascript:void(0); id="2006-collapse" class='collapse'>
                                <img src="arrow-collapse.png" class="pub-arrow">
                            </a>
                            <a href=javascript:void(0); id="2006-expand" class="hidden expand">
                                <img src="arrow-expand.png" class="pub-arrow">
                            </a>
                        </div> <!-- /date-box div -->
                    </div> <!-- /date-box -->
                    <ul id="2006-list" name="2006-list">
                         <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/16670015">
                                    <p class="article-name">Dissection of a genetically complex cluster of growth and obesity QTLs on mouse chromosome 2 using subcongenic intercrosses</p>
                                </a>
                                <p><strong>Farber CR</strong>, Corva PM, Medrano JF</p>
                                <p><em>BMC Genomics</em></p>
                                <p>May 2, 2006</p>
                             </div><!-- /li div -->
                        </li>
                    </ul> 
                    <div class="date-box">
                        <div>
                            <h3>2004</h3>
                        </div><!-- /date-box div -->
                        <div>
                            <a href=javascript:void(0); id="2004-collapse" class='collapse'>
                                <img src="arrow-collapse.png" class="pub-arrow">
                            </a>
                            <a href=javascript:void(0); id="2004-expand" class="hidden expand">
                                <img src="arrow-expand.png" class="pub-arrow">
                            </a>
                        </div> <!-- /date-box div -->
                    </div> <!-- /date-box -->
                    <ul id="2004-list" name="2004-list">
                         <li> 
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/15514660">
                                    <p class="article-name">The Collaborative Cross, a community resource for the genetic analysis of complex traits</p>
                                </a>
                                <p>Churchill GA, Airey DC, Allayee H, Angel JM, Attie AD, Beatty J, Beavis WD, Belknap JK, Bennett B, Berrettini W, Bleich A, Bogue M, Broman KW, Buck KJ, Buckler E, Burmeister M, Chesler EJ, Cheverud JM, Clapcote S, Cook MN, Cox RD, Crabbe JC, Crusio WE, Darvasi A, Deschepper CF, Doerge RW, <strong>Farber CR</strong>, Forejt J, Gaile D, Garlow SJ, Geiger H, Gershenfeld H, Gordon T, Gu J, Gu W, de Haan G, Hayes NL, Heller C, Himmelbauer H, Hitzemann R, Hunter K, Hsu HC, Iraqi FA, Ivandic B, Jacob HJ, Jansen RC, Jepsen KJ, Johnson DK, Johnson TE, Kempermann G, Kendziorski C, Kotb M, Kooy RF, Llamas B, Lammert F, Lassalle JM, Lowenstein PR, Lu L, Lusis A, Manly KF, Marcucio R, Matthews D, Medrano JF, Miller DR, Mittleman G, Mock BA, Mogil JS, Montagutelli X, Morahan G, Morris DG, Mott R, Nadeau JH, Nagase H, Nowakowski RS, O'Hara BF, Osadchuk AV, Page GP, Paigen B, Paigen K, Palmer AA, Pan HJ, Peltonen-Palotie L, Peirce J, Pomp D, Pravenec M, Prows DR, Qi Z, Reeves RH, Roder J, Rosen GD, Schadt EE, Schalkwyk LC, Seltzer Z, Shimomura K, Shou S, Sillanpää MJ, Siracusa LD, Snoeck HW, Spearow JL, Svenson K, Tarantino LM, Threadgill D, Toth LA, Valdar W, de Villena FP, Warden C, Whatley S, Williams RW, Wiltshire T, Yi N, Zhang D, Zhang M, Zou F; Complex Trait Consortium</p>
                                <p><em>Nature Genetics</em></p>
                                <p>November 3, 2004</p>
                             </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/14731226">
                                    <p class="article-name">The Collaborative Cross, a community resource for the genetic analysis of complex traits</p>
                                </a>
                                <p><strong>Farber CR</strong>, Medrano JF</p>
                                <p><em>Animal Genetics</em></p>
                                <p>January 20, 2004</p>
                            </div><!-- /li div -->
                        </li>
                    </ul>
                    <div class="date-box">
                        <div>
                            <h3>2003</h3>
                        </div><!-- /date-box div -->
                        <div>
                            <a href=javascript:void(0); id="2003-collapse" class='collapse'>
                                <img src="arrow-collapse.png" class="pub-arrow">
                            </a>
                            <a href=javascript:void(0); id="2003-expand" class="hidden expand">
                                <img src="arrow-expand.png" class="pub-arrow">
                            </a>
                        </div> <!-- /date-box div -->
                    </div> <!-- /date-box -->
                    <ul id="2003-list" name="2003-list">
                         <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/14634638">
                                    <p class="article-name">The nature and identification of quantitative trait loci: a community's view</p>
                                </a>
                                <p>Abiola O, Angel JM, Avner P, Bachmanov AA, Belknap JK, Bennett B, Blankenhorn EP, Blizard DA, Bolivar V, Brockmann GA, Buck KJ, Bureau JF, Casley WL, Chesler EJ, Cheverud JM, Churchill GA, Cook M, Crabbe JC, Crusio WE, Darvasi A, de Haan G, Dermant P, Doerge RW, Elliot RW, <strong>Farber CR</strong>, Flaherty L, Flint J, Gershenfeld H, Gibson JP, Gu J, Gu W, Himmelbauer H, Hitzemann R, Hsu HC, Hunter K, Iraqi FF, Jansen RC, Johnson TE, Jones BC, Kempermann G, Lammert F, Lu L, Manly KF, Matthews DB, Medrano JF, Mehrabian M, Mittlemann G, Mock BA, Mogil JS, Montagutelli X, Morahan G, Mountz JD, Nagase H, Nowakowski RS, O'Hara BF, Osadchuk AV, Paigen B, Palmer AA, Peirce JL, Pomp D, Rosemann M, Rosen GD, Schalkwyk LC, Seltzer Z, Settle S, Shimomura K, Shou S, Sikela JM, Siracusa LD, Spearow JL, Teuscher C, Threadgill DW, Toth LA, Toye AA, Vadasz C, Van Zant G, Wakeland E, Williams RW, Zhang HG, Zou F; Complex Trait Consortium</p>
                                <p><em>Nature Review Genetics</em></p>
                                <p>November 4, 2003</p>
                             </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/14970693">
                                    <p class="article-name">Comparative mapping of genes flanking the human chromosome 12 evolutionary breakpoint in the pig</p>
                                </a>
                                <p><strong>Farber CR</strong>, Raney NE, Rilington VD, Venta PJ, Ernst CW</p>
                                <p><em>Cytogenetic and Genome Research</em></p>
                                <p>October 3, 2003</p>
                            </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/12887183">
                                    <p class="article-name">Mapping of porcine genetic markers generated by representational difference analysis</p>
                                </a>
                                <p><strong>Farber CR</strong>, Raney NE, Rilington VD, Venta PJ, Ernst CW</p>
                                <p><em>Animal Biotechnology</em></p>
                                <p>May 14, 2003</p>
                            </div><!-- /li div -->
                        </li>
                        <li>
                            <div>
                                <br>
                                <a href="http://www.ncbi.nlm.nih.gov/pubmed/12580781">
                                    <p class="article-name">Putative in silico mapping of DNA sequences to livestock genome maps using SSLP flanking sequences </p>
                                </a>
                                <p><strong>Farber CR</strong>, Raney NE, Rilington VD, Venta PJ, Ernst CW</p>
                                <p><em>Animal Genetics</em></p>
                                <p>February 4, 2003</p>
                            </div><!-- /li div -->
                        </li>
                    </ul>
                </div><!--/date-box-wrapper-->
            </div><!--/big-box-->
            <div id="footer"> 
                <p><strong>CONNECT</strong></p>
                <div id="footer-img-wrapper">
                    <a href="http://facebook.com">
                        <img src="fb_button.png">
                    </a>
                    <a href="http://linkedin.com">
                        <img src="linkedin_button.png">
                    </a>
                    <a href="http://twitter.com">
                        <img src="twitter_button.png">
                    </a>
                    <a href="tel:4342435946">
                        <img src="phone.svg">
                    </a>
                    <a href="mailto:crf2s@virginia.edu">
                        <img src="email.svg">
                    </a>
                </div><!-- /footer-img-wrapper -->
            </div><!-- /footer -->
        </div><!-- /total-wrapper -->
    </body>
</html>
<!-- All images are open-source / labeled for reuse -->