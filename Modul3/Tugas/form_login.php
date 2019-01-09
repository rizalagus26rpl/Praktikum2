<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <style>
      body{
  background-image: url("patternhead31b-thumb.png");
}

.login {
  width: 325px;
  height: 345px;
  border-radius: 8px;
  margin: 150px auto;
  box-shadow: 0 0 10px #000;
  background-color: black;
  opacity: 0.8;
  padding-bottom: 23px;
  font-family: sans-serif;
}

.login-header, .login p{
  margin-top: 0;
  margin-bottom: 0;
}

.login-header {
  padding: 15px;
  text-align: center;
  background-color: #008080;
  color: white;
  font-family: magettas demo;
  border-top-right-radius: 8px;
  border-top-left-radius: 8px;
  font-size: 30px;
}

.login p {
  padding: 15px;
  font-family: sans-serif;
}

.login input {
  padding: 15px;
  border: 1px solid #2C3539;
  border-top: transparent;
  border-left: transparent;
  border-right: transparent;
}

.login input[type="text"],
.login input[type="password"] {
  width: 89%;
  font-size: 15px;
  color: white;
  background-color: black;
}

.login input[type="submit"] {
  background: #008080;
  color: #fff;
  margin-left: 15%;
  margin-top: 20px;
  border-radius: 10px;
  width: 70%;
}

.login input[type="submit"]:hover {
  background: #43BFC7;
  color: white;
}

h3 {
  margin-left: 20px;  
}

    </style>
  </head>
  <body>
    <div class="login">
      <table>
        <h2 class="login-header"><b>ADMIN</b></h2>
        <form class="login-container" action="cek_login.php" method="post">
          <p>
            <input type="text" name="username" placeholder="username">
          </p>
          <p>
            <input type="password" name="password" placeholder="password">
          </p>
          <p>
            <input type="submit" value="LOGIN">
          </p>
        </form>
      </table>
      <?php 
        if(isset($_GET["login_error"])){
            echo "<h3 style='color:red';>Username atau password salah</h3>";
        }
  ?>
    </div>
  </body>
</html>
