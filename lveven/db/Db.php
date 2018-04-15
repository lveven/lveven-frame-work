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
// | Db 数据库操作类
// +----------------------------------------------------------------------
namespace lveven\db;
use PDO;
use PDOException;
class Db
{
    private static $pdo = null;

    public static function pdo()
    {
        if (self::$pdo !== null) {
            return self::$pdo;
        }

        try {
            $dsn    = sprintf('mysql:host=%s;dbname=%s;charset=utf8', DB_HOST, DB_NAME);
            $option = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

            return self::$pdo = new PDO($dsn, DB_USER, DB_PASS, $option);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
}