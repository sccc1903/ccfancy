<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:37:"themes/simpleboot3/portal\\index.html";i:1507798502;s:35:"themes/simpleboot3/public\head.html";i:1507799896;s:37:"themes/simpleboot3/public\footer.html";i:1507798826;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--声明文档的兼容模式-->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <!--移动设备-->
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <link rel="stylesheet" href="__TMPL__/public/assets/css/H-ui.reset.css"/>
    <link rel="stylesheet" href="__TMPL__/public/assets/css/style.css"/>
    <link rel="stylesheet" href="__TMPL__/public/assets/css/font-awesome.css"/>
    <link rel="stylesheet" href="__TMPL__/public/assets/css/animate.css"/>
    <!--[if IE]-->
    <!--<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
    <!--[endif]–->
    <!--[if lte IE 8]><script src="https://cdn.bootcss.com/selectivizr/1.0.2/selectivizr-min.js"></script><![endif]-->
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <!--滚动条S-->
    <script src="__TMPL__/public/assets/js/jquery.nicescroll.min.js"></script>
    <script>
        $(document).ready(function () {
            $("html").niceScroll({});  // The document page (body)
        });
    </script>
    <!--导航条E-->
    <title></title>
</head>
<body>
<!--头部S-->
<div class="nicescroll-rails">
    <div id="header">
        <div class="header_wrapper">
            <a href="/" class="logo">
                <img src="__TMPL__/public/assets/img/logo.png" alt=""/>
            </a>

            <div class="nav_middle">
                <ul class="nav_list clearfix">
                    <li class="active">
                        <a href="/">
                            首页
                            <small class="shortname">home</small>
                        </a>
                    </li>
                    <!--<li>-->
                        <!--<a href="">-->
                            <!--优势-->
                            <!--<small class="shortname">home</small>-->
                        <!--</a>-->
                    <!--</li>-->
                    <li>
                        <a href="/goodcase/case/index">
                            案例
                            <small class="shortname">home</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            初创
                            <small class="shortname">home</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            动态
                            <small class="shortname">home</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            伙伴
                            <small class="shortname">home</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            联系
                            <small class="shortname">home</small>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="nav_icon">
                <img src="__TMPL__/public/assets/img/navBtn.png" alt=""/>
            </div>
        </div>
    </div>
    <!--头部E-->
    <!--大屏点击显示联系我们S-->
    <div class="content-div">
        <div class="container cl">
            <div class="left"><span class="redTitle">Hi,are you ready?</span>

                <p class="title">准备好开始了吗?<br>那就与我们取得联系吧</p>

                <p class="info">有一个品牌项目想和我们谈谈吗?您可以填写右边的表格，让我们了解您的项目需求，这是一个良好的开始，我们将会尽快与你取得联系。当然也欢迎您给我们写信或是打电话，让我们听到你的声音!</p>

                <div class="footTitle"><span class="titleB">NEW IDEAS</span><span>新元创想信息技术</span></div>
                <p class="info">地 址：青岛胶州市宝龙城市广场写字楼15栋2205</p>

                <p class="info">电 话：+0532 - 8662 0102&nbsp;&nbsp;&nbsp;&nbsp;186-6186-1896 </p>

                <p class="info">传 真：+0532 - 8662 0102</p>

                <p class="info">E-mail：sun@7k999.com </p>

            </div>
            <div class="right"><p class="title">填写您的项目信息</p>

                <p class="line"><input type="text" class="inputText" id="listName1" value="您的姓名"></p>

                <p class="line"><input type="text" class="inputText" id="listCompany1" value="公司名称"></p>

                <p class="line"><input type="text" class="inputText" id="listEmail1" value="您的电话"></p>

                <p class="line"><input type="text" class="inputText" id="listTitle1" value="项目主题"></p>

                <p class="line"><textarea class="textArea" id="listInfo1">告诉我们您的项目基本信息</textarea></p>

                <p class="line"><input type="button" class="inputBtn" onclick="contactSubmit('/front/index/contact',$('#listName1').val(),$('#listCompany1').val(),$('#listEmail1').val(),$('#listTitle1').val(),$('#listInfo1').val())" value="立即提交"></p></div>
        </div>
        <img src="__TMPL__/public/assets/img/closeIcon.png" alt="" class="closeBtn"/>
    </div>
    <!--大屏点击显示联系我们E-->
