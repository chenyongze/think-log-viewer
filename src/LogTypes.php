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
namespace yunwuxin\logViewer;

use ReflectionClass;
use think\Log;

class LogTypes
{
    protected static $types;

    static public function all()
    {
        if (empty(self::$types)) {
            self::$types = array_values((new ReflectionClass(Log::class))
                ->getConstants());
        }
        return self::$types;
    }
}