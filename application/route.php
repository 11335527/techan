<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    '[goods]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    'doc'=>'index/index/doc',
    'goodsList'=>'index/goods/goodsList',
    'addGoods'=>'index/goods/addGoods',
    'editGoods/:id'=>'index/goods/editGoods',
    'addManager'=>'index/manager/addManager',
    'editManager'=>'index/manager/editManager',
    'editAuth'=>'index/manager/editAuth',
    'managerList'=>'index/manager/managerList',
    'tools'=>'index/logistics/tools',
    'template'=>'index/logistics/template',

    'createOrder'=>'api/order/createOrder',



];
