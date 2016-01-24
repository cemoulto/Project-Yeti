<?php get_header(); ?>
<div class="row">
	<div class="large-12 columns">
		<div class="text-center">
			<h1><?php _e('Search Results for', 'projectyeti'); ?> "<?php echo get_search_query(); ?>"</h1>
		</div>
		<?php if ( have_posts() ) : ?>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; // end have_posts() check ?>
		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists('py_pagination') ) { py_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'projectyeti' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'projectyeti' ) ); ?></div>
		</nav>
		<?php } ?>
	</div>		
</div>		
<?php get_footer(); ?>