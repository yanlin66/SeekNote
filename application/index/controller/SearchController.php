<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class SearchController extends Controller
{
    // 获取用户数据列表并输出
    public function index()
    {
        $catgory='index';
        $this->assign('catgory', $catgory);
        return $this->fetch();
    }
    public function select()
    {
        $search=$_POST['search'];
        $result = Db::query('select * from seek_note where nname = '.$search);
        if($result==1){
            echo '1';
        }else{
            echo '2';
        }
    }
}