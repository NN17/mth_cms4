<!DOCTYPE html>
<html>
<head>
	<title>Ignite Source</title>

	<base href="<?=base_url()?>" />
	<link rel="shorcut icon" href="asset/system_img/logo.png" />
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/flaticon.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/style-ignite.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/style.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/jquery.datetimepicker.css" />

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.datetimepicker.js"></script>
	<script type="text/javascript" src="js/myscript.js"></script>
</head>
<body>
	<header>
		<div class="container">
			<div class="col-md-1">
				<img src="asset/system_img/logo.png" class="img-responsive" />
			</div>
			<div class="col-md-8 slogam">
				Ignite Soruce <span class="text-warning small-font">version 1.0.2</span>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="col-md-4 mid-margin">
			<div class="login">
			<h3 class="text-ignite">User Login</h3>
			<hr/>

			<!-- Error Message -->

			<?php if($err_msg == true):?>
				<div class="bg-danger text-center small-padding">
					<span class="text-danger">Username or Password is Invalid</span>
				</div>
			<?php endif;?>

			<?=form_open('login/login_state')?>
				<div class="form-group">
					<?=form_label('Username')?>
					<?=form_input('name','','class="form-control" placeholder="Username" required="required"')?>
				</div>
				<div class="form-group">
					<?=form_label('Password')?>
					<?=form_password('psw','','class="form-control" placeholder="Password" required="required"')?>
				</div>
				<div class="form-group pull-right">
					<?=form_submit('submit','Login','class="btn btn-warning"')?>
				</div>
				<div class="clearfix"></div>
			<?=form_close()?>
			</div>

			<div class="partner mid-margin">
				<div class="row">
					<div class="col-md-6"><img src="asset/system_img/services-bootstrap.gif" class="img-responsive center-block"/></div>
					<div class="col-md-6"><img src="asset/system_img/codeigniter-logo.jpg" class="img-responsive center-block"/></div>
				</div>
			</div>
		</div>
		<div class="col-md-8 mid-margin">
			<div class="content">
				<img src="asset/system_img/ecm.png" class="img-responsive center-block" />
					<p>
						<span class="mid-font text-ignite">Ignite Source</span> is the most easy <strong>Content Management System (CMS)</strong> for creating your own website. It is using PHP plat-form and the frame-work of Codeigniter (CI). That can add lots of interesting features like forums, user blogs, OpenID, profiles and more. It's trivial to create a site with social features with Source Ignite.
					</p>
					<h4>Using</h4>
					<ul>
						<li>Codeigniter version 3.1.0</li>
						<li>Bootstrap Frame-work</li>
					</ul>
					<h4>Requirement</h4>
					<ul>
						<li>PHP version 5.6</li>
					</ul>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>