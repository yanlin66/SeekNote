<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class SearchController extends Controller
{
    // 获取用户数据列表并输出
    public function index($result='')
    {
        $catgory='index';
        $this->assign('catgory', $catgory);
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function select()
    {
        // $search=$_POST['search'];
        // $result = Db::query('select * from seek_note where nname = '.$search);
        $result='2';
        if($result==1){
            echo '1';
        }else{
            echo '2';
        }
    }
}