<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/12 0012
 * Time: 11:16
 */
namespace app\contact\controller;

use cmf\controller\HomeBaseController;
use think\Db;
class ContactController extends HomeBaseController{
    public function index() {
        return $this->fetch(':index');
    }

    public function collect(){
        $data = $this->request->param();
        $res = Db::name('contact')->insert($data['data']);
        if($res){
            $message['status'] = 1;
            $message['msg'] = '提交成功我们会尽快和您联系';
           echo json_encode($message);
        }else{
            return json(['status'=>0,'msg'=>'提交失败请查证您的数据']);
        }
    }
}