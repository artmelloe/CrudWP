<?php 

/*Template Name: About */

get_header();

$main_info = get_field('main_info');

?>

<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php bloginfo('template_directory'); ?>/img/about.jpg" alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper"><?php echo $main_info['small_title']; ?></span>
                            <span class="section-heading-lower"><?php echo $main_info['main_title']; ?></span>
                        </h2>
                        <p><?php echo $main_info['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>