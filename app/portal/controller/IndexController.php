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

use cmf\controller\HomeBaseController;
use think\Db;
class IndexController extends HomeBaseController
{
    public function index()
    {
        $slide = Db::name('slide_item')->where('status',1)->select()->toArray();
        $goodcase = Db::name('case')->select()->toArray();
        $this->assign('case',$goodcase);
        $this->assign('slide',$slide);
        return $this->fetch(':index');
    }
}
