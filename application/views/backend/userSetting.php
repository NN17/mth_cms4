<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">
	<h3 class="text-ignite">Change User Setting ( <?=$userData['userName']?> )</h3>
	<hr/>

	<div class="row">
		<div class="col-md-6">
			<?=form_open('ignite/updateUser/'.$userData['Id'])?>
				<div class="form-group">
					<?=form_label('Username')?>
					<?=form_input('username',$userData['userName'],'class="form-control" readonly')?>
				</div>
				<div class="form-group">
					<?=form_label('Name')?>
					<?=form_input('name',$userData['name'],'class="form-control" required="required"')?>
				</div>
				<div class="form-group">
					<?=form_label('Password')?>
					<?=form_password('password','','class="form-control" required="required" placeholder="New Password"')?>
				</div>
				<div class="form-group">
					<a href="ignite/index" class="btn btn-danger">Cancel</a>
					<?=form_submit('save','Update','class="btn btn-warning"')?>
				</div>
			<?=form_close()?>
		</div>
	</div>

</div>


<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>