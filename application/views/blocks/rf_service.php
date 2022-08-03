<div class="py-5">
	<?php $data = $this->main_model->get_block_content_data(12, 5)->result();?>

	<a id="service"><h3 class="text-center text-danger">SERVICING</h3></a>


	<div class="row mt-5">
		<?php foreach($data as $arr): ?>
			<div class="col py-3">
				<div class="installation">
					<div class="text-center item-head">
						<strong class="text-center"><?=$arr->title?></strong>
					</div>
					<?=$arr->text?>
				</div>
				<?php if($this->session->userdata('loginState') == true):?>
					<div class="edit">
						<a href="ignite/editViewContent/<?=$arr->Id?>" title="Edit Block Content"><i class="fa fa-edit"></i></a>
					</div>
				<?php endif;?>
			</div>
		<?php endforeach; ?>
	</div>
</div>