<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true && ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2)):
?>

<div class="backend">
	<h3 class="text-ignite">All Users</h3>
	<hr/>

	<a href="ignite/newUser"><i class="fa fa-user-plus"></i> New User</a>
	<div class="row">
		<?php foreach($users as $user):?>
		<div class="col-md-3 mid-margin">
			<div class="user-block">
				<div class="header">
					<strong><?=$user['userName']?></strong>
					<?php if($user['userLevel'] != 1 && $this->session->userdata('Id') != $user['Id']):?>
					<div class="pull-right">
						<a href="ignite/editUser/<?=$user['Id']?>"><i class="fa fa-edit text-warning"></i></a> | 
						<a href="#" data-toggle="modal" data-target="#Modal" id="confirmDelete" value="<?=$user['Id']?>" table="users_tbl" func="allUsers"><i class="fa fa-remove text-danger"></i></a>
					</div>
					<?php endif;?>
				</div>
				<div class="body">
					Name : <?=$user['name']?><br/>
					<span class="text-info">Level : <?=userLevel($user['userLevel'])?></span>
				</div>
			</div>
		</div>
		<?php endforeach;?>
	</div>


	<!-- Modal for New delete -->

	<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" id="cancel">&times;</span></button>

	        <h4 class="modal-title" id="myModalLabel">
	        	<div class="title text-danger"><i class="fa fa-warning text-warning"></i> Confirm Delete</div>
	        	<div class="clearfix"></div>
	        </h4>
	      </div>
	      <div class="modal-body text-center" id="block_modal">
	        	
	        	
	      </div>
	      
	      
	    </div>
	  </div>
	</div>

</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>