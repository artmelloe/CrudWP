<?php 

/*Template Name: Products */

get_header();

$top_info = get_field('top_info');
$mid_info = get_field('mid_info');
$bot_info = get_field('bot_info');

?>

<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex ml-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper"><?php echo $top_info['small_title']; ?></span>
                        <span class="section-heading-lower"><?php echo $top_info['main_title']; ?></span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="<?php bloginfo('template_directory'); ?>/img/products-01.jpg" alt="">
            <div class="product-item-description d-flex mr-auto">
                <div class="bg-faded p-5 rounded">
                    <p class="mb-0"><?php echo $top_info['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex mr-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper"><?php echo $mid_info['small_title']; ?></span>
                        <span class="section-heading-lower"><?php echo $mid_info['main_title']; ?></span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="<?php bloginfo('template_directory'); ?>/img/products-02.jpg" alt="">
            <div class="product-item-description d-flex ml-auto">
                <div class="bg-faded p-5 rounded">
                    <p class="mb-0"><?php echo $mid_info['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex ml-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper"><?php echo $bot_info['small_title']; ?></span>
                        <span class="section-heading-lower"><?php echo $bot_info['main_title']; ?></span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="<?php bloginfo('template_directory'); ?>/img/products-03.jpg" alt="">
            <div class="product-item-description d-flex mr-auto">
                <div class="bg-faded p-5 rounded">
                    <p class="mb-0"><?php echo $bot_info['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>