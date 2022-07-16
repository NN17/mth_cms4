<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true && ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2)):
?>

<div class="backend">
	<h3 class="text-ignite">Edit Link ( <?=$link['name']?> )</h3>
	<hr/>

	<div class="row">
		<div class="col-md-6">
			<?=form_open_multipart('ignite/updateLink/'.$link['Id'])?>
				<div class="form-group">
					<?=form_label('Name')?>
					<?=form_input('name',$link['name'],'class="form-control" placeholder="Name" required="required"')?>
				</div>
				<div class="form-group">
					<?=form_label('Note')?>
					<?=form_textarea('note',$link['note'],'class="form-control" placeholder="Note"')?>
				</div>
				<div class="form-group">
					<?php
						$options = array('' => 'Select menu type','Main' => 'Main menu','Sub' => 'Sub menu');
						echo form_dropdown('menuType',$options,$link['type'],'class="form-control" id="type" required="required"');
					?>
				</div>

				<div class="form-group">
					<?=form_label('Main Menu')?>
					<select name="mainMenu" class="form-control" id="main" required="required" <?php if($link['type'] == 'Main'){echo 'disabled="disabled"';}?>>
						<option value="">Select Main Menu</option>
					<?php
						$mainMenus = $this->main_model->get_limit_datas('link_structure_tbl','menuId',$link['menuId'],'type','Main','Id','asc')->result_array();
						foreach($mainMenus as $main):
					?>
						<option value="<?=$main['Id']?>" <?php if($main['Id'] == $link['mainMenu']){echo 'selected="selected"';}?>><?=$main['name']?></option>
					<?php endforeach;?>
					</select>
				</div>
				<div class="form-group">
					<?=form_label('Image')?>
					<div class="file-upload small-padding">
						<div class="col-md-4">
							<div class="fileUpload btn btn-primary">
								<span class="fa fa-image"> Browse</span>
								<?=form_upload('userfile',set_value("userfile"),'class="upload" onchange="readURL(this);" accept=".jpg,.png,.gif"')?>
							</div>
						</div>
						<div class="preview col-md-8"><img id="blah" src="#" alt="Image Preview" class="img-responsive" /></div>
					</div>
				</div>
				<div class="form-group">
					<a href="ignite/newLink/<?=$link['menuId']?>" class="btn btn-danger">Cancel</a>
					<?=form_submit('save','Update','class="btn btn-warning"')?>
				</div>
			<?=form_close()?>
		</div>
	</div>
</div>


<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>