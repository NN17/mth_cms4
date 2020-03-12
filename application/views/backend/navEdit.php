<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">
	<h3 class="text-ignite mid-margin">Add Menu</h3>
	<hr/>

	<div class="row">
		<div class="col-md-6">
			<?=form_open('ignite/navUpdate/'.$editData['Id'])?>
				<div class="form-group">
					<?=form_label('Name')?>
					<?=form_input('name',$editData['name'],'class="form-control" placeholder="Name" required="required"')?>
				</div>
				<div class="form-group">
					<?=form_label('Note')?>
					<?=form_textarea('note',$editData['note'],'class="form-control" placeholder="Note"')?>
				</div>
				<div class="form-group">
					<?=form_label('Related Block')?>
					<select name="blockId" class="form-control" required="required">
						<option value="">Select Related Block</option>
						<?php
							$blocks = $this->main_model->get_limit_data('blocks_tbl','type','menu')->result_array();
							foreach($blocks as $block):
						?>
							<option value="<?=$block['Id']?>" <?php if($editData['blockId'] == $block['Id']){echo 'selected="selected"';}?>><?=$block['name']?></option>
						<?php endforeach;?>
					</select>
				</div>
				<div class="form-group">
					<a href="ignite/navigation" class="btn btn-danger">Cancel</a>
					<?=form_submit('Update','Update','class="btn btn-warning"')?>
				</div>
			<?=form_close()?>
		</div>
	</div>
</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>