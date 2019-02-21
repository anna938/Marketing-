<?php

/*
Template Name: Homepage
*/

get_header();

if(have_posts()):
    while (have_posts()): the_post(); ?>
    

     <section id="slider">
        <div id="sliderText">
        <h3>Ask Marketing</h3>
        <button>Learn More</button>
        </div>
    </section>
    <section id="blurb">
        <p>OUR ONLY LIMITATIONS ARE THOSE WE SET UP IN OUR OWN MINDS.</p>
    </section>
    <section id="about">
        <div id="aboutImg">
            <img src="">
        </div>
        <div id="aboutText"> 
            <div class="titleSection">
                    <h2>About</h2>
                    <hr>
            </div>
        
            <p>Since 2009, we all about ideas and leveraging the internet to enhance your brand. We take great pride in helping businesses create identity and watching them grow. Bring us a challenge and we will bring the solution.</p>
        </div>
    </section>
    <section id="serviceSection">
            <div class="titleSection serviceTitle">
                    <h2>Services</h2>
                    <hr>
                    <p>ASK Marketing specializes in initiating and enhancing your web presence. Our focus on building brands and ROI raises your business to the next level.</p>
                
            </div>
            <div id="servicesList">
                <div id="website">
                    <!-- <div class="serviceTitleImg"> -->
                        <h4 class="verticalMove">
                            Website
                        </h4>
                        <button class="servicesListbtn">Read More</button>
                    <!-- </div> -->
                </div>
                <div id="branding">
                        <h4>
                                Branding
                            </h4>
                            <button class="servicesListbtn">Read More</button>
                </div>
                <div id="online">
                        <h4>
                                Online
                            </h4>
                            <button class="servicesListbtn">Read More</button>
                </div>
                <div id="social">
                        <h4>
                                Social
                            </h4>
                            <button class="servicesListbtn">Read More</button>
                </div>
            </div>
    </section>
    <section id="portfolioSection">
            <div class="titleSection">
                    <h2>Portfolio</h2>
                    <hr>
            </div>
        <div id="portfolioTab">
            <div class="tabs tabAll">
                <h3 class="">All</h3>
            </div>
            <div class="tabs tabWesite">
                <h3 class="">Website</h3>
                </div>
            <div class="tabs tabBranding">
                <h3 class="">Branding</h3>
            </div>
            <div class="tabs tabOnline">
                <h3 class="">Online</h3>
            </div>
            <div class="tabs tabSocial">
                <h3 class="">Social</h3>
            </div>
        </div>
        <div class="tabAllImages" id="allActive">
                <img src="wp-content\uploads\2019\01\eekai.jpg">
                <img src="wp-content\uploads\2019\01\jcsbanquethall.jpg">
                <img src="wp-content\uploads\2019\01\kooddu.jpg">
                <img src="wp-content\uploads\2019\01\lavishem.jpg">
                <img src="wp-content\uploads\2019\01\ohm-wedding.png">
                <img src="wp-content\uploads\2019\01\prime-towing.jpg">
                <img src="wp-content\uploads\2019\01\prompt.jpg">
        </div>
        <div class="tabWebsiteImages tabsImages">
            <img src="wp-content\uploads\2019\01\eekai.jpg">
            <img src="wp-content\uploads\2019\01\jcsbanquethall.jpg">
            <img src="wp-content/uploads/2019/01/kooddu.jpg">
            <img src="wp-content\uploads\2019\01\lavishem.jpg">
            <img src="wp-content\uploads\2019\01\ohm-wedding.png">
            
        </div>
        <div class="tabBrandingImages tabsImages">
            <img src="wp-content\uploads\2019\01\eekai.jpg">
            <img src="wp-content\uploads\2019\01\jcsbanquethall.jpg">
            <img src="wp-content\uploads\2019\01\kooddu.jpg">
            <img src="wp-content\uploads\2019\01\prime-towing.jpg">
            <img src="wp-content\uploads\2019\01\prompt.jpg">
        </div>
        <div class="tabSocialImages tabsImages">
            <img src="wp-content\uploads\2019\01\jcsbanquethall.jpg">
            <img src="wp-content\uploads\2019\01\kooddu.jpg">
            <img src="wp-content\uploads\2019\01\lavishem.jpg">
        </div>
        <div class="tabOnlineImages tabsImages">
            <img src="wp-content\uploads\2019\01\lavishem.jpg">
            <img src="wp-content\uploads\2019\01\prime-towing.jpg">
            <img src="wp-content\uploads\2019\01\prompt.jpg">
        </div>
    </section>



    <?php endwhile;

else:

    echo '<p>No content found</p>';

endif;

get_footer();
?>