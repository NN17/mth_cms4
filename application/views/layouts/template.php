<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CMS</title>

	<base href="<?=base_url()?>" />
	<link rel="shorcut icon" href="asset/system_img/ignite-logo1.png" />
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/flaticon.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/style-ignite.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/style.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/jquery.datetimepicker.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/owl.carousel.css" />
	<!--<link rel="stylesheet" type="text/css" href="css/owl.theme.css" />
	<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />-->

	
</head>
<body>
	<?php if($this->session->userdata('loginState') == true):?>
			
		<div class="ignite-nav-wrapper">
			<?php $this->load->view('backend/ignite_nav')?>
		</div>

	<?php endif;?>
	<div class="clearfix"></div>
	
	<div class="main-wrapper <?=$this->session->userdata('loginState') == true?'margin':''?>">
	<!-- Navigation Start -->

	<div class="nav-wrapper">
		<?php if(isset($nav)):?>
		<?php $this->load->view($nav)?>
		<?php endif;?>
	</div>

	<!-- Navigation End -->

	<!-- ************** Before Content *************** -->

	<div class="before-content">
		<?php if(isset($before_content)):?>
			<?php $this->load->view($before_content)?>
		<?php endif;?>
	</div>

	<?php if(isset($before_content_2) || isset($before_content_3) || isset($before_content_4)):?>
	<div class="beforeContent2-wrapper">
		<div class="container">
			<div class="row">
				<!-- After Content 1 -->
				<?php if(isset($before_content_2)):?>
				<div class="<?php if(isset($before_content_3) && isset($before_content_4)){echo 'col-md-4';} elseif(isset($before_content_3) || isset($before_content_4)){echo 'col-md-6';} else {echo 'col-md-12';}?> beforeContent2">
					<?php $this->load->view($before_content_2)?>
				</div>
				<?php endif;?>
				<!-- After Content 2 -->
				<?php if(isset($before_content_3)):?>
				<div class="<?php if(isset($before_content_2) && isset($before_content_4)){echo 'col-md-4';} elseif(isset($before_content_2) || isset($before_content_4)){echo 'col-md-6';} else {echo 'col-md-12';}?> beforeContent3">
					<?php $this->load->view($before_content_3)?>
				</div>
				<?php endif;?>
				<!-- After Content 3 -->
				<?php if(isset($before_content_4)):?>
				<div class="<?php if(isset($before_content_2) && isset($before_content_3)){echo 'col-md-4';} elseif(isset($before_content_2) || isset($before_content_3)){echo 'col-md-6';} else {echo 'col-md-12';}?> beforeContent4">
					<?php $this->load->view($before_content_4)?>
				</div>
				<?php endif;?>
			</div>
		</div>
	</div>
	<?php endif;?>

	<?php if(isset($before_content_5) || isset($before_content_6) || isset($before_content_7)):?>
	<div class="beforeContent2-wrapper">
		<div class="container">
			<div class="row">
				<!-- After Content 1 -->
				<?php if(isset($before_content_5)):?>
				<div class="<?php if(isset($before_content_6) && isset($before_content_7)){echo 'col-md-4';} elseif(isset($before_content_6) || isset($before_content_7)){echo 'col-md-6';} else {echo 'col-md-12';}?> beforeContent5">
					<?php $this->load->view($before_content_5)?>
				</div>
				<?php endif;?>
				<!-- After Content 2 -->
				<?php if(isset($before_content_6)):?>
				<div class="<?php if(isset($before_content_5) && isset($before_content_7)){echo 'col-md-4';} elseif(isset($before_content_5) || isset($before_content_7)){echo 'col-md-6';} else {echo 'col-md-12';}?> beforeContent6">
					<?php $this->load->view($before_content_6)?>
				</div>
				<?php endif;?>
				<!-- After Content 3 -->
				<?php if(isset($before_content_7)):?>
				<div class="<?php if(isset($before_content_5) && isset($before_content_6)){echo 'col-md-4';} elseif(isset($before_content_5) || isset($before_content_6)){echo 'col-md-6';} else {echo 'col-md-12';}?> beforeContent7">
					<?php $this->load->view($before_content_7)?>
				</div>
				<?php endif;?>
			</div>
		</div>
	</div>
	<?php endif;?>


	<!-- Body Start -->

	<div class="container">
		
		<div class="row">
			<!-- Sidebar Left -->
			<?php if(isset($sidebar_left)):?>
			<div class="col-md-3 sidebar-left">
				<?php $this->load->view($sidebar_left)?>
			</div>
			<?php endif;?>
			<!-- Content -->
			<div class="<?php if(isset($sidebar_left) && isset($sidebar_right)){echo 'col-md-6';} elseif (isset($sidebar_left) || isset($sidebar_right)){echo 'col-md-9';} else {echo 'col-md-12';}?> main-content">
				<?php $this->load->view($content);?>
			</div>

			<!-- Sidebar Right -->
			<?php if(isset($sidebar_right)):?>
			<div class="col-md-3 sidebar-right">
				<?php $this->load->view($sidebar_right)?>
			</div>
			<?php endif;?>
		</div>
	</div>
		<!-- ************** After Content *************** -->
	<?php if(isset($after_content_1) || isset($after_content_2) || isset($after_content_3)):?>
	<div class="after_content1_wrapper">
		<div class="container">
			<div class="row">
				<!-- After Content 1 -->
				<?php if(isset($after_content_1)):?>
				<div class="<?php if(isset($after_content_2) && isset($after_content_3)){echo 'col-md-4';} elseif(isset($after_content_2) || isset($after_content_3)){echo 'col-md-6';} else {echo 'col-md-12';}?> after_content1">
					<?php $this->load->view($after_content_1)?>
				</div>
				<?php endif;?>
				<!-- After Content 2 -->
				<?php if(isset($after_content_2)):?>
				<div class="<?php if(isset($after_content_1) && isset($after_content_3)){echo 'col-md-4';} elseif(isset($after_content_1) || isset($after_content_3)){echo 'col-md-6';} else {echo 'col-md-12';}?> after_content2">
					<?php $this->load->view($after_content_2)?>
				</div>
				<?php endif;?>
				<!-- After Content 3 -->
				<?php if(isset($after_content_3)):?>
				<div class="<?php if(isset($after_content_2) && isset($after_content_1)){echo 'col-md-4';} elseif(isset($after_content_2) || isset($after_content_1)){echo 'col-md-6';} else {echo 'col-md-12';}?> after_content3">
					<?php $this->load->view($after_content_3)?>
				</div>
				<?php endif;?>
			</div>
		</div>
	</div>
	<?php endif;?>

	<?php if(isset($after_content_4) || isset($after_content_5) || isset($after_content_6)):?>
	<div class="after_content2_wrapper">
		<div class="container">
			<div class="row">
				<!-- After Content 1 -->
				<?php if(isset($after_content_4)):?>
				<div class="<?php if(isset($after_content_5) && isset($after_content_6)){echo 'col-md-4';} elseif(isset($after_content_5) || isset($after_content_6)){echo 'col-md-6';} else {echo 'col-md-12';}?> after_content4">
					<?php $this->load->view($after_content_4)?>
				</div>
				<?php endif;?>
				<!-- After Content 2 -->
				<?php if(isset($after_content_5)):?>
				<div class="<?php if(isset($after_content_4) && isset($after_content_6)){echo 'col-md-4';} elseif(isset($after_content_4) || isset($after_content_6)){echo 'col-md-6';} else {echo 'col-md-12';}?> after_content5">
					<?php $this->load->view($after_content_5)?>
				</div>
				<?php endif;?>
				<!-- After Content 3 -->
				<?php if(isset($after_content_6)):?>
				<div class="<?php if(isset($after_content_5) && isset($after_content_4)){echo 'col-md-4';} elseif(isset($after_content_5) || isset($after_content_4)){echo 'col-md-6';} else {echo 'col-md-12';}?> after_content6">
					<?php $this->load->view($after_content_6)?>
				</div>
				<?php endif;?>
			</div>
		</div>
	</div>
	<?php endif;?>


	<!-- Body End -->

	<!-- Footer Start -->

	<div class="footer-first">
		<div class="container">
			<div class="row">
				<?php if(isset($footer_first_left)):?>
				<div class="<?php if(isset($footer_first_center) && isset($footer_first_right)){echo 'col-md-4';} elseif(isset($footer_first_center) || isset($footer_first_right)){echo 'col-md-6';} else{echo 'col-md-12';}?>">
					<?php $this->load->view($footer_first_left)?>
				</div>
				<?php endif;?>
				<?php if(isset($footer_first_center)):?>
				<div class="<?php if(isset($footer_first_left) && isset($footer_first_right)){echo 'col-md-4';} elseif(isset($footer_first_left) || isset($footer_first_right)){echo 'col-md-6';} else{echo 'col-md-12';}?>">
					<?php $this->load->view($footer_first_center)?>
				</div>
				<?php endif;?>
				<?php if(isset($footer_first_right)):?>
				<div class="<?php if(isset($footer_first_center) && isset($footer_first_left)){echo 'col-md-4';} elseif(isset($footer_first_center) || isset($footer_first_left)){echo 'col-md-6';} else{echo 'col-md-12';}?>">
					<?php $this->load->view($footer_first_right)?>
				</div>
				<?php endif;?>
			</div>
		</div>
	</div>

	<div class="ignite-footer text-center text-ignite small-padding">Designed & Developed by Ignitesource.</div>
	</div>

	<script type="text/javascript" src="asset/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="asset/js/jquery-ui.js"></script>
	<script type="text/javascript" src="asset/js/jquery.datetimepicker.js"></script>
	<script type="text/javascript" src="asset/js/devrama.js"></script>
	<script type="text/javascript" src="asset/js/owl.carousel.js"></script>
	<script type="text/javascript" src="asset/js/myscript.js"></script>
</body>
</html>