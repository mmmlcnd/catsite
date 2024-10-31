<section class="catCategories">
	<h4>猫の特徴から探す</h4>
	<div class="details">
		<ul>
			<?php
			$args=array(
				'title_li'=>'',//見出しを削除
				'show_count'=>true,//投稿数を表示
				'taxonomy'=>'catfeature',
			);
			wp_list_categories($args);
			?>
		</ul>
	</div>
</section><!-- /.categories -->