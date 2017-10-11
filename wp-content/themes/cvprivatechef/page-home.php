<?php
/*
Template Name: Home Page

*/

get_header();
?>
<section class="hp-section" id="mis-servicios">
        <div class="container">

            <div class="section-title">
                <div class="col-sm-12">
                    <h3>MIS SERVICIOS</h3>
                    <hr>
                </div>
            </div>

            <div class="section-cnt">
                <div class="row">

                    <div class="col-sm-12 col-md-4">
                        <div class="service-item tac-service-1">
                            <span class="icon-values-service-1 icon-values-service"></span>
                            <titl class="title-service-item">Lorem Ipsum</titl>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4">
                        <div class="service-item tac-elaboracion">
                            <span class="icon-values-service-2 icon-values-service"></span>
                            <titl class="title-service-item">Lorem Ipsum</titl>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4">
                        <div class="service-item tac-servicio">
                            <span class="icon-values-service-3 icon-values-service"></span>
                            <titl class="title-service-item">Lorem Ipsum</titl>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <section class="about-me" id="acerca-de-mi">
        <div class="col-sm-12 col-lg-5 my-pic">
            <img src="/wp-content/themes/cvprivatechef/images/my-pic.png">
        </div>
        <div class="col-sm-12 col-lg-7 my-desc">
            <div class="col-sm-12  col-lg-10 my-desc-container">
                <div class="col-sm-12 title">ACERCA DE MI</div> <br>
                <hr>
                <div class="col-sm-12  name">Carolina Cornejo</div>
                <div class="col-sm-12 sub-name">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="col-sm-12  desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non nunc at mi accumsan tempor nec vel dui. In quis tincidunt ante, sed porta elit. Aenean elementum nisi ac faucibus consectetur. Sed eget commodo nulla. Phasellus a ullamcorper dui. Vivamus a tellus mi. Maecenas vitae nisl id nunc hendrerit porta at sit amet nunc. Donec ligula ante, posuere eu fermentum eget, ultrices id lectus. Vestibulum rhoncus eu purus eu cursus.

                 Mauris suscipit eget felis a pretium. Fusce vestibulum vestibulum pellentesque. Integer condimentum nunc quis tempus congue. Morbi nulla justo, gravida eget commodo et, auctor ut tortor.

                 Nunc tincidunt porttitor metus in aliquam. Ut facilisis turpis ac tristique tempor. In hac habitasse platea dictumst.</div>
            </div>
        </div>
    </section>
    <section class="my-work" id="mi-trabajo">

        <div class="container">
        <div class="section-title">
                <div class="col-sm-12">
                    <h3>MI TRABAJO</h3>
                    <hr>
                </div>
            </div>
            <?php echo do_shortcode("[huge_it_gallery id='2']"); ?>
        </div>
    </section>
    <section class="contact" id="contacto">
        <div class="col-sm-12" style="text-align: center; margin-bottom:20px;">
            <span class="title">CONTACTO</span>
            <hr>
            <span class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span>
        </div>
        <div class="col-sm-12 col-md-7" style="margin:auto; float: unset;">
            <?php echo do_shortcode( '[pirate_forms]' ) ?>
        </div>

    </section>

    <?php get_footer(); ?>