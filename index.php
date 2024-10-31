<?php get_header(); ?>

<div class="contentsWrap">
	<section>
		<?php get_template_part('loop','main'); ?>
	</section><!-- /.newsBlock -->
<aside class="subContents">
	<?php get_sidebar('categories'); ?>
	<?php get_sidebar('archives'); ?>
</aside><!-- /.subContents -->
</div><!-- /.contentsWrap -->

<?php get_footer(); ?>