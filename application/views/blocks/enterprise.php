<div class="py-3 my-3">
	<?php $blockData = $this->main_model->get_limit_data('content_tbl','Id',$content_relatedId)->row_array();?>

	<h3 class="text-center"><?=$blockData['title']?></h3>

	<?=$blockData['text']?>

	<?php if($this->session->userdata('loginState') == true):?>
		<div class="edit">
			<a href="ignite/editViewContent/<?=$blockData['Id']?>" title="Edit Block Content"><i class="fa fa-cog"></i></a>
		</div>
	<?php endif;?>
</div>