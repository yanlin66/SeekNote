<?php
namespace app\index\controller;

use app\index\model\Leaveword as Leaveword;
use think\Controller;

class LeavewordController extends Controller
{
    // 获取用户数据列表并输出
    public function index()
    {
        $list = Leaveword::all();
        $this->assign('list', $list);
        $catgory='leaveword';
        $this->assign('catgory', $catgory);
        return $this->fetch();
    }
}