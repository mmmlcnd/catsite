<?php get_header(); ?>

<div class="contentsWrap">
	<?php 
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
	?>
	<article class="single" id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
		<h3 class="index"><span><?php the_title(); ?></span></h3>
		<div class="time"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d(D)'); ?></time></div>
		<div class="content">
			 <?php the_content(); ?>  
		</div>
	</article><!-- /.page -->
	<?php 
	endwhile;
	endif;
	?>    
    <aside class="subContents">
        <?php get_sidebar('categories'); ?>
    </aside><!-- /.subContents -->
</div><!-- /.contentsWrap -->

<?php get_footer(); ?>