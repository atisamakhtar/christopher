<?php /* Template Name: Featured Case Studies */
get_header(); ?>

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
    <div id="home_page" class="activeHomeScreen featured_classic">
        <?php
        $wpb_all_query = new WP_Query(array(
            'post_type' => 'caseStudies',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC',
        ));
        ?>
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
                <?php
                $use_case_id = get_the_ID();
                $permalink_url = esc_url(get_permalink($use_case_id));
                ?>
                <div class="featured_classic_outer" onclick="removeMenu()">
                    <img src="<?php echo $imageUrl; ?>" alt="<?php the_title(); ?>">
                    <!-- <a class="overlay_text" href="<?php // the_permalink();
                                                        ?>"> -->
                    <a onclick="openPopup('<?php echo esc_js(addslashes(urldecode($permalink_url))); ?>')" class="overlay_text">
                        <div class="svg_outer">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 168 168" enable-background="new 0 0 168 168" xml:space="preserve" style="transform: matrix3d(0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);">
                                <g id="Layer_2"></g>
                                <g id="Layer_1">
                                    <polygon fill="#fff" points="133,79 89,79 89,35 79,35 79,79 35,79 35,89 79,89 79,133 89,133 89,89 133,89 "></polygon>
                                    <path fill="#fff" d="M84,10c40.8,0,74,33.2,74,74s-33.2,74-74,74s-74-33.2-74-74S43.2,10,84,10 M84,0C37.61,0,0,37.61,0,84s37.61,84,84,84s84-37.61,84-84S130.39,0,84,0L84,0z"></path>
                                </g>
                            </svg>
                        </div>
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                        <div>
                            <?php the_excerpt(); ?>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>

<iframe id="popupFrame" src="" frameborder="0"></iframe>
<!-- <iframe id="popupFrame" src="" frameborder="0" onload="showCloseButton()"></iframe> -->
<!-- <button id="closeButton" onclick="closePopup()">✖</button> -->
<button id="closeButton">✖</button>

<?php get_footer(); ?>

<script>
    function showCloseButton() {
        const closeButton = document.getElementById('closeButton');
        if (closeButton) {
            closeButton.classList.add('show-close-button'); // Add the class to show the button
        }
    }

    // Function to open popup
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

    // Function to close the popup
    function closePopup() {
        const iframe = document.getElementById('popupFrame');
        iframe.style.display = 'none';

        const closeButton = document.getElementById('closeButton');
        console.log('Close popup clicked'); // Should log on button click

        // closeButton.style.display = 'none';
        // iframe.style.zIndex = "";
        // closeButton.style.zIndex = '';

        if (closeButton) {
            console.log("while clossing closeButton exists")
            closeButton.classList.remove('show-close-button'); // Remove the class
        }

        // Clear the iframe src to prevent memory leaks
        iframe.src = '';
    }

    // Function to ensure popup opens when clicking overlay
    function setupPopupListener() {
        const overlayLinks = document.querySelectorAll('.featured_classic_outer .overlay_text');

        overlayLinks.forEach(link => {
            // Ensure no duplicate event listeners
            link.removeEventListener('click', handlePopupClick);

            // Attach the click event listener
            link.addEventListener('click', handlePopupClick);
        });
    }

    // Event handler for popup links
    function handlePopupClick(event) {
        event.preventDefault();
        const url = this.getAttribute('onclick').match(/openPopup\('(.*?)'\)/)[1]; // Extract URL
        openPopup(url);
    }

    // Flip functionality for elements
    function setupFlipListeners() {
        document.querySelectorAll('.arrow').forEach(arrow => {
            // Flip to back
            arrow.addEventListener('click', function() {
                this.closest('.flip-image-wrapper').classList.add('flip-active');
            });
        });

        document.querySelectorAll('.close-flip').forEach(closeButton => {
            // Flip back to front
            closeButton.addEventListener('click', function() {
                this.closest('.flip-image-wrapper').classList.remove('flip-active');
            });
        });
    }

    // Handles transitions for screens
    function handleScreenTransition() {
        const screens = document.querySelectorAll('.Screens');

        screens.forEach(screen => {
            screen.addEventListener('transitionend', function() {
                setupPopupListener(); // Re-setup listeners if needed after transitions
            });
        });
    }

    // Initialize everything on DOMContentLoaded
    document.addEventListener('DOMContentLoaded', function() {
        setupPopupListener();
        setupFlipListeners();
        handleScreenTransition();

        // Close button listener for popup
        document.getElementById('closeButton').addEventListener('click', closePopup);
    });
</script>