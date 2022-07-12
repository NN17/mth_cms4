<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true && ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2)):
?>

<div class="backend">
	

	<div class="row">
		<?=form_open_multipart('ignite/updateViewBlock/'.$contentData['Id'])?>
			<div class="form-group col">
				<?=form_label('Title')?>
				<?=form_input('title',$contentData['title'],'class="form-control" placeholder="Title for Content" required="required"')?>
			</div>
			<div class="form-group col">
				<?=form_label('Body Text')?>
				<textarea name='text' id='editor'><?=$contentData['text']?></textarea>
			</div>
			
			<div class="form-group col-md-8">
				<?=form_submit('save','Save','class="btn btn-warning"')?>
			</div>
		<?=form_close()?>
	</div>

</div>




<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>