<?php /* Template Name: Detail Page */
get_header(); ?>
<div data-barba="container" data-barba-namespace="" data-background="">
    <div class="content">
        <div class="signleCloseBtn">
            <a href="<?php echo site_url(); ?>?id=<?php echo the_id(); ?>">
                <!-- <svg class="icon">
                    <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/close.svg#icon" />
                </svg> -->
                <span></span>
                <span></span>
            </a>
        </div>
        <input type="hidden" id="TextVal" value="0">
        <input type="hidden" id="TextStop" value="1">
        <div class="up-down-buttons" >
            <button class="down_arrow" id="nextBtnText" onclick="nextBtnFunction(this)">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right-circleNEWNEW.svg" alt="Next Button">
            </button>
            <button class="down_arrow" id="prevBtnText" onclick="prevBtnFunction(this)">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right-circleNEWNEW.svg" alt="Previous Button">
            </button>
        </div>
        <div id="home_page" class="activeHomeScreen singleLastBtnHide singlePageLoader">
            <!-- screen 1 start here -->
            <div class="Screens active homeScreen active_screen">
                <div class="slide_sec">
                    <div class="singlePage carousel_outer text-center csTextPd">
                        <?php
                        $images = acf_photo_gallery('screen1_image', $post->ID);
                        if (count($images)):
                            $id = $image['id'];
                            $image  = $images[0];
                            $title = $image['title'];
                            $caption = $image['caption'];
                            $full_image_url = $image['full_image_url'];
                        ?>
                            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                        <?php endif; ?>
                        <h2>
                            <?php the_field('screen1_title') ?>
                        </h2>
                        <p>
                            <?php the_field('screen1_text') ?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- screen 1 end here -->
            <?php
            $Screen2 = get_field("show_screen_2");
            ?>
            <?php if ($Screen2  == 'Yes') : ?>
                <!-- screen 2 start here -->
                <div class="Screens">
                    <div class="inner_screen">
                        <div class="horizontal_half left top">
                            <div class="vertical_half right top">
                                <div class="slide_sec left_to_right prev_fix bg_col6 center_txt" style="background-color:<?php the_field('screen2_text_background_color') ?>;">
                                    <div class="bounce_effect">
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
                                <div class="slide_sec left_to_right prev_fix  ">
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
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="horizontal_half right top">
                            <div class="slide_sec right_to_left prev_fix transRight">
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
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- screen 2 end here -->
            <?php endif; ?>
            <?php
            $Screen2 = get_field("show_screen_2");
            $Screen3 = get_field("show_screen_3");
            ?>
            <?php if (($Screen3  == 'Yes') && ($Screen2 == 'Yes')) : ?>
                <!-- screen 3 start here -->
                <div class="Screens">
                    <div class="inner_screen">
                        <div class="horizontal_half left top">
                            <div class="slide_sec left_to_right   prev_fix">
                                <?php
                                $images = acf_photo_gallery('screen_3_images', $post->ID);
                                if (count($images)):
                                    $id = $image['id'];
                                    $image  = $images[1];
                                    $title = $image['title'];
                                    $caption = $image['caption'];
                                    $full_image_url = $image['full_image_url'];
                                ?>
                                    <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="horizontal_half right top">
                            <div class="vertical_half right top">
                                <div class="slide_sec right_to_left transRight prev_fix bg_orange center_txt screen1" style="background-color:<?php the_field('screen3_text_background_color') ?>;">
                                    <div class="bounce_effect">
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
                                <div class="slide_sec right_to_left prev_fix transRight">
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
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- screen 3 end here -->
            <?php endif; ?>
            <?php
            $Screen2 = get_field("show_screen_2");
            $Screen3 = get_field("show_screen_3");
            $Screen4 = get_field("show_screen_4");
            ?>
            <?php if (($Screen3  == 'Yes') && ($Screen2 == 'Yes') && ($Screen4 == 'Yes')) : ?>
                <!-- screen 4 start here -->
                <div class="Screens prev_fix active_screen">
                    <div class="inner_screen">
                        <div class="horizontal_half left top">
                            <div class="slide_sec right_to_left prev_fix  center_txt transLeft" style="background-color:<?php the_field('screen4_text_background_color') ?>;">
                                <div class="bounce_effect lastScreenLeftPd">
                                    <h3>
                                        <?php the_field('screen_4_title') ?>
                                    </h3>
                                    <p>
                                        <?php the_field('screen_4_text') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="horizontal_half right top">
                            <div class="slide_sec right_to_left prev_fix transRight">
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
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- screen 4 end here -->
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>