<?php get_header(); ?>

<div class="contentsWrap js-boxes">
	<h3><span>お知らせ</span></h3>
	<section>
		<?php get_template_part('loop', 'news'); ?>
	</section>
	<aside class="subContents">
		<?php get_sidebar('categories', 'news'); ?>
	</aside><!-- /.subContents -->
</div><!--/.contentsWrap-->

<?php get_footer(); ?>