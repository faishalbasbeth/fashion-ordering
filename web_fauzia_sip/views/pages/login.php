<!DOCTYPE html>
<html>
<head>

	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="home/css/bootstrap.css">
  	<script type="text/javascript" src="home/js/jquery-3.2.1.min.js"></script>
  	<script type="text/javascript" src="home/js/bootstrap.js"></script>
  	<link href="home/css/signin.css" rel="stylesheet">
  	
</head>
<body background="mm2.png">
	<div class="container">
      <form class="form-signin" role="form" method="get">
        <h2 class="form-signin-heading">Please sign in</h2>

        <input type="hidden" name="controller" value="login">
        <input type="hidden" name="action" value="authentication">

        <input id="name" name="username" type="text" class="form-control" placeholder="Email address / Username" value="<?=isset($_GET["username"]) ? $_GET["username"] : NULL?>" required>
        <input id="password" name="password" type="password" class="form-control" placeholder="Password" value="<?=isset($_GET["password"]) ? $_GET["password"] : NULL?>" required>
        <div id="name" style="font-size: 18px; font-family: comic-sans; color:; text-align: center;">
              <b><?php echo $error ?></b>
            </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>

</body>
</html>