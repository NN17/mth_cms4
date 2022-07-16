<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">
	<div class="row">
		<div class="mid-padding"> 
		    <div id="content">
		        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
		            <li class="nav-item">
		            	<a class="nav-link active" href="#preview" data-toggle="tab">Preview</a>
		            </li>
		            <li class="nav-item">
		            	<a class="nav-link" href="#edit" data-toggle="tab">Edit</a>
		            </li>
		        </ul>
		        <div id="my-tab-content" class="tab-content">

		        	<!-- Carousel Preview -->

		            <div class="tab-pane active" id="preview">

		            	<h3 class="text-ignite"><?=$carousel['name']?></h3>
		            	<?php if($carousel['type'] == 1):?>
		            		<?php $this->load->view('backend/bootstrap_carousel')?>
		            	<?php elseif($carousel['type'] == 2):?>
		            		<?php $this->load->view('backend/devrama_carousel')?>
		            	<?php elseif($carousel['type'] == 3):?>
		            		<?php $this->load->view('backend/owl_carousel')?>
		            	<?php endif;?>
		            </div>

		            <!-- Carousel Edit -->

		            <div class="tab-pane" id="edit">
		            	<h3 class="text-ignite">Edit <?=$carousel['name']?></h3>

		            	<a href="ignite/newCarouselImg/<?=$carousel['Id']?>"><i class="fa fa-plus-square-o"></i> Add Carousel Image</a>

		            	<div class="row">
		            	<?php $imgs = $this->main_model->get_limit_data('carousel_img_tbl','carouselId',$carousel['Id'])->result_array();?>

		            	<?php foreach($imgs as $img):?>
		            		<div class="col-md-3 carousel-preview py-3">
		            			<img class="img-fluid center-block" src="<?=$img['path']?>" />

		            			<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="img_edit"><i class="fa fa-chevron-circle-down text-ignite"></i></a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="img_edit">
									<li role="presentation">
										<a href="ignite/editCarouselImg/<?=$img['Id']?>"><i class="fa fa-edit"></i>&nbsp;Edit</a>
									</li>
									<li role="presentation" >
										<a role="menuitem" tabindex="-1" href="ignite/delete_carousel_img/<?=$img['Id']?>"><i class="fa fa-remove text-ignite"></i>&nbsp;Remove</a>
									</li>
									
								</ul>
		            		</div>
		            	<?php endforeach;?>
		            	</div>
		            </div>
		        </div>
		    </div>
	    </div>
	</div>	
</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>