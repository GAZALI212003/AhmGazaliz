<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'template2/vendor/bootstrap/css/bootstrap.min.css',
        'template2/css/fontawesome.css',
        'template2/css/templatemo-cyborg-gaming.css',
        'template2/css/owl.css',
        'template2/css/animate.css',
        
    ];
    public $js = [
        'template2/vendor/jquery/jquery.min.js',
        'template2/vendor/bootstrap/js/bootstrap.min.js',
        'template2/js/isotope.min.js',
        'template2/js/owl-carousel.js',
        'template2/js/tabs.js',
        'template2/js/popup.js',
        'template2/js/custom.js',
    
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
