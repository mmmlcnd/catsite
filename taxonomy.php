<?php get_header(); ?>
    
    <div class="contentsWrap">
    	<h3><span>＜<?php single_term_title(''); ?>＞の猫さん</span></h3>
    	<section>
    		<?php get_template_part('loop', 'cats'); ?>
    	</section>
    	<aside class="subContents">
    		<?php get_sidebar('cat'); ?>
    	</aside><!-- /.subContents -->
    </div><!--/.contentsWrap-->

<?php get_footer(); ?>