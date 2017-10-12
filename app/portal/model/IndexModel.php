<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/11 0011
 * Time: 17:36
 */
namespace app\portal\model;
use think\Model;
use think\db;
class IndexModel extends Model{
    public function getindexnews() {
       $data =  Db::table('ccf_portal_category_post')
            ->alias('a')
            ->join('ccf_portal_post b','a.post_id = b.id')
            ->join('ccf_portal_category c','a.category_id = c.id')
            ->where(['c.name'=>'首页新闻','b.recommended'=>'1'])
            ->select()
            ->toArray();
       foreach($data as $k => $v){
           $data[$k]['month'] = date('F',$v['update_time']);
           $data[$k]['day'] = date('d',$v['update_time']);
       }
return $data;
    }


}