<?php
/**
 * AppAsset
 *
 * @author Evgenj Chekhman <loki@kra.ru>
 * @link http://kra.ru/
 * @date 11.01.2018
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