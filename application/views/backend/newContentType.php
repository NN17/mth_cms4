<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">
	<h3 class="text-ignite">New Content Type</h3>
	<hr/>

	<div class="row">
		<div class="col-md-6">
			<?=form_open('ignite/addContentType')?>
				<div class="form-group">
					<?=form_label('Name')?>
					<?=form_input('name','','class="form-control" placeholder="Name of Content Type" required="required"')?>
				</div>
				<div class="form-group">
					<?=form_label('Note')?>
					<?=form_textarea('note','','class="form-control" placeholder="Short Note for Content"')?>
				</div>
				<div class="form-group">
					<?=form_label('Related Link')?>
					<?php $menus = $this->main_model->get_data('menu_tbl')?>
					<select name="link" class="form-control">
						<!-- <option value="0">All Pages</option> -->
					<?php foreach($menus as $menu):?>
						<?php $links = $this->main_model->get_limit_datas('link_structure_tbl','menuId',$menu['Id'],'type','Main')->result_array();?>

							<option value="" disabled><span class="text-primary">[ <?=$menu['name']?> ]</span></option>
							<?php foreach($links as $link):?>
								<?php $subs = $this->main_model->get_sub_menus($menu['Id'],$link['Id']);
								?>
								<?php if(!empty($subs)):?>
									<?php foreach($subs as $sub):?>
										<option value="<?=$sub['Id']?>"><?=$sub['name']?></option>
									<?php endforeach;?>
								<?php else:?>
									<option value="<?=$link['Id']?>"><?=$link['name']?></option>
								<?php endif;?>
							<?php endforeach;?>
					<?php endforeach;?>
					</select>
				</div>
				<div class="form-group">
					<a href="ignite/contentType" class="btn btn-danger">Cancel</a>
					<?=form_submit('save','Save & Continue','class="btn btn-warning"')?>
				</div>
			<?=form_close()?>
		</div>
	</div>
</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>