<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Aplikasi Pendataan Himaster</title>

	<link rel="icon" type="image/png" href="image/logo-himaster.png">

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/datepicker3.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<div class="container-fluid">
		<?php 
            if (isset($_GET['error']))
            {
                ?>
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="alert alert-dismissable alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Login gagal!</strong> Periksa kembali username dan password. 
                        </div>
                    </div>                
                </div>
                <?php
            }
            else
            {
                
            }
        ?>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div>
					<img src="image/logo-himaster.png" class="img-responsive center-block" style="margin-bottom: 20px; max-width: 150px; max-height: 150px;">
				</div>
				<div class="login-panel panel panel-default">
					<div class="panel-heading" style="text-align:center;"><h5><strong>Login Aplikasi Pendataan Himaster</strong></h5></div>
					<div class="panel-body">
						<form role="form" action="pemroses/ceklogin.php" method="post">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="Username" name="username" type="text" required autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" type="password" required>
								</div>
								<div class="row">
									<div class="col-md-2 col-md-offset-8">
										<a><button class="btn btn-md btn-primary" type="submit">Login</button></a>	
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				<div class="footer">
				    <p class="footer-copy" style="text-align:center;">Copyright &copy; 2016 <a href="#" target="_blank">Creative Himaster</a></p>
				    <h1 style="text-align: center;"><strong>v 1.0</strong></h1>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div>
</body>

</html>
