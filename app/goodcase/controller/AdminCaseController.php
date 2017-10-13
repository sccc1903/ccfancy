<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 20:17
 */
namespace app\goodcase\controller;

 use cmf\controller\AdminBaseController;
 use think\Db;

 class AdminCaseController extends AdminBaseController{
//     首页
     public function index()
     {
         $data = Db::name('case')->select()->toArray();
         $this->assign('case',$data);
         return $this->fetch(':index');
     }
//     添加页面
     public function add(){

         return $this->fetch(':add');
     }
//添加保存
     public function addsave() {
         $data = $this->request->param();
         if (!empty($data['photo_names']) && !empty($data['photo_urls'])) {
             $data['post']['photos'] = [];
             foreach ($data['photo_urls'] as $key => $url) {
                 $photoUrl = cmf_asset_relative_url($url);
                 array_push($data['post']['photos'], ["url" => $photoUrl, "name" => $data['photo_names'][$key]]);
             }
             $data['post']['photos'] = serialize($data['post']['photos']);
         }
         $_data = $data['post'];
         Db::name('case')->insert($_data);
         $this->success("保存成功！", url("adminCase/index"));
    }
//    修改页面
     public function edit()
     {
         $id = $this->request->param('id');

         $info = Db::name('case')->where('id',$id)->find();

         $info['content'] = htmlspecialchars_decode($info['content']);
         $photos = unserialize($info['photos']);
         $this->assign('photos',$photos);
         $this->assign('info',$info);
         return $this->fetch(':edit');
     }
//     修改保存
     public function saveedit()
     {
         $data = $this->request->param();

         $data['post']['image'] = cmf_asset_relative_url($data['post']['image']);
         if (!empty($data['photo_names']) && !empty($data['photo_urls'])) {
             $data['post']['photos'] = [];
             foreach ($data['photo_urls'] as $key => $url) {
                 $photoUrl = cmf_asset_relative_url($url);
                 array_push($data['post']['photos'], ["url" => $photoUrl, "name" => $data['photo_names'][$key]]);
             }
             $data['post']['photos'] = serialize($data['post']['photos']);
         }

         $_data = $data['post'];

         Db::name('case')->update($_data);

          $this->success('修改成功','adminCase/index');
     }
//删除
     public function delete()
     {

         $id = $this->request->param('id');
         Db::name('case')->where('id',$id)->delete();
        $this->success('删除成功','adminCase/index');
     }
 }