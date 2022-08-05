<div>
	<img src="asset/upload_img/shekinah_slide.jpg" class="img-fluid" />

	<div class="container">
		<div class="row">
			<div class="col">
				<?php $blockData = $this->main_model->get_limit_data('content_tbl','Id',$before_content_relatedId)->row_array();?>

				<h4><?=$blockData['title']?></h4>

				<?=$blockData['text']?>

				<?php if($this->session->userdata('loginState') == true):?>
					<div class="edit">
						<a href="ignite/editViewContent/<?=$blockData['Id']?>" title="Edit Block Content"><i class="fa fa-cog"></i></a>
					</div>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>