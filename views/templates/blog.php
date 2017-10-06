<?php
use cmsgears\widgets\blog\BlogPost;
?>
<section class="module module-basic module-page" id="module-blog">
	<div class="texture texture-default"></div>
	<div class="module-wrap-content">
		<div class="module-header">
			<h1 class="align-middle"><?=$page->name?></h1>
		</div>
		<div class="module-content content-80">
			<?=$content->content?>
		</div>
		<?= BlogPost::widget([
		        'options' => [ 'class' => 'content-80 blog-posts-regular' ]
		    ]);
		?>
	</div>
</section>