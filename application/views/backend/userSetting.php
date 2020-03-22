<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">

	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
			<?=form_open('ignite/updateUser/'.$userData['Id'])?>
				<div class="card-body">
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
				</div>
				<div class="card-footer">
					<div class="form-group text-center">
						<a href="ignite/index" class="btn btn-danger">Cancel</a>
						<?=form_submit('save','Update','class="btn btn-warning"')?>
					</div>
				</div>
			<?=form_close()?>
			</div>
		</div>
	</div>

</div>


<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>