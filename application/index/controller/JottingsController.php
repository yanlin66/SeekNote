<?php
namespace app\index\controller;

use app\index\model\Jottings as Jottings;
use think\Controller;

class JottingsController extends Controller
{
    // 获取用户数据列表并输出
    public function index()
    {
        $list = Jottings::paginate(2);
        $this->assign('list', $list);
        $catgory='jottings';
        $this->assign('catgory', $catgory);
        return $this->fetch();
    }
}