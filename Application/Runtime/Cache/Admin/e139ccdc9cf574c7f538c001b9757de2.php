<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src='./Public/js/admin/user.js'></script>
	<script src='./Public/js/dialog.js'></script>
	<script src='./Public/js/dialog/layer.js'></script>
</head>
<body>
	<div class="container">
		<div class="row text-center">
			<p><h1>注册</h1></p>
			<br>
			<br>
			<br>
			<br>
			<div class="col-sm-4 col-sm-offset-4">
				<form action="" class="form-horizontal" >
					<div class="form-group">
						<label for="firstname" class="col-sm-3 control-label">用户名</label>
						<div class="col-sm-9">
							<input type="text" name="username" class="form-control" id="firstname" 
								   placeholder="请输入用户名">
						</div>
					</div>
					
					<div class="form-group">
						<label for="lastname" class="col-sm-3 control-label">密码</label>
						<div class="col-sm-9">
							<input type="password" name="password" class="form-control" id="lastname" 
								   placeholder="请输入密码">
						</div>
					</div>
					
					<div class="form-group">
						<label for="lastname"  class="col-sm-3 control-label">邮箱</label>
						<div class="col-sm-9">
							<input type="text" name="email" class="form-control" id="lastname" 
								   placeholder="请输入邮箱">
						</div>
					</div>
				</form>	
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-9">
							<button class="btn btn-default"><a href="/couldbookmarks/index.php?m=admin&c=login&a=index">取消</a></button>

							<button class="btn btn-default" onclick="user.register()">注册</button>
						</div>
					</div>
			</div>

		</div>
	</div>

	<div class="container-fluid">
		<div class="row text-center" style="margin-top: 100px; line-height: 50px;">
			<p>Copyright message.co</p>
		</div>
	</div>	
</body>
</html>