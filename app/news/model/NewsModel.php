<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2017/10/13
 * Time: 20:42
 */
namespace app\news\model;
use  think\Model;
use think\Db;
class NewsModel extends Model{
    //获取所有的新闻信息
    public function getallnews(){
        $data =  Db::table('ccf_portal_category_post')
        ->alias('a')
        ->join('ccf_portal_post b','a.post_id = b.id')
        ->join('ccf_portal_category c','a.category_id = c.id')
        ->where(['b.post_status'=>'1'])
        ->select()
        ->toArray();
        foreach($data as $k => $v){
            $data[$k]['month'] = date('F',$v['update_time']);
            $data[$k]['day'] = date('d',$v['update_time']);
        }
        return $data;
    }
}