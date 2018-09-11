<?php
/**
 * The template for displaying all single posts.
 *
 * @package creativefocus
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php setPostViews(get_the_ID()); ?>
			<?php echo getPostViews(get_the_ID()); ?>
                    
			<?php
			do_action( 'creativefocus_single_post_before' );
                        
                        get_template_part( 'content', 'single' ); 

			/**
			 * @hooked creativefocus_post_nav - 10
			 * @hooked creativefocus_display_comments - 20
			 */
			do_action( 'creativefocus_single_post_after' );
			?>
                    
		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php do_action( 'creativefocus_sidebar' ); ?>
<?php get_footer(); ?>
