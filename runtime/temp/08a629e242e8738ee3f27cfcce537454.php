<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"D:\wamp64\www\myhome\thinkphp5.0\public/../application/index\view\index\index.html";i:1510225981;s:89:"D:\wamp64\www\myhome\thinkphp5.0\public/../application/index\view\indexPublic\header.html";i:1510138337;s:89:"D:\wamp64\www\myhome\thinkphp5.0\public/../application/index\view\indexPublic\footer.html";i:1510138337;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="/static/css/base.css">
    <link rel="stylesheet" href="/static/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/static/font/iconfont.css">
    <link rel="stylesheet" href="/static/css/style.css">
    <script src="/static/js/jquery.min.js"></script>
</head>
<body>
<header>
    <div class="head">
        <?php switch($catgory): case "index": ?>
            <a href="<?php echo url('index/index'); ?>" class="active" >首页</a>
            <a href="<?php echo url('note/index'); ?>">笔记</a>
            <a href="<?php echo url('jottings/index'); ?>">杂记</a>
            <a href="<?php echo url('leaveword/index'); ?>">留言</a>
            <a href="<?php echo url('write/index'); ?>">写入</a>
        <?php break; case "note": ?>
            <a href="<?php echo url('index/index'); ?>">首页</a>
            <a href="<?php echo url('note/index'); ?>" class="active" >笔记</a>
            <a href="<?php echo url('jottings/index'); ?>">杂记</a>
            <a href="<?php echo url('leaveword/index'); ?>">留言</a>
            <a href="<?php echo url('write/index'); ?>">写入</a>
        <?php break; case "jottings": ?>
            <a href="<?php echo url('index/index'); ?>">首页</a>
            <a href="<?php echo url('note/index'); ?>">笔记</a>
            <a href="<?php echo url('jottings/index'); ?>" class="active" >杂记</a>
            <a href="<?php echo url('leaveword/index'); ?>">留言</a>
            <a href="<?php echo url('write/index'); ?>">写入</a>
        <?php break; case "leaveword": ?>
            <a href="<?php echo url('index/index'); ?>">首页</a>
            <a href="<?php echo url('note/index'); ?>">笔记</a>
            <a href="<?php echo url('jottings/index'); ?>">杂记</a>
            <a href="<?php echo url('leaveword/index'); ?>" class="active" >留言</a>
            <a href="<?php echo url('write/index'); ?>">写入</a>
        <?php break; case "write": ?>
            <a href="<?php echo url('index/index'); ?>">首页</a>
            <a href="<?php echo url('note/index'); ?>">笔记</a>
            <a href="<?php echo url('jottings/index'); ?>">杂记</a>
            <a href="<?php echo url('leaveword/index'); ?>">留言</a>
            <a href="<?php echo url('write/index'); ?>" class="active" >写入</a>
        <?php break; endswitch; ?>
    </div>
</header>
<main>
<style>
    header{
        color: #fff;z-index: 9999;background-color: rgba(0,0,0,0);
    }
    footer{
        color: #666;z-index: 9999;background-color: rgba(0,0,0,0);
    }
    canvas {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        user-select: none;
    }
    h2{
        position: relative;
        z-index: 9999;color: #fff !important;
    }
    .index-info{
        position: relative;
        z-index: 9999;
    }
    .index-list{
        color: #fff !important;
    }
    .index-list p{
        color: #fff !important;
    }
    #scene {
        position: fixed;top: 0;left: 0;right: 0;bottom: 0;margin: auto;z-index: 1;
        background-color: black;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        user-select: none;
    }
</style>
<h2>信息</h2>
<canvas id='scene'></canvas>
<div class="index-info">
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
    <div class="index-list">
        ID：<?php echo $user['aid']; ?><br/>
        昵称：<?php echo $user['aname']; ?><br/>
        <p><?php echo $user['acon']; ?></p>
        职位：<?php echo $user['atype']; ?><br/>
        生日：<?php echo $user['atime']; ?><br/>
        查看次数：<?php echo $user['anum']; ?>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<script src="/static/js/nebula.js"></script>
</main>
<footer>
    <div>
        非商业-个人开发
    </div>
    备案号：晋ICP备17004757号-1
</footer>
<script>
    var ch=window.innerHeight;
    var jh=$("header").height()+$("footer").height();
    var yh=$("main").height();
    if((jh+yh)>ch){
        $("footer").css("position","static");
    }
    window.onresize = function(){
        var ch=window.innerHeight;
        var jh=$("nav").height()+$("header").height()+$("footer").height();
        $("main").css("min-height",(ch-jh)+"px");
    }
</script>
</body>
</html>