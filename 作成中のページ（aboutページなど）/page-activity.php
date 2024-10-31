<?php get_header(); ?>
<div class="contentsWrap">
	<div id="aboutArea">
		<h3><span>保護活動について</span></h3>
		<p class="aboutText">
			身近な動物として親しまれている猫ですが、残念なことに全ての猫たちが幸せに人生を全うできているわけではありません。捨て猫や多頭崩壊の現場の猫たちに、安全で衛生的な環境や、適切な食事・治療を提供できるように保護する活動があります。<br>私たち「Mew &amp; I」は、そんな猫たちを保護し、猫たちと安心してずっと暮らせるお家とのご縁を結びたいと考えています。
		</p>
		<div class="aboutLink">
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