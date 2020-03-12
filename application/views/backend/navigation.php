<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">
	<h3 class="text-ignite mid-margin">Navigation</h3>
	<hr/>

	<!-- <a href="ignite/newMenu"><i class="fa fa-plus"> Add New Menu</i></a> -->
	<table class="table table-bordered small-margin">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Note</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$i = 1;
				foreach($menus as $menu):
			?>
				<tr>
					<td class="text-right"><?=$i?></td>
					<td><a href="ignite/newLink/<?=$menu['Id']?>" title="To create link structure"><?=$menu['name']?></a></td>
					<td><?=$menu['note']?></td>
					<td class="text-center bg-warning"><a href="ignite/navEdit/<?=$menu['Id']?>"><i class="fa fa-edit text-warning"></i></a></td>
					<td class="text-center bg-danger"><a href="" data-toggle="modal" data-target="#Modal" id="confirmDelete" value="<?=$menu['Id']?>" table="menu_tbl" func="navigation"><i class="fa fa-remove text-danger"></i></a></td>
				</tr>
			<?php 
				$i++;
				endforeach;
			?>
		</tbody>	
	</table>


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
	      <div class="modal-body text-center">
	        	
	        	
	      </div>
	      
	      
	    </div>
	  </div>
	</div>
</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>