<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">
	<h3 class="text-ignite">All Blocks</h3>
	<hr/>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Block Name</th>
				<th>Note</th>
				<th>File Name</th>
				<th>Type</th>
				<th>Related Link</th>
				<th>Layout</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$i = 1; 
				foreach($blocks as $block):
			?>
				<tr>
					<td class="text-right"><?=$i?></td>
					<td><?=$block['name']?></td>
					<td><?=$block['note']?></td>
					<td><?=$block['file']?></td>
					<td><?=$block['type']?></td>
					<td><?=$this->main_model->link($block['relatedLink'])?></td>
					<td><?=$this->main_model->layout($block['layout'])?></td>
					<td class="text-center"><a href="ignite/editBlock/<?=$block['Id']?>"><i class="fa fa-edit text-warning"></i></a></td>
					<td class="text-center"><a href="#" data-toggle="modal" data-target="#Modal" id="blockDelete" value="<?=$block['Id']?>" file="<?=$block['file']?>"><i class="fa fa-remove text-danger"></i></a></td>
				</tr>
			<?php
				$i++; 
				endforeach;
			?>
		</tbody>
	</table>

	<nav class="pull-right">
		<ul class="my-pagination">
	      	<?=$this->pagination->create_links()?>
	    </ul>
	</nav>


	<!-- Modal for New delete -->

	<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" id="cancel">&times;</span></button>

	        <h4 class="modal-title" id="myModalLabel">
	        	<div class="title text-danger">Confirm Delete</div>
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