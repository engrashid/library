<?php
namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

class AngularAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $js = [
        'angular/angular.js',
        'angular-route/angular-route.js',
        'angular-strap/dist/angular-strap.js',
        'angular-animate/angular-animate.js',
        'angular-bootstrap/ui-bootstrap.min.js',
        'angular-bootstrap/ui-bootstrap-tpls.min.js',
        'ng-file-upload/ng-file-upload.min.js'
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
