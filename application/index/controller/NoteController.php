<?php
namespace app\index\controller;

use app\index\model\Note as Note;
use think\Controller;

class NoteController extends Controller
{
    // 获取用户数据列表并输出
    public function index()
    {
        $list = Note::paginate(3);
        $this->assign('list', $list);
        $catgory='note';
        $this->assign('catgory', $catgory);
        return $this->fetch();
    }
}