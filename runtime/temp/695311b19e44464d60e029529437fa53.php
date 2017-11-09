<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"D:\wamp64\www\myhome\thinkphp5.0\public/../application/index\view\write\three.html";i:1510225981;s:89:"D:\wamp64\www\myhome\thinkphp5.0\public/../application/index\view\indexPublic\header.html";i:1510138337;s:89:"D:\wamp64\www\myhome\thinkphp5.0\public/../application/index\view\indexPublic\footer.html";i:1510138337;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>写入区</title>
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
<script type="text/javascript" charset="utf-8" src="/static/utf8-php/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/utf8-php/ueditor.all.min.js"> </script>
<style>
    .layui-layer-content{
        color: #fff !important;
    }
</style>
<div class="title">
    <ul>
        <li><a class="" href="<?php echo url('index/write/one'); ?>"></a>笔记</li>
        <li><a href="<?php echo url('index/write/scend'); ?>"></a>杂记</li>
        <li><a class="active" href="<?php echo url('index/write/three'); ?>"></a>话题</li>
    </ul>
</div>
<div class="write-form">
    <form class="form-horizontal" id="form" method="post" action="<?php echo url('index/write/addleaver'); ?>">
        <div class="form-group">
            <label class="col-sm-2 control-label">话题</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="请输入标题" name="title" id="leavertitle">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">时间</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="time" placeholder="Time" name="time" >
            </div>
        </div>
        <div class="form-group" style="margin-top: 50px;">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-danger">提交</button>
            </div>
        </div>
    </form>
</div>
<link type="text/css" rel="stylesheet" href="/static/jeDate/skin/jedate.css">
<script type="text/javascript" src="/static/jeDate/jedate.js"></script>
<script type="text/javascript" src="/static/layer/layer.js"></script>
<script>
    $(function(){
        //实例化日期
        $("#time").jeDate({
            format:"YYYY-MM-DD",
            minDate:"2016-07-08",
            isShow:true,
            fixed:true,
            //层级高度
            okfun:function(obj) {
                $("#notetime").val(obj.val);
            },
            zIndex:2099,
        });
        $("#form").submit(function(){
            if(!$("#leavertitle").val()){
                layer.msg('请输入标题',{time:1000});
                return false;
            }
        });
    })
</script>
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
