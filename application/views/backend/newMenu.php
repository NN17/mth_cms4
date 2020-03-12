<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>
<h3 class="text-ignite mid-margin">Add Menu</h3>
<hr/>

<div class="row">
	<div class="col-md-6">
		<?=form_open('ignite/addMenu')?>
			<div class="form-group">
				<?=form_label('Name')?>
				<?=form_input('name','','class="form-control" placeholder="Name" required="required"')?>
			</div>
			<div class="form-group">
				<?=form_label('Note')?>
				<?=form_textarea('note','','class="form-control" placeholder="Note"')?>
			</div>
			<div class="form-group">
				<?=form_label('Related Block')?>
				<select name="blockId" class="form-control" required="required">
					<option value="">Select Related Block</option>
					<?php
						$blocks = $this->main_model->get_limit_data('blocks_tbl','type','menu')->result_array();
						foreach($blocks as $block):
					?>
						<option value="<?=$block['Id']?>"><?=$block['name']?></option>
					<?php endforeach;?>
				</select>
			</div>
			<div class="form-group">
				<a href="ignite/navigation" class="btn btn-danger">Cancel</a>
				<?=form_submit('save','Save & Continue','class="btn btn-warning"')?>
			</div>
		<?=form_close()?>
	</div>
</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>