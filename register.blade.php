<p>登録画面</p>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>login</title>
<a href="http://127.0.0.1:8000/login">login</a>
<a href="http://127.0.0.1:8000/register">register</a>

</header>

<style>
    .title {
      float: left;
      font-size: 20px;
    }

    a {
      float: right;
      padding: 10px;
    }

    
</style>
</head>
<body>
<form action="#" method="post">
  <p>Register</p>
    <p>Name：<input type="text" name="name"></p>
    <p>E-mail Adress:<input type="text" name="mailadress"></p>
  <p>Password：<input type="text" name="password"></p>
  <p>Confirm Password：<input type="text" name="confirmpassword"></p>
  <p><input type="submit" value="Register"></p>
</form>
</body>
</html>
