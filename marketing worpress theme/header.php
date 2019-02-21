<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700|Roboto:400,500,700" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="topBar">
            <div id="info">
                <div id="phone">
                    <span>647-868-1234</span>
                </div>
                <div id="email">
                    <span>info@askmarketing.co</span>
                </div>
            </div>
            <div id="socialIcons">
                <!-- <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>LinkedIn</li>
                </ul> -->
                <?php 
                    $args = array(
                        'theme_location' => 'topbar'
                    );
                    ?>          
                    
                    
                   <?php wp_nav_menu( $args ); ?>  
            </div>
            
        </div>
        <!-- <div id="dropDownIcon">
                <a href="javascript:void(0);" onclick="mobilemenuclicked()">&#9776</a>
            </div> -->
        
            <nav class="navbar">   
                <div id="logo">
                    <a href="#"><img src="wp-content\uploads\2019\01\ask-marketing-logo4.png"></a>
                </div>
                <!-- <div class="navbarList" id="dropdownClick"> -->
                    <!-- <a href="#" id="home">Home</a>
                    <a href="#" id="about">About</a>
                    <a href="#" id="services">Services</a>
                    <a href="#" id="portfolio">Portfolio</a>
                    <a href="#" id="contact">Contact Us</a> -->
                    <?php 
                    $args = array(
                        'theme_location' => 'primary'
                    );
                    ?>          
                    
                    
                   <?php wp_nav_menu( $args ); ?>
                    
                <!-- </div> -->
                <div  id="dropDownIcon">
                <span><i class="fas fa-bars"></i></span>
                </div>
            </nav>
       
    </header>