<?php get_header(); ?>

		<div class="mainV"><img src="<?php echo get_template_directory_uri(); ?>/images/mainvisualcat01.png" alt=""></div>
		
		<a id="aboutAreaAnchor" class="anchor"></a>
		
		<div id="aboutArea" class="frontContents js-boxes">
			<h3><span>はじめに</span></h3>
			<p class="aboutText">こんにちは、私たちは野良猫の保護活動と猫カフェを運営する「Mew &amp; I」です。<br>このサイトでは、安心して住めるお家を探している猫たちを紹介しています。<br>猫と暮らしたいとお考えの方と、猫たちを結ぶお手伝いができれば幸いです。</p>
		</div><!--/#aboutArea-->
		
		<div id="infoArea" class="frontContents js-boxes">
			<a href="<?php echo home_url(); ?>/category/news/">
				<h3><span>お知らせ</span></h3>
			</a>
			<div class="info">
				<?php get_template_part('loop','recently'); ?>
			</div>
		</div><!--/#infoArea-->
		
		<div id="adoptArea" class="frontContents js-boxes">
			<a href="<?php echo home_url(); ?>/cats/">
				<h3><span>里親募集</span></h3>
			</a>
			<a href="<?php echo home_url(); ?>/cats/">
				<img src="<?php echo get_template_directory_uri(); ?>/images/rescuecats.png" alt="">
				<p>里親募集中の<span>猫たちを見る</span></p>
			</a>
		</div><!--/#adoptArea-->
		
<?php get_footer(); ?>