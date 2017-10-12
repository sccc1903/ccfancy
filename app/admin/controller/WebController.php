<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/12 0012
 * Time: 16:17
 */
namespace app\admin\controller;

use cmf\controller\AdminBaseController;
use think\Db;

class WebController extends AdminBaseController{

    public function foot() {
        $data = Db::name('foot')->find();
        if (!empty($data)) {
            $this->assign('data', $data);
        }
        return $this->fetch('foot');
    }

    public function footsave() {
        $data = $this->request->param();

        Db::name('foot')->insert($data);

        $this->success('保存成功','web/editfoot');
    }

    public function editfoot() {
        $data = Db::name('foot')->find();
        $this->assign('data',$data);
        return $this->fetch('editfoot');
    }
    public function footeditsave() {
        $data = $this->request->param();

        Db::name('foot')->update($data);

        $this->success('保存成功','web/editfoot');
    }
}