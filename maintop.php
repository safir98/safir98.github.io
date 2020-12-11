<?php
	include_once 'config.php';
	session_start();

	if(isset($_GET['delete'])){
		unset($_SESSION['login']);
		header("location: http://localhost/SAFIR`S NET/index.php");
	}
	
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>主机游戏商城</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href=".\css\top.css">
	<script type="text/javascript" src=".\js\jquery-1.11.0.min.js"></script>
</head>
<body>
	<div id="nav-header">
		<div class="header">
			<!-- <div>我的LOGO</div>logo板块 -->
			<a href="http:\\localhost\SAFIR`S NET\index.php">
				<img src=".\images\Topimages\LOGO.jpg" class="LOGO">
			</a>
			<!-- 菜单板块 -->
			<nav style="width: 500px;">
				<ul id="menu_">
					<li class="menu_special">
						<i class="slide-icon"></i>
						主机游戏商城
						<i class="slide-icon"></i>
						<ul>菜单二级</ul>
						<ul>菜单二级</ul>
						<ul>菜单二级</ul>
						<!-- <div class="slide-submeu"><a>safir创作</a></div> -->
					</li>
					<li><a href="http:\\localhost/SAFIR`S NET\index.php">首页</a></li>
					<li class="xinwen">新闻
						<ul class="menu_two">
							<ul class="menu_three">菜单二级
								<ul>菜单三级</ul>
								<ul>菜单三级</ul>
								<ul>菜单三级</ul>
							</ul>
							<ul>菜单二级</ul>
							<ul>菜单二级</ul>
							<ul>菜单二级</ul>
						</ul>
					</li>
					<li>精选
					
					</li>
					<li>上新
						
					</li>
					<li>社区
					</li>
				</ul>
			</nav>
			<!-- 搜索框 -->
			<div class="search">
				<form action="search.php" name="form_search">
					<input type="input" name="search" id="search" placeholder="搜索游戏或游戏资讯">
					<span class="search-icon" id="search_bottom" onclick="document.form_search.submit()"></span>
				</form>
			</div>
			<!-- 注册登录区块 -->
			<!-- <div class="nav-sign">
				if(登陆成功的时候){显示欢迎safir管理购物车退出}
				else{显示登录注册}
				<span class="user-info">
					<a href="#">注册</a>
					<i></i>
					<a href="http:\\localhost/SAFIR`S NET\login\index.php">登录</a>
				</span>
			</div> -->
				<?php
					if(isset($_SESSION['login'])){
						$icon = "select * from users where uemail = '".$_SESSION['login']."'";
						$que = my_error($link,$icon);
						$userifon = mysqli_fetch_assoc($que);
					}
					if(isset($_SESSION['login'])){		
				?>		
					<div id="logins">
						<div>
							<span id="loginafter">
								<div class="loginaftera"><a href="http:\\localhost\SAFIR`S NET\maintop.php?delete=1">退出</a></div>
								<i></i>
								<div class="loginaftera"><a href="">购物车</a></div>
								<i></i>
								<div class="loginaftera"><a href="">管理</a></div>
								<i></i>
								<div class="loginaftera"><a href="">
									<?php echo $userifon['uname']; ?>
								</a></div>
								<p>欢迎</p>
							</span>
						</div>
				<?php }else{ ?>
						<div>
							<span id="loginbeforer">
								<div class="loginbeforea"><a href="http:\\localhost\SAFIR`S NET\login\index.php">登录</a></div>
								<!-- <li></li> -->
								<i></i>
								<div class="loginbeforea"><a href="http:\\localhost\SAFIR`S NET\login\register.php" class="loginbeforea">注册</a></div>
							</span>
						</div>
					</div>
				<?php } ?>
			<!-- _________________________________________ -->
		</div>
	</div>
	<!-- <div style="width: 1200px;height: 1900px;border: 1px solid red;margin: 0 auto;margin-top: 20px">
	</div> -->
	<!-- 滑动置顶的导航栏，发现有BUG先舍弃 -->
	<!-- <script type="text/javascript">
		$(function(){
			var nav_position = $('#nav-header').height();
			$(document).scroll(function(){
				$(window).scrollTop() >= nav_position*(9/10) ? $('#nav-header').addClass('fixed'):$('#nav-header').removeClass('fixed');
			})
		})
	</script> -->
	
	<?php //echo "SAFIR的mainTop！"; ?>

</body>
</html>