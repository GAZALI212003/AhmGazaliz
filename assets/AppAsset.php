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
        'template/css/core.css',
        'template/css/components.css',
        'template/css/icons.css',
        'template/css/pages.css',
        'template/css/resvonsive.css',
    ];
    public $js = [
        'template/js/modernizr.min.css',
        'template/js/boostrap.min.css',
        'template/js/detect.js',
        'template/js/fastclick.js',
        'template/js/jquery.slimscroll.js',
        'template/js/jquery.blockUI.js',
        'template/js/waves.js',
        'template/js/wow.js',
        'template/js/jquery.nicescroll.js',
        'template/js/jquery.scrollTo.min.js',
        'template/js/jquery.core.js',
        'template/js/jquery.app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