<!--bannerS-->
<div id="banner">
    <div class="boxall">
        <?php if(is_array($slide) || $slide instanceof \think\Collection || $slide instanceof \think\Paginator): if( count($slide)==0 ) : echo "" ;else: foreach($slide as $key=>$vo): ?>
            <a href="http://<?php echo $vo['url']; ?>" target="_blank">
                <div class="box" style="background-image: url('/upload/<?php echo $vo['image']; ?>');"></div>
            </a>
        <?php endforeach; endif; else: echo "" ;endif; ?>

        <button class="left btn"><img src="__TMPL__/public/assets/img/bannerLeft.png" alt=""/>
        </button>
        <button class="right btn"><img src="__TMPL__/public/assets/img/bannerRight.png" alt=""/>
        </button>
        <ul class="pagination">

        </ul>
    </div>
    <img src="__TMPL__/public/assets/img/bannerBg.jpg" alt="" class="bannerBg"/>
</div>
<!--bannerE-->
<!--锚点S-->
<div>
    <a href="#myAnchor" rel="" id="anchor1" class="anchorLink">这是一个锚点</a>
</div>
<!--锚点E-->
<!--产品S-->
<div class="product">
    <p class="mainTitle">WONDERFUL CASE</p>

    <div class="mainSub"></div>
    <span class="mainInfo">精彩案例</span>

    <div class="switch">
        <span class="iconfont smalllist active">&#xe601;</span>
        <span class="iconfont biglist">&#xe618;</span>
    </div>
    <ul class="product_list clearfix">

        <?php if(is_array($case) || $case instanceof \think\Collection || $case instanceof \think\Paginator): if( count($case)==0 ) : echo "" ;else: foreach($case as $key=>$v1): ?>
            <a href="<?php echo $v1['url']; ?>">
                <li class="product_listbox small">
                    <img src="/upload/<?php echo $v1['image']; ?>" alt=""/>

                    <div class="product_info">
                        <div><?php echo $v1['name']; ?></div>
                        <img src="__TMPL__/public/assets/img/hidePointer.png" alt="" class="childPointer"/>
                    </div>
                </li>
            </a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <!--第二种产品-->
    <!--<ul class="product_list1 clearfix">
        <li class="product_listbox1">
            <a href="">
                <img src="__TMPL__/public/assets/img/product.jpg" alt=""/>

                <div class="item_mask"></div>
                <i class="xf_msg"></i>
            </a>
        </li>
    </ul>-->
    <!--产品E-->
    <a href="/goodcase/case/index">
        <div class="linkBtn"><span>查看更多牛B案例</span></div>
    </a>
</div>
<!--关于我们-->
<div class="about" style="background: #FBFBFB">
    <div>
        <p class="mainTitle">ABOUT US</p>

        <div class="mainSub"></div>
        <span class="mainInfo">关于我们</span>

        <p class="title">专注于互联网定制开发服务</p>

        <p class="info">
            初创成立于2017年，是一家专门从事互联网定制开发服务的工作室，我们拥有多名专业的前后端开发工程师，能够满足顾客的各方面需求，在开发领域有着雄厚的技术基础，我们的目标是打造与众不同。自成立以来为客户提供多个成功的项目解决方案和优质服务。</p>
        <a href="/index/project">
            <div class="linkBtn"><span>了解更多详情</span></div>
        </a>
    </div>
</div>
<!--优势-->
<div class="about">
    <div>

    <p class="mainTitle">OUR ADVANTAGE</p>

    <div class="mainSub"></div>
    <span class="mainInfo">我们的优势</span>

    <p class="title">做适合客户的定制网站</p>

    <p class="info">做适合用户的定制网站，全程无忧，一站式服务，享受极致体验。<br/>经验丰富工程师为您解决一切烦恼，放心满意。<br/>放心，一切交给我们！</p>
