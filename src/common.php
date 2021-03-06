<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2017 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------
use think\Route;

Route::group('log-viewer', function () {

    //Route::get(':month/:file', 'Controller@read');
    Route::get(['log-viewer-detail', ':month/:file'], 'Controller@read');
    Route::get(['log-viewer', '/'], 'Controller@index');

}, ['prefix' => '\\yunwuxin\\logViewer\\']);