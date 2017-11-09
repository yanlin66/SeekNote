<?php
namespace app\index\controller;

use app\index\model\Leaveword as Leaveword;
use app\index\model\Leavewordlist as Leavewordlist;
use think\Controller;
use think\Db;

class LeavewordController extends Controller
{
    public function index()
    {
        $list = Leaveword::all();
        $this->assign('list', $list);
        $catgory='leaveword';
        $this->assign('catgory', $catgory);
        return $this->fetch();
    }
    public function deiles($cid='',$ltype='')
    {
        $leavewordlist = new Leavewordlist();
        // 查询数据集
        $result = Db::query('select * from seek_leaverlist where cid = '.$cid);
//        dump($result);
        $this->assign('say', $result);
        $catgory='leaveword';
        $this->assign('catgory', $catgory);
        $this->assign('ltype', $ltype);
        return $this->fetch("leaveword/deiles");
    }
}