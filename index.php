<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package zealab
 */

get_header(); ?>

<script>
	jQuery(document).ready(function() {
	    jQuery("button").click(function() {
	        jQuery("h6").toggle(1000);
	    });
	});
</script>

<!-- GETTING ADMIN OPTION VALUE -->

<?php
    $titan = TitanFramework::getInstance( 'zealab-theme' );

    // ROTATING WORDS SECTION

    $my_name = $titan->getOption('your_name');

    $rotating_text_1 = $titan->getOption('rotating_word_1');
	$rotating_text_2 = $titan->getOption('rotating_word_2');
	$rotating_text_3 = $titan->getOption('rotating_word_3');
	$rotating_text_4 = $titan->getOption('rotating_word_4');
	$rotating_text_5 = $titan->getOption('rotating_word_5');
	$rotating_text_6 = $titan->getOption('rotating_word_6');


    // SERVICES SECTION

    $service_icon_1 = $titan->getOption('service_icon_1_image');
	$service_title_1 = $titan->getOption('service_icon_1_title');
    $service_desc_1 = $titan->getOption('service_icon_1_desc');

    $service_icon_2 = $titan->getOption('service_icon_2_image');
    $service_title_2 = $titan->getOption('service_icon_2_title');
    $service_desc_2 = $titan->getOption('service_icon_2_desc');

    $service_icon_3 = $titan->getOption('service_icon_3_image');
    $service_title_3 = $titan->getOption('service_icon_3_title');
    $service_desc_3 = $titan->getOption('service_icon_3_desc');

    $service_icon_4 = $titan->getOption('service_icon_4_image');
    $service_title_4 = $titan->getOption('service_icon_4_title');
    $service_desc_4 = $titan->getOption('service_icon_4_desc');


    // ABOUT ME SECTION

    $about_icon_1 = $titan->getOption('about_icon_1_image');
	$about_text_1 = $titan->getOption('about_icon_1_text');

    $about_icon_2 = $titan->getOption('about_icon_2_image');
	$about_text_2 = $titan->getOption('about_icon_2_text');

	$about_icon_3 = $titan->getOption('about_icon_3_image');
	$about_text_3 = $titan->getOption('about_icon_3_text');

    $about_icon_4 = $titan->getOption('about_icon_4_image');
	$about_text_4 = $titan->getOption('about_icon_4_text');

?>

<!-- END OF CODE -->


<!-- I AM -->
<div class="i-am-wrapper">
	<div class="container">
		<div class="row">
			<div class="twelve columns">
				<div class="i-am-content">
					<h4 id="i-am-h4">Hello. I am <div id="alzea"><?php echo "$my_name"; ?></div>
						<div class="rw-words rw-words-1">
							<span><?php echo "$rotating_text_1"; ?></span>
							<span><?php echo "$rotating_text_2"; ?></span>
							<span><?php echo "$rotating_text_3"; ?></span>
							<span><?php echo "$rotating_text_4"; ?></span>
							<span><?php echo "$rotating_text_5"; ?></span>
							<span><?php echo "$rotating_text_6"; ?></span>
						</div>
					</h4>
					<h4>I Live in Yogyakarta, Indonesia.
						I write about WordPress, Programming and My stuffs
					</h4>
				</div>
				<div class="hire-me">
					<button class="button-primary">Contact Me</button>
				</div>
				<div class="row">
					<div class="twelve columns"> 
						<div class="contact-form-wrapper">
						<h6 style="display:none"><?php echo do_shortcode('[cscf-contact-form]'); ?></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- MY SERVICES -->
<div class="my-services-wrapper">
	<div class="container">
		<div class="row">
			<div class="twelve columns">
				<p id="my-services-header">
					SERVICES I CAN PROVIDE
				</p>
				<hr id="my-services-hr">
				<div class="my-services-content">
					<div class="row">
						<div class="six columns">
							<div class="row">
								<div class="two columns">
									<div class="service-icon-wrapper">
										<i class="<?php echo "$service_icon_1"; ?> fa-4x"></i>	
									</div>
								</div>
								<div class="ten columns">
									<h5><?php echo "$service_title_1"; ?></h5>
									<p><?php echo "$service_desc_1"; ?></p>
								</div>
							</div>
						</div>
						<div class="six columns">
							<div class="row">
								<div class="two columns">
									<div class="service-icon-wrapper">
										<i class="<?php echo "$service_icon_2"; ?> fa-4x"></i>
									</div>
								</div>
								<div class="ten columns">
									<h5><?php echo "$service_title_2"; ?></h5>
									<p><?php echo "$service_desc_2"; ?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="six columns">
							<div class="row">
								<div class="two columns">
									<div class="service-icon-wrapper">
										<i class="<?php echo "$service_icon_3"; ?> fa-4x"></i>
									</div>
								</div>
								<div class="ten columns">
									<h5><?php echo "$service_title_3"; ?></h5>
									<p><?php echo "$service_desc_3"; ?></p>
								</div>
							</div>
						</div>
						<div class="six columns">
							<div class="row">
								<div class="two columns">
									<div class="service-icon-wrapper">
										<i class="<?php echo "$service_icon_4"; ?>" style="font-size: 4em !important;"></i>
									</div>
								</div>
								<div class="ten columns">
									<h5><?php echo "$service_title_4"; ?></h5>
									<p><?php echo "$service_desc_4"; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END -->


<!-- ABOUT ME -->
<div class="about-me-wrapper">
	<div class="container">
		<div class="row">
			<div class="twelve columns">
				<p id="about-me-header">
					ABOUT ME
				</p>
				<hr id="about-me-hr">
				<div class="about-me-content">
					<div class="row">
						<div class="three columns">
							<i class="<?php echo "$about_icon_1"; ?> fa-5x"></i>
							<p><?php echo "$about_text_1"; ?></p>
						</div>
						<div class="three columns">
							<i class="<?php echo "$about_icon_2"; ?> fa-5x"></i>
							<p><?php echo "$about_text_2"; ?></p>
						</div>
						<div class="three columns">
							<i class="<?php echo "$about_icon_3"; ?> fa-5x"></i>
							<p><?php echo "$about_text_3"; ?></p>
						</div>
						<div class="three columns">
							<i class="<?php echo "$about_icon_4"; ?> fa-5x"></i>
							<p><?php echo "$about_text_4"; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="blog-post-wrapper">
	<div class="container">
		<div class="row">
			<div class="twelve columns">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<p id="blog-index-header">
							LASTEST FROM THE BLOG
						</p>
						<hr id="blog-index-hr">

							<?php if ( have_posts() ) : ?>

								<?php /* Start the Loop */ ?>
								<?php while ( have_posts() ) : the_post(); ?>

									<?php
										/* Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'content', get_post_format() );
									?>

								<?php endwhile; ?>

								<?php the_posts_navigation(); ?>

							<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
	</div>
</div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>