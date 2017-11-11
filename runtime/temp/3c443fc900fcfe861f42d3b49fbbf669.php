<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"D:\wamp64\www\myhome\thinkphp5.0\public/../application/index\view\search\index.html";i:1510399053;s:84:"D:\wamp64\www\myhome\thinkphp5.0\public/../application/index\view\public\header.html";i:1510397011;s:84:"D:\wamp64\www\myhome\thinkphp5.0\public/../application/index\view\public\footer.html";i:1510397811;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>搜索结果</title>
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
        <div class="search_form">
            <input type="text" name="search" placeholder="请输入关键词" id="search" onfocus="this.placeholder=''" onblur="this.placeholder='请输入关键词'">
        </div>
    </div>
</header>
<main>
<style>
	body{
		background-color: #f2f2f2;
	}
</style>
<?php switch($result): case "1": ?>
        <div class="empty-center" style="margin: 10% auto;width: 100%;text-align: center;color: #fa0034;">
        	<span>功能完善中.....</span>
        </div>
    <?php break; case "2": ?>
        <div class="empty-center" style="margin: 10% auto;width: 100%;text-align: center;color: #006900;">
        	<span>不好意思啊，暂无相关内容! <br><br>换个关键词吧............</span>
        </div>
    <?php break; endswitch; ?>
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
    };
    $(function(){
        //回车搜索
        $("#search").keydown(function(event){
            event=document.all?window.event:event;
            if((event.keyCode || event.which)==13){
                $.get("<?php echo url('search/select'); ?>",{ search:$("#search").val()},function(data){
                    console.log(data);
                    if(data){
                    	location.href="<?php echo url('search/index'); ?>?result="+data;
                    }
                })
            }
        });
    })
</script>
</body>
</html>