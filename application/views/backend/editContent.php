<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">
	<h3 class="text-ignite"><?=$contentData['title']?></h3>
	<hr/>

	<div class="row">
		<div class="col-md-8">
			
			<?=form_open_multipart('ignite/updateContents/'.$contentType['Id'].'/'.$contentData['Id'])?>
				<?php $contentItems = $this->main_model->get_limit_data('content_items_tbl','contentTypeId',$contentType['Id'])->result_array();?>

				<?php foreach($contentItems as $item):?>
					<?php if($item['type'] != 'body'):?>
						<div class="form-group">
							<?=form_label($item['name'])?>
							<?=editInput($item['type'], $item['type'], $contentData[$item['type']], $item['required'])?>
							
						</div>
					<?php else:?>
					<div class="form-group">
						<?=form_label($item['name'])?>
						<?php $this->ckeditor->editor($item['type'],$contentData['text'],'');?>
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
											<option value="<?=$sub['Id']?>" <?php if($sub['Id'] == $contentData['link']){echo 'selected="selected"';}?>><?=$sub['name']?></option>
										<?php endforeach;?>
									<?php else:?>
										<option value="<?=$link['Id']?>" <?php if($link['Id'] == $contentData['link']){echo 'selected="selected"';}?>><?=$link['name']?></option>
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
							<?=form_checkbox('publish',true,$contentData['published'],'')?>
						</div>
						<div class="col-md-6">
							<?=form_label('Show on Front Page')?><br/>
							<?=form_checkbox('frontPage',true,$contentData['frontPage'],'')?>
						</div>
					</div>
				</div>

				<div class="form-group">
					<?=form_label('Show Date & Time')?><br/>
					<?=form_checkbox('showDate',true,$contentData['showDate'],'')?>
				</div>

				<legend></legend>
				<div class="form-group">
					<a href="ignite/allContent" class="btn btn-danger">Cancel</a>
					<?=form_submit('save','Update Content','class="btn btn-warning"')?>
				</div>

			<?=form_close()?>

		</div>
	</div>
</div>


<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>