<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true && ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2)):
?>

	<div class="backend">
		<h3 class="text-ignite">Setting</h3>
		<hr/>

		<div class="row">
			<div class="col-md-3">
				<a href="ignite/allUsers">
					<div class="setting-block text-center">
						<i class="fa fa-user fa-4x"></i>
						<h4>All Users</h4>
					</div>
				</a>
			</div>
		</div>
	</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>