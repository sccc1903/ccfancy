<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/12 0012
 * Time: 11:16
 */
namespace app\partner\controller;

use cmf\controller\HomeBaseController;
use think\Db;
class PartnerController extends HomeBaseController{
    public function index() {
        return $this->fetch(':index');
    }
}