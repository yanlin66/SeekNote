-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-11-08 11:26:37
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seek`
--

-- --------------------------------------------------------

--
-- 表的结构 `seek_about`
--

CREATE TABLE IF NOT EXISTS `seek_about` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(255) NOT NULL COMMENT '个人名称',
  `acon` text NOT NULL COMMENT '个人介绍',
  `atype` varchar(255) NOT NULL COMMENT '职位性质',
  `atime` date NOT NULL COMMENT '编写时间',
  `anum` int(11) NOT NULL COMMENT '阅览次数',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `seek_about`
--

INSERT INTO `seek_about` (`aid`, `aname`, `acon`, `atype`, `atime`, `anum`) VALUES
(1, 'Seek', '积极乐观，自信向上，充满阳光', '开发人员', '2017-02-20', 0),
(2, 'Person', '积极乐观，自信向上，充满阳光', '维护人员', '2017-02-20', 0),
(3, 'Person', '积极乐观，自信向上，充满阳光', '维护人员', '2017-02-20', 0);

-- --------------------------------------------------------

--
-- 表的结构 `seek_jottings`
--

CREATE TABLE IF NOT EXISTS `seek_jottings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT '杂记标题',
  `con` text NOT NULL COMMENT '杂记内容',
  `time` date NOT NULL COMMENT '杂记时间',
  `type` varchar(255) NOT NULL COMMENT '杂记类型（引用，自写）',
  `author` varchar(255) NOT NULL COMMENT '杂记作者',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `seek_jottings`
--

INSERT INTO `seek_jottings` (`id`, `title`, `con`, `time`, `type`, `author`) VALUES
(1, '一个人独自在一个城市生活是什么感受？', '&nbsp;&nbsp;一起说说大家的感受，当自己孤零零生活在一座城市时，你是怎么样的感受，你是生来就受欢迎的人？你是选择孤独？还是选择寂寞？ ps:孤独和寂寞的区别，有天你走在大街上突然下雨了 你躲在屋檐下找遍了手机通讯录也不知道要找谁给你送伞 那一刻你是孤独的 而寂寞 是你一个人躲在屋檐下 安静的等雨停. 我的感受用一天的经历来说明吧： 在鸡腿面前站了很久，售货员说8元一个。看了很久默默的回来了，翻开手机只有10086发来的一条信息（生日快乐）。外面的天很阴，很想家。', '2017-11-06', '引用', '知乎'),
(2, '一个人需要有朋友', '&nbsp;&nbsp;一个人之所以需要朋友，不是因为朋友有多么地好，也不是因为朋友对于他有多么地有用。只是因为他需要朋友的环绕，仅仅只是因为它无需要。朋友，不是要他多么完美，只需要他适时地提醒，适时地陪伴，适时地与你同仇敌忾！当所有人都在关心你飞的高不高远不远的时候，只有一个人是关心你飞的累不累！这个人就是朋友。没有朋友并不可怕，可怕的就是误交，他会带着你，控制着你，以友情的名义索取着。所以一个人在交往的时候，要给自己一个明确的底线，因为有些人会不断尝试着破坏你的底线，当有一天你的底线没有了，你也就被别人控制了！人又绝交，才会有至交，所以不要害怕拒绝。更不要害怕没有朋友，当你选择做一个中心的时候，自然会有人靠近。你也自然会有朋友。\r\n对于你的工作问题：人在迷茫的时候，最好的事情就是手边的事情，在大学乃至人生的道路上，关键是看得宽，而不是看得远，做好自己身边的事情！你要相信，人的路都是一步一步走出来的，每个人在特定的阶段都会有自己该做的事情，急不得，等到你把身边的所有事情都做好了，自然就走到你的理想之塔下面，到时候你要做的就是攀登攀登再攀登！记住了，无论任何时候，有任何事情让你迷茫的时候，你都要相信自己手中握有最好的猎枪！只有这样，你才会成功！所以不要乱想，做好身边每一件你需要做的事情，你就会离你的梦想更进一步。你现在的工作其实就是你身边的事情，如果你连身边的工作都不去想处理好，又怎么能够去想别的事情呢？事情就是这样，一口吃不成胖子，当你痴迷在你的工作中的时候，你就会发现，原来你可以不那么荒废自己的人生。社会上既然有这样的职业，那么就会有它相对应的事情去处理，先处理事情，再去想着发展。', '2017-11-06', '引用', '百度'),
(7, '俩个人的故事', '<p>那年夏天，梧桐树下，你爱上了我，我却不爱你</p><p>今年秋天，黄土地上，我爱上了你，你却不爱我</p>', '2017-11-08', '原创', 'Seek');

