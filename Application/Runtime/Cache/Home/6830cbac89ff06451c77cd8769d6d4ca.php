<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TestUser</title>
</head>
<body>
<form action="login" method="post">
	<input type="text" name="username"><br>
	<input type="password" name="password"><br>
	<input type="submit" value="check">
</form>
<form action="/tp/index.php/Home/User/add" method="post" enctype="multipart/form-data">
    邮箱：<input  type="text" id="mail" name="mail"/>
    标题：<input  type="text" id="title" name="title"/>
    内容<input  type="text" id="content" name="content"/>
    <input class="button" type="submit" value="发送" style="margin: 0 auto;display: block;"/>
</form>
</body>
</html>