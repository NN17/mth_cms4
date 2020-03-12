<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>
<div class="backend">
	<h3 class="text-ignite">Edit Block ( <?=$block['name']?> )</h3>
	<hr/>
	<h4 class="text-center text-danger"><?=@$errors?></h4>

	<div class="row">
	<?=form_open('ignite/updateBlock/'.$block['Id'])?>
		<div class="col-md-6">

			<div class="form-group">
				<?=form_label('Block Title')?> <i class="fa fa-spinner fa-spin text-ignite" aria-hidden="true" id="spin" ></i>
				<?=form_input('blockName',$block['name'],'class="form-control" required="required" disabled')?>
				<span class="err_message text-danger"></span>
			</div>
			<div class="form-group">
				<?=form_label('Block Description')?>
				<?=form_textarea('note',$block['note'],'class="form-control"')?>
			</div>
			<div class="form-group">
				<?=form_label('File Name')?>
				<?=form_input('fileName',$block['file'],'class="form-control" id="fileName" readonly')?>
			</div>
			<legend class="small-font text-light-grey">Block Setting</legend>
			<div class="form-group">
				<?=form_label('Block Type')?>
				<?php 
					$options = array(
						'' => 'Select Type',
						'menu' => 'Menu Block',
						'view' => 'View Block',
						'carousel' => 'Carousel Block'
						);
					echo form_dropdown('type',$options,$block['type'],'class="form-control" required="required"');
				?>
			</div>

			<div class="form-group">
				<?=form_label('Related Link')?>
				<?php $menus = $this->main_model->get_data('menu_tbl')?>
				<select name="link" class="form-control">
					<option value="0">All Pages</option>
				<?php foreach($menus as $menu):?>
					<?php $links = $this->main_model->get_limit_datas('link_structure_tbl','menuId',$menu['Id'],'type','Main')->result_array();?>

						<option value="" disabled><span class="text-primary">[ <?=$menu['name']?> ]</span></option>
						<?php foreach($links as $link):?>
							<?php $subs = $this->main_model->get_sub_menus($menu['Id'],$link['Id']);
							?>
							<?php if(!empty($subs)):?>
								<?php foreach($subs as $sub):?>
									<option value="<?=$sub['Id']?>" <?php if($block['relatedLink'] == $sub['Id']){echo 'selected="selected"';}?>><?=$sub['name']?></option>
								<?php endforeach;?>
							<?php else:?>
								<option value="<?=$link['Id']?>" <?php if($block['relatedLink'] == $link['Id']){echo 'selected="selected"';}?>><?=$link['name']?></option>
							<?php endif;?>
						<?php endforeach;?>
				<?php endforeach;?>
				</select>
			</div>
			
			<div class="form-group">
				<?=form_label('Template of')?>
				<select name="template" class="form-control" required="required">
					<option value="">Select Layout Structure</option>
					<?php foreach($layouts as $layout):?>
						<option value="<?=$layout['Id']?>" <?php if($block['layout'] == $layout['Id']){echo 'selected="selected"';}?>><?=str_replace('_',' ',$layout['name'])?></option>
					<?php endforeach;?>
				</select>
			</div>
			<div class="form-group">
				<?=anchor('ignite/blockList','Cancel','class="btn btn-danger"')?>
				<?=form_submit('save','Update Block','class="btn btn-warning"')?>
			</div>
		</div>
	<?=form_close()?>
	</div>

	
	
</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>