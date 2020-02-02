<?php 

/*Template Name: Store */

get_header();

$top_info = get_field('top_info');
$week_info = get_field('week_info');
$bot_info = get_field('bot_info');
$about_info = get_field('about_info');

?>

<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper"><?php echo $top_info['small_title']; ?></span>
                        <span class="section-heading-lower"><?php echo $top_info['main_title']; ?></span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
						<?php if($week_info['hour_1']){ ?>
							<li class="list-unstyled-item list-hours-item d-flex">
								<?php echo $week_info['day_1']; ?>
								<span class="ml-auto"><?php echo $week_info['hour_1']; ?></span>
							</li>
						<?php } ?>
						<?php if($week_info['hour_2']){ ?>
							<li class="list-unstyled-item list-hours-item d-flex today">
								<?php echo $week_info['day_2']; ?>
								<span class="ml-auto"><?php echo $week_info['hour_2']; ?></span>
							</li>
						<?php } ?>
						<?php if($week_info['hour_3']){ ?>
							<li class="list-unstyled-item list-hours-item d-flex">
								<?php echo $week_info['day_3']; ?>
								<span class="ml-auto"><?php echo $week_info['hour_3']; ?></span>
							</li>
						<?php } ?>
						<?php if($week_info['hour_4']){ ?>
							<li class="list-unstyled-item list-hours-item d-flex">
								<?php echo $week_info['day_4']; ?>
								<span class="ml-auto"><?php echo $week_info['hour_4']; ?></span>
							</li>
						<?php } ?>
						<?php if($week_info['hour_5']){ ?>
							<li class="list-unstyled-item list-hours-item d-flex">
								<?php echo $week_info['day_5']; ?>
								<span class="ml-auto"><?php echo $week_info['hour_5']; ?></span>
							</li>
						<?php } ?>
						<?php if($week_info['hour_6']){ ?>
							<li class="list-unstyled-item list-hours-item d-flex">
								<?php echo $week_info['day_6']; ?>
								<span class="ml-auto"><?php echo $week_info['hour_6']; ?></span>
							</li>
						<?php } ?>
						<?php if($week_info['hour_7']){ ?>
							<li class="list-unstyled-item list-hours-item d-flex">
								<?php echo $week_info['day_7']; ?>
								<span class="ml-auto"><?php echo $week_info['hour_7']; ?></span>
							</li>
						<?php } ?>
                    </ul>
                    <p class="address mb-5">
                        <em>
                        <strong><?php echo $bot_info['first_address']; ?></strong>
                        <br>
                        <?php echo $bot_info['second_address']; ?>
                        </em>
                    </p>
                    <p class="mb-0">
                        <small>
                        <em><?php echo $bot_info['small_text']; ?></em>
                        </small>
                        <br>
                        <?php echo $bot_info['telephone']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php bloginfo('template_directory'); ?>/img/about.jpg" alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper"><?php echo $about_info['small_text']; ?></span>
                            <span class="section-heading-lower"><?php echo $about_info['main_text']; ?></span>
                        </h2>
                        <p><?php echo $about_info['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>