-- --------------------------------------------------------

--
-- 表的结构 `seek_note`
--

CREATE TABLE IF NOT EXISTS `seek_note` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `nname` varchar(255) NOT NULL COMMENT '笔记标题',
  `ncon` text NOT NULL COMMENT '笔记内容',
  `ctype` varchar(255) NOT NULL COMMENT '所属分类',
  `ntime` date NOT NULL COMMENT '笔记编写时间',
  `nnum` int(11) NOT NULL COMMENT '笔记点击数',
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- 转存表中的数据 `seek_note`
--

INSERT INTO `seek_note` (`nid`, `nname`, `ncon`, `ctype`, `ntime`, `nnum`) VALUES
(1, '关于移动端文字省略的处理', '<div><span>单行文本省略：</span><ul><li>overflow: hidden; /*自动隐藏文字*/</li><li>text-overflow: ellipsis;/*文字隐藏后添加省略号*/</li><li> white-space: nowrap;/*强制不换行*/</li><li>width: 20em;/*不允许出现半汉字截断*/</li><li>color:#6699ff;border:1px #ff8000 dashed;word-wrap : normal | break-word</li></ul><span>多行文本省略</span><ul><li>display: -webkit-box;</li><li>display: -moz-box;</li><li>overflow: hidden;</li><li>text-overflow: ellipsis;</li><li>word-break: break-all;</li><li>-webkit-box-orient: vertical;</li><li>-webkit-line-clamp:2;</li><li>normal : 允许内容顶开指定的容器边界</li><li>break-word : 内容将在边界内换行.如果需要,词内换行（word-break）也行发生;</li></ul></div>', 'css', '2017-02-20', 10),
(2, '禁止选中文本', '<div><span>禁止选中文本</span><ul><li>-webkit-touch-callout: none;</li><li>-webkit-user-select: none;</li><li>-khtml-user-select: none;</li><li>-moz-user-select: none;</li><li>-ms-user-select: none;</li><li>user-select: none;</li></ul></div>', 'css', '2017-02-20', 10),
(3, '移动端禁止默认滚动', '<div><span>禁止拖动</span><ul><li>e.preventDefault();</ul><span>覆盖蒙层</span><ul><li>放置一个固定在最高层的透明蒙层</ul></div>', 'js', '2017-03-01', 5),
(4, '弹性布局', '<div><span>弹性盒模型 flex： 一旦用了display：flex 后，float等都失效*</span><ul><li>项目包裹方式：</li><li>1、flex-direction:</li><li>1）row（默认，从左向右排列）;2）row-reverse（从右向左排列）;3）column（从上往下排列）;4）column-reverse（从下往上排列）;</li><li>2、flex-wrap:</li><li>1）wrap（从上往下排）;2）wrap-reverse（从下往上排）</li><li>对齐方式：</li><li>1、水平方向排列方式：justify-content：</li><li>1）flex-end;(靠右）；2）flex-start；3）center；4）space-between（两端对齐）；5）space-around（常用，两边有留白）</li><li>2、多行内容垂直方向对齐和排列方式：align-items：</li><li>1）flex-end;(靠右）；2）flex-start；3）center；4）baseline（第一行内容的基线对齐，不常用）；5）stretch （拉伸）</li><li>2、列表/项目</li><li>1、order （列表排序，调整位置）2、flex-grow： 所占比例放大 3、flex-basis： 设置基本大小</li></ul><span></span><ul><li></li></ul></div>', 'css', '2017-03-01', 15),
(5, '背景色-渐变', '<div><span>线性渐变 linear-gradient(red, blue,green,yellow);</span><ul><li>background: linear-gradient(red 0%, blue 10%,green 70%,yellow 80%);</li><li>-关键字 background: linear-gradient(to left top,red 0%, blue 10%,green 70%,yellow 80%);</li><li>-角度 background: linear-gradient(45deg,red 0%, blue 10%,green 70%,yellow 80%);</li></ul><span>径向渐变 background: radial-gradient(red, green, blue);</span><ul><li>background: radial-gradient(red 0%, green 50%, blue);</li><li>-改变渐变的形状 background: radial-gradient(circle 50px at 120px 120px,red 0%, green 50%, blue)</li><li>circle 形状 50px 渐变的区间 at 120px 120px 渐变起始位置 </li><li>background: radial-gradient(ellipse 50px 30px at 120px 120px,red 0%, green 50%, blue); 椭圆的大小需要两个半径作为约束</li><li>-重复渐变 background: repeating-radial-gradient(red, yellow 10%, green 15%);</li></ul></div>', 'css', '2017-03-05', 15),
(6, '2D', '<div><span>2D</span><ul><li>transform 向元素应用 2D 或 3D 转换。</li><li>transform-origin 允许你改变被转换元素的位置。</li><li>matrix(n,n,n,n,n,n) 定义 2D 转换，使用六个值的矩阵。</li><li>translate(x,y) 定义 2D 转换，沿着 X 和 Y 轴移动元素。</li><li>translateX(n) 定义 2D 转换，沿着 X 轴移动元素。</li><li>translateY(n) 定义 2D 转换，沿着 Y 轴移动元素。</li><li>scale(x,y) 定义 2D 缩放转换，改变元素的宽度和高度。</li><li>scaleX(n) 定义 2D 缩放转换，改变元素的宽度。</li><li>scaleY(n) 定义 2D 缩放转换，改变元素的高度。</li><li>rotate(angle) 定义 2D 旋转，在参数中规定角度。deg 角度 rad 弧度</li><li>skew(x-angle,y-angle) 定义 2D 倾斜转换，沿着 X 和 Y 轴。</li><li>skewX(angle) 定义 2D 倾斜转换，沿着 X 轴。</li><li>skewY(angle) 定义 2D 倾斜转换，沿着 Y 轴。</li></ul><span></span><ul><li></li></ul></div>', 'css', '2017-03-06', 16),
(7, '3D', '<div><span>3D</span><ul><li>transform 向元素应用 2D 或 3D 转换。</li><li>transform-origin 允许你改变被转换元素的位置。</li><li>transform-style 规定被嵌套元素如何在 3D 空间中显示。</li><li>perspective 规定 3D 元素的透视效果。</li><li>perspective-origin 规定 3D 元素的底部位置。</li><li>backface-visibility 定义元素在不面对屏幕时是否可见。</li><li>visible 背面可见-hidden 背面不可见</li><li>matrix3d(n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n)</li><li>定义 3D 转换，使用 16 个值的 4x4 矩阵。</li><li>translate3d(x,y,z) 定义 3D 转化。</li><li>translateX(x) 定义 3D 转化，仅使用用于 X 轴的值。</li><li>translateY(y) 定义 3D 转化，仅使用用于 Y 轴的值。</li><li>translateZ(z) 定义 3D 转化，仅使用用于 Z 轴的值。</li><li>scale3d(x,y,z) 定义 3D 缩放转换。</li><li>scaleX(x) 定义 3D 缩放转换，通过给定一个 X 轴的值。</li><li>scaleY(y) 定义 3D 缩放转换，通过给定一个 Y 轴的值。</li><li>scaleZ(z) 定义 3D 缩放转换，通过给定一个 Z 轴的值。</li><li>rotate3d(x,y,z,angle) 定义 3D 旋转。</li><li>rotateX(angle) 定义沿 X 轴的 3D 旋转。</li><li>rotateY(angle) 定义沿 Y 轴的 3D 旋转。</li><li>rotateZ(angle) 定义沿 Z 轴的 3D 旋转。</li></ul><span></span><ul><li></li></ul></div>', 'css', '2017-03-07', 17),
(8, '动画', '<div><span>动画</span><ul><li>规定 @keyframes 动画的名称。</li><li>animation-name: keyframename|none;</li><li>规定动画完成一个周期所花费的秒或毫秒。默认是 0。</li><li>animation-duration: time;</li><li>规定动画的速度曲线。默认是 ''ease''。</li><li>linear 动画从头到尾的速度是相同的。</li><li>ease 默认。动画以低速开始，然后加快，在结束前变慢。</li><li>ease-in 动画以低速开始。ease-out 动画以低速结束。ease-in-out 动画以低速开始和结束。</li><li>cubic-bezier(n,n,n,n) 在 cubic-bezier 函数中自己的值。可能的值是从 0 到 1 的数值</li><li>规定动画何时开始。默认是 0。</li><li>animation-delay: time;</li><li>停止在结束位置 forwards</li><li>规定动画被播放的次数。默认是 1。</li><li>animation-iteration-count: n|infinite;</li><li>animation-iteration-count: n|infinite;</li><li>normal 默认值。动画应该正常播放。</li><li>alternate动画应该轮流反向播放。</li><li>规定动画是否正在运行或暂停。默认是 ''running''。</li><li>animation-play-state: paused|running;</li><li>paused:规定动画已暂停。</li><li>running:规定动画正在播放。</li><li>animationend 当animation 执行完成后js调用的事件</li></ul><span></span><ul><li></li></ul></div>', 'css', '2017-03-07', 18),
(9, '文本框不可编辑', '<div><span>方法1: onfocus=this.blur()</span><ul><li><input type=text name=input1 value="不可编辑文本框" onfocus=this.blur()></ul><span>方法2:readonly</span><ul><li><input type=text name=input1 value="不可编辑文本框" readonly><li><input type=text name=input1 value="不可编辑文本框" readonly=true></ul><span>方法3: disabled</span><ul><li><input type=text name=input1 value="不可编辑文本框" disabled></ul></div>', 'html', '2017-11-07', 1),
(10, '背景图片', '<div><span>背景图片</span><ul><li>background-image 规定背景的背景图 </li><li>background-position 规定背景的定位</li><li>background-repeat 规定背景的重复方式 </li><li>background-color 规定背景的颜色 </li><li>background-clip 规定背景的绘制区域。</li><li>background-origin 规定背景图片的定位区域</li><li>background-size 规定背景图片的尺寸。</li><li>background-clip: border-box|padding-box|content-box;</li><li>border-box 背景被裁剪到边框盒。</li><li>padding-box 背景被裁剪到内边距框。</li><li>content-box 背景被裁剪到内容框。</li><li>background-size: length|percentage|cover|contain;</li><li>length 设置背景图像的高度和宽度。</li><li>percentage 以父元素的百分比来设置背景图像的宽度和高度。</li><li>cover 把背景图像扩展至足够大，以使背景图像完全覆盖背景区域。</li><li>contain 把图像图像扩展至最大尺寸，以使其宽度和高度完全适应内容区</li></ul><span></span><ul><li></li></ul></div>', 'css', '2017-11-07', 1),
(11, '倒影', '<div><span>倒影 box-reflect</span><ul><li>none 无倒影 direction above：指定倒影在对象的上边 below： 指定倒影在对象的下边</li><li>left： 指定倒影在对象的左边</li><li>right： 指定倒影在对象的右边</li><li>offset length：用长度值来定义倒影与对象之间的间隔。可以为负值</li><li>percentage： 用百分比来定义倒影与对象之间的间隔。可以为负值</li><li>mask-box-image none：无遮罩图像</li><li>url：使用绝对或相对地址指定遮罩图像。</li><li>linear-gradient：使用线性渐变创建遮罩图像。</li><li>radial-gradient：使用径向(放射性)渐变创建遮罩图像。</li><li>repeating-linear-gradient：使用重复的线性渐变创建背遮罩像。</li><li>repeating-radial-gradient： 使用重复的径向(放射性)渐变创建遮罩图像</li></ul><span></span><ul><li></li></ul></div>', 'css', '2017-11-07', 0),
(12, '边框属性', '<div><span>border图片属性</span><ul><li>border-image-source 用在边框的图片的路径。</li><li>border-image-slice 图片边框向内偏移。</li><li>border-image-width 图片边框的宽度。</li><li>border-image-outset 边框图像区域超出边框的量。</li><li>border-image-repeat 图像边框是否应平铺(repeat)、铺满(round)或拉伸(stretch)</li></ul><span>border构成三角</span><ul><li>向上</li><li>width: 0;</li><li>height: 0;</li><li>border-left: 50px solid transparent;</li><li>border-right: 50px solid transparent;</li><li>border-bottom: 100px solid red;</li><li>向下</li><li>width: 0;</li><li>height: 0;</li><li>border-left: 50px solid transparent;</li><li>border-right: 50px solid transparent;</li><li>border-top: 100px solid red;</li></ul></div>', 'css', '2017-10-06', 10),
(13, '本地存储', '<div><span>本地存储</span><ul><li>1.cookie</li><li>2.localStorage </li><li>-添加 setItem('''','''')</li><li>localStorage.name='''';</li><li>-删除 removeItem('''')</li><li>-修改==添加</li><li>-获取 getItem('''')</li><li>-全部清空 clear()</li><li>上传arr=[{:'''',''''},{:'''',''''}]; </li><li>var str=JSON.stringify(arr);</li><li>获取-转换var obj=JSON.parse(str)</li><li>无时间限制存储，安全方面无限制，相同域名下数据可跨域访问使用</li><li>3.sessionstorage</li><li>不同窗口不可共享，生存周期只在浏览器打开的时间内，试图代替cookie，有限制，同一域名下页面要想共享数据，只能各个页面打开顺序发生关系，不能独立存在。</li><li>4.globalstorage 仅火狐支持</li><li>5.web sql storage</li></ul><span></span><ul><li></li></ul></div>', 'js', '2017-04-06', 5),
(14, '触摸事件', '<div><span>Touch事件</span><ul><li>-start:触摸开始的时候触发</li><li>-move:手指在屏幕上滑动时触发</li><li>-end:触摸结束的时候触发</li><li>-cancel:终止触摸</li><li>--鼠标事件，实时检测，鼠标永恒在屏幕</li><li>--触摸事件，只有当手指放在屏幕上才能触发</li><li>--鼠标事件，事件发生的非常明确，a-&gt;b所有事件都能监控</li><li>--触摸事件，并不是所有事件的过渡都能检测a-&gt;b</li><li>--鼠标事件更精确，能精确到每一个像素点</li><li>--触摸事件不太精确，模糊计算</li><li>--鼠标事件最先触发的是move事件并且其他事件都非常的清晰</li><li>--触摸事件首先触发touchstart事件，所有的事件不清晰</li><li>-------------------</li></ul><span>手指滑动</span><ul><li></li><li></li><li></li></ul></div>', 'js', '2017-02-02', 1),
(15, '滚动条优化', '<div><span>滚动条优化</span><ul><li>-::-webkit-scrollbar</li><li>{ width: 8px;</li><li>height: 8px;</li><li>background-color: #ececec;</li><li>}</li><li>/*定义滚动条轨道 内阴影+圆角*/</li><li>::-webkit-scrollbar-track</li><li>{</li><li>-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);</li><li>border-radius: 6px;</li><li>background-color: #F5F5F5;</li><li>}</li><li>/*定义滑块 内阴影+圆角*/</li><li>::-webkit-scrollbar-thumb</li><li>{</li><li>border-radius: 10px;</li><li>-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);</li><li>background-color: #999;</li><li>}</li><li>上下拖动卡顿</li><li>body{</li><li>-webkit-overflow-scrolling:touch;</li><li>overflow-scrolling:touch;</li><li>}</li></ul><span></span><ul><li></li></ul></div>', 'css', '2017-06-12', 9),
(16, '数字显示处理', '<div><span>数字显示处理</span><ul><li>var hk= hk.toFixed(2);</li><li></li><li></li><li></li></ul><span>应用于手机端的倒计时ios对于时间的解析不同</span><ul><li>var dDate = new Date(Date.parse(sDate)); </li><li>改为var dDate = new Date(Date.parse(sDate.replace(/-/g,‘/’)));</li></ul></div>', 'js', '2017-05-15', 6),
(17, '移动端适配', '<div><span>JS适配</span><ul><li>function resize(originSize,type) {</li><li>var type=type||''x'';</li><li>var widths=document.documentElement.clientWidth;</li><li>var heights=document.documentElement.clientHeight;</li><li>if(type==''x''){</li><li>var scalex=widths/originSize*100;</li><li>document.querySelector(''html'').style.fontSize=scalex+''px'';</li><li>}else if(type==''y''){</li><li>var scaley=heights/originSize*100;</li><li>document.querySelector(''html'').style.fontSize=scaley+''px'';</li><li>}</li><li>}</li><li>resize(750*2.5);</li><li>var model=navigator.userAgent; if(model.indexOf(''HUAWEI'') &gt; 0 ){ alert(''你是华为或者魅族''); }</li></ul><span>CSS以分辨率适配</span><ul><li>/*5*/</li><li>@media (device-height: 568px) and (-webkit-min-device-pixel-ratio: 2) {}</li><li>/*6+*/</li><li>@media (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) {}</li><li></li></ul></div>', 'js+css', '2017-06-12', 3),
(18, '关于使用swipe与animate混合制作H5', '<div><span>关于使用swipe与animate混合制作H5</span><ul><li>1.移动端使用swipe包裹放置文字会有局限性问题 到一定的数量后会使字体在IOS端失效</li><li>2.在快捷使用一个页面中包含竖屏和横屏同时存在的swipe时，子创建在前 主体在后 如果遇到动画初始化失效时，需在子体上添加touchEnd事件，手动还原动画。</li><li>3.CSS3中在使用蒙层推图配合animate动画效果时，蒙层需要放置2层，一层控制动画，一层控制初始化是否OK。</li></ul><span></span><ul><li></li></ul></div>', 'js', '2017-02-02', 1),
(19, '操作字符串数量', '<div><span>常用指令</span><ul><li>function Checkval() {</li><li>for(var j=0;j&gt;$(''p'').length;j++){</li><li>var s=$(''p'').eq(j).html();</li><li>var n=0;</li><li>for(var i=0;i&gt;s.length;i++){</li><li>//可以返回指定位置的unicode编码,这个返回值是0-65535之间的整数</li><li>if(s.charCodeAt(i)&lt;128) {</li><li>n++;</li><li> }else {</li><li>   n+=2;</li><li> }</li><li>  }</li><li>if(n&lt;16){</li><li>$(''p'').eq(j).css({''padding-top'':0,''line-height'':''3rem''})</li><li>}</li><li>n=0;</li><li>}</li><li> })</li><li>Checkval()</li></ul><span></span><ul><li></li></ul></div>', 'js', '2017-05-15', 1),
(20, '清除图片底部1px方案', '<div><span>Div内Img会有底部1px空白</span><ul><li>原因是图片为行内元素</li><li>解决方案：</li><li>1.设置img为块状元素---img{display:block;}</li><li>2.给img设置vertical-algin---img{vertical-align:top;}</li><li>3.给父元素设定高度</li><li>4.设置line-height和font-size--img{font-size:0;line-height:0;}</li></ul><span></span><ul><li></li></ul></div>', 'css', '2017-04-15', 2),
(21, '前端优化', '<div><span>前端优化</span><ul><li>1. 优化图片</li><li>a.图片精灵</li><li>b.大图 jpg</li><li>2.代码的合并和压缩 </li><li>js 压缩和混淆</li><li>js代码-页面的底部</li><li>css 压缩 合并 </li></ul><span></span><ul><li></li></ul></div>', 'html', '2017-03-16', 1),
(39, '小问题大学问', '<p>&nbsp;&nbsp;&nbsp;&nbsp;这是个关于富文本的问题，一看就是2个小时，可算是解决了</p><p>&nbsp;&nbsp;&nbsp;&nbsp;真是有点心烦啊<br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;求解脱<br/></p>', 'es6', '2017-11-08', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
