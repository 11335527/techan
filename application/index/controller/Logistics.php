<?php
namespace app\index\controller;
use think\Controller;


class Logistics extends Controller {

    public function tools(){
    

        $this->assign('menu', '物流工具');
        return $this->fetch();
    }
    
    /**
    *模版页面
    *add by zk 2016/8/15 16:47
    */
    public function template(){
        $this->assign('menu', '快递模版');
        return $this->fetch();
    }
    
    /**
    *保存运费模版
    *add by zk 2016/8/15 16:46
    */
    public function saveTemplate(){

    }
}
