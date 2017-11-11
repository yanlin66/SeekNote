<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"D:\wamp64\www\myhome\thinkphp5.0\public/../application/index\view\write\index.html";i:1510397011;s:84:"D:\wamp64\www\myhome\thinkphp5.0\public/../application/index\view\public\header.html";i:1510397011;s:84:"D:\wamp64\www\myhome\thinkphp5.0\public/../application/index\view\public\footer.html";i:1510397811;}*/ ?>
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
        <div class="search_form">
            <input type="text" name="search" placeholder="请输入关键词" id="search" onfocus="this.placeholder=''" onblur="this.placeholder='请输入关键词'">
        </div>
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
        <li><a class="active" href="<?php echo url('index/write/one'); ?>"></a>笔记</li>
        <li><a class="" href="<?php echo url('index/write/scend'); ?>"></a>杂记</li>
        <li><a href="<?php echo url('index/write/three'); ?>"></a>话题</li>
    </ul>
</div>
<div class="write-form">
    <form class="form-horizontal" id="form" method="post" action="<?php echo url('index/write/addnote'); ?>">
        <div class="form-group">
            <label class="col-sm-2 control-label">标题</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="请输入标题" name="nname" id="notetitle">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">内容</label>
            <div class="col-sm-10">
                <input name="ncon" type="hidden" id="ncon"/>
                <div id="editor" type="text/plain" style="width:100%;height:300px;"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">时间</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="notetime" placeholder="Time" name="ntime" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">分类</label>
            <div class="col-sm-10">
                <select class="form-control" name="ctype" id="notetype">
                    <option value="0">请输入分类</option>
                    <option value="html">html</option>
                    <option value="css">css</option>
                    <option value="js">js</option>
                    <option value="php">php</option>
                    <option value="es6">es6</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="nnum" value="0" id="notenum"> 设置初始查阅数
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
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
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor',{
        //工具栏
        toolbars: [
            ['fullscreen', 'source', 'undo', 'redo'],
            ['bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc']
        ]
    });
    //对编辑器的操作最好在编辑器ready之后再做
    ue.ready(function() {
        //设置编辑器的内容
        ue.setContent('请输入内容');
        //获取html内容，返回: <p>hello</p>
        var html = ue.getContent();
        //获取纯文本内容，返回: hello
        var txt = ue.getContentTxt();
        //console.log(txt);
    });
    function yzCon(){
        $("#ncon").val(UE.getEditor('editor').getContent());
    }
    $(function(){
        //实例化日期
        $("#notetime").jeDate({
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
            yzCon();
            if(!$("#notetitle").val()){
                layer.msg('请输入标题',{time:1000});
                return false;
            }
            if($("#ncon").val()=='请输入内容'){
                layer.msg('请输入内容',{time:1000});
                return false;
            }
            if($("#notetype").val()=='0'){
                layer.msg('请选择分类',{time:1000});
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