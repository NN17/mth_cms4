<div class="py-5 my-5">
	<?php $blockData = $this->main_model->get_limit_data('content_tbl','Id',$before_content_2_relatedId)->row_array();?>

	<h3 class="text-center"><?=$blockData['title']?></h3>

	<div class="mt-5">
		<p><?=$blockData['text']?></p>
	</div>

	<?php if($this->session->userdata('loginState') == true):?>
		<div class="edit">
			<a href="ignite/editViewContent/<?=$blockData['Id']?>" title="Edit Block Content"><i class="fa fa-cog"></i></a>
		</div>
	<?php endif;?>
</div>