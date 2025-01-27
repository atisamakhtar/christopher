<?php /* Template Name: Classic Case Studies */
get_header();?>
<div data-barba="container">
    <div class="preloader-wrap">
        <div class="percentage" id="precent"></div>
        <div class="loadbar"></div>
    </div>
    <input type="hidden" id="TextVal" value="0">
    <input type="hidden" id="TextStop" value="1">
    <button class="down_arrow" id="nextBtnText">
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
    <div id="home_page" class="activeHomeScreen featured_classic">
        <?php
                $wpb_all_query = new WP_Query(array(
                    'post_type' => 'caseStudies',
                    'post_status' => 'publish',
                    'posts_per_page' => 0, 
                    'orderby' => 'title', 
                    'order' => 'DESC',
                )); ?>
        <?php if ($wpb_all_query->have_posts()):  
                    while ($wpb_all_query->have_posts()):
                        $wpb_all_query->the_post(); 
                            if ( has_post_thumbnail( $post->ID ) ) :
                                $imageInfo = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                                $imageUrl = $imageInfo[0];
                            else:
                                $imageUrl = get_stylesheet_directory_uri() . '/images/no_img.png';
                            endif;
                          ?> 
        <div class="featured_classic_outer">
            <img src="<?php echo $imageUrl; ?>" alt="">
            <a class="overlay_text" href="javascript:void(0);">
                <div class="svg_outer">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 168 168" enable-background="new 0 0 168 168" xml:space="preserve" style="transform: matrix3d(0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);">
                        <g id="Layer_2"></g>
                        <g id="Layer_1">
                            <polygon fill="#231F20" points="133,79 89,79 89,35 79,35 79,79 35,79 35,89 79,89 79,133 89,133 89,89 133,89 "></polygon>
                            <path fill="#231F20" d="M84,10c40.8,0,74,33.2,74,74s-33.2,74-74,74s-74-33.2-74-74S43.2,10,84,10 M84,0C37.61,0,0,37.61,0,84s37.61,84,84,84s84-37.61,84-84S130.39,0,84,0L84,0z"></path>
                        </g>
                    </svg>
                </div>
                <h3>
                    <?php the_title();?>
                </h3>
                <div>
                    <?php the_excerpt();?>
                </div>
            </a>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php
                endif; ?>
    </div>
</div>
<?php get_footer();?>