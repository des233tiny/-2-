<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登录</title>
  <style>
    body {
      background: url('https://www.besti.edu.cn/images/2023/10/20231020093646351_s.jpg') no-repeat;
       background-size: 103% auto;
  background-position: center center;
  background-repeat: no-repeat;
    }

    #login_box {
      width: 20%;
      height: 400px;
      background-color: #00000060;
      margin: auto;
      margin-top: 10%;
      text-align: center;
      border-radius: 10px;
      padding: 50px 50px;
    }

    h2 {
      color: #ffffff90;
      margin-top: 5%;
    }

    #input-box {
      margin-top: 5%;
    }

    span {
      color: #fff;
    }

    input {
      border: 0;
      width: 60%;
      font-size: 15px;
      color: #fff;
      background: transparent;
      border-bottom: 2px solid #fff;
      padding: 5px 10px;
      outline: none;
      margin-top: 10px;
    }

    button {
      margin-top: 50px;
      width: 60%;
      height: 30px;
      border-radius: 10px;
      border: 0;
      color: #fff;
      text-align: center;
      line-height: 30px;
      font-size: 15px;
      background-image: linear-gradient(to right, #30cfd0, #330867);
    }
	     
    #sign_up {
      margin-top: 45%;
      margin-left: 60%;
    }

    a {
      color: #b94648;
    }
  </style>
</head>
<?php
if($_SERVER["HTTPS"] != "on") {
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
  exit();
}
?>
	
<form action="compare.php" method="post"> 
	<div id="login_box"> 
		<h2>LOGIN</h2> 
		<div id="input_box"> <input type="text" name="username" placeholder="请输入用户名"> </div> 
		<div class="input_box"> <input type="password" name="password" placeholder="请输入密码"> </div> 
		<button type="submit" class="login-button">登录</button>

	</form>
</body>
</html>
