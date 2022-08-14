<div class="equipment">
	<img src="asset/upload_img/mfp_slide.jpg" class="img-fluid" />

	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="text-center text-uppercase my-5">Equipment</h3>

				<h4>Fire Alarm System Equipment</h4>
			</div>
		</div>
		<div class="row">
			<?php $alarm_system = $this->main_model->get_limit_datas('content_tbl','blockId', 23, 'contentTypeId', 8 )->result_array(); ?>
			<?php foreach($alarm_system as $row):?>

				<div class="col-md-4 py-3">
					<div class="mfp-product-item">
						<div class="text-center item-head">
							<strong class="text-center"><?=$row['title']?></strong>
						</div>
						<?php
							preg_match_all('/<img[^>]+>/i',$row['text'], $result); 
							foreach($result as $img){
								if (!empty($img)){
									print $img[0];
								}
									else{
										echo '<img src="upload_img/no-preview-available.png" class="center-block"/>';
									}
								
							}
						?>
						<div class="text-center mt-3">
							<?=$row['summary']?>
							<br/>
							<a href="ignite/contentView/<?=$row['Id']?>" class="btn btn-sm btn-info mt-3">More Detail</a>
						</div>
					</div>
					<?php if($this->session->userdata('loginState') == true):?>
						<div class="edit">
							<a href="ignite/editViewContent/<?=$row['Id']?>" title="Edit Block Content"><i class="fa fa-edit"></i></a>
						</div>
					<?php endif;?>
				</div>
				
				
			<?php endforeach;?>

		</div>
	</div>
</div>

