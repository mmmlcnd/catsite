<?php get_header(); ?>

<div class="contentsWrap">
	<?php 
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
	?>
	<article class="single" id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
		<h3 class="index"><span>『<?php the_title(); ?>』を紹介します</span></h3>
		<div class="time"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d(D)'); ?></time></div></time>
		<div class="content">
			<?php the_content(); ?>
			<div class="catinfo">
				<dl>
					<dt>年齢：</dt>
					<dd><?php echo number_format( get_field( 'age' ) ); ?>才</dd>
					<dt>猫種：</dt>
					<dd><?php echo nl2br( get_field( 'varieties' ) ); ?></dd>
					<dt>性別：</dt>
					<dd><?php echo nl2br( get_field( 'sex' ) ); ?></dd>
				</dl>
				<dl>
					<dt>避妊：</dt>
					<dd><?php echo nl2br( get_field( 'neuter' ) ); ?></dd>
					<dt>ワクチン：</dt>
					<dd><?php echo nl2br( get_field( 'vaccine' ) ); ?></dd>
				</dl>
				<dl>
					<dt>性格：</dt>
					<dd><?php echo nl2br( get_field( 'character' ) ); ?></dd>
				</dl>
			</div><!--/.catinfo-->
		</div><!--/.content-->
	</article><!-- /.single -->
	<?php 
	endwhile;
	endif;
	?>    
    <aside class="subContents">
        <?php get_sidebar('cat'); ?>
    </aside><!-- /.subContents -->
</div><!-- /.contentsWrap -->

<?php get_footer(); ?>