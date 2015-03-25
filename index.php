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

<!-- I AM -->
<div class="i-am-wrapper">
	<div class="container">
		<div class="row">
			<div class="twelve columns">
				<div class="i-am-content">
					<h4 id="i-am-h4">Hello. I am <div id="alzea">ALZEA</div>
						<div class="rw-words rw-words-1">
							<span>a WordPress Developer</span>
							<span>a Technical Writer</span>
							<span>a Cat & Anime Lover</span>
							<span>a Geek without Glasses</span>
							<span>a Django Developer</span>
							<span>an Astronout ;-)</span>
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
										<i class="fa fa-wordpress fa-4x"></i>
									</div>
								</div>
								<div class="ten columns">
									<h5>WordPress Development</h5>
									<p>I design super cool websites. It is a long established fact that a reader will be distracted by the readable content.</p>
								</div>
							</div>
						</div>
						<div class="six columns">
							<div class="row">
								<div class="two columns">
									<div class="service-icon-wrapper">
										<i class="fa fa-pencil fa-4x"></i>
									</div>
								</div>
								<div class="ten columns">
									<h5>Technical & Content Writing</h5>
									<p>I design super cool websites. It is a long established fact that a reader will be distracted by the readable content.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="six columns">
		                    <div class="row">
								<div class="two columns">
									<div class="service-icon-wrapper">
										<i class="fa fa-html5 fa-4x"></i>
									</div>
								</div>
								<div class="ten columns">
									<h5>Front-End Development</h5>
									<p>I design super cool websites. It is a long established fact that a reader will be distracted by the readable content.</p>
								</div>
							</div>
						</div>
						<div class="six columns">
							<div class="row">
								<div class="two columns">
									<div class="service-icon-wrapper">
										<i class="icon-python" style="font-size: 4em !important;"></i>
									</div>
								</div>
								<div class="ten columns">
									<h5>Django Development</h5>
									<p>I design super cool websites. It is a long established fact that a reader will be distracted by the readable content.</p>
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
							<i class="fa fa-thumbs-o-up fa-5x"></i>
							<p><span class="count">17</span> PROJECTS COMPLETED</p>
						</div>
						<div class="three columns">
							<i class="fa fa-github fa-5x"></i>
							<p><span class="count">15</span> FOSS PROJECTS</p>
						</div>
						<div class="three columns">
							<i class="fa fa-coffee fa-5x"></i>
							<p><span class="count">207</span> Cups of Coffee</p>
						</div>
						<div class="three columns">
							<i class="fa fa-code fa-5x"></i>
							<p><span class="count">23715</span> Lines of Code</p>
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