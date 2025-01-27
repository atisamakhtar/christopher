<?php /* Template Name: Contact Us */
get_header();?> 
<div class="contact_us_outer text-center" data-barba="container" data-barba-namespace="" data-background="">
    <style>
    .contact_us_outer {
        overflow: hidden;
        overflow-y: auto !important;
    }
    </style>
    <h2 class="contact_heading">Contact Us</h2>
    <div class="location col-12">
        <div class="row">
            <div class="col-md-4 mb20">
                <?php dynamic_sidebar('address_1'); ?>
            </div>
            <div class="col-md-4 mb20">
                <?php dynamic_sidebar('address_2'); ?>
            </div>
            <div class="col-md-4 mb20">
                <?php dynamic_sidebar('address_3'); ?>
            </div>
        </div>
    </div>
    <div class="map_contact_outer">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <div class="contact_form_outer desktop-only">
                        <h5>If you got any question<br>Please do not hesitate to send us a message</h5> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13722.600304863428!2d76.69900595!3d30.7001201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1612505139879!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="contact_form_outer">
                        <h5 class="for-mob">If you got any question<br>Please do not hesitate to send us a message</h5>
                        <div class="form_outer">
                            <?php echo do_shortcode('[contact-form-7 id="343" title="Contact form"]')?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social_links_email">
        <?php dynamic_sidebar('social_icons'); ?>
    </div>
</div> 
<?php get_footer();?>