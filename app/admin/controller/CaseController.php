<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 20:17
 */
 namespace app\admin\controller;
 use cmf\controller\AdminBaseController;

 class CaseController extends AdminBaseController{
     public function index()
     {

         return $this->fetch();
     }
     public function add(){
         return $this->fetch();
     }

     public function edit()
     {
         return $this->fetch();
     }

     public function delete()
     {
         return $this->fetch();
     }
 }