<?php get_header(); ?>

	<div class="contentsWrap">
		<?php 
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
		?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
				<section class="content">
					<?php the_content(); ?>
				</section>
			</article><!-- /.page -->
		<?php 
			endwhile;
		endif;
		?>
	</div><!-- /.contentsWrap -->

<?php get_footer(); ?>
