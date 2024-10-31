<?php get_header(); ?>

/* カテゴリーの情報を取得 */
<?php
  $cat = get_the_category();
  $cat = $cat[1];
?>

<div class="contentsWrap">
	<h3><span>お知らせ＜<?php echo $cat->name; ?>＞</span></h3>
	<section>
		<?php get_template_part('loop', 'news'); ?>
	</section>
	<aside class="subContents">
		<?php get_sidebar(); ?>
	</aside><!-- /.subContents -->
</div><!--/.contentsWrap-->

<?php get_footer(); ?>