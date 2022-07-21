<div class="mid-padding contentView">
	<?php if($this->session->userdata('loginState') == true):?>
	<div class="text-right">
		<a href="content-edit/<?=$contentData['Id']?>/<?=$contentData['contentTypeId']?>" class="text-warning"><i class="fa fa-edit"></i></a>
	</div>
	<?php endif;?>

	<h3><?=$contentData['title']?></h3>
	<?=$contentData['text']?>

	<div class="text-right">
		<a href="<?=$this->agent->referrer()?>" class="btn btn-warning btn-rounded"> << Back</a>
	</div>
</div>