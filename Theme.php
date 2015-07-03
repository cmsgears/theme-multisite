<?php
namespace themes\multisite;

// Yii Imports
use \Yii;

class Theme extends \yii\base\Theme {

    public $pathMap = [
        '@frontend/views' => '@themes/multisite/views',
        '@cmsgears' => '@themes/multisite/modules/cmsgears'
    ];

    public function init() {

        parent::init();

		// The path for pre-defined images (logo etc) directly accessed using the img tag and placed within the frontend/web/images directory.
		Yii::setAlias( "@images", "@web/images" );
		
		// The path for templates
		Yii::setAlias( "@templates", "@themes/frontend/views/templates" );
	}
}

?>