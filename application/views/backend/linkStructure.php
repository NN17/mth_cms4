<?php $mainMenus = $this->main_model->get_limit_datas('link_structure_tbl','menuId',$navigation['Id'],'type','Main','sort','asc')->result_array();?>
<?php foreach($mainMenus as $mainMenu):?>
	<?php $subMenu = $this->main_model->get_limit_datas('link_structure_tbl','mainMenu',$mainMenu['Id'],'type','Sub','sort','asc')->result_array();?>

<ul id="<?=$mainMenu['Id']?>" draggable="true" ondrop="drop(event, this)" ondragover="allowDrop(event)" ondragstart="drag(event)">
	<?php if(!empty($subMenu)):?>
		<i class="fa fa-plus-square-o"></i> &nbsp;
	<?php else:?> 
		<i class="fa fa-minus-square-o"></i> &nbsp;
	<?php endif;?>	
	<strong class="text-primary">
		<?=$mainMenu['name'];?></strong> &nbsp;&nbsp;
		<a href="ignite/editLink/<?=$mainMenu['Id']?>"><i class="fa fa-pencil-square text-warning" ></i></a> | 
		<a href="#"><i class="fa fa-remove text-danger"></i></a>
	
	<?php if(!empty($subMenu)):?>
		<?php foreach($subMenu as $sub):?>
			<li>
				<span class="text-info"><i class="fa fa-caret-right"></i> <?=$sub['name']?></span> &nbsp;&nbsp;
				<a href="ignite/editLink/<?=$sub['Id']?>"><i class="fa fa-pencil-square text-warning"></i></a> | 
				<a href="#"><i class="fa fa-remove text-danger"></i></a>
			</li>
		<?php endforeach;?>
	<?php endif;?>
</ul>	
<?php endforeach;?>