</div>
</div>
<!--服务-->
<div class="about service" style="background: #FBFBFB">
    <div>

    <p class="mainTitle">OUR ADVANTAGE</p>

    <div class="mainSub"></div>
    <span class="mainInfo">我们的优势</span>

    <div class="content">
        <div class="child">
            <div class="childTitle"><p class="titleEn">Platform develop</p>

                <p class="titleCh">平台开发</p></div>
        </div>
        <div class="child">
            <div class="childTitle"><p class="titleEn">Website custom</p>

                <p class="titleCh">网站定制</p></div>
        </div>
        <div class="child">
            <div class="childTitle"><p class="titleEn">Mobile appication</p>

                <p class="titleCh">手机应用</p></div>
        </div>
    </div>
</div>
</div>
<!--新闻-->
<div class="about news">
    <div>
    <p class="mainTitle">NEWS CENTER</p>

    <div class="mainSub"></div>
    <span class="mainInfo">新闻中心</span>

    <div class="cl container">
        <div class="left">
            <div class="content">
                <?php if(is_array($new) || $new instanceof \think\Collection || $new instanceof \think\Paginator): if( count($new)==0 ) : echo "" ;else: foreach($new as $key=>$v2): ?>
                <a href="">
                    <div class="child">
                        <div class="childTime">
                            <p class="timeMonth"><?php echo $v2['month']; ?></p>
                            <p class="timeDay"><?php echo $v2['day']; ?></p>
                        </div>
                        <div class="childInfo">
                            <p class="title"><?php echo $v2['post_title']; ?></p>

                            <p class="info"><?php echo $v2['post_excerpt']; ?></p>
                        </div>
                        <div class="childlink"><i class="iconfont">&#xe607;</i></div>
                    </div>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="child">
                    <div class="childInfo"><a href="/index/news">
                        <div class="moreBtn">更多信息</div>
                    </a></div>
                </div>
            </div>
        </div>
        <div class="right">
            <img src="__TMPL__/public/assets/img/earth.png" alt="" class="earth"/>
            <img src="__TMPL__/public/assets/img/AI.png" alt="" class="earthicon"/>
            <img src="__TMPL__/public/assets/img/html.png" alt="" class="earthicon"/>
            <img src="__TMPL__/public/assets/img/icon-css3.png" alt="" class="earthicon"/>
            <img src="__TMPL__/public/assets/img/jquery.png" alt="" class="earthicon"/>
            <img src="__TMPL__/public/assets/img/php.png" alt="" class="earthicon"/>
            <img src="__TMPL__/public/assets/img/PS.png" alt="" class="earthicon"/>
        </div>
    </div>
</div>
</div>
<!--联系我们-->
<div class="about contact">
    <div>
    <p class="mainTitle">CONTACT US</p>

    <div class="mainSub"></div>
    <span class="mainInfo">联系我们</span>

    <div class="content">
        <p class="info">
            如果你有意向拥有一个与众不同的网站，那你一定要联系我们。<br/>
            如果你有意向加入我们，作为我们其中的一份子，也请你联系我们。<br/>
            你们可以留言，也可以直接联系我们。我们的联系方式在右侧哦！</p>
    </div>
    </div>
</div>
<!--banner JS S-->
<script>
    var i;
    $('.box').eq(0).addClass('current_box');
    $('.pagination').html('<li class="current"></li>');
    $('.boxall').mouseover(function () {
        $('.left').animate({"left": "15px"}, 300);
        $('.right').animate({"right": "15px"}, 300);
    }).mouseleave(function () {
        $('.left').animate({"left": "-75px"}, 300);
        $('.right').animate({"right": "-75px"}, 300);
    });
    var page = 0;
    var pages = $('.box').length;
    for (i = 1; i < pages; i++) {
        $('.pagination').append('<li></li>');
    }
    $('.left').click(function () {
        page = page - 1;
        if (page <= 0) {
            $('.box').removeClass('current_box').eq(pages - 1).addClass('current_box');
            $('#banner ul li').removeClass('current').eq(pages - 1).addClass('current');
            page = pages;
        } else {
            $('.box').removeClass('current_box').eq(page - 1).addClass('current_box');
            $('#banner ul li').removeClass('current').eq(page - 1).addClass('current');
        }

    });
    $('.right').click(function () {
        page = page + 1;
        if (page > pages) {
            $('.box').removeClass('current_box').eq(0).addClass('current_box');
            $('#banner ul li').removeClass('current').eq(0).addClass('current');
            page = 1;
        } else if (page == 1) {
            $('.box').removeClass('current_box').eq(1).addClass('current_box');
            $('#banner ul li').removeClass('current').eq(1).addClass('current');
            page = page + 1;
        } else {
            $('.box').removeClass('current_box').eq(page - 1).addClass('current_box');
            $('#banner ul li').removeClass('current').eq(page - 1).addClass('current');
        }
    });
    $('#banner ul li').click(function () {
        $('#banner ul li').removeClass('current');
        $(this).addClass('current');
        var current = $(this).index();
        $('.boxall .box').removeClass('current_box').eq(current).addClass('current_box');
        page = current + 1;
    });
