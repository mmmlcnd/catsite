		<a id="camAreaAnchor" class="anchor"></a>
		<div class="camArea">		
			<div class="caArea">
				<div id="contactArea">
					<a href="<?php echo get_permalink(11); ?>">
						<h3><span>お問い合わせ</span></h3>
						<img src="<?php echo get_template_directory_uri(); ?>/images/contact.png" alt="">
						<p>里親のご応募やご質問は<span>こちらからどうぞ</span></p>
					</a>
				</div><!--/#contactArea-->
				<a id="accessAreaAnchor" class="anchor"></a>
				<div id="accessArea">
						<h3><span>アクセス</span></h3>
						<div class="accessT">
							<p>〒000-0000 神戸市中央区A町00</p>
							<p>電話番号&#058;000-000-0000</p>
							<p>営業時間&#058;10:00~19:00</p>
						</div>
				</div><!--/#accessArea-->
			</div><!--/.caArea-->
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.6660809038726!2d135.19095871496958!3d34.6883761913863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60008efbd89bc4e7%3A0xd901fd97f5288c44!2z44CSNjUwLTAwMzQg5YW15bqr55yM56We5oi45biC5Lit5aSu5Yy65Lqs55S677yW77yX!5e0!3m2!1sja!2sjp!4v1580296857980!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</div><!--/.camArea-->
	</main>
	<footer>
		<p id="pageTop"><a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/images/toTop.png" alt="ページトップ"></a></p>
        <hr>
        <nav id="sNavi">
			<?php
			$args = array(
				'menu' => 'global-navigation',
				'container' => false,
				);
			wp_nav_menu($args);
			?>
		</nav>
		<p><small>&copy;Mew &amp; I. All Rights Reserved.</small></p>
		<div class="footerL">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/catlogo.png" alt="Mew and I">
			</a>
		</div>
	</footer>
</div><!--/#wrap-->
<?php wp_footer(); ?>
</body>
</html>