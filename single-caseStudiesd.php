<?php
/**
 * The main template file
*/
    get_header();
?>

<style>
    header , header nav.navbar.navbar-expand-md .container , iframe header {
        display: none !important;
        z-index: -9999 !important;
    }
</style>

<div data-barba="container">
    <div class="preloader js-preloader flex-center"> 
      <div>
        <div class="spinner"></div>
      </div>  
    </div>
    <div style="z-index: 9999999;
    position: fixed;
    left: 0;
    right: 0;">dddd</div>
    <input type="hidden" id="TextVal" value="0">
    <input type="hidden" id="TextStop" value="1">
    <button class="down_arrow" id="nextBtnText" onclick="nextBtnFunction(this)">
        <svg id="m_h" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 165.6 165.6">
            <defs>
                <style>
                .cls-1 {
                    fill: none;
                    stroke: #fff;
                    stroke-miterlimit: 10;
                    stroke-width: 9px;
                }
                </style>
            </defs>&lt;<path id="m_a" class="cls-1" d="M84,5.7A78.3,78.3,0,1,1,5.7,84,78.3,78.3,0,0,1,84,5.7" data-svg-origin="0 0" style="transform-origin: 0px 0px 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -1.2, -1.2, 0, 1); stroke-dasharray: none; stroke-dashoffset: 1e-05;"></path>
            <g id="m_g" data-svg-origin="0 0" style="transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);">
                <line id="a_1" class="cls-1" x1="82.64" y1="128.52" x2="82.64" y2="34.52" style="stroke-dasharray: none; stroke-dashoffset: 1e-05;"></line>
                <line id="a_2" class="cls-1" x1="79.8" y1="134.54" x2="128.65" y2="85.69" style="stroke-dasharray: none; stroke-dashoffset: 1e-05;"></line>
                <line id="a_3" class="cls-1" x1="85.8" y1="134.54" x2="36.94" y2="85.69" style="stroke-dasharray: none; stroke-dashoffset: 1e-05;"></line>
            </g>
        </svg>
    </button>
    <div id="home_page" class="activeHomeScreen singlePageScreen">
        <!-- screen 1 start here -->
        <div class="Screens single_screen_1 active homeScreen active_screen ">
            <div class="single_inner_screen">
                <div class="slide_sec left_to_right prev_right screen1left">
                    <div class="carousel_outer text-center">
                        <?php 
                            $images = acf_photo_gallery('screen_1_images', $post->ID); 
                            if( count($images) ):  
                                $id = $image['id']; 
                                $image  = $images[0];
                                $title = $image['title']; 
                                $caption= $image['caption']; 
                                $full_image_url= $image['full_image_url'];    
                            ?>
                        <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                        <?php endif; ?>
                        <h2>
                            <?php the_field('screen1_slide2_title')?>
                        </h2>
                        <p>
                            <?php the_field('screen1_slide2_text')?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- screen 1 end here -->
        <!-- screen 2 start here -->
        <div class="Screens single_screen_2">
            <div class="single_inner_screen">
                <div class="horizontal_half left top">
                    <div class="vertical_half right top">
                        <div class="slide_sec left_to_right prev_right center_txt bg_black screen1left" style="background-color:<?php the_field('screen2_text_background_color')?>;">
                            <div class="bounce_effect">
                                <h3>
                                    <?php the_field('screen_2_title')?>
                                </h3>
                                <p>
                                    <?php the_field('screen_2_text')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="vertical_half right bottom">
                        <div class="slide_sec left_to_right prev_right screen1left">
                            <?php 
                            $images = acf_photo_gallery('screen_2_images', $post->ID); 
                            if( count($images) ):  
                                $id = $image['id']; 
                                $image  = $images[0];
                                $title = $image['title']; 
                                $caption= $image['caption']; 
                                $full_image_url= $image['full_image_url'];    
                            ?>
                            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                            <?php endif; ?>
                            <div class="overlay_text">
                                <div class="svg_outer">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 168 168" enable-background="new 0 0 168 168" xml:space="preserve" style="transform: matrix3d(0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);">
                                        <g id="Layer_2"></g>
                                        <g id="Layer_1">
                                            <polygon fill="#231F20" points="133,79 89,79 89,35 79,35 79,79 35,79 35,89 79,89 79,133 89,133 89,89 133,89 "></polygon>
                                            <path fill="#231F20" d="M84,10c40.8,0,74,33.2,74,74s-33.2,74-74,74s-74-33.2-74-74S43.2,10,84,10 M84,0C37.61,0,0,37.61,0,84s37.61,84,84,84s84-37.61,84-84S130.39,0,84,0L84,0z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="horizontal_half right top ">
                    <div class="slide_sec right_to_left prev_left screen1">
                        <?php 
                            $images = acf_photo_gallery('screen_2_images', $post->ID); 
                            if( count($images) ):  
                                $id = $image['id']; 
                                $image  = $images[1];
                                $title = $image['title']; 
                                $caption= $image['caption']; 
                                $full_image_url= $image['full_image_url'];    
                            ?>
                        <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                        <?php endif; ?>
                        <div class="overlay_text">
                            <div class="svg_outer">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 168 168" enable-background="new 0 0 168 168" xml:space="preserve" style="transform: matrix3d(0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);">
                                    <g id="Layer_2"></g>
                                    <g id="Layer_1">
                                        <polygon fill="#231F20" points="133,79 89,79 89,35 79,35 79,79 35,79 35,89 79,89 79,133 89,133 89,89 133,89 "></polygon>
                                        <path fill="#231F20" d="M84,10c40.8,0,74,33.2,74,74s-33.2,74-74,74s-74-33.2-74-74S43.2,10,84,10 M84,0C37.61,0,0,37.61,0,84s37.61,84,84,84s84-37.61,84-84S130.39,0,84,0L84,0z"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- screen 3 end here -->
        <div class="Screens single_screen_3">
            <div class="single_inner_screen">
                <div class="horizontal_half right top ">
                    <div class="slide_sec right_to_left prev_left screen1">
                        <?php 
                            $images = acf_photo_gallery('screen_2_images', $post->ID); 
                            if( count($images) ):  
                                $id = $image['id']; 
                                $image  = $images[1];
                                $title = $image['title']; 
                                $caption= $image['caption']; 
                                $full_image_url= $image['full_image_url'];    
                            ?>
                        <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                        <?php endif; ?>
                        <div class="overlay_text">
                            <div class="svg_outer">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 168 168" enable-background="new 0 0 168 168" xml:space="preserve" style="transform: matrix3d(0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);">
                                    <g id="Layer_2"></g>
                                    <g id="Layer_1">
                                        <polygon fill="#231F20" points="133,79 89,79 89,35 79,35 79,79 35,79 35,89 79,89 79,133 89,133 89,89 133,89 "></polygon>
                                        <path fill="#231F20" d="M84,10c40.8,0,74,33.2,74,74s-33.2,74-74,74s-74-33.2-74-74S43.2,10,84,10 M84,0C37.61,0,0,37.61,0,84s37.61,84,84,84s84-37.61,84-84S130.39,0,84,0L84,0z"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="horizontal_half left top">
                    <div class="vertical_half right top">
                        <div class="slide_sec left_to_right prev_right center_txt bg_black screen1left" style="background-color:<?php the_field('screen2_text_background_color')?>;">
                            <div class="bounce_effect">
                                <h3>
                                    <?php the_field('screen_2_title')?>
                                </h3>
                                <p>
                                    <?php the_field('screen_2_text')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="vertical_half right bottom">
                        <div class="slide_sec left_to_right prev_right screen1left">
                            <?php 
                            $images = acf_photo_gallery('screen_2_images', $post->ID); 
                            if( count($images) ):  
                                $id = $image['id']; 
                                $image  = $images[0];
                                $title = $image['title']; 
                                $caption= $image['caption']; 
                                $full_image_url= $image['full_image_url'];    
                            ?>
                            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                            <?php endif; ?>
                            <div class="overlay_text">
                                <div class="svg_outer">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 168 168" enable-background="new 0 0 168 168" xml:space="preserve" style="transform: matrix3d(0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);">
                                        <g id="Layer_2"></g>
                                        <g id="Layer_1">
                                            <polygon fill="#231F20" points="133,79 89,79 89,35 79,35 79,79 35,79 35,89 79,89 79,133 89,133 89,89 133,89 "></polygon>
                                            <path fill="#231F20" d="M84,10c40.8,0,74,33.2,74,74s-33.2,74-74,74s-74-33.2-74-74S43.2,10,84,10 M84,0C37.61,0,0,37.61,0,84s37.61,84,84,84s84-37.61,84-84S130.39,0,84,0L84,0z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- screen 3 end here -->
    </div>
</div>
<?php 
    get_footer();
?>