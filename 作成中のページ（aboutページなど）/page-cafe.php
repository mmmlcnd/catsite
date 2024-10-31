<?php get_header(); ?>
<div class="contentsWrap">
	<div id="aboutArea">
		<h3><span>はじめに</span></h3>
		<p class="aboutText">こんにちは、私たちは野良猫の保護活動と猫カフェを運営する「Mew &amp; I」です。<br>このサイトでは、安心して住めるお家を探している猫たちを紹介しています。<br>猫と暮らしたいとお考えの方と、猫たちを結ぶお手伝いができれば幸いです。</p>
		<div class="aboutLink">
			<a href="<?php echo get_permalink(40); ?>">
				<div class="alItems activity">
					<img src="<?php echo get_template_directory_uri(); ?>/images/house.png" alt="">
					<p>保護活動<span>について</span></p>
				</div>
			</a>
			<a href="<?php echo get_permalink(42); ?>">
				<div class="alItems howto">
					<img src="<?php echo get_template_directory_uri(); ?>/images/house.png" alt="">
					<p>里親に<span>なるには？</span></p>
				</div>
			</a>
			<a href="<?php echo get_permalink(44); ?>">
				<div class="alItems cafe">
					<img src="<?php echo get_template_directory_uri(); ?>/images/house.png" alt="">
					<p>猫カフェ<span>サイトへ</span></p>
				</div>
			</a>
		</div><!--/#aboutLink-->
	</div><!--/#aboutArea-->
</div><!-- /.contentsWrap -->

<?php get_footer(); ?>