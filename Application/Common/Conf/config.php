<?php
return array(
	//'配置项'=>'配置值'
	// 配置邮件发送服务器
    'MAIL_HOST' =>'smtp.163.com',//smtp服务器的名称
    'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
    'MAIL_USERNAME' =>'buct132@163.com',//你的邮箱名
    'MAIL_FROM' =>'buct132@163.com',//发件人地址
    'MAIL_FROMNAME'=>'梁生',//发件人姓名
    'MAIL_PASSWORD' =>'abc12345',//邮箱密码
    'MAIL_CHARSET' =>'utf-8',//设置邮件编码
    'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件

    'URL_ROUTER_ON' => true,
    'URL_ROUTE_RULES' => array(
        'login' => 'Home/Passport/toLogin',             //登陆
        'regist' => 'Home/Passport/toRegist',           //注册
        'logout' => 'Home/Passport/logout',             //退出登录

        'search' => 'Home/Search/index',                //搜索

        '/^item\/(\w+)$/' => 'Home/Items/index?id=:1',  //商品详情页

        'catalogs/:lm1/:lm2' => 'Home/Items/getItemsByCatalog', //根据目录搜索商品
        '/^catalogs\/(\d+)$/' => 'Home/Items/getItemsByCatalog?lm1=:1&lm2=-1',
        
        'UserCenter' => 'Home/User/Index',
        'myCart' => 'Home/User/user_cart',                      //购物车
        'order/checkout' => 'Home/Order/checkout',                //确认订单
        'order/success' => 'Home/Order/success',                //确认订单
        '/^order\/detail\/(\w+)$/' => 'Home/User/user_orderDetail?o=:1',                //确认订单
    ),
    //'配置项'=>'配置值'
    'DB_TYPE' => 'mongo', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'local', // 数据库名
    'DB_USER' => '', // 用户名
    'DB_PWD' => '', // 密码
    'DB_PORT' => '27017', // 端口
    'DB_NAME'=>'tp_mall',// 数据库名

    'URL_MODEL' => 2,
);
