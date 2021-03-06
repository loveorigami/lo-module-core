<?php

namespace lo\modules\core\main\widgets\menu;

use yii\web\AssetBundle;

/**
 * Class MenuAsset
 * @package lo\modules\core\main\widgets\menu
 * @author Lukyanov Andrey <loveorigami@mail.ru>
 */
class MenuAsset extends AssetBundle
{

    public $js = [
        'menu.js',
    ];
    public $css = [
        'menu.css',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . "/assets";
        parent::init();
    }

}