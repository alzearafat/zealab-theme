<?php
/**
 * @package zealab
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title-single">', '</h1>' ); ?>

		<div class="featured-image-wrapper">
			<?php the_post_thumbnail(); ?>
		</div>

		<div class="entry-meta-single">
			<?php zealab_posted_on(); ?>
		</div><!-- .entry-meta -->
	
	</header><!-- .entry-header -->

	<div class="entry-content">
		<p>
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'zealab' ),
					'after'  => '</div>',
				) );
			?>
		</p>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php // zealab_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->