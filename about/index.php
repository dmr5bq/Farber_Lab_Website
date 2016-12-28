<!DOCTYPE html>

<?php

    require_once "../scripts/data.php";
    require_once "../scripts/display_injector.php";
?>

<html>
<!--  
*** PLEASE READ ***
Copyright 2016, Dominic Ritchey
Please do not re-use without express permission of the developer.
Property of Dominic Ritchey. For permissions, contact dominicritchey@email.virginia.edu. -->  
    <head>
        <title>Farber Lab - About</title>

        <?php

            print_style_link('about');
            print_script_link('about');
            print_meta_info();
        ?>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Farber Lab - Center for Public Health Genomics">
    </head>
    <body onload="load_background('about')">

            <?php generate_header('about'); ?>

            <div id='about-nav'>
                <ul>    
                    <li>
                        <p>Go to:</p>
                    </li>
                    <li>
                        <a href='#approach'>
                            <p>Our Approach</p>
                        </a>
                    </li>
                     <li>
                        <a href='#what'>
                            <p>What is System Genetics?</p>
                        </a>
                    </li>
                    <li>
                        <a href='#projects'>
                            <p>Current Projects</p>
                        </a>
                    </li>
                </ul>
                <a id="about-nav-arrow" href='#top'>
                    <img src="../assets/arrow-collapse.png">
                </a>
            </div><!--/about-nav-->

        <a href='javascript:void(0);' name='approach'></a><!--Used for page jumps-->
        <div id="big-box">
            <h1>About Our Lab</h1>
            <p>Our Approach: Systems Genetics</p>
                <a href='javascript:void(0);' name='what'></a> <!--Used for page jumps-->
                <table>
                    <tr>
                        <td><img src="../assets/system_gen.png"></td>
                        <td><h2>Systems Genetics of Complex Skeletal Phenotypes</h2>
                            <p class="body-text">Systems genetics seeks to understand how genetic information is integrated, organized and transmitted through cellular networks to impact cellular function/behavior. Much of our work in the lab uses systems genetics approaches that integrate genetic and transcriptome data to identify individual genes and gene networks influencing complex skeletal phenotypes. </p></td>
                    </tr> <!-- row 0 --> 
                </table> <!-- table 0 --> 
            <p>What is Systems Genetics?</p>
                <table>
                    <tr>
                        <td> 
                            <p class="body-text">Historically, geneticists have dissected the genetics of disease by directly identifying changes in DNA that alter disease-related phenotypes. This approach has successfully identified a whole host of genetic variants, and in some cases the underlying genes, that increase an individual’s risk of developing diseases such as obesity, atherosclerosis, diabetes and osteoporosis. However, this approach fails to provide insight on the cellular mechanisms altered by these variants or the larger gene networks within which they function. In recent years, new technologies have paved the way to investigate the genetic basis other cellular components in a massively parallel fashion and at unprecedented resolution. These advances have enabled the quantification of molecular phenotypes such as gene expression (referred to as the “transcriptome”), metabolites (metabolome) and proteins (proteome), on a genome-wide scale. These new tools provide geneticists with the opportunity uncover networks of interacting genetic variants, transcripts and proteins and to begin to understand how their perturbation leads to disease. </p> </td>
                    </tr> <!-- row 0 --> 
                    <tr>
                        <td>
                            <div>
                                <img src="../assets/cphg_sys.jpg">
                            </div><!-- left of td -->
                            <div>
                                <p class="caption">Figure 1 (left). Disease-associated genetic variation elicits its influence by perturbing biological components and their interactions. Systems genetics can be used to identify these perturbations, and the genes and networks involved, and the mechanisms through which they lead to disease. (Copyright, <em>University of Virginia Center for Publich Health Genomics</em>)</p>
                            </div> <!-- right of td --> 
                        </td>
                    </tr> <!-- row 1 --> 
                    <tr>
                        <td>             <a href='javascript:void(0);' name='projects'></a><!--Used for page jumps-->
                            <p class="body-text">This new area of research is referred to as “Systems Genetics” and it seeks to understand complexity by combining the principles of systems biology and genetics to uncover connections between genotype and complex disease. Importantly, systems genetics attempts to explain the role of genetic variation in cellular function and disease from the perspective of the entire system, not simply from the level of individual genes. The Farber lab in the CPHG is using systems genetics to identify genes and biological processes that affect bone development. This research promises to lead to the identification of novel therapeutic targets that can be use to combat diseases such as osteoporosis.</p>
                         <a href="http://cphg.virginia.edu/"><p>Information from the U.Va. Center for Public Health Genomics. Click here to learn more.</p></a></td>
                    </tr> <!-- row 2 --> 
                </table> <!-- table 1 --> 
            <p>Current Projects</p>
                <table>
                    <tr>
                        <td>
                            <img src="../assets/about_1.png">
                        </td>
                        <td> 
                            <h2>
                                Dissecting the genetic basis of complex bone phenotypes using systems genetics in the Hybrid Mouse Diversity Panel (HMDP).
                            </h2>
                            <p class="body-text">
                                The HMDP is a novel high-resolution mouse mapping population that is ideal for systems genetics studies (Bennett et al. Genome Research. 2010 and Farber CR et al. PLoS Genetics. 2011). We are using systems genetics approaches in the HMDP to identify genes influencing complex skeletal traits such as bone density, morphology and microarchitecture.
                            </p>
                        </td>
                    </tr> <!-- row 0 --> 
                    <tr>
                        <td>
                            <img src="../assets/bicc1.png">
                        </td>
                        <td>
                            <h2>
                                Elucidating the function of novel genes affecting skeletal traits identified in project #1. 
                            </h2>
                            <p class="body-text">
                                We are using RNAi in primary calvarial osteoblasts and transgenic and conditional knockout mice to study the role of genes identified in project #1. Our efforts are primarily focused on understanding the function of Bicadual C1 homolog (Bicc1) in the regulation of osteoblast differentiation and bone mass (Farber CR et al. Journal of Bone and Mineral Research. 2009).
                            </p>
                        </td>
                    </tr> <!-- row 1 --> 
                     <tr>
                        <td>
                            <img src="../assets/coe.png">
                        </td>
                        <td>
                            <h2>
                                 Elucidating transcriptional networks that play critical roles in the function of osteoblasts. 
                            </h2>
                            <p class="body-text">
                                We are appling Weighted Gene Co-expression Network Analysis to bone microarray data generated in the HMDP in order to reconstruct correlational networks.  The objective of this work is to use network information to pinpoint key genes and gene-gene interactions that are critical for osteoblast function.
                            </p>
                        </td>
                    </tr> <!-- row 2 --> 
                </table> <!-- table 2 --> 
            </div>   <!-- big-box -->
        <!--FOOTER CODE-->
        <?php generate_footer('about') ?>
    </body>
</html>

<!-- All images are open-source / labeled for reuse -->