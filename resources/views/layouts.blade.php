<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', env('TITLE'))</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="@yield('keywords', env('KEYWORDS'))" />
    <meta name="description" content="@yield('description', env('DESCRIPTION'))"/>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="theme/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="theme/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="theme/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- pop-up-box -->
    <link href="theme/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up-box -->
    <!-- font-awesome icons -->
    <link href="theme/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <link href="http://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- header -->
<div class="header">
    <div class="container">
        <div class="agile_header_grid">
            <div class="w3_agile_logo">
                <h1><a href="index.html"><span>L</span>ucrative</a></h1>
            </div>
            <div class="agileits_w3layouts_sign_in">
                <ul>
                    <li><a href="#small-dialog" class="play-icon popup-with-zoom-anim">登    录</a></li>
                    <li>来   电 : <span>(+086) 189-0960-2885</span></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="w3_agileits_nav">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav>
                        <ul class="nav navbar-nav">
                            <li @if($route_name == 'index') class="active" @endif ><a href="index.html">首页</a></li>
                            <li @if($route_name == 'services') class="active" @endif ><a href="services.html" class="hvr-sweep-to-bottom">服务提供</a></li>
                            <li @if($route_name == 'about') class="active" @endif ><a href="about.html" class="hvr-sweep-to-bottom">关于我们</a></li>
                            <li @if($route_name == 'news') class="active" @endif ><a href="news.html" class="hvr-sweep-to-bottom">新闻资讯</a></li>
                            <li @if($route_name == 'portfolio') class="active" @endif ><a href="portfolio.html" class="hvr-sweep-to-bottom">产品展示</a></li>
                            <li @if($route_name == 'contact') class="active" @endif ><a href="contact.html" class="hvr-sweep-to-bottom">联系我们</a></li>
                        </ul>
                        <div class="agileinfo_search">
                            <form action="#" method="post">
                                <input type="text" name="Search" placeholder="输入关键词..." required="">
                                <input type="submit" value=" ">
                            </form>
                        </div>
                    </nav>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- //header -->
<!-- pop-up-box -->
<div id="small-dialog" class="mfp-hide w3ls_small_dialog wthree_pop">
    <h3 class="agileinfo_sign">登   录</h3>
    <div class="agileits_signin_form">
        <form action="#" method="post">
            <input type="email" name="email" placeholder="邮箱" required="">
            <input type="password" name="password" placeholder="密码" required="">
            <div class="agile_remember">
                <div class="agile_remember_left">
                    <div class="check">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>记住密码</label>
                    </div>
                </div>
                <div class="agile_remember_right">
                    <a href="#">忘记密码</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <input type="submit" value="SIGN IN">
            <p>还没有账号，请 <a href="#small-dialog1" class="play-icon popup-with-zoom-anim">注册</a></p>
            <div class="w3agile_social_icons">
                <ul>
                    <li class="wthree_follow">第三方登录 :</li>
                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </form>
    </div>
</div>
<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
    <h3 class="agileinfo_sign">注   册</h3>
    <div class="agileits_signin_form">
        <form action="#" method="post">
            <input type="text" name="name" placeholder="First Name" required="">
            <input type="text" name="name" placeholder="Last Name" required="">
            <input type="email" name="email" placeholder="Your Email" required="">
            <input type="password" name="password" placeholder="Password" required="">
            <input type="password" name="password" placeholder="Confirm Password" required="">
            <input type="submit" value="注   册">
            <p>已经有账号，请 <a href="#small-dialog" class="play-icon popup-with-zoom-anim">登   录</a></p>
            <div class="w3agile_social_icons">
                <ul>
                    <li class="wthree_follow">第三方登录 :</li>
                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </form>
    </div>
</div>
<!-- //pop-up-box -->
<script src="theme/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>

@yield('main')

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-md-4 w3_footer_grid">
                <h2><a href="index.html"><span>L</span>ucrative</a></h2>
                <p>Aliquam lacus tur <a href="#">http:///lucrative.com</a> lobortis quis dolor sed,
                    nec convallis velit vestibulum ac dignissim rhoncus neque.</p>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <div class="w3l_footer_grid">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <h4>Address</h4>
                <p>234 main street west Building, NewYork City,F34 834.</p>
            </div>
            <div class="col-md-2 w3_footer_grid">
                <div class="w3l_footer_grid">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <h4>Call Us</h4>
                <p>+(123) 456 789 344 <span>+(123) 456 780 344</span></p>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <div class="w3l_footer_grid">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <h4>Mail Us</h4>
                <p><a href="mailto:info@example.com">info@example1.com</a>
                    <span><a href="mailto:info@example.com">info@example2.com</a></span></p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="copyright">
    <div class="container">
        <div class="w3ls_copyright_left">
            <ul>
                <li><a href="services.html">Services</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <p>Copyright &copy; 2017.Company name All rights reserved.More Templates </p>
        </div>
        <div class="w3ls_copyright_right">
            <ul>
                <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //footer -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="theme/js/move-top.js"></script>
<script type="text/javascript" src="theme/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
<script src="theme/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>