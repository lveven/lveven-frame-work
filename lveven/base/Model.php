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
// | Model 
// +----------------------------------------------------------------------
namespace lveven\base;
use lveven\db\Sql;

class Model extends Sql
{
    protected $model;

    public function __construct()
    {
        // 获取数据库表名
        if (!$this->table) {

            // 获取模型类名称
            $this->model = get_class($this);

            // 删除类名最后的 Model 字符
            $this->model = substr($this->model, 0, -5);

            // 数据库表名与类名一致
            $this->table = strtolower($this->model);
        }
    }
}