<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"D:\wamp64\www\myhome\thinkphp5.0\public/../application/index\view\leaveword\deiles.html";i:1510238144;s:89:"D:\wamp64\www\myhome\thinkphp5.0\public/../application/index\view\indexPublic\header.html";i:1510138337;s:89:"D:\wamp64\www\myhome\thinkphp5.0\public/../application/index\view\indexPublic\footer.html";i:1510138337;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>留言区</title>
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
    main{
        padding-bottom: 160px;
    }
    .layui-layer-content{
        color: #fff !important;
    }
</style>
<div class="leaveword-warp">
    <?php if(is_array($say) || $say instanceof \think\Collection || $say instanceof \think\Paginator): $i = 0; $__LIST__ = $say;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;switch($vo['type']): case "1": ?>
    <div class="type1">
        <div class="l-left">
            <span><?php echo $vo['name']; ?>：</span>
        </div>
        <div class="l-right">
            <p><?php echo $vo['say']; ?></p>
        </div>
    </div>
            <?php break; case "0": ?>
    <div class="type2">
        <div class="l-left">
            <p><?php echo $vo['say']; ?></p>
        </div>
        <div class="l-right">
            <?php echo $vo['name']; ?>：
        </div>
    </div>
            <?php break; endswitch; endforeach; endif; else: echo "" ;endif; ?>
    <input type="hidden" value="<?php echo $cid; ?>" id="fl">
</div>
<div class="leaveword-speak">
    <span>
    <?php switch($ltype): case "seek": ?><i type-attr="1">seek</i><?php break; default: ?><i type-attr="0">路人</i><input type="text" placeholder="请输入你的昵称" id="sayname">
    <?php endswitch; ?>
    发言：
    </span>
    <textarea name="say" id="say" cols="30" rows="10" placeholder="请输入想要表达的话" onfocus="this.placeholder=''" onblur="this.placeholder='请输入想要表达的话'"></textarea>
    <button class="btn btn-success" id="say-btn">提交</button>
    <i class="iconfont icon-triange_right" id="go-right"></i>
</div>
<div class="leaveword-speak-open">
    <i class="iconfont icon-triange_right" id="go-speak"></i>
</div>
<script type="text/javascript" src="/static/layer/layer.js"></script>
<script>
    $(function(){
        //说话人
        var sayperson=$(".leaveword-speak span i").html();
        //说话的内容
        var say=$("#say").val();
        //说话人的身份
        var saytype=$(".leaveword-speak span i").attr("type-attr");
        //说话时间
        var saytime=new Date();
        var flag=true;
        //对话框关闭
        $("#go-right").click(function () {
            $(".leaveword-speak").css("visibility","hidden");
            $(".leaveword-speak-open").show();
        });
        $("#go-speak").click(function () {
            $(".leaveword-speak").css("visibility","visible");
            $(".leaveword-speak-open").hide();
        });
        // alert(saytime.toLocaleString());
        $("#sayname")
            .focus(function () {
                this.placeholder='';
            })
            .blur(function () {
                if($(this).val()==""){
                    layer.msg("昵称不可为空",{"time":1500});
                    this.placeholder='请输入你的昵称';
                }else{
                    flag=false;
                    sayperson=$("#sayname").val();
                }
            });
        //点击发言
        $("#say-btn").click(function(){
            if(flag){
                if($("#sayname").val()==""){
                    layer.msg("请输入您的昵称再发言",{"time":1500});
                    $("#sayname").focus();
                    return false;
                }
            }
            say=$("#say").val();
//            $(".leaveword-warp").append(
//                    ' <div class="type1">\n' +
//                    '       <div class="l-left">\n' +
//                    '             <span>'+sayperson+'：</span>\n' +
//                    '       </div>\n' +
//                    '       <div class="l-right">\n' +
//                    '             <p>'+say+'</p>\n' +
//                    '       </div>\n' +
//                    ' </div>'
//            );
            $.post("<?php echo url('leaveword/add'); ?>",{ name: sayperson, say: say,cid:$("#fl").val(),type:saytype,time:saytime.toLocaleString()} ,function(data){
                if(data=="success"){
                    location.href=''
                    // location.href='<?php echo url("leaveword/add"); ?>?cid='+$("#fl").val();
                }
            });
        })
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