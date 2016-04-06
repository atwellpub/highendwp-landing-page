<?php
/**
 * @package WordPress
 * @subpackage Highend
 */

?>
<?php
if (is_singular('clients') ||
    is_singular('hb_pricing_table')
) {
    wp_redirect(home_url());
    exit;
}

/**
 * Template Name: __TEMPLATE_NAME__
 * @package  WordPress Landing Pages
 * @author   Inbound Template Generator
 */

/* Declare Template Key */
$key = 'default';

$post_id = get_the_ID();

get_header();


$header = get_field("header", $post_id);
$logo_image = get_field("logo_image", $post_id);
$tagline = get_field("tagline", $post_id);
$header_text = get_field("header_text", $post_id);
$call_to_action = get_field("call_to_action", $post_id);
$headline = get_field("headline", $post_id);
$sub_headline = get_field("sub-headline", $post_id);
$featured_videoimage = get_field("featured_videoimage", $post_id);
$main_content = get_field("main_content", $post_id);
$call_to_action_area_for_form = get_field("call_to_action_area_for_form", $post_id);
$testimonials = get_field("testimonials", $post_id);
$call_to_action_ = get_field("call_to_action_", $post_id);


?>
    <style type="text/css">
        .flex-container-row {
            display: -webkit-flex; /* Safari */
            display: flex;
            flex-direction: row;
        }

        .start-left {
            -webkit-justify-content: flex-start;
            justify-content: flex-start;
        }

        .start-right {
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
        }

        .start-spaced {
            -webkit-justify-content: space-between; /* Safari */
            justify-content: space-between;
        }

        .start-space-around {
            -webkit-justify-content: space-around; /* Safari */
            justify-content: space-around;
        }

        .start-wrap {
            -webkit-flex-wrap: wrap; /* Safari */
            flex-wrap: wrap;
        }

        .flex-container-column {
            display: -webkit-flex; /* Safari */
            display: flex;
            flex-direction: column;
        }

        .start-top {
            -webkit-align-items: flex-start; /* Safari */
            align-items: flex-start;
        }

        .start-bottom {
            -webkit-align-items: flex-end; /* Safari */
            align-items: flex-end;
        }

        .start-stretched {
            -webkit-align-items: stretch; /* Safari */
            align-items: stretch;
        }

        .start-vertical-centered {
            -webkit-align-items: center; /* Safari */
            align-items: center;
        }

        .start-centered {
            -webkit-justify-content: center; /* Safari */
            justify-content: center;
        }

        .start-baselined {
            -webkit-align-items: baseline; /* Safari */
            align-items: baseline;
        }

        #header-bar,
        #hb-page-title,
        #copyright-wrapper,
        #footer,
        #contact-panel,
        #contact-button,
        #pre-footer-area,
        #hb-header,
        .main-navigation:first-of-type {
            display: none !important;
        }

        .tagline {
            display: block;
        }

        #footer-cta-area {
            position: relative;
            background-color: #ecebe9;
            background-color: rgba(0, 0, 0, 0.05);
            color: #323436;
            text-align: center;
            vertical-align: bottom;
            font-size: 22px;
            border-bottom: solid 3px #00aeef;
            letter-spacing: 0px;
            border-bottom-color: #00aeef
        }

        #footer-cta-area .container {
            padding: 30px 0;
        }

        #footer-cta-area:after {
            content: "";
            position: absolute;
            width: 0;
            height: 0;
            border-left: 11px solid transparent;
            border-right: 11px solid transparent;
            border-top: 11px solid #f9f9f9;
            top: -1px;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
        }

        footer {
            background-color: #292929;
        }

        #landing-page-header {
            position: relative;
            display: block;
            z-index: 998;
        }

        header {
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 20px;
            padding-bottom: 16px;
            border-bottom: 1px solid #81d742;
        }

        .header-headline {
            flex-grow: 1;
            text-align: center;
            margin-left: 137px;
        }

        .header-headline h1, h2, h3 {
            font-family: "Open Sans", sans-serif !important;
            font-size: 30px !important;
            line-height: 36px !important;
            letter-spacing: 0px !important;
            font-weight:;
        }

        #headline {
            padding: 20px;
        }

        #main-content-area {
            text-align: center;
            max-width: 90%;
        }

        #left-column {
            padding-left: 80px;
            padding-right: 80px;
            width: 62%;
            text-align: left;
        }

        #right-column {
            width: 23%;
            text-align: left;
        }

        #sub-headline {
            text-align: center;
        }

        .inbound-field input[type=text], .inbound-field input[type=url], .inbound-field input[type=email], .inbound-field input[type=tel], .inbound-field input[type=number], .inbound-field input[type=password] {
            width: 100% !important;
        }

        .inbound-button-submit {
            background-color: #81d742;
            border: 1px solid #000;
            color: #fff;
            width: 100%;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-right: 10px;

        }

        #footer-cta-area {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        #footer-cta-area h4 {
            color: #f4f4f4 !important;
        }

        footer, footer a{
            color: #aaa !important;
        }

        footer ul {
            padding:40px;
        }

        footer a:hover {
            color: #81d742 !important;
        }

        .nav-link:last-child .sep{
            display:none;
        }
    </style>
    <header id="landing-page-header" class="">

        <div class="flex-container-row start-space-around start-vertical-centered">
            <!-- BEGIN #logo -->
            <div id="header-logo">
                <?php
                if ($logo_image) {
                    ?>
                    <span class="image-logo no-transition">


				<span class="hb-dark-logo hb-visible-logo hb-logo-wrap">
					<img src="<?php echo $logo_image; ?>" style="max-height:318px;" class="default" alt="">
				</span>
				<span class="tagline">
					<?php echo $tagline; ?>
				</span>

			</span>
                    <?php
                }
                ?>
            </div>
            <!-- END #logo -->
            <!-- BEGIN header -->
            <div class="header-headline">
                <h1><?php echo do_shortcode($header_text); ?></h1>
            </div>
            <!-- END header -->

            <!-- BEGIN header cta -->
            <div class="header-call-to-action">
                <?php echo do_shortcode($call_to_action); ?>
            </div>
            <!-- END header cta -->
        </div>


    </header>

    <div class="flex-container-column start-centered start-vertical-centered" id='headline'>
        <h2><?php echo $headline; ?></h2>
    </div>
    <div class="flex-container-row  start-wrap" id='main-content-area'>
        <div id="left-column">
            <h3 id="sub-headline"><?php echo $sub_headline; ?></h3>

            <?php

            if ($featured_videoimage) {
                echo '<div id="featured-media">';
                echo $featured_videoimage;
                echo '</div>';
            }

            echo do_shortcode($main_content);
            ?>
        </div>
        <div id="right-column">
            <div id="right-column-call-to-action">
                <?php echo $call_to_action_area_for_form; ?>
            </div>

            <div id="right-column-testimonials">
                <?php echo $testimonials; ?>
            </div>


        </div>
    </div>
    <!-- BEGIN #main-content -->
    <div id="main-content">
        <div class="container">

            <div class="row main-row">
                <div class="flex-container-row">

                    <?php
                    /* Start footer_menu_link Repeater Output */
                    if (have_rows("footer_menu_link")) { ?>

                        <?php while (have_rows("footer_menu_link")) : the_row();
                            $link = get_sub_field("link");
                            ?>

                            <!-- your markup here -->

                        <?php endwhile; ?>

                    <?php } /* end if have_rows(footer_menu_link) */
                    /* End footer_menu_link Repeater Output */
                    ?>
                </div>


            </div>

        </div>
    </div>
    <div id="footer-cta-area" class="flex-container-col start-centered start-vertical-centered">
        <?php echo do_shortcode($call_to_action_); ?>
    </div>
    <footer id="footer-area" class="dark-style">

        <!-- BEGIN .container -->
        <div class="flex-container-row start-centered start-vertical-centered">
            <ul id="footer-nav" class="">
                <?php
                if (have_rows("footer_menu_link")) { ?>
                    <?php
                    while (have_rows("footer_menu_link")) : the_row();
                        while (have_rows("footer-links")) : the_row();
                            $anchor = get_sub_field("anchor");
                            $url = get_sub_field("url");
                            echo '<li class="menu-item menu-item-type-post_type menu-item-object-page no-megamenu nav-link">';
                            echo '<a href="'.$url.'">'.$anchor.'</a> <span class="sep">&nbsp;&nbsp;|</span></li>';

                        endwhile;

                    endwhile;
                    ?>

                <?php
                } /* end if have_rows(footer_menu_link) */
                /* End footer_menu_link Repeater Output */
                ?>

            </ul>
        </div>
        <!-- END .container -->

    </footer>
    <!-- END #main-content -->
<?php get_footer(); ?>