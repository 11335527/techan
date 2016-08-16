<?php
namespace app\api\controller;
use think\Controller;
use think\Request;
class Order extends Controller
{
    //生成订单
    public function createOrder(Request $request)
    {

        $post=$request->post();
        $post['goods']=json_decode($post['goods'],TRUE);
        return $post;

    }

    //生成唯一订单号
    function getOrderNum($uid){
        return 'SP'.$uid.rand(1000,9999).time();
    }
}
