## 简述

**lvevenFrameWork**是一款简单的PHP MVC框架，目的是方便学习《手把手编写自己的PHP MVC框架》 。

要求：

* PHP 5.4.0+

## 目录说明

```
project                 根目录
├─app                   应用目录
│  ├─controllers        控制器目录
│  ├─models             模块目录
│  ├─views              视图目录
├─config                配置文件目录
├─lveven                框架核心目录
├─static                静态文件目录
├─index.php             入口文件
```

## 使用

### 1.安装
Github安装：
```
git clone https://github.com/lveven/lvevenFrameWork.git project
```
Composer安装：
```
composer create-project lveven/lvevenFrameWork project --no-dev
```
这两个命令都会将代码安装到`project`目录，不指定就是默认的`lvevenFrameWork`目录。

Composer安装方式中，`--no-dev`表示不安装-dev依赖包（PHPUnit）。

### 2. 创建数据库

在数据库中创建名为 project 的数据库，并插入两条记录，命令：

```
CREATE DATABASE `project` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `project`;

CREATE TABLE `item` (
    `id` int(11) NOT NULL auto_increment,
    `item_name` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
 
INSERT INTO `item` VALUES(1, 'Hello World.');
INSERT INTO `item` VALUES(2, 'Lets go!');
```

### 3.修改数据库配置文件

打开配置文件 config/config.php ，使之与自己的数据库匹配

```
$config['db']['host'] = 'localhost';
$config['db']['username'] = 'root';
$config['db']['password'] = '123456';
$config['db']['dbname'] = 'project';
```

### 4.配置Nginx或Apache
在Apache或Nginx中创建一个站点，把 project 设置为站点根目录（入口文件 index.php 所在的目录）。

然后设置单一入口， Apache服务器配置：
```
<IfModule mod_rewrite.c>
    # 打开Rerite功能
    RewriteEngine On

    # 如果请求的是真实存在的文件或目录，直接访问
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d

    # 如果访问的文件或目录不是真事存在，分发请求至 index.php
    RewriteRule . index.php
</IfModule>
```
Nginx服务器配置：
```
location / {
    # 重新向所有非真实存在的请求到index.php
    try_files $uri $uri/ /index.php$args;
}
```

### 5.测试访问

然后访问站点域名：http://localhost/ 就可以了。
