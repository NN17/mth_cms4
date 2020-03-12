<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true && ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2)):
?>

<div class="backend">
	<h3 class="text-ignite">Edit User ( <?=$user['userName']?> )</h3>
	<hr/>

	<div class="row">
		<div class="col-md-6">
			<?=form_open('ignite/updateUserByAdmin/'.$user['Id'])?>
			<div class="form-group">
				<?=form_label('Username')?>
				<?=form_input('username',$user['userName'],'class="form-control" placeholder="Username" required="required" readonly')?>
			</div>
			<div class="form-group">
				<?=form_label('Name')?>
				<?=form_input('name',$user['name'],'class="form-control" placeholder="Name" required="required"')?>
			</div>
			<div class="form-group">
				<?=form_label('Password')?>
				<?=form_password('password','','class="form-control" placeholder="password" required="required"')?>
			</div>
			<div class="form-group">
				<?=form_label('User Level')?>
				<?php
					$options = array(
						'' => 'Select Level',
						'2' => 'Admin',
						'3' => 'Moderator',
						'4' => 'User'
						);
				?>
				<?=form_dropdown('level',$options,$user['userLevel'],'class="form-control" required="required"')?>
			</div>
			
			<legend class="small-font">User State</legend>
			<div class="form-group">
				<?=form_label('Activate Account')?>
				<br/><?=form_checkbox('state',true,$user['activate'],'')?>
			</div>

			<div class="form-group">
				<a href="ignite/allUsers" class="btn btn-danger">Cancel</a>
				<?=form_submit('save','Save','class="btn btn-warning"')?>
			</div>
			<?=form_close()?>
		</div>
	</div>
</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>