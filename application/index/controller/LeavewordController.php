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
        //dump(count($result));
        //留言目录里的对应回复数量
        $replynum=count($result);
        $this->assign('say', $result);
        $catgory='leaveword';
        $this->assign('replynum', $replynum);
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
            echo "add_success";
        } else {
            echo "add_filed";
        }
    }
    //更新方法一
//    public function update($cid='',$num='')
//    {
//        $catgory='leaveword';
//        $this->assign('catgory', $catgory);
//        // 更新记录
//        $result = Db::execute('update seek_leaver set num = '.$num.' where id ='.$cid);
//        // dump($result);
//        if($result==1){
//            return $this->fetch("leaveword/index");
//        }
//
//    }
    //更新方法二
    public function update()
    {
        $catgory='leaveword';
        $this->assign('catgory', $catgory);
        $cid=$_POST['cid'];
        $num=$_POST['num'];
        // 更新记录
        $result = Db::execute('update seek_leaver set num = '.$num.' where id ='.$cid);
        // dump($result);
        if($result==1){
            echo 'reply_success';
        }else{
            echo 'reply_field';
        }

    }
}