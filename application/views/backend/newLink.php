<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">
	<div class="row justify-content-center">
		<div class="col-md-5">
			<div class="card">
			<?=form_open_multipart('ignite/addLink/'.$navigation['Id'])?>
				<div class="card-body">
					<div class="form-group">
						<?=form_label('Name')?>
						<?=form_input('name','','class="form-control" placeholder="Name" required="required"')?>
					</div>
					<div class="form-group">
						<?=form_label('Note')?>
						<?=form_textarea('note','','class="form-control" placeholder="Note"')?>
					</div>
					<div class="form-group">
						<?php
							$options = array('' => 'Select menu type','Main' => 'Main menu','Sub' => 'Sub menu');
							echo form_dropdown('menuType',$options,'Main','class="form-control" id="type" required="required"');
						?>
					</div>

					<div class="form-group">
						<?=form_label('Main Menu')?>
						<select name="mainMenu" class="form-control" id="main" required="required" disabled="disabled">
							<option value="">Select Main Menu</option>
						<?php
							$mainMenus = $this->main_model->get_limit_datas('link_structure_tbl','menuId',$navigation['Id'],'type','Main','sort','asc')->result_array();
							foreach($mainMenus as $main):
						?>
							<option value="<?=$main['Id']?>"><?=$main['name']?></option>
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
							<div class="preview col-md-8">
								<img id="blah" src="asset/system_img/no-preview-available.png" alt="Image Preview" class="img-fluid" />
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="form-group">
						<a href="ignite/navigation" class="btn btn-danger">Cancel</a>
						<?=form_submit('save','Save','class="btn btn-warning"')?>
					</div>
				</div>
			<?=form_close()?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="menu-structure">
				
				<?php foreach($mainMenus as $mainMenu):?>
					<?php $subMenu = $this->main_model->get_limit_datas('link_structure_tbl','mainMenu',$mainMenu['Id'],'type','Sub','sort','asc')->result_array();?>

				<ul id="<?=$mainMenu['Id']?>" src="<?=$navigation['Id']?>" draggable="true" ondrop="drop(event, this)" ondragover="allowDrop(event)" ondragstart="drag(event)">
					<?php if(!empty($subMenu)):?>
						<i class="fa fa-plus-square-o"></i> &nbsp;
					<?php else:?> 
						<i class="fa fa-minus-square-o"></i> &nbsp;
					<?php endif;?>	
					<strong class="text-primary">
						<?=$mainMenu['name'];?></strong> &nbsp;&nbsp;
						<a href="ignite/editLink/<?=$mainMenu['Id']?>"><i class="fa fa-pencil-square text-warning" ></i></a> | 
						<a href="#" data-toggle="modal" data-target="#Modal" id="confirmDelete" value="<?=$mainMenu['Id']?>" table="link_structure_tbl" func="newLink-<?=$mainMenu['menuId']?>"><i class="fa fa-remove text-danger"></i></a>
					
					<?php if(!empty($subMenu)):?>
						<?php foreach($subMenu as $sub):?>
							<li>
								<span class="text-info"><i class="fa fa-caret-right"></i> <?=$sub['name']?></span> &nbsp;&nbsp;
								<a href="ignite/editLink/<?=$sub['Id']?>"><i class="fa fa-pencil-square text-warning"></i></a> | 
								<a href="#" data-toggle="modal" data-target="#Modal" id="confirmDelete" value="<?=$sub['Id']?>" table="link_structure_tbl" func="newLink-<?=$sub['menuId']?>"><i class="fa fa-remove text-danger"></i></a>
							</li>
						<?php endforeach;?>
					<?php endif;?>
				</ul>	
				<?php endforeach;?>
				
			</div>
		</div>
	</div>
</div>

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
	      <div class="modal-body text-center" id="block_modal">
	        	
	        	
	      </div>
	      
	      
	    </div>
	  </div>
	</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>