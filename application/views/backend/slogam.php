<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">

	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
			<?=form_open_multipart('ignite/addSlogam')?>
				<div class="card-body">
					<div class="form-group">
						<div class="bg-light px-2 py-2"><span class="small-font text-warning"><span class="text-danger">note -</span> You can upload your logo here.</span></div>
						<?=form_label('Logo')?>
						<div class="file-upload small-padding">
							<div class="col-md-4">
								<div class="fileUpload btn btn-primary">
									<span class="fa fa-image"> Browse</span>
									<?=form_upload('logo',set_value("logo"),'class="upload" onchange="readURL(this);" accept=".jpg,.png,.gif"')?>
								</div>
							</div>
							<div class="preview col-md-8"><img id="blah" src="#" alt="Image Preview" class="img-responsive" /></div>
						</div>
					</div>
					<div class="form-group">
						<div class="bg-light px-2 py-2"><span class="small-font text-warning"><span class="text-danger">note -</span> Your Website Name or Sloagam can add here. If you don't want to add, must type 'null' in this field.</span></div>
						<?=form_label('Site name or Slogam')?>
						<?=form_textarea('slogam','','class="form-control" placeholder="Note"')?>
					</div>
				</div>
				<div class="card-footer">
					<div class="form-group text-center">
						<?=form_submit('save','Save','class="btn btn-warning"')?>
					</div>
				</div>
			<?=form_close()?>
			</div>
		</div>
	</div>
</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>