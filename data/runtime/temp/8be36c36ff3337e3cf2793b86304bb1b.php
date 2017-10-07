<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:37:"themes/simpleboot3/portal\\index.html";i:1507369477;s:35:"themes/simpleboot3/public\head.html";i:1507359837;s:37:"themes/simpleboot3/public\footer.html";i:1507356313;}*/ ?>
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
    <!–[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]–>
    <!--[if lte IE 8]><script src="https://cdn.bootcss.com/selectivizr/1.0.2/selectivizr-min.js"></script><![endif]-->
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <!--滑动列表-->
    <script src="__TMPL__/public/assets/js/slide_str.js"></script>
    <!--滚动条S-->
    <script src="__TMPL__/public/assets/js/jquery.nicescroll.min.js"></script>
    <script>
        $(document).ready(function () {
            $("html").niceScroll();  // The document page (body)
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
                        <a href="">
                            首页
                            <small class="shortname">home</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            优势
                            <small class="shortname">home</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            案例
                            <small class="shortname">home</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            新元创想
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
            <div class="box current_box"
                 style="background-image: url('__TMPL__/public/assets/img/banner1.jpg');"></div>
            <div class="box"
                 style="background-image: url('__TMPL__/public/assets/img/banner2.jpg')"></div>
            <div class="box"
                 style="background-image: url('__TMPL__/public/assets/img/banner3.jpg')"></div>
            <div class="box"
                 style="background-image: url('__TMPL__/public/assets/img/banner4.jpg')"></div>
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

    <ul class="product_list clearfix">
        <li class="product_listbox">
            <img src="__TMPL__/public/assets/img/product.jpg" alt=""/>

            <div class="product_info">
                <div>aaa</div>
            </div>
        </li>
        <li class="product_listbox">
            <img src="__TMPL__/public/assets/img/product.jpg" alt=""/>

            <div class="product_info">
                <div>aaa</div>
            </div>
        </li>
        <li class="product_listbox">
            <img src="__TMPL__/public/assets/img/product.jpg" alt=""/>

            <div class="product_info">
                <div>aaa</div>
            </div>
        </li>
        <li class="product_listbox">
            <img src="__TMPL__/public/assets/img/product.jpg" alt=""/>

            <div class="product_info">
                <div>aaa</div>
            </div>
        </li>
        <li class="product_listbox">
            <img src="__TMPL__/public/assets/img/product.jpg" alt=""/>

            <div class="product_info">
                <div>aaa</div>
            </div>
        </li>
    </ul>
    <!--第二种产品-->
    <ul class="product_list1 clearfix">
        <li class="product_listbox1">
            <a href="">
                <img src="__TMPL__/public/assets/img/product.jpg" alt=""/>

                <div class="item_mask"></div>
                <i class="xf_msg"></i>
            </a>
        </li>
    </ul>
    <!--产品E-->
    <a href="/index/project">
        <div class="linkBtn"><span>查看更多牛B案例</span></div>
    </a>
</div>
    <!--产品标题S-->
    <div class="textC"></div>
    <!--产品标题E-->
    <!--手风琴S-->
    <div class="accordion">
        <ul class="accordion_list">
            <li>
                <div class="accordion_listMsg">
                    <div>
                        <p>1</p>

                        <p>建立联系后，我们将发送文档资料并邀请您参与后续的培训课程。</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="accordion_listMsg">
                    <div>
                        <p>1</p>

                        <p>建立联系后，我们将发送文档资料并邀请您参与后续的培训课程。</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="accordion_listMsg">
                    <div>
                        <p>1</p>

                        <p>建立联系后，我们将发送文档资料并邀请您参与后续的培训课程。</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="accordion_listMsg">
                    <div>
                        <p>1</p>

                        <p>建立联系后，我们将发送文档资料并邀请您参与后续的培训课程。</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="accordion_listMsg">
                    <div>
                        <p>1</p>

                        <p>建立联系后，我们将发送文档资料并邀请您参与后续的培训课程。</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!--手风琴E-->
    <!--滑动列表S-->
    <div class="su-accordion">
        <div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus 0">
            <div class="su-spoiler-title"><span class="su-spoiler-icon"></span>领英服务介绍
            </div>
            <div class="su-spoiler-content su-clearfix">
                <p>
                    服务内容按照您所选择的套餐形式而有所不同。通常而言，服务包含领英平台上品牌驻地的建设（公司主页及产品/服务专区）、驻地维护（实时资讯动态）及推广计划（各式广告推广）的制作三大环节。另外，我们将定期循环为您提供专业的技能知识培训，以方便您更好地了解并使用领英，拓宽市场获得。</p>

                <p>针对服务中详细的驻地维护频率及广告形式，可至页面顶端“<span style="color: #ff0000;">服务</span>”栏进行查看；关于服务中各环节的详细介绍，可至页面顶端“<span
                        style="color: #ff0000;">培训中心</span>”栏进行了解与学习。</p>

            </div>
        </div>
        <div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">
            <div class="su-spoiler-title"><span class="su-spoiler-icon"></span>领英能帮我们做的
            </div>
            <div class="su-spoiler-content su-clearfix">
                <p>
                    关于服务板块，我们可为您提供套餐服务各环节中的图片制作、中外文案编辑、推广计划制定、数据报告分析等服务。在此期间，Linked-media的专业策划团队、投放团队、设计团队及外籍优化团队将竭诚为您服务，解答您在服务中产生的任何疑问并给出我们专业的指导和建议。</p>

                <p>
                    关于学习培训版块，Linked-Media的培训师团队不仅可为您提供领英实时新技能的操作培训，同时，我们将为依据国内外关于海外营销、新媒体营销、品牌形象建立及规划等方面的最新报告，结合服务中所了解的特殊难题和情况，为您提供专属指导，开拓思路。</p>

            </div>
        </div>
        <div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">
            <div class="su-spoiler-title"><span class="su-spoiler-icon"></span>领英到底能为我带来什么？
            </div>
            <div class="su-spoiler-content su-clearfix">
                <p>领英是链接国内外市场的重要平台，不仅是其全球覆盖量及会员优质度为试图打开国际市场的各企业、政府提供了重要的形象驻地及宣传推广平台，是目前<span
                        style="font-family: arial, helvetica, sans-serif;">BTOB</span>采购的重要途径。</p>

                <p>同时，领英是许多国际<span style="font-family: arial, helvetica, sans-serif;">500</span>强高管及政府发展采购人员的询盘、招聘、采购重要渠道，在领英上的形象将决定着合作意愿的强弱度。
                </p>

            </div>
        </div>
        <div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">
            <div class="su-spoiler-title"><span class="su-spoiler-icon"></span>你们能帮我做什么？
            </div>
            <div class="su-spoiler-content su-clearfix">
                <p>
                    关于服务板块，我们可为您提供套餐服务各环节中的图片制作、中外文案编辑、推广计划制定、数据报告分析等服务。在此期间，Linked-media的专业策划团队、投放团队、设计团队及外籍优化团队将竭诚为您服务，解答您在服务中产生的任何疑问并给出我们专业的指导和建议。</p>

                <p>
                    关于学习培训版块，Linked-Media的培训师团队不仅可为您提供领英实时新技能的操作培训，同时，我们将为依据国内外关于海外营销、新媒体营销、品牌形象建立及规划等方面的最新报告，结合服务中所了解的特殊难题和情况，为您提供专属指导，开拓思路。</p>

            </div>
        </div>
    </div>
    <!--滑动列表E-->
    <!--2.滑动列表S-->
    <ul id="accordion" class="accordion" style="margin: 0;">
        <li style="width: 100%;" class="open">
            <div class="link">低费用 ≠ 低成本<i class="fa fa-chevron-circle-down arrow fa-lg"></i></div>
            <div class="news submenu" style="display: block;">
                <div class="newsinfoon">
                    <p><br></p>

                    <p><span style="font-size: 16px;">　　最近，我和一个非常，非常有钱的人坐在一起开会。我们都在讨论是雇佣成本比较高的有潜力的员工，还是外包给第三方。第三方相当便宜，但可能没有有潜力的员工那么有经验和考虑周全。<br></span>
                    </p>

                    <p><br></p>

                    <p><span style="font-size: 16px;">　　他唯一的观点是：“低费用不是意味着低成本。”</span></p>

                    <p><br></p>

                    <p><span style="font-size: 16px;">　　随着时间的推移，糟糕的决定，所犯的错误和差强人意的计划加起来比在第一时间就做好所花费的费用更多。这并不意味着花费额外的钱只是为了花钱，他的观点只是表达了为价值付钱的重要性。</span>
                    </p></div>
            </div>
        </li>
    </ul>
    <!--2.滑动列表E-->
    <!--倒计时S-->
    <span id="divdown1"></span>
    <!--倒计时E-->
    <!--滑动广告S-->
    <!--滑动广告E-->
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <!--右侧分享E-->
    <ul class="share_right">
        <li class="cl share_top" id="share_top">
            TOP
        </li>
        <li class="cl share_qq">
            <img src="http://7k999.kuboluo.com/res/images/fixed/QQ.png" alt=""/>

            <p>QQ客服</p>
        </li>
        <li class="cl share_tel">
            <img src="http://7k999.kuboluo.com/res/images/fixed/call.png" alt=""/>

            <p>0532-86701888</p>
        </li>
        <li class="cl share_code">
            <img src="http://7k999.kuboluo.com/res/images/fixed/code.png" alt=""/>
        </li>
    </ul>
    <!--右侧分享S-->
    <!--尾部S-->
    <div id="footer">
        <a name="myAnchor" id="myAnchor"></a>

        <div class="footer_wrapper clearfix">
            <div class="footer_l">
                <div class="company_name">技术有限公司</div>
                <div class="copyright">Copyright 2014－2016 7k999.com All Rights Reserved</div>
                <div class="company_addr">Add：山东省青岛胶州宝龙城市广场A座2205</div>
                <div class="company_tel">Tel:0532-86620102</div>
            </div>
            <div class="footer_r">
                <div>关注我们</div>
                <div>
                    <a href=""><img src="http://7k999.kuboluo.com/res/images/weiboIcon.png" alt=""/></a>
                    <a href=""><img src="http://7k999.kuboluo.com/res/images/weiboIcon.png" alt=""/></a>
                    <a href=""><img src="http://7k999.kuboluo.com/res/images/weiboIcon.png" alt=""/></a>
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
    <!--banner JS S-->
    <script>
        var i;
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
        for(i=1;i<pages;i++){
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
            } else {
                $('.box').removeClass('current_box').eq(page - 1).addClass('current_box');
                $('#banner ul li').removeClass('current').eq(pages - 1).addClass('current');
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
    <!--产品标题数字跳动S-->
    <script type="text/javascript">
        $(function () {
            NumbersAnimate.Target = $(".textC");
            NumbersAnimate.Numbers = 1238911623;
            NumbersAnimate.Duration = 1500;
            NumbersAnimate.Animate();
        });
        $(window).resize(function () {
            var array = NumbersAnimate.Numbers.toString().split("");
            var width = (array.length) * 18;
            var window_width = document.body.clientWidth;
            var left = (window_width - width) / 2;
            $('.textC').css('margin-left', left);
        });
        var NumbersAnimate = {
            Target: null,
            Numbers: 0,
            Duration: 500,
            Animate: function () {
                var array = NumbersAnimate.Numbers.toString().split("");
                var width = (array.length) * 18;
                var window_width = document.body.clientWidth;
                var left = (window_width - width) / 2;
                $('.textC').css('margin-left', left);
                //遍历数组
                for (var i = 0; i < array.length; i++) {
                    var currentN = array[i];
                    //数字append进容器
                    var t = $("<span></span>");
                    $(t).append("<span class=\"childNumber\">" + array[i] + "</span>");
                    $(t).css("margin-left", 18 * i + "px");
                    $(NumbersAnimate.Target).append(t);
                    //生成滚动数字,根据当前数字大小来定
                    for (var j = 0; j <= currentN; j++) {
                        var tt;
                        if (j == currentN) {
                            tt = $("<span class=\"main\"><span>" + j + "</span></span>");
                        } else {
                            tt = $("<span class=\"childNumber\">" + j + "</span>");
                        }
                        $(t).append(tt);
                        $(tt).css("margin-top", (j + 1) * 25 + "px");
                    }
                    $(t).animate({marginTop: -((parseInt(currentN) + 1) * 25) + "px"}, NumbersAnimate.Duration, function () {
                        $(this).find(".childNumber").remove();
                    });
                }
            }
        }
    </script>
    <!--产品标题数字跳动E-->
    <!--产品列表S-->
    <script>
        $('.product_listbox').mouseenter(function () {
            $('.product_listbox').not($(this)).find('.product_info').stop().fadeOut(500);
            $(this).find('.product_info').stop().fadeIn(500);
        }).mouseleave(function () {
            $(this).find('.product_info').stop().fadeOut(500);
        })

    </script>
    <!--产品列表E-->
    <!--手风琴S-->
    <script>
        $('.accordion_list li').mouseenter(function () {
            $('.accordion_list li').css('width', '15%');
            $(this).css('width', '40%');
        });
        $('.accordion_list li').mouseleave(function () {
            $('.accordion_list li').css('width', '20%');
        })
    </script>
    <!--手风琴E-->
    <!--2.滑动列表S-->
    <script>
        $(function () {
            var Accordion = function (el, multiple) {
                this.el = el || {};
                this.multiple = multiple || false;
                // Variables privadas
                var links = this.el.find('.link');
                // Evento
                links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
            };
            Accordion.prototype.dropdown = function (e) 
            };
            var accordion = new Accordion($('#accordion'), false);
        });
    </script>
    <!--2.滑动列表E-->
    <!--计算滚动高度触发特效S-->
    <script>
        function revealOnScroll() {
            var scrolled = $(window).scrollTop();

            // 视窗，即viewport，页面可视范围的窗口
            setTimeout(function(){
                $(".su-accordion").each(function() {
                    var current = $(this), // 当前元素
                            w_height = $(window).outerHeight(), //视窗高度
                            offsetTop = current.offset().top; //当前元素离顶部的高度

                    // 计算高度差（此处预留50是为了看效果）
                    // 当元素进入视窗时，添加class
                    if (scrolled + w_height - 50 > offsetTop) {
                        current.addClass("fadeInUp");
                    } else {
                        current.removeClass("fadeInUp");
                    }
                });
            },200);
            setTimeout(function(){
                $("#accordion").each(function() {
                    var current = $(this), // 当前元素
                            w_height = $(window).outerHeight(), //视窗高度
                            offsetTop = current.offset().top; //当前元素离顶部的高度

                    // 计算高度差（此处预留50是为了看效果）
                    // 当元素进入视窗时，添加class
                    if (scrolled + w_height - 50 > offsetTop) {
                        current.addClass("fadeInUp");
                    } else {
                        current.removeClass("fadeInUp");
                    }
                });
            },600)

        }
        $(window).on("scroll", revealOnScroll);
    </script>
    <!--计算滚动高度触发特效E-->
    <!--倒计时-->
    <script language="javascript" type="text/javascript">
        var interval = 1000;
        function ShowCountDown(year,month,day,hour,minute,second,divname)
        {
            var now = new Date();
            var endDate = new Date(year, month-1, day,hour,minute,second);
            var leftTime=endDate.getTime()-now.getTime();
            if(leftTime>0){
                var leftsecond = parseInt(leftTime/1000);
                var day1=Math.floor(leftsecond/(60*60*24));
                var hour1=Math.floor((leftsecond-day1*24*60*60)/3600);
                var minute1=Math.floor((leftsecond-day1*24*60*60-hour1*3600)/60);
                var second1=Math.floor(leftsecond-day1*24*60*60-hour1*3600-minute1*60);
                var cc = document.getElementById(divname);
                cc.innerHTML = "剩余："+day1+"天"+hour1+"小时"+minute1+"分"+second1+"秒";
            }else{
                var cc = document.getElementById(divname);
                cc.innerHTML = "剩余：0天0小时0分0秒";
            }
        }
        window.setInterval(function(){ShowCountDown(2017,9,27,10,02,0,'divdown1');}, interval);
    </script>
    <!--倒计时-->
</div>
</body>
</html>

