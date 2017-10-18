<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/12 0012
 * Time: 11:16
 */
namespace app\news\controller;

use cmf\controller\HomeBaseController;
use think\Db;
use app\news\model\NewsModel;
class NewsController extends HomeBaseController{
    public function index() {
        $newModel = new NewsModel();
       $data = $newModel->getallnews();
        $this->assign('news',$data);
        return $this->fetch(':index');
    }
    public function detail() {
        return $this->fetch(':detail');
    }
}