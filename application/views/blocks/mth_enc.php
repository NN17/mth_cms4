<div class="">
	<img src="asset/upload_img/enc.jpg" class="img-fluid" />
	<?php $blockData = $this->main_model->get_limit_data('content_tbl','Id',$before_content_relatedId)->row_array();?>

	<div class="container">
		<div class="row">
			<div class="col py-5">
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