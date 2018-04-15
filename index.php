<?php
// +----------------------------------------------------------------------
// | LvevenFrameWork [ WE CAN DO IT JUST lveven IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://www.lveven.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: lveven <lvevening@163.com>
// +----------------------------------------------------------------------
// | lveven 入口文件
// +----------------------------------------------------------------------

define('APP_PATH', __DIR__ . '/');
// 开启调试模式
define('APP_DEBUG', true);
// 加载框架文件
require(APP_PATH . 'lveven/Lveven.php');
// 加载配置文件
$config = require(APP_PATH . 'config/config.php');
// 实例化框架类
(new lveven\Lveven($config))->run();
