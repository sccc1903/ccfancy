<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 20:17
 */
 namespace app\admin\controller;
 use cmf\controller\AdminBaseController;
 use think\Db;

 class CaseController extends AdminBaseController{
//     首页
     public function index()
     {
         $data = Db::name('case')->select()->toArray();
         $this->assign('case',$data);
         return $this->fetch();
     }
//     添加页面
     public function add(){

         return $this->fetch();
     }
//添加保存
     public function addsave() {
         $data = $this->request->param();
         $_data = $data['post'];
         Db::name('case')->insert($_data);
         $this->success("保存成功！", url("case/index"));
    }
//    修改页面
     public function edit()
     {
         $id = $this->request->param('id');
         
         $info = Db::name('case')->where('id',$id)->find();
         $this->assign('info',$info);
         return $this->fetch();
     }
//     修改保存
     public function saveedit()
     {
         $data = $this->request->param();

         $data['post']['image'] = cmf_asset_relative_url($data['post']['image']);

         Db::name('case')->update($data['post']);

          $this->success('修改成功','case/index');
     }
//删除
     public function delete()
     {
         $id = $this->request->param();
         Db::name('case')->where('id',$id)->delete();
        $this->success('删除成功','case/index');
     }
 }