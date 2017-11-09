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
        $this->assign('cid', $cid);
        return $this->fetch("leaveword/deiles");
    }
    public function add()
    {
        $catgory='leaveword';
        $this->assign('catgory', $catgory);
        $leavewordlist = new Leavewordlist();
        // 查询数据集
        if ($leavewordlist->allowField(true)->save(input('post.'))) {
            echo "success";
        } else {
            echo "filed";
        }
    }
    public function update($cid='')
    {
        $catgory='leaveword';
        $this->assign('catgory', $catgory);
        // 查询数据
        $result_num = Db::query('select num from seek_leaver where id = '.$cid);
        // 更新记录
        $result = Db::execute('update seek_leaver set num = '.$result_num.' where id = '.$cid);
        $this->assign('cid', $cid);
        return $this->fetch("leaveword/deiles");
    }
}