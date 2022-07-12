<?php $links = $this->main_model->get_limit_datas('link_structure_tbl','menuId',$nav_relatedId,'type','Main','sort','asc')->result_array();?>

<?php $slogam = $this->main_model->get_limit_data('slogam_tbl','Id',1)->row_array();?>


<nav class="navbar navbar-expand-sm navbar-dark bg-dark" data-toggle="affix">
    <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
      <a class="navbar-brand" href="#" ><span class="text-danger">MTH</span> GROUP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse text-center" id="nav-menu">
            <ul class="navbar-nav mr-auto">
          	<?php foreach($links as $row):?>
          		<?php
          			$subs = $this->main_model->get_limit_datas('link_structure_tbl','mainMenu',$row['Id'],'type','Sub','Id','asc')->result_array();
          		?>
          		<li class="nav-item <?php if(!empty($subs)){echo 'dropdown';}?>">
          			<a class="nav-link <?php if(!empty($subs)){echo 'dropdown-toggle';} if($page == $row['Id']){echo 'active';}?>" <?php if(!empty($subs)){echo 'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#"';}else{echo 'href="page/'.$row['Id'].'"';}?> >
          				<?=$row['name']?>
          			</a>
          			<?php if(!empty($subs)):?>
          				<div class="dropdown-menu">
          					<?php foreach($subs as $sub):?>
      		            		<a class="dropdown-item" href="page/<?=$sub['Id']?>"><?=$sub['name']?></a>
      		            	<?php endforeach;?>
      		         	</div>
          			<?php endif;?>
          		</li>
          	<?php endforeach;?>
            </ul>
        </div>
    </div>
</nav>