<?php 
use yii\helpers\Html; 

$coreProperties = $this->context->getCoreProperties();
?>
<section class="module module-basic module-page" id="module-page">
	<div class="texture texture-default"></div>
	<div class="module-wrap-content">
		<div class="module-header">
			<h1 class="align-middle"><?=$page->name?></h1>
		</div>
		<div class="module-content content-80">
			<?=$content->content?>
		</div>
	</div>
</section>