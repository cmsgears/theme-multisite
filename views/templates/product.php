<?php 
// Yii Imports
use yii\helpers\Html; 

// CMG Imports
use cmsgears\core\common\utilities\CodeGenUtil;

$coreProperties = $this->context->getCoreProperties();
$this->title	= $coreProperties->getSiteTitle() . " | " . $product->name;
$avatar			= CodeGenUtil::getImageThumbTag( $product->avatar, [ 'class' => 'avatar', 'image' => 'leaf' ] );
?>
<section class="module module-basic module-product" id="module-product">
	<div class="module-wrap-content">
		<div class="module-header">
			<div class="texture texture-wall"></div>
			<div class="header-content clearfix">
				<div class="wrap-avatar"><?=$avatar?></div>
				<div class="wrap-summary">
					<h3><?=$product->name?></h3>
					<p><?=$content->summary?></p>
				</div>
			</div>
		</div>
		<div class="module-content content-80">
			<?=$content->content?>
		</div>
	</div>
</section>