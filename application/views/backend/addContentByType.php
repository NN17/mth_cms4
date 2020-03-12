<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">
	<h3 class="text-ignite"><?=$contentType['name']?></h3>
	<hr/>

	<div class="row">
		<div class="col-md-8">
			
			<?=form_open_multipart('ignite/addContents/'.$contentType['Id'])?>
				<?php $contentItems = $this->main_model->get_limit_data('content_items_tbl','contentTypeId',$contentType['Id'])->result_array();?>

				<?php foreach($contentItems as $item):?>
					<?php if($item['type'] != 'body'):?>
						<div class="form-group">
							<?=form_label($item['name'])?>
							<?=input($item['type'], $item['type'], $item['required'])?>
							
						</div>
					<?php else:?>
					<div class="form-group">
						<?=form_label($item['name'])?>
						<?php $this->ckeditor->editor($item['type'],'','');?>
					</div>
					<?php endif;?>
				<?php endforeach;?>

				<?php if($contentType['relatedLink'] == 0):?>
					<div class="form-group">
						<?=form_label('Related Link')?>
						<?php $menus = $this->main_model->get_data('menu_tbl')?>
						<select name="link" class="form-control" required="required">
							<option value="">Select Link</option>
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
				<?php endif;?>

				<legend class="small-font">Content Setting</legend>

				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<?=form_label('Published')?><br/>
							<?=form_checkbox('publish',true,TRUE,'')?>
						</div>
						<div class="col-md-6">
							<?=form_label('Show on Front Page')?><br/>
							<?=form_checkbox('frontPage',true,'','')?>
						</div>
					</div>
				</div>

				<div class="form-group">
					<?=form_label('Show Date & Time')?><br/>
					<?=form_checkbox('showDate',true,'','')?>
				</div>

				<legend></legend>
				<div class="form-group">
					<?=form_submit('save','Save Content','class="btn btn-warning"')?>
				</div>

			<?=form_close()?>

		</div>
	</div>
</div>


<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>