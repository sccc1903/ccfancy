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
    public function caselist() {

        return $this->fetch(':index');
    }
}