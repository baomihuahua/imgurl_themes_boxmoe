<?php
    //获取版本号
    $ver_file = FCPATH.'data/version.txt';
    if(is_file($ver_file)){
        @$version = file_get_contents($ver_file);
    }

?>


<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo @$title; ?></title>
	<meta name="author" content="boxmoe.com" />
	<meta name="keywords" content="<?php echo @$keywords; ?>" />
	<meta name="description" content="<?php echo @$description; ?>" />
    <link rel="shortcut icon" href="/favicon.ico"  type="image/x-icon" />
	<link rel="Bookmark" href="/favicon.ico" />
	<link rel="stylesheet" href="/boxmoe_assets/css/vendor.css" />	
	<link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="/boxmoe_assets/css/style.css" rel="stylesheet">
    <script src="/boxmoe_assets/js/vendor.js"></script>	
</head>
<body data-spy="scroll" data-target=".navbar-collapse">
	<div id="preloader" class="preloader">
		<div class="spinner">
			<div class="spinner-grow" role="status">
		</div><img src="/boxmoe_assets/images/lolisister1.gif">
			<span class="sr-only">Loading...</span>
		</div>
		<div class="preloader-screens">
			<div></div>
			<div></div>
			<div></div>
			<div></div> 
		</div>
	</div>
	<aside class="aside">
		<div class="nav-wrapper">
			<div class="navbar-toggler">
				<svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="60">
				  <path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
				  <path class="line middle" d="m 30,50 h 40" />
				  <path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
				</svg>
			</div>
			<nav class="navbar text-center align-items-center justify-content-center">
                <div class="collapse navbar-collapse show" id="navbarCollapse">					
					<div class="about-avatar mb-5">
                		<a href="index.html">
							<img src="<?php echo @$logo; ?>" alt="" class="img-fluid mx-auto d-block shadow-sm rounded-full">
						</a>
						<div class="about-avatar-details mt-3">
							<p class="badge">盒子萌图床</p>
						</div>
					</div>
                   <ul class="navbar-nav mx-auto">
				   <li class="nav-item"><a class="<?php if ( $_SERVER['REQUEST_URI'] == '/'){echo 'actives';}?> nav-link ripple" href="/"><i class="fa fa-home"></i><span>首页</span></a></li>
				   <li class="nav-item"><a class="nav-link ripple <?php if ( $_SERVER['REQUEST_URI'] == '/home/multiple'){echo'actives';}?>  " href="/home/multiple"><i class="fa fa-cloud-upload"></i><span>多图上传</span></a></li>
				   <li class="nav-item"><a class="nav-link ripple <?php if ( $_SERVER['REQUEST_URI'] == '/found'){echo'actives';}?> " href="/found"><i class="fa fa-bullseye"></i><span>探索发现</span></a></li>
				   <li class="nav-item"><a class="nav-link ripple  <?php if ( $_SERVER['REQUEST_URI'] == '/page/use'){echo'actives';}?>" href="/page/use"><i class="fa fa-at"></i><span>关于</span></a></li>
				    <!-- 简单判断用户是否登录 -->
                            <?php if((isset($_COOKIE['user'])) && (isset($_COOKIE['token']))){ ?>
                       <li class="nav-item"><a class="nav-link" href="/admin/index"><i class="fa fa-user"></i> 后台管理</a></li>
                            <?php }?>
                            <!-- 简单判断用户是否登录END -->
				   </ul>
                </div>

               	<div class="aside-footer">
                	<ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="这里是QQ"><i class="fa fa-qq"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="这里是微信"><i class="fa fa-weixin"></i></i></a></li>
                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="这里是微博"><i class="fa fa-weibo"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="这里是github"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
	        </nav>
        </div>
    </aside>
    <!-- 顶部导航栏END -->
