<?php
namespace app\index\controller;

use app\index\model\About as About;
use think\Controller;

class IndexController extends Controller
{
    // 获取用户数据列表并输出
    public function index()
    {
        $list = About::all();
        $this->assign('list', $list);
        $catgory='index';
        $this->assign('catgory', $catgory);
        return $this->fetch();
    }
}