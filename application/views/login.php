<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.:Login:.</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
</head>
<body>
	<div class="container">
		<div class="panel-container-login">
			<form class="form-signin" method="post" action="<?=base_url().'index.php/C_proses/loginProses'?>">
        <h2 class="form-signin-heading">Silahkan Masuk</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>
		</div>
	</div>
	<div>
	</div>
</body>
</html>