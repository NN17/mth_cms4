<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">

	<a href="create-contentType" class="btn btn-primary"><i class="fa fa-plus-square-o"></i> Add Content Type</a>

	<table class="table mt-3">
		<thead>
			<tr>
				<th class="text-right">#</th>
				<th class="text-left">Name</th>
				<th class="text-left">Note</th>
				<th>Title</th>
				<th>Summary</th>
				<th>Body</th>
				<th>Download</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
				$i = 1;
				foreach($contentTypes as $contentType): 
			?>
				<tr>
					<td class="text-right"><?=$i?></td>
					<td>
						<a href="ignite/contentItem/<?=$contentType['Id']?>"><i class="fa fa-star"></i> <?=$contentType['name']?></a>
					</td>
					<td><?=$contentType['note']?></td>
					<td class="text-center">
						<?=$this->main_model->checkContentItem($contentType['Id'], 'title')?'<i class="fa fa-check-square-o text-success"><i/>':'<i class="fa fa-remove text-danger"></>'?>
						
					</td>
					<td class="text-center">
						<?=$this->main_model->checkContentItem($contentType['Id'], 'summary')?'<i class="fa fa-check-square-o text-success"><i/>':'<i class="fa fa-remove text-danger"></>'?>
					</td>
					<td class="text-center">
						<?=$this->main_model->checkContentItem($contentType['Id'], 'body')?'<i class="fa fa-check-square-o text-success"><i/>':'<i class="fa fa-remove text-danger"></>'?>
					</td>
					<td class="text-center">
						<?=$this->main_model->checkContentItem($contentType['Id'], 'download')?'<i class="fa fa-check-square-o text-success"><i/>':'<i class="fa fa-remove text-danger"></>'?>
					</td>
					<td>
						<a href="edit-content-type/<?=$contentType['Id']?>" class="text-warning"><i class="fa fa-cog fa-2x"></i></a>
						<a href="" class="text-danger"><i class="fa fa-trash fa-2x"></i></a>
					</td>
				</tr>
			<?php
				$i ++;
				endforeach; 
			?>
		</tbody>
	</table>
	

</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>