</script>
<!--banner JS E-->
<!--锚点S-->
<script>
    $('a').click(function () {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 500);
        return false;
    });
</script>
<!--锚点E-->
<!--产品列表S-->
<script>
    $('.product_listbox').mouseenter(function () {
        $('.product_listbox').not($(this)).find('.product_info').stop().fadeOut(500);
        $(this).find('.product_info').stop().fadeIn(500);
    }).mouseleave(function () {
        $(this).find('.product_info').stop().fadeOut(500);
    });
    $('.biglist').click(function () {
        if (!$(this).hasClass('active')) {
            $('.product .iconfont').removeClass('active');
            $(this).addClass('active');
            for (var i = 0; i < $('.product_listbox').length; i++) {
                $('.product_listbox').eq(i).delay(200 * i).animate({opacity: 0}, 200);
                $('.product_listbox').eq(i).delay(200 * $('.product_listbox').length).animate({
                    opacity: 1
                }, 200, function () {
                    $('.product_listbox').removeClass('small').addClass('big');
                });
            }
        }
    });
    $('.smalllist').click(function () {
        if (!$(this).hasClass('active')) {
            $('.product .iconfont').removeClass('active');
            $(this).addClass('active');
            for (var i = 0; i < $('.product_listbox').length; i++) {
                $('.product_listbox').eq(i).delay(200 * i).animate({opacity: 0}, 200);
                $('.product_listbox').eq(i).delay(200 * $('.product_listbox').length).animate({
                    opacity: 1,
                }, 200, function () {
                    $('.product_listbox').removeClass('big').addClass('small');
                });
            }
        }
    })
</script>
<!--产品列表E-->
<!--计算滚动高度触发特效S-->
<script>
    $(window).on("scroll", function () {
        var scrolled = $(window).scrollTop();

        // 视窗，即viewport，页面可视范围的窗口
        setTimeout(function () {
            $(".about>div").each(function () {
                var current = $(this), // 当前元素
                        w_height = $(window).outerHeight(), //视窗高度
                        offsetTop = current.offset().top; //当前元素离顶部的高度
                        height=current.height();
                        height1=$('#header').height();
                // 计算高度差（此处预留50是为了看效果）
                // 当元素进入视窗时，添加class

                if (scrolled + w_height >= offsetTop&&scrolled<=offsetTop+height+height1) {
                    current.addClass("fadeInUp");
                }
            });
        }, 200);
    });
</script>
<!--计算滚动高度触发特效E-->
<!--右侧分享E-->
<ul class="share_right">
    <li class="cl share_top" id="share_top">
        TOP
    </li>
    <a href="tencent://message/?uin=2022644&Site=qq&Menu=yes"><li class="cl share_qq">
        <img src="__TMPL__/public/assets/img/QQ.png" alt=""/>

        <p>QQ客服</p>
    </li></a>
    <li class="cl share_tel">
        <img src="__TMPL__/public/assets/img/call.png" alt=""/>

        <p>0532-86701888</p>
    </li>
    <li class="cl share_code">
        <img src="__TMPL__/public/assets/img/code.png" alt=""/>
    </li>
