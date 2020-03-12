<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">
	<h3 class="text-ignite">Create Menu Block ( <?=$blockData['name']?> )</h3>
	<hr/>

	<?=form_open('ignite/addMenu')?>
		
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<?=form_label('Menu Name')?>
					<?=form_input('name','','class="form-control" placeholder="Name of menu" required="required"')?>
				</div>
				<div class="form-group">
					<?=form_label('Note')?>
					<?=form_textarea('note','','class="form-control" placeholder="Note for Menu"')?>
					<?=form_hidden('blockId',$blockData['Id'])?>
				</div>
				<div class="form-group">
					<?=form_submit('save','Save & Continue','class="btn btn-warning"')?>
				</div>
			</div>
		</div>

	<?=form_close()?>
</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>