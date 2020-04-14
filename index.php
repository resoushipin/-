<?php include ('./data/beipy.inc.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>
			<?php echo $aik['title'];?>
		</title>
		<meta name="keywords" content="<?php echo $aik['keywords'];?>" />
		<meta name="description" content="<?php echo $aik['description'];?>" />
		<meta name=viewport content="width=device-width,anicital-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/base64.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<!--微博引入关注插件-->
		<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="css/style.css" />
		<!--浏览器标签ico-->
		<link rel="shortcut icon" href="img/favicon.ico" />
		<!--书签标签-->
		<link rel="bookmark" href="img/tvico.png" />
		<!--苹果桌面标题-->
		<meta name="apple-mobile-web-app-title" content="热搜视频">
		<!--苹果桌面图标-->
		<link rel="apple-touch-icon-precomposed" sizes="180x180" href="img/tvlogo.png">
	</head>
	<body>
	<header class="navbar-fixed-top">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- 手机自适应样式 -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">导航切换</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
							<!--logo图标-->
							<a class="navbar-brand logo" href="/"></a>
						</div>
						<!-- pc导航样式 -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li>
									<a href="/" target="_blank">首页</a>
								</li>
								
								<li>
									<a  href="/vip.html" target="_blank" title="观看会员视频教程">使用教程</a>
								</li>
								
								<li>
                                    <a href="http://v.resoumen.com/rssp.rar" target="_blank"><span class="badge" style="background: #FF4040;margin-right:5px;">Hot</span>网站源码<span class="sr-only">(current)</span></a>
                                </li>

								<li>
									<a href="https://android.myapp.com/myapp/detail.htm?apkName=com.dazheribao.app" target="_blank" title="免费会员">手机APP</a>
								</li>
								
								<?php echo $aik['topnav'];?>
							</ul>
							<!--导航 右侧-->
							<ul class="nav navbar-nav navbar-right">
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">关于我们<span class="caret"></span></a>
									<ul class="dropdown-menu">
									
									    <li>
											<a href="<?php echo $aik['url'];?>" target="_blank" title="友情网站">旗下网站</a>
										</li>
										
										<li>
											<a href="<?php echo $aik['zhuye'];?>" target="_blank" title="个人博客">站长主页</a>
										</li>
									
										<li>
											<a href="<?php echo $aik['lianxi'];?>" target="_blank" title="业务咨询">联系我们</a>
										</li>
										
										<li>
											<a href="<?php echo $aik['qun'];?>" target="_blank" title="加群获得更多权益">会员群组</a>
										</li>
										
										<li role="separator" class="divider"></li>
										<li>
											<a><p>版本：V1.0</p></a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>
	
		<!--视频box区域-->
		<div class="container-fluid video-box">
			<div class="container ">
			
			<div class="url-box">
					<div class="input-group">
						<input type="text" id="url" class="form-control url-text" aria-label="Text input with segmented button dropdown" placeholder="输入视频地址，点击解析播放（支持优酷、爱奇艺、腾讯视频等平台）" title="复制视频地址，粘贴到此处点击解析播放">
						<div class="input-group-addon">
							<select class="url-c url-text" title="如果视频无法播放，请尝试更换解析线路" id="jk">
								<option value="<?php echo $aik['jiekou1'];?>" selected>
									<?php echo $aik['jiekou1name'];?>
								</option>
								<option value="<?php echo $aik['jiekou2'];?>">
									<?php echo $aik['jiekou2name'];?>
								</option>
								<option value="<?php echo $aik['jiekou3'];?>">
									<?php echo $aik['jiekou3name'];?>
								</option>
								<option value="<?php echo $aik['jiekou4'];?>">
									<?php echo $aik['jiekou4name'];?>
								</option>
								<option value="<?php echo $aik['jiekou5'];?>">
									<?php echo $aik['jiekou5name'];?>
								</option>
								<option value="<?php echo $aik['jiekou6'];?>">
									<?php echo $aik['jiekou6name'];?>
								</option>
							</select>
						</div>
						<div class="input-group-btn">

							<button type="button" class="btn btn-default btn-play" title="点击解析开始播放" onclick="play()">解析播放</button>
						</div>
					</div>
				</div>
			
				<div class="tit-name">
					<span>正在播放:</span>
					<h1 id="tittext">视频教程</h1>
				</div>
				<iframe id="palybox" src="<?php echo $aik['jiekou1'];?><?php echo $aik['maurl'];?>" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen="true" allowtransparency="true"></iframe>

			
				<div class="tit-gg">
					<a href="<?php echo $aik['gonggaourl'];?>" target="_blank" style="color: #ff4040" ><?php echo $aik['gonggao'];?></a>
				</div>
				<div class="guanggaoBox"><?php echo $aik['guanggao'];?></div>
			</div>
		</div>
		<div class="container-fluid logo-box">
			<div class="container ">
				
			</div>
		</div>
		<!--平台logo	-->
		<div class="container-fluid logo-box">
			<div class="container ">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-tit">
							<h4>现已支持视频网站</h4>
							<p>支持全网视频网站解析，更多惊喜可以自行探索</p>
						</div>
					</div>
				</div>
				<!--第一行-->
				<div class="row">
				
				    <div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://www.youku.com/" target="_blank" title="优酷">
								<img class="img-responsive" src="img/logo/youkulogo.png" />
							</a>
						</div>
					</div>
					
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.iqiyi.com/" target="_blank" title="爱奇艺">
								<img class="img-responsive" src="img/logo/iqiyilogo.png" />
							</a>
						</div>
					</div>
				
				    <div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://v.qq.com/" target="_blank" title="腾讯视频">
								<img class="img-responsive" src="img/logo/qqlogo.png" />
							</a>
						</div>
					</div>
					
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.bilibili.com/" target="_blank" title="哔哩哔哩">
								<img class="img-responsive" src="img/logo/bilibili.png" />
							</a>
						</div>
					</div>
					
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://www.mgtv.com/" target="_blank" title="芒果TV">
								<img class="img-responsive" src="img/logo/hunantvlogo.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.le.com/" target="_blank" title="乐视">
								<img class="img-responsive" src="img/logo/letvlogo.png" />
							</a>
						</div>
					</div>
				</div>
				<!--第一行结束-->
				<!--第二行开始-->
				<div class="row">
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.baofeng.com/" target="_blank" title="暴风影音">
								<img class="img-responsive" src="img/logo/baofeng.png" />
							</a>
						</div>
					</div>
					
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.fun.tv/" target="_blank" title="风行视频">
								<img class="img-responsive" src="img/logo/fengxing.png" />
							</a>
						</div>
					</div>
					
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="https://tv.sohu.com" target="_blank" title="搜狐视频">
								<img class="img-responsive" src="img/logo/sohulogo.png" />
							</a>
						</div>
					</div>
					
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://www.acfun.cn/" target="_blank" title="Ac弹幕网">
								<img class="img-responsive" src="img/logo/acfun.png" />
							</a>
						</div>
					</div>
					
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://www.pptv.com/" target="_blank" title="PP视频">
								<img class="img-responsive" src="img/logo/pptv.png" />
							</a>
						</div>
					</div>
					
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://vip.1905.com/" target="_blank" title="1905电影网">
								<img class="img-responsive" src="img/logo/1905logo.png" />
							</a>
						</div>
					</div>
				</div>
				<!--第二行结束-->
				<!---->
			</div>
		</div>
		
		<div class="container-fluid logo-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-tit">
							<h4>打赏我们</h4>
							<p>你的打赏，能够支持我们的免费服务永久持续下去</p>
							<title="扫描二维码打赏我们">
								<center><img class="img-responsive" src="img/ds.png" /></center>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid logo-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-tit">
							<h4>更多功能陆续开发中…… </h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		
			<?php  include 'footer.php';?>
			<script type="text/javascript" src="js/tv-beipy.js" /></script>
			
<!--百度推送收录-->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>		
			
	</body>

</html>
