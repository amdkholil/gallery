<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Login Gallery Axemma</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="post" action="login">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Password">
		            <br>
		            <button  class="btn btn-theme btn-block" type="submit" name="submit"><i class="fa fa-lock">
		            </i> SIGN IN</button>
		            <hr>
		            <?= $this->session->flashdata('pesan'); ?>
		        </div>
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?= base_url(); ?>assets/img/login.png", {speed: 2000});
    </script>


  </body>
</html>
