<?php 
if( is_home() ) :
    $args = array(
        'post_type' => 'post',
		'category_name' => 'news',
        'posts_per_page' => 3,
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
?>

<?php 
	if ( have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post();
	?>
	<div class="articleWrap">
		<div class="recent">
			<article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
				<figure>
					<?php if( has_post_thumbnail() ): ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
					<?php else: ?>
						<a href="<?php the_permalink() ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/catlogo.png" alt=""></a>
					<?php endif; ?>
				</figure>
				<div class="entry">
					<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d(D)'); ?></time>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<p class="excerpt"><?php the_excerpt(); ?></p>
					<p class="continue"><a href="<?php the_permalink(); ?>">記事を読む</a></p>
				</div>
			</article>
		</div><!--/.recent-->
	</div><!--/.articleWrap-->
	 <?php 
		endwhile;
	endif;
	?>

<?php if ( function_exists( 'wp_pagenavi' ) ) { wp_pagenavi(); } ?>

<?php 
    endif;
endif;
?>