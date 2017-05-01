<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<style>
html, body{width: 100%; height:100%;}
body{background: url(./Public/images/bg.png) no-repeat center;}
h1,span{color: #fff;}
input{padding-left: 6px;}	
</style>		
</head>
<body>
<div class="container">
	<div class="row text-center">
		<div class="col-md-20" style="margin: 160px 0px 80px 0px;">
			<h1>后台登录</h1>
		</div>

		<div class="col-md-20 text-center" >
			<form action="" style="padding: 20px 30px;display: inline-block;border: 1px solid #eee;">
				<span>用户名</span>
				<input type="text" name="username" id=""></br>
				<span>密&nbsp;&nbsp;&nbsp;&nbsp;码</span>
				<input type="password" name="password" id="" style="margin-top: 20px"></br>
				<br>
				<button class="btn" value="注册"><a href="/Couldbookmarks/index.php?m=Admin&c=Register&a=index">注册</a></button>
				<button class="btn" type="button" value="登录" onclick="login.check()">登录</button>
			</form>
		</div>
	</div>
</div>
<script src="./Public/js/admin/login.js"></script>
<script src="./Public/js/jquery.js"></script>
<script src="./Public/js/dialog/layer.js"></script>
<script src="./Public/js/dialog.js"></script>
</body>
</html>