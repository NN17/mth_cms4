<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">

	<div class="row justify-content-center">
		<div class="col-md-6">
			<?=form_open('ignite/updateCarousel/'.$carousel['Id'])?>
			<div class="form-group">
				<?=form_label('Name')?>
				<?=form_input('name',$carousel['name'],'class="form-control" placeholder="Carousel Name" required="required"')?>
			</div>
			<div class="form-group">
				<?=form_label('Note')?>
				<?=form_textarea('note',$carousel['note'],'class="form-control" placeholder="Short Note for Carousel"')?>
			</div>
			<div class="form-group">
				<?=form_label('Carousel Type')?>
				<?php
					$options = array(
						'1' => 'Bootstrap Carousel',
						'2' => 'Devrama Slider',
						'3' => 'Owl Carousel'
						);
				?>
				<?=form_dropdown('type',$options,$carousel['type'],'class="form-control" required="required"')?>
			</div>
			<div class="form-group text-center">
				<?=form_submit('save','Save & Continue','class="btn btn-warning"')?>
			</div>
			<?=form_close()?>
		</div>
	</div>
</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>