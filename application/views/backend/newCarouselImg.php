<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>


<div class="backend">
	<h3 class="text-ignite">Add New Carousel Image ( <?=$carousel['name']?> )</h3>
	<hr/>
	<div class="row">
		<div class="col-md-6">
			<!-- Error Message -->
			<?php if(isset($err_msg)):?>
				<h4 class="text-danger"><i class="fa fa-warning"></i> <?=$err_msg?></h4>
			<?php endif;?>

			<?=form_open_multipart('ignite/addCarouselImg/'.$carousel['Id'])?>
				<div class="form-group">
					<?=form_label('Select Image')?>
					<div class="file-upload small-padding">
						<div class="col-md-4">
							<div class="fileUpload btn btn-primary">
								<span class="fa fa-image"> Browse</span>
								<?=form_upload('carouselImg',set_value("logo"),'class="upload" onchange="readURL(this);" accept=".jpg,.png,.gif"')?>
							</div>
						</div>
						<div class="preview col-md-8"><img id="blah" src="#" alt="Image Preview" class="img-responsive" /></div>
					</div>
				</div>
				<div class="form-group">
					<?=anchor('ignite/previewCarousel/'.$carousel['Id'],'Cancel','class="btn btn-danger"')?>
					<?=form_submit('save','Add Image','class="btn btn-warning"')?>
				</div>
			<?=form_close()?>
		</div>
	</div>
</div>


<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>