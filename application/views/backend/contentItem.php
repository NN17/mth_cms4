<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">


	<div id="content">
		<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="nav-item"><a href="#add" class="nav-link" data-toggle="tab">Add</a></li>
            <li class="nav-item"><a href="#preview" class="nav-link active" data-toggle="tab">Preview</a></li>
        </ul>

        <div id="my-tab-content" class="tab-content">
			<!-- ********** Add ********** -->
			<div class="tab-pane" id="add">
				<div class="row justify-content-center bg-white h-100">
					<div class="col-md-6">
						<h4 class="small-side-padding py-3 text-center">Add New Item</h4>
						<?=form_open('ignite/addContentItem/'.$contentType['Id'],'id="save_item"')?>
							<div class="form-group">
								<?=form_label('Name')?> <i class="fa fa-spinner fa-spin text-ignite" aria-hidden="true" id="item_spin" ></i>
								<?=form_input('name','','class="form-control" placeholder="Name of Content Item" required="required" id="item_name"')?>
								<span class="err_msg text-danger"></span>

							</div>
							<!-- <div class="form-group">
								<?=form_label('Machine Name')?>
								<?=form_input('machine','','class="form-control" placeholder="Machine Name" id="machine_name" readonly')?>
							</div> -->
							<div class="form-group">
								<?=form_label('Note')?>
								<?=form_textarea('note','','class="form-control" placeholder="Short Note for Content Item"')?>
							</div>
							<div class="form-group">
								<?=form_label('Type')?>
								<select name="type" class="form-control" id="item_type">
									<option value="">Select Type</option>
									<?php
										$itemTypes = $this->main_model->get_data('items_type_tbl');
										foreach($itemTypes as $type):
											$checkType = $this->main_model->get_limit_datas('content_items_tbl','contentTypeId',$contentType['Id'],'type',$type['machine'],'Id','asc')->row_array();
									?>
										<option value="<?=$type['machine']?>" <?php if(!empty($checkType)){echo 'disabled';}?>><?=$type['name']?></option>
									<?php endforeach;?>
								</select>
								<?php?>
							</div>
							<div class="form-group">
								<?=form_label('Required')?><br/>
								<?=form_checkbox('require',true,'')?>
							</div>
							<div class="form-group">
								<a href="ignite/contentType" class="btn btn-danger">Cancel</a>
								<?=form_submit('save','Add','class="btn btn-warning"')?>
							</div>
						<?=form_close()?>
					</div>
				</div>
			</div>

			<!-- ************ Preview ************ -->

			<div class="tab-pane active" id="preview">
				
				<div class="row justify-content-center bg-white">
					<div class="col-md-6">
						<h4 class="small-side-padding py-3 text-center">Preview</h4>
						
						<?php foreach($contentItems as $item):?>
							<?php if($item['type'] != 'body' || $item['type'] != 'summary'):?>
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
					</div>
				</div>
			</div>


		</div>

	</div>
</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>