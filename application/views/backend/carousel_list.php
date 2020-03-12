<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">
	<h3 class="text-ignite">Carousel</h3>
	<hr/>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Carousel Name</th>
				<th>Note</th>
				<th>Carousel Type</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$i = 1;
				foreach($carousels as $carousel):
			?>
				<tr>
					<td class="text-right"><?=$i?></td>
					<td><?=anchor('ignite/previewCarousel/'.$carousel['Id'],$carousel['name'],'title="Preview"')?></td>
					<td><?=$carousel['note']?></td>
					<td><?=carouselType($carousel['type'])?></td>
					<td class="text-center"><a href="ignite/editCarousel/<?=$carousel['Id']?>"><i class="fa fa-edit text-warning"></i></a></td>
					<td class="text-center"><a href=""><i class="fa fa-remove text-danger"></i></a></td>
				</tr>
			<?php 
				$i++;
				endforeach;
			?>
		</tbody>
	</table>
</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>