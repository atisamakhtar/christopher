<?php
/**
 * Inner Banner *
 * This is the template that displays Inner booking pages banner.
 *
 * 
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>


<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<section class="inner_banner" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
    <div class="container">
        <div class="text-center">
            <h2 class="cs_heading white">
            	 <?php echo $_GET['value'];?></h2>
        </div>
    </div>
</section>
<!-- top banner end here -->