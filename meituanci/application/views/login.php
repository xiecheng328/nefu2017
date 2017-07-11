<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="<?php echo site_url(); ?>">
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="javascript/rem.js"></script>
    <title>Document</title>
</head>
<body>
<form action="welcome/login" id="login-form" method="post">
    <div>
        <label for="username">用户名:</label>
        <input type="text" name="username" id="username" placeholder="请输入用户名">
        <label for="password">密码:</label>
        <input type="password" name="password" id="password" placeholder="请输入密码">
        <input type="submit" value="登录">
    </div>

</form>


</body>
</html>