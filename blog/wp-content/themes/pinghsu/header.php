<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="x-dns-prefetch-control" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="Cache-Control" content="no-transform"/>
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<title><?php if ( is_tag() ) {
		echo trim(wp_title('',0));if($paged > 1) printf(' - 第%s页',$paged);echo ' | ';bloginfo( 'name' );
	} elseif ( is_archive() ) {
		echo trim(wp_title('',0));if($paged > 1) printf(' - 第%s页',$paged);echo ' | ';bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo '&quot;'.wp_specialchars($s).'&quot;的搜索结果 | '; bloginfo( 'name' );
	} elseif ( is_home() ) {
		bloginfo( 'name' );echo' | ';bloginfo('description');$paged = get_query_var('paged'); if($paged > 1) printf(' - 第%s页',$paged);
	} elseif ( is_404() ) {
		echo '页面不存在！ |'; bloginfo( 'name' );
	} elseif ( is_single()) {
	    echo trim(wp_title('',0));if($paged > 1) printf(' - 第%s页',$paged);echo ' | ';bloginfo( 'name' );		
	} else {
		echo trim(wp_title('',0)).' | ';bloginfo( 'name' );
	} ?>
</title>
		<style>
            *{
                font-family: Arial;
            }
            body{
                text-align: center;
            }
            .link > p{
                font-size: 16px;
            }
            .container{
                margin: 0 auto;
                width: 1000px;
            }
            .navbar{
                height: 80px;
                background: #202020;
            }
            .logo{
                float: left;
                margin-left: 40px;
                margin-right: 20px;
                margin-top: 3px;
                width: 320px;
            }
            .link{
                font-size: 18px;
                float: left;
                color: #FFFFFF;
                width: 80px;
                margin-left: 10px;
                margin-right: 10px;
                height: 80px;
                line-height: 24px;
            }
            .link:hover, .link-active{
                background-color: #E71D1B;
            }
        </style>
<meta name="keywords" content="<?php echo get_option('header_zdgjc'); ?>"/>
<meta name="description" content="<?php echo get_option('header_zdms'); ?>"/>
<script type="text/javascript" src="http://libs.baidu.com/jquery/1.8.3/jquery.js"></script>
<!--[if lt IE 9]>
<script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body class="bg-grey" gtools_scp_screen_capture_injected="true">
<!--[if lt IE 8]>
<div class="browsehappy" role="dialog">
    当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/" target="_blank">升级你的浏览器</a>。
</div>
<![endif]-->
<!-- <header id="header" class="header bg-white">
<div class="navbar-container">
	<a onclick="location='http://www.ljtxhz.com'" href="#" class="navbar-logo"><?php if ( !get_option('header_logo_image') ) { bloginfo( 'name' ); } else { echo '<img src="' . get_option('header_logo_image') .'">';} ?></a>
	<div class="navbar-menu">
		<?php $menuParameters = array('container'	=> false,'echo'	=> false,'items_wrap' => '%3$s','depth'	=> 0,'theme_location' => 'nav',);echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );?>
	</div>
	<a href="<?php echo home_url();?>/search" class="navbar-search"><span class="icon-search"></span></a>
	<div class="navbar-mobile-menu" onclick="">
		<span class="icon-menu cross"><span class="middle"></span></span>
		<ul>
			<?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'nav')); ?>
		</ul>
	</div>
</div>
</header> -->
		<header class="navbar" id="top">
            <div class="container">
                <div class="logo">
                    <a onclick="location='../index.html'" href="#" ><img src="../img/logo.png"></a>
                </div>
            </div>
            <a onclick="location='../index.html'" href="#">
            <div class="link">
                <p style="padding-top:10px;">首页</p>
            </div>
            </a>
            <a onclick="location='../SportWay.html'" href="#">
            <div class="link">
                <p style="padding-top:10px;">健身方式</p>
            </div>
            </a>
            <a onclick="location='../JoinUs.html'" href="#">
            <div class="link">
                <p style="padding-top:10px;">品牌加盟</p>
            </div>
            </a>
            <a onclick="location='../news.html'" href="#">
            <div class="link link-active">
                <p style="padding-top:10px;">新闻资讯</p>
            </div>
            </a>
            <a onclick="location='../AboutUs.html'" href="#">
            <div class="link">
                <p style="padding-top:10px;">关于我们</p>
            </div>
            </a>  
            <a onclick="location='../ContactUs.html'" href="#">  
            <div class="link">
                <p style="padding-top:10px;">联系我们</p>
            </div>
            </a>
            </div>
        </header>