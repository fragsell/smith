<?php
/**
 * AppAsset
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 20.10.2014
 * @since 1.0.0
 */

namespace frontend\assets;
use \skeeks\cms\base\AssetBundle;

/**
 * Class AppAsset
 * @package frontend\assets
 */
class SmithAsset extends AssetBundle
{
    public $basePath = '@webroot/smith';
    public $baseUrl = '@web/smith';
    public $css = [
        //'css/phone.css',
        'css/app.css'

    ];
    public $js = [

    ];
    public $depends = [

    ];
}