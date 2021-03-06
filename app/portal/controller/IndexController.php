<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------
namespace app\portal\controller;

use app\portal\model\IndexModel;
use cmf\controller\HomeBaseController;
use think\Db;
class IndexController extends HomeBaseController
{
    public function index() {
//        首页幻灯片
        $slide = Db::name('slide_item')->where('status',1)->select()->toArray();
//        经典案例
        $goodcase = Db::name('case')->select()->toArray();
//        首页新闻
        $indexModel = New IndexModel();
        $news = $indexModel->getindexnews();
//        脚部信息 在HomeBaseController中通过方法获得

        $this->assign('new',$news);
        $this->assign('case',$goodcase);
        $this->assign('slide',$slide);
        return $this->fetch(':index');
    }


}