</ul>
<!--右侧分享S-->
<!--尾部S-->
<div id="footer">
    <a name="myAnchor" id="myAnchor"></a>

    <div class="footer_wrapper clearfix">
        <div class="footer_l">
            <div class="company_name"><?php echo $webfootdata['name']; ?></div>
            <div class="copyright"><?php echo $webfootdata['copyright']; ?></div>
            <div class="company_addr">Add：<?php echo $webfootdata['address']; ?></div>
            <div class="company_tel">Tel:<?php echo $webfootdata['tel']; ?></div>
        </div>
        <div class="footer_r">
            <div>关注我们</div>
            <div>
                <a href=""><img src="__TMPL__/public/assets/img/weiboIcon.png" alt=""/></a>
                <a href=""><img src="__TMPL__/public/assets/img/weixinIcon.png" alt=""/></a>
                <a href=""><img src="__TMPL__/public/assets/img/qqIcon.png" alt=""/></a>
            </div>
        </div>
    </div>
</div>
<!--尾部E-->
<!--响应式右上角导航S-->
<script>
    var w;
    var click = true;
    function change() {
        w = $(window).width();
        if (w < 1024) {
            $(".content-div").stop(false, true).animate({top: "-1000px"}, 8000);
            $('.nav_middle').css('right', '-125px');
            $('.nav_icon').removeClass('wapBtnAn');

        } else {
            $('.nav_icon').removeClass('wapBtnAn');
            $('.nav_middle').css('right', '0');
            click = true
        }
    }
    $(function () {
        change()
    });
    $(window).resize(function () {
        change()
    });
    $('.nav_icon').click(function () {
        w = $(window).width();
        if (w < 1024) {
            if (click) {
                $(".nav_middle").stop(false, true).animate({right: "0"}, 800);
                $('.nav_icon').addClass('wapBtnAn');
                click = false;
            } else {
                $(".nav_middle").stop(false, true).animate({right: "-125px"}, 800);
                $('.nav_icon').removeClass('wapBtnAn');
                click = true;
            }
        } else {
            $(".content-div").stop(false, true).animate({top: "0"}, 800);
            $('.nav_icon').addClass('wapBtnAn');
        }
    });
    $('.closeBtn').click(function () {
        $(".content-div").stop(false, true).animate({top: "-1000px"}, 800);
        $('.nav_icon').removeClass('wapBtnAn');

    })
</script>
<!--响应式右上角导航E-->
<!--回到顶部S-->
<script>
    window.onload = function () {
        var obtn = document.getElementById('share_top');
        //获取页面可视区的高度
        var clientHeight = document.documentElement.clientHeight;
        var timer = null;
        var isTop = true;

        window.onscroll = function () {
            var osTop = document.documentElement.scrollTop || document.body.scrollTop;
            if (osTop >= clientHeight) {
                obtn.style.display = "block"; //显示按钮
            } else {
                obtn.style.display = "none"; //隐藏按钮
            }
            if (!isTop) {
                clearInterval(timer);
            }
            isTop = false;
        };
        obtn.onclick = function () {
            //设置定时器
            timer = setInterval(function () {
                var osTop = document.documentElement.scrollTop || document.body.scrollTop;
                var ispeed = Math.floor(-osTop / 6);
                //获取滚动条距离顶部的高度
                document.documentElement.scrollTop = document.body.scrollTop = osTop + ispeed;
                isTop = true;
                if (osTop == 0) {
                    clearInterval(timer);
                }
            }, 30);
        }

    }
</script>
<!--回到顶部E-->
<!--底部置底-->
<script>
    $(function(){
        function footerPosition(){
            $("#footer").removeClass("fixed-bottom");
            var contentHeight = document.body.scrollHeight,//网页正文全文高度
                    winHeight = window.innerHeight;//可视窗口高度，不包括浏览器顶部工具栏
            if(!(contentHeight > winHeight)){
                //当网页正文高度小于可视窗口高度时，为footer添加类fixed-bottom
                $("#footer").addClass("fixed-bottom");
            } else {
                $("#footer").removeClass("fixed-bottom");
            }
        }
        footerPosition();
        $(window).resize(footerPosition);
    });
</script>
</body>
</html>

