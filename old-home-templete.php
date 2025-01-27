<?php /* Template Name: Homepage */
get_header(); ?>

<style>
    /* Wrapper for the entire content */
    .content-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* Space between heading and paragraph */
        align-items: center;
        height: 100vh;
        /* Full screen height */
        padding: 20px;
        /* Optional padding */
        text-align: center;
    }

    /* Style for animated text container */
    .animated-text-container {
        margin-top: 20px;
        /* Adjust spacing from the top */
        color: white;
        font-size: 2em;
        font-weight: bold;
    }

    .animated-text {
        overflow: hidden;
        white-space: nowrap;
        border-right: 2px solid white;
        /* Cursor effect */
        animation: blink-caret 0.7s step-end infinite;
    }

    /* Typing animation */
    @keyframes blink-caret {

        from,
        to {
            border-color: transparent;
        }

        50% {
            border-color: white;
        }
    }

    /* Style for bottom paragraph */
    .bottom-paragraph {
        margin-bottom: 20px;
        /* Adjust spacing from the bottom */
        color: white;
        font-size: 1.2em;
        line-height: 1.5;
    }
</style>

<script>
    function showCloseButton() {
        var closeButton = document.getElementById('closeButton');
        if (closeButton) {
            // closeButton.style.display = 'block'; // Show the close button
        }
    }
</script>

<style>
    /* Default close button styles */
    #closeButton {
        display: none;
        position: absolute;
    }

    /* Class to show the close button */
    .show-close-button {
        display: block !important;
        z-index: 999999 !important;
    }
</style>

