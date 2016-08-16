<?php
namespace app\index\controller;
use think\Controller;
class Order extends Controller
{
    //生产订单
    public function add()
    {

    }

    //生成唯一订单号
    function getOrderNum($uid){
        return 'SP'.$uid.rand(1000,9999).time();
    }
}
