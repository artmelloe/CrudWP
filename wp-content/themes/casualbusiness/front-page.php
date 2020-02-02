<?php get_header(); 

$top_info = get_field('top_info');
$bot_info = get_field('bot_info');

?>

<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="<?php bloginfo('template_directory'); ?>/img/intro.jpg" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper"><?php echo $top_info['small_title']; ?></span>
                    <span class="section-heading-lower"><?php echo $top_info['main_title']; ?></span>
                </h2>
                <p class="mb-3"><?php echo $top_info['description']; ?></p>
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl" href="<?php echo $top_info['link_url']; ?>"><?php echo $top_info['link_text']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper"><?php echo $bot_info['small_title']; ?></span>
                        <span class="section-heading-lower"><?php echo $bot_info['main_title']; ?></span>
                    </h2>
                    <p class="mb-0"><?php echo $bot_info['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>