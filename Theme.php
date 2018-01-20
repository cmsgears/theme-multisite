<?php
namespace themes\multisite;

// Yii Imports
use \Yii;

class Theme extends \cmsgears\core\common\base\Theme {

    public $pathMap = [
        '@frontend/views' => '@themes/multisite/views',
        '@cmsgears' => '@themes/multisite/modules/cmsgears'
    ];

    public function init() {

        parent::init();

		// Initialise theme
    }
}
