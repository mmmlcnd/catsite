<?php get_header(); ?>

<div class="contentsWrap">
	<h3><span>猫たちのご紹介</span></h3>
	<section>
		<?php get_template_part('loop', 'cats'); ?>
	</section>
	<aside class="subContents">
		<?php get_sidebar('categories', 'news'); ?>
	</aside><!-- /.subContents -->
</div><!--/.contentsWrap-->

<?php get_footer(); ?>