<div data-barba="container" data-barba-namespace="" data-background="">
    <!-- <div class="preloader js-preloader flex-center">
        <div>
            <div class="spinner"></div>
        </div>
    </div> -->
    <input type="hidden" id="TextVal" value="0">
    <input type="hidden" id="TextStop" value="1">
    <div class="up-down-buttons">
        <button class="down_arrow" id="prevBtnText" onclick="prevBtnFunction(this)">
            <img class="animate-cs-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right-circleNEWNEW.svg">
            <!--        <img src="--><?php //echo get_stylesheet_directory_uri(); 
                                        ?><!--/images/circle.png">-->
        </button>
        <button class="down_arrow" id="nextBtnText" onclick="nextBtnFunction(this)">
            <img class="animate-cs-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right-circleNEWNEW.svg">
            <!--        <img src="--><?php //echo get_stylesheet_directory_uri(); 
                                        ?><!--/images/circle.png">-->
        </button>
    </div>
    <!--    <button class="down_arrow" id="azCloseBtn" style="display: none">-->
    <!--        <img class="animate-cs-bottom" src="--><?php //echo get_stylesheet_directory_uri(); 
                                                        ?><!--/images/close-white.svg">-->
    <!--        <img src="--><?php //echo get_stylesheet_directory_uri(); 
                                ?><!--/images/close-white.svg">-->
    <!---->
    <!--    </button>-->
    <div class="abc">
        <div id="home_page" class="activeHomeScreen home prevButton">
            <!-- screen 1 start here -->
            <div class="Screens active homeScreen active_screen" id="1" onload="hello()">
                <div class="video-container">
                    <video id="front_video" class="background-video" autoplay muted loop playsinline>
                        <?php $file_array = get_field('first_screen_video'); ?>
                        <source src="<?php echo $file_array['url']; ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="content-wrapper">
                    <div class="content-overlay">
                        <!-- Animated Heading -->
                        <div class="animated-text-container">
                            <div id="dynamicText" class="animated-text">
                                <h1>
                                    <div><?php echo get_field('screen_1_dynamic_text_1'); ?></div>
                                    <div><?php echo get_field('screen_1_dynamic_text_2'); ?></div>
                                    <div><?php echo get_field('screen_1_dynamic_text_3'); ?></div>
                                </h1>
                            </div>
                        </div>
                        <!-- Static Bottom Paragraph -->
                        <p class="bottom-paragraph">
                            <?php echo get_field('video_dynamic_text'); ?>
                        </p>
                    </div>
                </div>

            </div>

            <!-- screen 1 end here -->
            <!-- screen 2 start here -->

            <div class="Screens homeScreens ">
                <div class="inner_screen">
                    <div class="toHideSec horizontal_half left top">
                        <div class="slide_sec left_to_right prev_fix screen1left">
                            <div class="flip-image-wrapper flip-left">
                                <div class="flip-image">
                                    <div class="front">
                                        <?php
                                        $images = acf_photo_gallery('screen_2_images', $post->ID);
                                        if (count($images)):
                                            $id = $image['id'];
                                            $image  = $images[0];
                                            $title = $image['title'];
                                            $caption = $image['caption'];
                                            $full_image_url = $image['full_image_url'];
                                        ?>
                                            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <div class="image-container">
                                                <div class="arrow">➔</div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="overlay_text">
                                            <div class="slide_sec right_to_left prev_left screen1 center_txt " style="background-color:<?php the_field('screen2_text_background_color') ?>;">
                                                <div class="bounce_effect_old">
                                                    <h3>
                                                        <?php the_field('screen_2_title') ?>
                                                    </h3>
                                                    <p>
                                                        <?php the_field('screen_2_text') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="back light" style="background-color:<?php the_field('screen2_text_background_color') ?>;">
                                        <?php
                                        $images = acf_photo_gallery('screen_2_images', $post->ID);
                                        if (count($images)):
                                            $id = $image['id'];
                                            $image  = $images[0];
                                            $title = $image['title'];
                                            $caption = $image['caption'];
                                            $full_image_url = $image['full_image_url'];
                                        ?>
                                            <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                        <?php endif; ?>
                                        <div class="flip-text-outer center_txt">
                                            <a class="close-flip">
                                            </a>
                                            <h3>
                                                <?php the_field('screen_2_title') ?>
                                            </h3>
                                            <p><?php the_field('screen_2_image_1_background_text') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal_half right top ">
                        <div class="vertical_half right top">
                            <div class="slide_sec right_to_left prev_left screen1 center_txt " style="background-color:<?php the_field('screen2_text_background_color') ?>;">
                                <div class="bounce_effect_old">
                                    <h3>
                                        <?php the_field('screen_2_title') ?>
                                    </h3>
                                    <p>
                                        <?php the_field('screen_2_text') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half right bottom">
                            <div class="slide_sec right_to_left prev_left screen1">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_2_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[1];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>

                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="arrow">➔</div>

                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec right_to_left prev_left screen1 center_txt " style="background-color:<?php the_field('screen2_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_2_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_2_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back dark" style="background-color:<?php the_field('screen2_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_2_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[1];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_2_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_2_image_2_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- screen 2 end here -->
            <!-- screen 3 start here -->
            <div class="Screens homeScreens ">
                <div class="inner_screen">
                    <div class="horizontal_half left top">
                        <div class="vertical_half right top">
                            <div class="slide_sec  top_to_bottom prev_left center_txt" style="background-color:<?php the_field('screen3_text_background_color') ?>;">
                                <div class="bounce_effect_old">
                                    <h3>
                                        <?php the_field('screen_3_title') ?>
                                    </h3>
                                    <p>
                                        <?php the_field('screen_3_text') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half right bottom">
                            <div class="slide_sec bottom_to_top prev_left">
                                <div class="video">
                                    <video id="video1" class="videoPlay" preload="auto" muted="" playsinline="1" autoplay="autoplay" width='480'>
                                        <?php $file_array = get_field('screen6_video'); ?>
                                        <source src="<?php echo $file_array['url']; ?>">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="toHideSec horizontal_half right top">
                        <div class="slide_sec  right_to_left prev_left transRight">
                            <div class="flip-image-wrapper flip-left">
                                <div class="flip-image">
                                    <div class="front">
                                        <?php
                                        $images = acf_photo_gallery('screen_3_images', $post->ID);
                                        if (count($images)):
                                            $id = $image['id'];
                                            $image  = $images[0];
                                            $title = $image['title'];
                                            $caption = $image['caption'];
                                            $full_image_url = $image['full_image_url'];
                                        ?>
                                            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <div class="image-container">
                                                <div class="arrow">➔</div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="overlay_text">
                                            <div class="slide_sec  top_to_bottom prev_left center_txt" style="background-color:<?php the_field('screen3_text_background_color') ?>;">
                                                <div class="bounce_effect_old">
                                                    <h3>
                                                        <?php the_field('screen_3_title') ?>
                                                    </h3>
                                                    <p>
                                                        <?php the_field('screen_3_text') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="back light" style="background-color:<?php the_field('screen3_text_background_color') ?>;">
                                        <?php
                                        $images = acf_photo_gallery('screen_3_images', $post->ID);
                                        if (count($images)):
                                            $id = $image['id'];
                                            $image  = $images[0];
                                            $title = $image['title'];
                                            $caption = $image['caption'];
                                            $full_image_url = $image['full_image_url'];
                                        ?>
                                            <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                        <?php endif; ?>
                                        <div class="flip-text-outer center_txt">
                                            <a class="close-flip">
                                            </a>
                                            <h3>
                                                <?php the_field('screen_3_title') ?>
                                            </h3>
                                            <p><?php the_field('screen_3_image_1_background_text') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- screen 3 end here -->
            <!-- screen 4 start here -->
            <div class="Screens homeScreens ">
                <div class="inner_screen">
                    <div class="toHideSec horizontal_half left top">
                        <div class="vertical_half right top">
                            <div class="slide_sec right_to_left prev_fix transRight">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_4_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[0];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec right_to_left prev_left transRight bg_col4 center_txt" style="background-color:<?php the_field('screen4_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_4_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_4_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back dark" style="background-color:<?php the_field('screen4_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_4_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[0];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>

                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">

                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_4_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_4_image_1_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half right bottom">
                            <div class="slide_sec right_to_left prev_fix transRight">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_4_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[1];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec right_to_left prev_left transRight bg_col4 center_txt" style="background-color:<?php the_field('screen4_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_4_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_4_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back light" style="background-color:<?php the_field('screen4_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_4_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[1];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_4_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_4_image_2_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal_half right top">
                        <div class="vertical_half right top">
                            <div class="slide_sec right_to_left prev_left transRight bg_col4 center_txt" style="background-color:<?php the_field('screen4_text_background_color') ?>;">
                                <div class="bounce_effect_old">
                                    <h3>
                                        <?php the_field('screen_4_title') ?>
                                    </h3>
                                    <p>
                                        <?php the_field('screen_4_text') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half right bottom">
                            <div class="slide_sec right_to_left prev_left transRight">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_4_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[2];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec right_to_left prev_left transRight bg_col4 center_txt" style="background-color:<?php the_field('screen4_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_4_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_4_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back xsdark" style="background-color:<?php the_field('screen4_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_4_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[2];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_4_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_4_image_3_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- screen 4 end here -->
            <!-- screen 5 start here -->
            <div class="Screens homeScreens ">
                <div class="inner_screen">
                    <div class="toHideSec horizontal_half left top">
                        <div class="slide_sec top_to_bottom prev_right transRight">
                            <div class="flip-image-wrapper flip-left">
                                <div class="flip-image">
                                    <div class="front">
                                        <?php
                                        $images = acf_photo_gallery('screen_5_images', $post->ID);
                                        if (count($images)):
                                            $id = $image['id'];
                                            $image  = $images[0];
                                            $title = $image['title'];
                                            $caption = $image['caption'];
                                            $full_image_url = $image['full_image_url'];
                                        ?>
                                            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <div class="image-container">
                                                <div class="arrow">➔</div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="overlay_text">
                                            <div class="slide_sec right_to_left prev_right transRight bg_col5 center_txt" style="background-color:<?php the_field('screen5_text_background_color') ?>;">
                                                <div class="bounce_effect_old">
                                                    <h3>
                                                        <?php the_field('screen_5_title') ?>
                                                    </h3>
                                                    <p>
                                                        <?php the_field('screen_5_text') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="back light" style="background-color:<?php the_field('screen5_text_background_color') ?>;">
                                        <?php
                                        $images = acf_photo_gallery('screen_5_images', $post->ID);
                                        if (count($images)):
                                            $id = $image['id'];
                                            $image  = $images[0];
                                            $title = $image['title'];
                                            $caption = $image['caption'];
                                            $full_image_url = $image['full_image_url'];
                                        ?>
                                            <img src="<?php echo $full_image_url; ?>" class="overlay-image" alt="<?php echo $title; ?>">
                                        <?php endif; ?>
                                        <div class="flip-text-outer center_txt">
                                            <a class="close-flip">
                                            </a>
                                            <h3>
                                                <?php the_field('screen_5_title') ?>
                                            </h3>
                                            <p><?php the_field('screen_5_image_1_background_text') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal_half right top">
                        <div class="vertical_half right top">
                            <div class="slide_sec right_to_left prev_right transRight bg_col5 center_txt" style="background-color:<?php the_field('screen5_text_background_color') ?>;">
                                <div class="bounce_effect_old">
                                    <h3>
                                        <?php the_field('screen_5_title') ?>
                                    </h3>
                                    <p>
                                        <?php the_field('screen_5_text') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half right bottom">
                            <div class="slide_sec right_to_left prev_right transRight">
                                <div class="video">
                                    <video id="video2" class="videoPlay" preload="auto" muted="" playsinline="1" autoplay="autoplay">
                                        <?php $file_array = get_field('screen13_video'); ?>
                                        <source src="<?php echo $file_array['url']; ?>">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- screen 5 end here -->
            <!-- screen 6 start here -->
            <div class="Screens homeScreens ">
                <div class="inner_screen">
                    <div class="toHideSec horizontal_half left top">
                        <div class="vertical_half right top">
                            <div class="slide_sec left_to_right prev_right bg_col6">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_6_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[0];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec left_to_right prev_left transRight center_txt" style="background-color:<?php the_field('screen6_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_6_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_6_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back dark" style="background-color:<?php the_field('screen6_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_6_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[0];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_6_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_6_image_1_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half right bottom">
                            <div class="slide_sec left_to_right prev_right">
                                <div class="video">
                                    <video id="video3" class="videoPlay" preload="auto" muted="" playsinline="1" autoplay="autoplay">
                                        <?php $file_array = get_field('screen9_video'); ?>
                                        <source src="<?php echo $file_array['url']; ?>">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal_half right top">
                        <div class="vertical_half right top">
                            <div class="slide_sec left_to_right prev_left transRight center_txt" style="background-color:<?php the_field('screen6_text_background_color') ?>;">
                                <div class="bounce_effect_old">
                                    <h3>
                                        <?php the_field('screen_6_title') ?>
                                    </h3>
                                    <p>
                                        <?php the_field('screen_6_text') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half right bottom">
                            <div class="slide_sec left_to_right prev_left transRight">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_6_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[1];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec left_to_right prev_left transRight center_txt" style="background-color:<?php the_field('screen6_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_6_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_6_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back light" style="background-color:<?php the_field('screen6_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_6_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[1];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_6_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_6_image_2_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- screen 6 end here -->
            <!-- screen 7 start here -->
            <div class="Screens homeScreens ">
                <div class="inner_screen">
                    <div class="toHideSec horizontal_half left top">
                        <div class="slide_sec bg_col7 left_to_right prev_left ">
                            <div class="flip-image-wrapper flip-left">
                                <div class="flip-image">
                                    <div class="front">
                                        <?php
                                        $images = acf_photo_gallery('screen_7_images', $post->ID);
                                        if (count($images)):
                                            $id = $image['id'];
                                            $image  = $images[0];
                                            $title = $image['title'];
                                            $caption = $image['caption'];
                                            $full_image_url = $image['full_image_url'];
                                        ?>
                                            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <div class="image-container">
                                                <div class="arrow">➔</div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="overlay_text">
                                            <div class="slide_sec right_to_left prev_left transRight center_txt" style="background-color:<?php the_field('screen7_text_background_color') ?>;">
                                                <div class="bounce_effect_old">
                                                    <h3>
                                                        <?php the_field('screen_7_title') ?>
                                                    </h3>
                                                    <p>
                                                        <?php the_field('screen_7_text') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="back dark" style="background-color:<?php the_field('screen7_text_background_color') ?>;">
                                        <?php
                                        $images = acf_photo_gallery('screen_7_images', $post->ID);
                                        if (count($images)):
                                            $id = $image['id'];
                                            $image  = $images[0];
                                            $title = $image['title'];
                                            $caption = $image['caption'];
                                            $full_image_url = $image['full_image_url'];
                                        ?>
                                            <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                        <?php endif; ?>
                                        <div class="flip-text-outer center_txt">
                                            <a class="close-flip">
                                            </a>
                                            <h3>
                                                <?php the_field('screen_7_title') ?>
                                            </h3>
                                            <p><?php the_field('screen_7_image_1_background_text') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal_half right top">
                        <div class="vertical_half right top">
                            <div class="slide_sec right_to_left prev_left transRight center_txt" style="background-color:<?php the_field('screen7_text_background_color') ?>;">
                                <div class="bounce_effect_old">
                                    <h3>
                                        <?php the_field('screen_7_title') ?>
                                    </h3>
                                    <p>
                                        <?php the_field('screen_7_text') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half right bottom">
                            <div class="slide_sec right_to_left prev_left transRight">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_7_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[1];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec right_to_left prev_left transRight center_txt" style="background-color:<?php the_field('screen7_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_7_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_7_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back light" style="background-color:<?php the_field('screen7_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_7_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[1];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_7_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_7_image_2_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- screen 7 end here -->
            <!-- screen 8 start here -->
            <div class="Screens homeScreens ">
                <div class="inner_screen">
                    <div class="horizontal_half left top">
                        <div class="vertical_half right top">
                            <div class="slide_sec right_to_left prev_right">
                                <div class="video">
                                    <video id="video5" class="videoPlay" preload="auto" muted="" playsinline="1" autoplay="autoplay">
                                        <?php $file_array = get_field('screen8_video'); ?>
                                        <source src="<?php echo $file_array['url']; ?>">
                                        <!-- <source src="<?php echo $file_array['url']; ?>" type="video/mp4"> -->
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half right bottom">
                            <div class="slide_sec right_to_left prev_right">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_8_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[0];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <!-- twelveth -->
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec right_to_left prev_right bg_col8 center_txt" style="background-color:<?php the_field('screen8_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_8_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_8_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back dark" style="background-color:<?php the_field('screen8_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_8_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[0];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_8_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_8_image_1_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=horizontal_half right top hover-link">
                        <div class="vertical_half right top">
                            <div class="slide_sec right_to_left prev_right bg_col8 center_txt" style="background-color:<?php the_field('screen8_text_background_color') ?>;">
                                <div class="bounce_effect_old">
                                    <h3>
                                        <?php the_field('screen_8_title') ?>
                                    </h3>
                                    <p>
                                        <?php the_field('screen_8_text') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half right bottom">
                            <div class="slide_sec right_to_left prev_right">
                                <?php
                                $images = acf_photo_gallery('screen_8_images', $post->ID);
                                if (count($images)):
                                    $id = $image['id'];
                                    $image  = $images[1];
                                    $title = $image['title'];
                                    $caption = $image['caption'];
                                    $full_image_url = $image['full_image_url'];
                                ?>
                                    <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                    <div class="image-container">
                                        <div class="arrow">➔</div>
                                    </div>
                                <?php endif; ?>
                                <a class="overlay_text" href="<?php the_field('section_14_url'); ?>">
                                    <div class="slide_sec right_to_left prev_right bg_col8 center_txt" style="background-color:<?php the_field('screen8_text_background_color') ?>;">
                                        <div class="bounce_effect_old">
                                            <h3>
                                                <?php the_field('screen_8_title') ?>
                                            </h3>
                                            <p>
                                                <?php the_field('screen_8_text') ?>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- screen 8 end here -->
            <!-- screen 9 start here -->
            <div class="Screens homeScreens ">
                <div class="inner_screen">
                    <div class="toHideSec horizontal_half left top">
                        <div class="vertical_half right top">
                            <div class="slide_sec left_to_right prev_left">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_9_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[0];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec left_to_right prev_right bg_col9 center_txt" style="background-color:<?php the_field('screen9_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_9_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_9_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back light" style="background-color:<?php the_field('screen9_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_9_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[0];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_9_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_9_image_1_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half right bottom">
                            <div class="slide_sec left_to_right prev_left">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_9_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[1];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec left_to_right prev_right bg_col9 center_txt" style="background-color:<?php the_field('screen9_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_9_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_9_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back light" style="background-color:<?php the_field('screen9_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_9_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[1];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_9_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_9_image_2_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal_half right top">
                        <div class="vertical_half right top">
                            <div class="slide_sec left_to_right prev_right bg_col9 center_txt" style="background-color:<?php the_field('screen9_text_background_color') ?>;">
                                <div class="bounce_effect_old">
                                    <h3>
                                        <?php the_field('screen_9_title') ?>
                                    </h3>
                                    <p>
                                        <?php the_field('screen_9_text') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half right bottom">
                            <div class="slide_sec left_to_right prev_right">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_9_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[2];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec left_to_right prev_right bg_col9 center_txt" style="background-color:<?php the_field('screen9_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_9_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_9_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back xsdark" style="background-color:<?php the_field('screen9_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_9_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[2];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_9_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_9_image_3_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- screen 9 end here -->
            <!-- screen 10 start here -->
            <div class="Screens homeScreens ">
                <div class="inner_screen">
                    <div class="toHideSec horizontal_half left top">
                        <div class="slide_sec right_to_left prev_left transRight">
                            <div class="flip-image-wrapper flip-left">
                                <div class="flip-image">
                                    <div class="front">
                                        <?php
                                        $images = acf_photo_gallery('screen_10_images', $post->ID);
                                        if (count($images)):
                                            $id = $image['id'];
                                            $image  = $images[0];
                                            $title = $image['title'];
                                            $caption = $image['caption'];
                                            $full_image_url = $image['full_image_url'];
                                        ?>
                                            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <div class="image-container">
                                                <div class="arrow">➔</div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="overlay_text">
                                            <div class="slide_sec left_to_right prev_left transRight transRight bg_col10 center_txt" style="background-color:<?php the_field('screen10_text_background_color') ?>;">
                                                <div class="bounce_effect_old">
                                                    <h3>
                                                        <?php the_field('screen_10_title') ?>
                                                    </h3>
                                                    <p>
                                                        <?php the_field('screen_10_text') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="back light" style="background-color:<?php the_field('screen10_text_background_color') ?>;">
                                        <?php
                                        $images = acf_photo_gallery('screen_10_images', $post->ID);
                                        if (count($images)):
                                            $id = $image['id'];
                                            $image  = $images[0];
                                            $title = $image['title'];
                                            $caption = $image['caption'];
                                            $full_image_url = $image['full_image_url'];
                                        ?>
                                            <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                        <?php endif; ?>
                                        <div class="flip-text-outer center_txt">
                                            <a class="close-flip">
                                            </a>
                                            <h3>
                                                <?php the_field('screen_10_title') ?>
                                            </h3>
                                            <p><?php the_field('screen_10_image_1_background_text') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal_half right top">
                        <div class="vertical_half right top">
                            <div class="slide_sec left_to_right prev_left transRight transRight bg_col10 center_txt" style="background-color:<?php the_field('screen10_text_background_color') ?>;">
                                <div class="bounce_effect_old">
                                    <h3>
                                        <?php the_field('screen_10_title') ?>
                                    </h3>
                                    <p>
                                        <?php the_field('screen_10_text') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half right bottom">
                            <div class="slide_sec left_to_right prev_left transRight ">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_10_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[1];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec left_to_right prev_left transRight transRight bg_col10 center_txt" style="background-color:<?php the_field('screen10_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_10_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_10_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back dark" style="background-color:<?php the_field('screen10_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_10_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[1];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_10_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_10_image_2_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- screen 10 end here -->
            <!-- screen 11 start here -->
            <div class="Screens homeScreens ">
                <div class="inner_screen">
                    <div class="toHideSec horizontal_half left top">
                        <div class="vertical_half left top">
                            <div class="slide_sec right_to_left prev_right transRight">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_11_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[0];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec right_to_left prev_right transRight bg_col11 center_txt" style="background-color:<?php the_field('screen11_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_11_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_11_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back light" style="background-color:<?php the_field('screen11_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_11_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[0];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_11_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_11_image_1_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half left bottom">
                            <div class="slide_sec right_to_left prev_right transRight">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_11_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[1];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec right_to_left prev_right transRight bg_col11 center_txt" style="background-color:<?php the_field('screen11_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_11_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_11_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back dark" style="background-color:<?php the_field('screen11_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_11_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[1];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_11_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_11_image_2_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal_half right top">
                        <div class="vertical_half right top">
                            <div class="slide_sec right_to_left prev_right transRight bg_col11 center_txt" style="background-color:<?php the_field('screen11_text_background_color') ?>;">
                                <div class="bounce_effect_old">
                                    <h3>
                                        <?php the_field('screen_11_title') ?>
                                    </h3>
                                    <p>
                                        <?php the_field('screen_11_text') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half right bottom">
                            <div class="slide_sec right_to_left prev_right transRight">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_11_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[2];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec right_to_left prev_right transRight bg_col11 center_txt" style="background-color:<?php the_field('screen11_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_11_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_11_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back xsdark" style="background-color:<?php the_field('screen11_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_11_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[2];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_11_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_11_image_3_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- screen 11 end here -->
            <!-- screen 12 start here -->
            <div class="Screens homeScreens ">
                <div class="inner_screen">
                    <div class="horizontal_half left top">
                        <div class="vertical_half left top">
                            <div class="slide_sec left_to_right prev_right transRight bg_col12 center_txt" style="background-color:<?php the_field('screen12_text_background_color') ?>;">
                                <div class="bounce_effect_old">
                                    <h3>
                                        <?php the_field('screen_12_title') ?>
                                    </h3>
                                    <p>
                                        <?php the_field('screen_12_text') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half left bottom">
                            <div class="slide_sec left_to_right prev_right transRight">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_12_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[0];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec left_to_right prev_right transRight bg_col12 center_txt" style="background-color:<?php the_field('screen12_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_12_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_12_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back dark" style="background-color:<?php the_field('screen12_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_12_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[0];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_12_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_12_image_1_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="toHideSec horizontal_half right top">
                        <div class="vertical_half right top">
                            <div class="slide_sec left_to_right prev_left transRight bg_col12">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_12_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[1];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec left_to_right prev_right transRight bg_col12 center_txt" style="background-color:<?php the_field('screen12_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_12_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_12_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back light" style="background-color:<?php the_field('screen12_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_12_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[1];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_12_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_12_image_2_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half right bottom">
                            <div class="slide_sec left_to_right prev_left transRight">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_12_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[2];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec left_to_right prev_right transRight bg_col12 center_txt" style="background-color:<?php the_field('screen12_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_12_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_12_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back xsdark" style="background-color:<?php the_field('screen12_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_12_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[2];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_12_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_12_image_3_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- screen 12 end here -->
            <!-- screen 13 start here -->
            <div class="Screens homeScreens ">
                <div class="inner_screen">
                    <div class="toHideSec horizontal_half left top">
                        <div class="slide_sec left_to_right prev_bottom">
                            <div class="video">
                                <video id="video4" class="videoPlay" preload="auto" muted="" playsinline="1" autoplay="autoplay">
                                    <?php $file_array = get_field('screen11_video'); ?>
                                    <source src="<?php echo $file_array['url']; ?>">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal_half right top">
                        <div class="vertical_half right top">
                            <div class="slide_sec right_to_left prev_left transRight bg_col13 center_txt" style="background-color:<?php the_field('screen13_text_background_color') ?>;">
                                <div class="bounce_effect_old">
                                    <h3>
                                        <?php the_field('screen_13_title') ?>
                                    </h3>
                                    <p>
                                        <?php the_field('screen_13_text') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vertical_half right bottom">
                            <div class="slide_sec right_to_left prev_left transRight">
                                <div class="flip-image-wrapper flip-left">
                                    <div class="flip-image">
                                        <div class="front">
                                            <?php
                                            $images = acf_photo_gallery('screen_13_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[0];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                                <div class="image-container">
                                                    <div class="arrow">➔</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="overlay_text">
                                                <div class="slide_sec right_to_left prev_left transRight bg_col13 center_txt" style="background-color:<?php the_field('screen13_text_background_color') ?>;">
                                                    <div class="bounce_effect_old">
                                                        <h3>
                                                            <?php the_field('screen_13_title') ?>
                                                        </h3>
                                                        <p>
                                                            <?php the_field('screen_13_text') ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back light" style="background-color:<?php the_field('screen13_text_background_color') ?>;">
                                            <?php
                                            $images = acf_photo_gallery('screen_13_images', $post->ID);
                                            if (count($images)):
                                                $id = $image['id'];
                                                $image  = $images[0];
                                                $title = $image['title'];
                                                $caption = $image['caption'];
                                                $full_image_url = $image['full_image_url'];
                                            ?>
                                                <img class="overlay-image" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <div class="flip-text-outer center_txt">
                                                <a class="close-flip">
                                                </a>
                                                <h3>
                                                    <?php the_field('screen_13_title') ?>
                                                </h3>
                                                <p><?php the_field('screen_13_image_1_background_text') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- screen 13 end here -->

            <!-- screen 15 start here -->
            <?php
            $wpb_all_query = new WP_Query(array(
                'post_type' => 'caseStudies',
                'post_status' => 'publish',
                'posts_per_page' => 1,
                'orderby' => 'title',
                'meta_query' => array(
                    array(
                        'key'     => 'show_on_homepage',
                        'value'   => 'Yes',
                        'compare' => '=',
                    ),
                ),
                'order' => 'ASC',
            )); ?>
            <?php if ($wpb_all_query->have_posts()):
                while ($wpb_all_query->have_posts()):
                    $wpb_all_query->the_post();
                    if (has_post_thumbnail($post->ID)) :
                        $imageInfo = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                        $imageUrl = $imageInfo[0];
                    else:
                        $imageUrl = get_stylesheet_directory_uri() . '/images/no_img.png';
                    endif;
            ?>
                    <?php $do_not_duplicate[] = $post->ID; ?>
                    <?php
                    $use_case_id = get_the_ID(); // Or any specific ID for your use case
                    $permalink_url = esc_url(get_permalink($use_case_id));
                    ?>
                    <div class="Screens prev_fix caseStudiesScreen" id="<?php the_id(); ?>">
                        <div class="inner_screen">
                            <a onclick="openPopup('<?php echo esc_js(urldecode($permalink_url)); ?>')" class="center_down_arrow nextBtn">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right-circleNEWNEW.svg">
                            </a>
                            <div class="horizontal_half left top hover-link">
                                <div class="slide_sec top_to_bottom prev_right transTop">
                                    <img src="<?php echo $imageUrl; ?>" alt="<?php the_title(); ?>">
                                    <!-- <div class="overlay_text">
                                        <a class="svg_outer" onclick="openPopup('<?php // echo esc_js(urldecode($permalink_url)); 
                                                                                    ?>')">
                                            <svg>
                                                <use xlink:href=" <?php // echo get_stylesheet_directory_uri(); 
                                                                    ?>/images/arrow-link.svg#link-svg" />
                                        </svg>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="horizontal_half right top">
                                <div class="slide_sec right_to_left prev_right bg_col15 center_txt transBottom" style="background-color:<?php the_field('text_background_color') ?>;">
                                    <div class="bounce_effect_old">
                                        <h3>
                                            <?php the_title(); ?>
                                        </h3>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <!-- screen 15 end here -->
            <!-- screen 16 start here -->
            <?php
            $wpb_all_query = new WP_Query(array(
                'post_type' => 'caseStudies',
                'post_status' => 'publish',
                'posts_per_page' => 1,
                'orderby' => 'title',
                'meta_query' => array(
                    array(
                        'key'     => 'show_on_homepage',
                        'value'   => 'Yes',
                        'compare' => '=',
                    ),
                ),
                'order' => 'ASC',
                'post__not_in' => $do_not_duplicate,
            )); ?>
            <?php if ($wpb_all_query->have_posts()):
                while ($wpb_all_query->have_posts()):
                    $wpb_all_query->the_post();
                    if (has_post_thumbnail($post->ID)) :
                        $imageInfo = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                        $imageUrl = $imageInfo[0];
                    else:
                        $imageUrl = get_stylesheet_directory_uri() . '/images/no_img.png';
                    endif;
            ?>
                    <?php $do_not_duplicate[] = $post->ID; ?>
                    <?php
                    $use_case_id = get_the_ID(); // Or any specific ID for your use case
                    $permalink_url = esc_url(get_permalink($use_case_id));
                    ?>
                    <div class="Screens prev_fix" id="<?php the_id(); ?>">
                        <div class="inner_screen">
                            <a onclick="openPopup('<?php echo esc_js(urldecode($permalink_url)); ?>')" class="center_down_arrow nextBtn">
                                <img class="animate-cs-right" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right-circleNEWNEW.svg">
                                <!--                        <img src="--><?php //echo get_stylesheet_directory_uri(); 
                                                                            ?><!--/images/circle.png"> -->
                            </a>
                            <div class="horizontal_half left top">
                                <div class="slide_sec left_to_right prev_left bg_col16 center_txt transLeft" style="background-color:<?php the_field('text_background_color') ?>;">
                                    <div class="bounce_effect_old">
                                        <h3>
                                            <?php the_title(); ?>
                                        </h3>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="horizontal_half right top hover-link">
                                <div class="slide_sec left_to_right prev_left transRight">
                                    <img src="<?php echo $imageUrl; ?>" alt="<?php the_title(); ?>">
                                    <!-- <div class="overlay_text">
                                        <a class="svg_outer" onclick="openPopup('<?php // echo esc_js(urldecode($permalink_url)); 
                                                                                    ?>')"">
                                            <svg>
                                                <use xlink:href="<?php // echo get_stylesheet_directory_uri(); 
                                                                    ?>/images/arrow-link.svg#link-svg" />
                                            </svg>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <!-- screen 16 end here -->
            <!-- screen 17 start here -->
            <?php
            $wpb_all_query = new WP_Query(array(
                'post_type' => 'caseStudies',
                'post_status' => 'publish',
                'posts_per_page' => 1,
                'orderby' => 'title',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key'     => 'show_on_homepage',
                        'value'   => 'Yes',
                        'compare' => '=',
                    ),
                ),
                'post__not_in' => $do_not_duplicate,
            )); ?>
            <?php if ($wpb_all_query->have_posts()):
                while ($wpb_all_query->have_posts()):
                    $wpb_all_query->the_post();
                    if (has_post_thumbnail($post->ID)) :
                        $imageInfo = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                        $imageUrl = $imageInfo[0];
                    else:
                        $imageUrl = get_stylesheet_directory_uri() . '/images/no_img.png';
                    endif;
            ?>
                    <?php $do_not_duplicate[] = $post->ID; ?>
                    <?php
                    $use_case_id = get_the_ID(); // Or any specific ID for your use case
                    $permalink_url = esc_url(get_permalink($use_case_id));
                    ?>
                    <div class="Screens prev_fix" id="<?php the_id(); ?>">
                        <div class="inner_screen">
                            <a onclick="openPopup('<?php echo esc_js(urldecode($permalink_url)); ?>')" class="center_down_arrow nextBtn">

                                <img class="animate-cs-right" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right-circleNEWNEW.svg">
                                <!--                        <img src="--><?php //echo get_stylesheet_directory_uri(); 
                                                                            ?><!--/images/circle.png"> -->
                            </a>
                            <div class="horizontal_half left top hover-link">
                                <div class="slide_sec right_to_left prev_left transBottom">
                                    <img src="<?php echo $imageUrl; ?>" alt="<?php the_title(); ?>">
                                    <!-- <div class="overlay_text">
                                        <a class="svg_outer" onclick="openPopup('<?php // echo esc_js(urldecode($permalink_url)); 
                                                                                    ?>')"">
                                            <svg>
                                                <use xlink:href="<?php // echo get_stylesheet_directory_uri(); 
                                                                    ?>/images/arrow-link.svg#link-svg" />
                                            </svg>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="horizontal_half right top">
                                <div class="slide_sec right_to_left prev_top bg_col17 center_txt transTop" style="background-color:<?php the_field('text_background_color') ?>;">
                                    <div class="bounce_effect_old">
                                        <h3>
                                            <?php the_title(); ?>
                                        </h3>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <!-- screen 17 end here -->
            <!-- screen 18 start here -->
            <?php
            $wpb_all_query = new WP_Query(array(
                'post_type' => 'caseStudies',
                'post_status' => 'publish',
                'posts_per_page' => 1,
                'orderby' => 'title',
                'meta_query' => array(
                    array(
                        'key'     => 'show_on_homepage',
                        'value'   => 'Yes',
                        'compare' => '=',
                    ),
                ),
                'order' => 'ASC',
                'post__not_in' => $do_not_duplicate,
            )); ?>
            <?php if ($wpb_all_query->have_posts()):
                while ($wpb_all_query->have_posts()):
                    $wpb_all_query->the_post();
                    if (has_post_thumbnail($post->ID)) :
                        $imageInfo = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                        $imageUrl = $imageInfo[0];
                    else:
                        $imageUrl = get_stylesheet_directory_uri() . '/images/no_img.png';
                    endif;
            ?>
                    <?php $do_not_duplicate[] = $post->ID; ?>
                    <?php
                    $use_case_id = get_the_ID(); // Or any specific ID for your use case
                    $permalink_url = esc_url(get_permalink($use_case_id));
                    ?>
                    <div class="Screens prev_fix" id="<?php the_id(); ?>">
                        <div class="inner_screen">
                            <a onclick="openPopup('<?php echo esc_js(urldecode($permalink_url)); ?>')" class="center_down_arrow nextBtn">
                                <img class="animate-cs-right" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right-circleNEWNEW.svg">
                                <!--                        <img src="--><?php //echo get_stylesheet_directory_uri(); 
                                                                            ?><!--/images/circle.png"> -->
                            </a>
                            <div class="horizontal_half left top">
                                <div class="slide_sec right_to_left prev_right transRight bg_col18 center_txt prev_fix" style="background-color:<?php the_field('text_background_color') ?>;">
                                    <div class="bounce_effect_old">
                                        <h3>
                                            <?php the_title(); ?>
                                        </h3>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="horizontal_half right top hover-link">
                                <div class="slide_sec bottom_to_top prev_right transRight prev_fix">
                                    <img src="<?php echo $imageUrl; ?>" alt="<?php the_title(); ?>">
                                    <!-- <div class="overlay_text">
                                        <a class="svg_outer" onclick="openPopup('<?php // echo esc_js(urldecode($permalink_url)); 
                                                                                    ?>')"">
                                            <svg>
                                                <use xlink:href="<?php // echo get_stylesheet_directory_uri(); 
                                                                    ?>/images/arrow-link.svg#link-svg" />
                                            </svg>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <!-- screen 18 end here -->
            <!-- screen 19 start here -->
            <?php
            $wpb_all_query = new WP_Query(array(
                'post_type' => 'caseStudies',
                'post_status' => 'publish',
                'posts_per_page' => 1,
                'orderby' => 'title',
                'meta_query' => array(
                    array(
                        'key'     => 'show_on_homepage',
                        'value'   => 'Yes',
                        'compare' => '=',
                    ),
                ),
                'order' => 'ASC',
                'post__not_in' => $do_not_duplicate,
            )); ?>
            <?php if ($wpb_all_query->have_posts()):
                while ($wpb_all_query->have_posts()):
                    $wpb_all_query->the_post();
                    if (has_post_thumbnail($post->ID)) :
                        $imageInfo = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                        $imageUrl = $imageInfo[0];
                    else:
                        $imageUrl = get_stylesheet_directory_uri() . '/images/no_img.png';
                    endif;
            ?>
                    <?php $do_not_duplicate[] = $post->ID; ?>
                    <?php
                    $use_case_id = get_the_ID(); // Or any specific ID for your use case
                    $permalink_url = esc_url(get_permalink($use_case_id));
                    ?>
                    <div class="Screens prev_fix" id="<?php the_id(); ?>">
                        <div class="inner_screen">
                            <a onclick="openPopup('<?php echo esc_js(urldecode($permalink_url)); ?>')" class="center_down_arrow nextBtn">
                                <img class="animate-cs-right" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right-circleNEWNEW.svg">
                                <!--                        <img src="--><?php //echo get_stylesheet_directory_uri(); 
                                                                            ?><!--/images/circle.png"> -->
                            </a>
                            <div class="horizontal_half left top hover-link">
                                <div class="slide_sec left_to_right prev_fix transTop">
                                    <img src="<?php echo $imageUrl; ?>" alt="<?php the_title(); ?>">
                                    <!-- <div class="overlay_text">
                                        <a class="svg_outer" onclick="openPopup('<?php // echo esc_js(urldecode($permalink_url)); 
                                                                                    ?>')"">
                                            <svg>
                                                <use xlink:href="<?php // echo get_stylesheet_directory_uri(); 
                                                                    ?>/images/arrow-link.svg#link-svg" />
                                            </svg>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="horizontal_half right top">
                                <div class="slide_sec left_to_right prev_fix bg_col19 center_txt transBottom" style="background-color:<?php the_field('text_background_color') ?>;">
                                    <div class="bounce_effect_old">
                                        <h3>
                                            <?php the_title(); ?>
                                        </h3>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <!-- screen 19 end here -->
            <!-- screen 20 start here -->
            <?php
            $wpb_all_query = new WP_Query(array(
                'post_type' => 'caseStudies',
                'post_status' => 'publish',
                'posts_per_page' => 1,
                'orderby' => 'title',
                'meta_query' => array(
                    array(
                        'key'     => 'show_on_homepage',
                        'value'   => 'Yes',
                        'compare' => '=',
                    ),
                ),
                'order' => 'ASC',
                'post__not_in' => $do_not_duplicate,
            )); ?>
            <?php if ($wpb_all_query->have_posts()):
                while ($wpb_all_query->have_posts()):
                    $wpb_all_query->the_post();
                    if (has_post_thumbnail($post->ID)) :
                        $imageInfo = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                        $imageUrl = $imageInfo[0];
                    else:
                        $imageUrl = get_stylesheet_directory_uri() . '/images/no_img.png';
                    endif;
            ?>
                    <?php $do_not_duplicate[] = $post->ID; ?>
                    <?php
                    $use_case_id = get_the_ID(); // Or any specific ID for your use case
                    $permalink_url = esc_url(get_permalink($use_case_id));
                    ?>
                    <div class="Screens prev_fix" id="<?php the_id(); ?>">
                        <div class="inner_screen">
                            <a onclick="openPopup('<?php echo esc_js(urldecode($permalink_url)); ?>')" class="center_down_arrow nextBtn">
                                <img class="animate-cs-right" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right-circleNEWNEW.svg">
                                <!--                        <img src="--><?php //echo get_stylesheet_directory_uri(); 
                                                                            ?><!--/images/circle.png"> -->
                            </a>
                            <div class="horizontal_half left top">
                                <div class="slide_sec right_to_left transBottom prev_fix bg_col20 center_txt" style="background-color:<?php the_field('text_background_color') ?>;">
                                    <div class="bounce_effect_old">
                                        <h3>
                                            <?php the_title(); ?>
                                        </h3>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="horizontal_half right top hover-link">
                                <div class="slide_sec right_to_left transTop prev_fix">
                                    <img src="<?php echo $imageUrl; ?>" alt="<?php the_title(); ?>">
                                    <!-- <div class="overlay_text">
                                        <a class="svg_outer" onclick="openPopup('<?php // echo esc_js(urldecode($permalink_url)); 
                                                                                    ?>')"">
                                            <svg>
                                                <use xlink:href="<?php // echo get_stylesheet_directory_uri(); 
                                                                    ?>/images/arrow-link.svg#link-svg" />
                                            </svg>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <!-- screen 20 end here -->
            <!-- screen 14 start here -->
            <div class="Screens prev_fix ">
                <div class="inner_screen">
                    <div class="horizontal_half left top  hover-link">
                        <div class="slide_sec left_to_right prev_fix transRight">
                            <div class="video">
                                <video id="video4" class="videoPlay" preload="auto" muted="" playsinline="1" autoplay="autoplay">
                                    <?php $file_array = get_field('last_screen_video'); ?>
                                    <source src="<?php echo $file_array['url']; ?>">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal_half right top">
                        <a href="<?php the_field('section_14_url'); ?>" class="center_down_arrow nextBtn">
                            <img class="animate-cs-right" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right-circleNEWNEW.svg">
                            <!--                            <img src="--><?php //echo get_stylesheet_directory_uri(); 
                                                                            ?><!--/images/circle.png"> -->
                        </a>
                        <div class="slide_sec right_to_left prev_fix bg_col14 center_txt transRight" style="background-color:<?php the_field('screen14_text_background_color') ?>;">
                            <div class="bounce_effect_old">
                                <h3>
                                    <?php the_field('screen_14_title') ?>
                                </h3>
                                <p>
                                    <?php the_field('screen_14_text') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- screen 14 end here -->
            <!--screen 21 start here -->
            <!--        <div class="Screens homeScreens ">
                <div class="inner_screen">
                    <div class="horizontal_half horizontal-full left top"> 
                        <div class="slide_sec bottom_to_top prev_left">
                            <div class="video">
                                <video id="video0" preload="auto" muted="" playsinline="1" autoplay="autoplay" width='1920'>
                                        <?php $file_array // = //get_field('last_screen_video'); 
                                        ?>
                                    <source src="<?php //echo $file_array['url']; 
                                                    ?>">
                                </video>
                            </div>
                        </div> 
                    </div> 
                </div>
            </div> -->
            <!--screen 21 end here -->
        </div>
    </div>
</div>

<!-- modal view -->
<iframe id="popupFrame" src="" frameborder="0"></iframe>
<button id="closeButton" onclick="closePopup()">✖</button>

<?php get_footer(); ?>

<script>
    function showCloseButton() {
        const closeButton = document.getElementById('closeButton');
        if (closeButton) {
            closeButton.classList.add('show-close-button'); // Add the class to show the button
        }
    }

    function openPopup(url) {
        console.log("Opening Popup with URL:", url);

        if (!url) {
            console.error("Invalid URL passed to openPopup");
            return;
        }

        const iframe = document.getElementById('popupFrame');
        iframe.src = url;
        iframe.style.display = 'block';
        iframe.style.zIndex = "999999";

        setTimeout(() => {
            showCloseButton();
        }, 500);

        const closeButton = document.getElementById('closeButton');
        // closeButton.style.display = 'block';
    }

    // Function to open popup
    // function openPopup(url) {
    //     console.log("Opening Popup with URL:", url);

    //     if (!url) {
    //         console.error("Invalid URL passed to openPopup");
    //         return;
    //     }

    //     const iframe = document.getElementById('popupFrame');
    //     iframe.src = url;
    //     iframe.style.display = 'block';

    //     const closeButton = document.getElementById('closeButton');
    //     closeButton.style.display = 'block';
    // }

    // // Function to close the popup
    // function closePopup() {
    //     const iframe = document.getElementById('popupFrame');
    //     iframe.style.display = 'none';

    //     const closeButton = document.getElementById('closeButton');
    //     closeButton.style.display = 'none';

    //     // Clear the iframe src to prevent memory leaks
    //     iframe.src = '';
    // }

    function closePopup() {
        const iframe = document.getElementById('popupFrame');
        iframe.style.display = 'none';

        const closeButton = document.getElementById('closeButton');

        if (closeButton) {
            console.log("closeButton exists");
            closeButton.classList.remove('show-close-button'); // Remove the class
        }

        // Clear the iframe src to prevent memory leaks
        iframe.src = '';
    }

    // Function to ensure popup opens when the icon is clicked
    function setupPopupListener() {
        const popupLinks = document.querySelectorAll('.svg_outer');

        popupLinks.forEach(link => {
            // Ensure no duplicate event listeners
            link.removeEventListener('click', handlePopupClick);

            // Attach the click event listener
            link.addEventListener('click', handlePopupClick);
        });
    }

    // Event handler for popup links
    function handlePopupClick(event) {
        event.preventDefault();
        const url = this.getAttribute('data-url'); // Retrieve URL from the `data-url` attribute
        openPopup(url);
    }

    function handleScreenTransition() {
        const Screens = document.querySelectorAll('.Screens');

        Screens.forEach(screen => {
            screen.addEventListener('transitionend', function() {
                setupPopupListener(); // Re-setup listeners if needed after transitions
            });
        });
    }

    // Initialize everything on DOMContentLoaded
    document.addEventListener('DOMContentLoaded', function() {
        setupPopupListener();
        handleScreenTransition();

        // Close button listener
        document.getElementById('closeButton').addEventListener('click', closePopup);
    });

    // for flip functionality

    jQuery(document).ready(function($) {
        // Flip to back when arrow is clicked
        $('.arrow').on('click', function() {
            $(this).closest('.flip-image-wrapper').addClass('flip-active');
        });


        // Flip back to front when close button is clicked
        $('.close-flip').on('click', function() {
            $(this).closest('.flip-image-wrapper').removeClass('flip-active');
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const textElements = [
            "<?php echo get_field('screen_1_dynamic_text_1'); ?>",
            "<?php echo get_field('screen_1_dynamic_text_2'); ?>",
            "<?php echo get_field('screen_1_dynamic_text_3'); ?>"
        ];

        const dynamicTextContainer = document.getElementById('dynamicText');
        let currentTextIndex = 0;

        function typeText(text, callback) {
            let i = 0;
            dynamicTextContainer.textContent = '';
            const interval = setInterval(() => {
                if (i < text.length) {
                    dynamicTextContainer.textContent += text.charAt(i);
                    i++;
                } else {
                    clearInterval(interval);
                    setTimeout(() => {
                        callback(); // Proceed to the next text
                    }, 1500); // Wait before removing text
                }
            }, 100); // Typing speed
        }

        function removeText(callback) {
            let text = dynamicTextContainer.textContent;
            let i = text.length - 1;
            const interval = setInterval(() => {
                if (i >= 0) {
                    dynamicTextContainer.textContent = text.substring(0, i);
                    i--;
                } else {
                    clearInterval(interval);
                    callback(); // Proceed to the next text
                }
            }, 50); // Removing speed
        }

        function cycleTexts() {
            typeText(textElements[currentTextIndex], () => {
                removeText(() => {
                    currentTextIndex = (currentTextIndex + 1) % textElements.length;
                    cycleTexts();
                });
            });
        }

        cycleTexts(); // Start the typing animation
    });
</script>