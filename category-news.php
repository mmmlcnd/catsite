<?php get_header(); ?>

<div class="contentsWrap">
	<h3><span>NEWS</span></h3>
	<section>
		<?php get_template_part('loop', 'news'); ?>
	</section>
	<aside class="subContents">
		<?php get_sidebar('categories', 'news'); ?>
	</aside><!-- /.subContents -->
</div><!--/.contentsWrap-->

<?php get_footer(); ?>