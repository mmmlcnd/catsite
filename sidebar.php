
<div class="newsCategories">
	<section class="categories">
		<h4>お知らせ分類</h4>
		<div class="newsDetails">
			<ul>
				<?php
				$args=array(
					'title_li'=>'',//見出しを削除
					'show_count'=>true,//投稿数を表示
				);
				wp_list_categories($args);
				?>
			</ul>
		</div>
	</section>
</div>