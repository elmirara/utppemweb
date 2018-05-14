<!DOCTYPE html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width"> 
  <title>Halaman Login</title> 
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
  
<body>
	<br/><br/><br/><br/><br/>
    <center><img src="images/login-form.png"/></center>
	<form method="POST" action="cek_login.php">
    <div id ="kotak">
      <input name="username" class="masuk" type="text" placeholder="Username"/> 
      <input name="password" class="masuk" type="password" placeholder="Password"/>
	  <br>
      <td>
	  <input class="tombol" name="login" type="submit" value="LOGIN"> <input class="tombol" name="batal" type="reset" value="BATAL"></td>
    </div>
	</form>
  </body>
  <div>
  
  </div>
</html>