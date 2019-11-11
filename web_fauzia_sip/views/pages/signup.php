<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="home/css/bootstrap.css">
  	<script type="text/javascript" src="home/js/jquery-3.2.1.min.js"></script>
  	<script type="text/javascript" src="home/js/bootstrap.js"></script>
  	<link href="home/css/signin.css" rel="stylesheet">
</head>
<body background="mm2.png">
	<div class="container">
      <form method="GET" class="form-signin" role="form">
        <input type="hidden" name="controller" value="signup">
        <input type="hidden" name="action" value="addDataSignup">
        <h2 class="form-signin-heading">Please sign up</h2>
        <input type="nama" class="form-control" name="nama" placeholder="Nama" required autofocus>
        <input type="password" class="form-control" name="password" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
      </form>
    </div>
</body>
</html>