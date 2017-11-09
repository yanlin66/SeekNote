<?php
namespace app\index\controller;

use app\index\model\Write as Write;
use app\index\model\Jottings as Jottings;
use app\index\model\Leaveword as Leaveword;
use think\Controller;

class WriteController extends Controller
{
    // 获取用户数据列表并输出
    public function index()
    {
        $catgory='write';
        $this->assign('catgory', $catgory);
        return $this->fetch();
    }
    public function one()
    {
        $catgory='write';
        $this->assign('catgory', $catgory);
        return $this->fetch('write/one');
    }
    public function scend()
    {
        $catgory='write';
        $this->assign('catgory', $catgory);
        return $this->fetch('write/scend');
    }
    public function three()
    {
        $catgory='write';
        $this->assign('catgory', $catgory);
        return $this->fetch('write/three');
    }
    public function addnote()
    {
        $write = new Write;
        if ($write->allowField(true)->save(input('post.'))) {
            $catgory='write';
            $success='note';
            $this->assign('catgory', $catgory);
            $yes='成功写入-> ' . $write->ctype . '分类的第' . $write->nid . '篇笔记';
            $this->assign('yes', $yes);
            $this->assign('success', $success);
            return $this->fetch('write/success');
        } else {
            return $write->getError();
        }
    }
    public function addjottings()
    {
        $write = new Jottings;
        if ($write->allowField(true)->save(input('post.'))) {
            $catgory='write';
            $success='jottings';
            $this->assign('catgory', $catgory);
            $yes='成功写入-> 第' . $write->id . '篇杂记';
            $this->assign('yes', $yes);
            $this->assign('success', $success);
            return $this->fetch('write/success');
        } else {
            return $write->getError();
        }
    }
    public function addleaver()
    {
        $write = new Leaveword;
        if ($write->allowField(true)->save(input('post.'))) {
            $catgory='write';
            $success='leaveword';
            $this->assign('catgory', $catgory);
            $yes='成功发起-> 第' . $write->id . '个话题';
            $this->assign('yes', $yes);
            $this->assign('success', $success);
            return $this->fetch('write/success');
        } else {
            return $write->getError();
        }
    }
}