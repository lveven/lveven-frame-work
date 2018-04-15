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
// | Controller 
// +----------------------------------------------------------------------
namespace lveven\base;
class Controller
{
    protected $_controller;
    protected $_action;
    protected $_view;

    // 构造函数，初始化属性，并实例化对应模型
    public function __construct($controller, $action)
    {
        $this->_controller = $controller;
        $this->_action = $action;
        $this->_view = new View($controller, $action);
    }

    // 分配变量
    public function assign($name, $value)
    {
        $this->_view->assign($name, $value);
    }

    // 渲染视图
    public function render()
    {
        $this->_view->render();
    }
}