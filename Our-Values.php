<?php /* Template Name: Our Values */
get_header();?> 
<div data-barba="container" data-barba-namespace="" data-background="">
    <input type="hidden" id="TextVal" value="0">
    <input type="hidden" id="TextStop" value="1">
    <button class="down_arrow" id="nextBtnText" onclick="nextBtnFunction(this)">
        <img class="animate-cs-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right-circleNEWNEW.svg">
<!--        <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/images/circle.png">-->
    </button>
    <button class="down_arrow" id="prevBtnText" onclick="prevBtnFunction(this)">
        <img class="animate-cs-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right-circleNEWNEW.svg">
<!--        <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/images/circle.png">-->
    </button>
    <div class="Text_Screen TextFullPage">
        <div class="text_outer center_txt  active" style="background-color: <?php the_field('screen_1_background_color')?>;">
            <h3>
                <?php the_field('screen_1_title')?>
            </h3>
            <div class="text_wrap">
                <p>
                    <?php the_field('screen_1_text')?>
                </p>
            </div>
        </div>
        <div class="text_outer center_txt " style="background-color: <?php the_field('screen_2_background_color')?>;">
            <h3>
                <?php the_field('screen_2_title')?>
            </h3>
            <div class="text_wrap">
                <p>
                    <?php the_field('screen_2_text')?>
                </p>
            </div>
        </div>
        <div class="text_outer center_txt " style="background-color:<?php the_field('screen_3_background_color')?>;">
            <h3>
                <?php the_field('screen_3_title')?>
            </h3>
            <div class="text_wrap">
                <p>
                    <?php the_field('screen_3_text')?>
                </p>
            </div>
        </div>
        <div class="text_outer center_txt " style="background-color: <?php the_field('screen_4_background_color')?>;">
            <h3>
                <?php the_field('screen_4_title')?>
            </h3>
            <div class="text_wrap">
                <p>
                    <?php the_field('screen_4_text')?>
                </p>
            </div>
        </div>
        <div class="text_outer center_txt " style="background-color: <?php the_field('screen_5_background_color')?>;">
            <h3>
                <?php the_field('screen_5_title')?>
            </h3>
            <div class="text_wrap">
                <p>
                    <?php the_field('screen_5_text')?>
                </p>
            </div>
        </div>
        <div class="text_outer center_txt " style="background-color: <?php the_field('screen_6_background_color')?>;">
            <h3>
                <?php the_field('screen_6_title')?>
            </h3>
            <div class="text_wrap">
                <p>
                    <?php the_field('screen_6_text')?>
                </p>
            </div>
        </div>
        <div class="text_outer center_txt " style="background-color: <?php the_field('screen_7_background_color')?>;">
            <h3>
                <?php the_field('screen_7_title')?>
            </h3>
            <div class="text_wrap">
                <p>
                    <?php the_field('screen_7_text')?>
                </p>
            </div>
        </div>
        <div class="text_outer center_txt " style="background-color: <?php the_field('screen_8_background_color')?>;">
            <h3>
                <?php the_field('screen_8_title')?>
            </h3>
            <div class="text_wrap">
                <p>
                    <?php the_field('screen_8_text')?>
                </p>
            </div>
        </div>
        <div class="text_outer center_txt " style="background-color: <?php the_field('screen_9_background_color')?>;">
            <h3>
                <?php the_field('screen_9_title')?>
            </h3>
            <div class="text_wrap">
                <p>
                    <?php the_field('screen_9_text')?>
                </p>
            </div>
        </div>
        <div class="text_outer center_txt " style="background-color: <?php the_field('screen_10_background_color')?>;">
            <h3>
                <?php the_field('screen_10_title')?>
            </h3>
            <div class="text_wrap">
                <p>
                    <?php the_field('screen_10_text')?>
                </p>
            </div>
        </div>
        <div class="text_outer center_txt " style="background-color: <?php the_field('screen_11_background_color')?>;">
            <h3>
                <?php the_field('screen_11_title')?>
            </h3>
            <div class="text_wrap">
                <p>
                    <?php the_field('screen_11_text')?>
                </p>
            </div>
        </div>
        <div class="text_outer center_txt " style="background-color: <?php the_field('screen_12_background_color')?>;">
            <h3>
                <?php the_field('screen_12_title')?>
            </h3>
            <div class="text_wrap">
                <p>
                    <?php the_field('screen_12_text')?>
                </p>
            </div>
        </div>
    </div>
</div> 
<?php get_footer();?>