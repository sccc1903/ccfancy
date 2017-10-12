<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/12 0012
 * Time: 11:16
 */
namespace app\goodcase\controller;
use cmf\controller\HomeBaseController;
use think\Db;
class CaseController extends HomeBaseController{
    public function index() {
        $goodcase = Db::name('case')->select()->toArray();


        $this->assign('case',$goodcase);
        return $this->fetch(':index');
    }
    public function detail() {
        $case_id = $this->request->param('id');
        $case_data = Db::name('case')->where('id',$case_id)->find();

        $this->assign('case_data',$case_data);
        return $this->fetch(':detail');
    }
}