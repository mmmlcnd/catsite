<?php 
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
?>
	<div class="articleWrap">
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
			</div><!--/.entry-->
		</article>
	</div><!--/.articleWrap-->
<?php 
	endwhile;
else :
?>

	<?php if(is_search()):  //検索ページの場合 ?>
	<p>検索結果はありませんでした</p>
	<?php else : //以外のページの場合 ?>
	<p>記事はありません</p>
	<?php endif; ?>

<?php endif; ?>

<?php if ( function_exists( 'wp_pagenavi' ) ) { wp_pagenavi(); } ?>