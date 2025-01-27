<?php

/**
 * The main template file
 */
get_header();
?>
<div data-barba="container" class="is-cover case-studies-single" data-barba-namespace="home" data-background="#000000">
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
        <div class="nextPrevPostBtn modalBtn">
            <div class="alignleft">
                <?php
                $prev_post = get_previous_post();
                if ($prev_post) {
                    $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
                    echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '?v=m" title="' . $prev_title . '" class="BackBtn down_arrow right-transition">
                                <img class="animate-cs-left" src="' . get_stylesheet_directory_uri() . '/images/arrow-right-circleNEWNEW.svg">
//                                <img src="' . get_stylesheet_directory_uri() . '/images/circle.png"> 
                            </a>' . "\n";
                }
                ?>
            </div>
            <div class="alignright">
                <?php
                $nextss = get_permalink($posts[0]->ID);
                $next_post = get_next_post($loop->max_num_pages);
                if ($next_post) {
                    $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
                    echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '?v=m" title="' . $next_title . '" class="nextBtn down_arrow"> 
                                <img class="animate-cs-right" src="' . get_stylesheet_directory_uri() . '/images/arrow-right-circleNEWNEW.svg">
                              
                            </a>' . "\n";
                }
                ?>
                <img src="' . get_stylesheet_directory_uri(). '/images/circle.png">
            </div>
        </div>
        <div class="nextPrevPostBtn modalNot">
            <div class="alignleft">
                <?php
                $prev_post = get_previous_post();
                if ($prev_post) {
                    $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
                    echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title . '" class="down_arrow BackBtn right-transition"> 
                                <img class="animate-cs-left" src="' . get_stylesheet_directory_uri() . '/images/arrow-right-circleNEWNEW.svg">
                                
                            </a>' . "\n";
                }
                ?>
                <img src="' . get_stylesheet_directory_uri(). '/images/circle.png">
            </div>
            <div class="alignright">
                <?php
                $next_post = get_next_post();
                if ($next_post) {
                    $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
                    echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title . '" class="down_arrow nextBtn"> 
                                <img class="animate-cs-right" src="' . get_stylesheet_directory_uri() . '/images/arrow-right-circleNEWNEW.svg">
                                
                            </a>' . "\n";
                }
                ?>
                <img src="' . get_stylesheet_directory_uri(). '/images/circle.png">
            </div>
        </div>
        <input type="hidden" id="TextVal" value="0">
        <input type="hidden" id="TextStop" value="1">
        <div class="up-down-buttons">
            <button class="down_arrow" id="nextBtnText" onclick="nextBtnFunction(this)">
                <img class="animate-cs-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right-circleNEWNEW.svg">
                <!--            <img src="--><?php //echo get_stylesheet_directory_uri(); 
                                                ?><!--/images/circle.png">-->
            </button>
            <button class="down_arrow" id="prevBtnText" onclick="prevBtnFunction(this)">
                <img class="animate-cs-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right-circleNEWNEW.svg">
                <!--            <img src="--><?php //echo get_stylesheet_directory_uri(); 
                                                ?><!--/images/circle.png">-->
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