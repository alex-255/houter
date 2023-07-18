<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="top-part" class="container-fluid">
        <div class="hamburger">
        </div>
        <div class="overlay">
        </div>
        <div class="row">

            <div class="col-12 col-xl-6 logo-area"
                style="background-image:url(<?php echo get_template_directory_uri() . "/assets/images/Color-Blur.png"; ?>);">
                <div class="logo">
                <?php the_custom_logo(); ?>
                <a class="sitename" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
                </div>
                
                <h1>find the place to live <span>your dreams</span> easily here</h1>
                <p>Everything you need about finding your place to live will be here, where it will be easier for you
                </p>
                <form>
                    <div class="form-wrapper">
                        <input type="search" id="mySearch" name="q" placeholder="Search for the location you want!" />
                        <button>Search<i class="bi bi-chevron-right"></i></button>
                    </div>
                </form>
                <h6>Our Partnership</h6>
                <div class="partners">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/traveloka_logo 2.png"; ?>" />
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/traveloka_logo 5.png"; ?>" />
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/traveloka_logo 3.png"; ?>" />
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/traveloka_logo 4.png"; ?>" />
                </div>
            </div>

            <div class="col-12 col-xl-6 menu-area"
                style="background-image:url(<?php echo get_template_directory_uri() . "/assets/images/squared-house.webp"; ?>);">
                <div class="bar">
                    <?php wp_nav_menu( array(
                'theme_location' => 'primary_menu'
              ) ); ?>
                    <a class="sign-up-button" href="#">Sign Up!</a>
                </div>
                <div class="slider-block-wrapper col-12">
                    <div class="menu-area--slider">
                        <div class="menu-area--slider--item">
                            <img
                                src="<?php echo get_template_directory_uri() . "/assets/images/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg"; ?>" />
                            <div class="menu-area--slider--item--content">
                                <h6>1K+ People</h6>
                                <p>Successfully Getting Home</p>
                            </div>
                        </div>
                        <div class="menu-area--slider--item">
                            <img
                                src="<?php echo get_template_directory_uri() . "/assets/images/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg"; ?>" />
                            <div class="menu-area--slider--item--content">
                                <h6>1K+ People</h6>
                                <p>Successfully Getting Home</p>
                            </div>
                        </div>
                        <div class="menu-area--slider--item">
                            <img
                                src="<?php echo get_template_directory_uri() . "/assets/images/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg"; ?>" />
                            <div class="menu-area--slider--item--content">
                                <h6>1K+ People</h6>
                                <p>Successfully Getting Home</p>
                            </div>
                        </div>
                        <div class="menu-area--slider--item">
                            <img
                                src="<?php echo get_template_directory_uri() . "/assets/images/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg"; ?>" />
                            <div class="menu-area--slider--item--content">
                                <h6>1K+ People</h6>
                                <p>Successfully Getting Home</p>
                            </div>
                        </div>
                        <div class="menu-area--slider--item">
                            <img
                                src="<?php echo get_template_directory_uri() . "/assets/images/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg"; ?>" />
                            <div class="menu-area--slider--item--content">
                                <h6>1K+ People</h6>
                                <p>Successfully Getting Home</p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>