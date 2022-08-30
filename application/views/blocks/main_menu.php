<?php $links = $this->main_model->get_main_links($nav_relatedId)->result_array();?>

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
          			$subs = $this->main_model->get_sub_links($row['Id'])->result_array();
          		?>
          		<li class="nav-item <?php if(!empty($subs)){echo 'dropdown';}?>">
          			<a class="nav-link <?php if(!empty($subs)){echo 'dropdown-toggle';} if($page == $row['Id']){echo 'active';}?>" <?php if(!empty($subs)){echo 'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#"';}else{if(empty($row['url'])){echo 'href="page/'.$row['Id'].'"';}else{echo 'href="'.$row['url'].'"';}}?> >
          				<?=$row['name']?>
          			</a>
          			<?php if(!empty($subs)):?>
          				<div class="dropdown-menu">
          					<?php foreach($subs as $sub):?>
      		            		<a class="dropdown-item" <?=$sub['url'] != ''?'target="_blank"':''?> href="<?=$sub['url'] == ''?'page/'.$sub['Id']:$sub['url']?>"><?=$sub['name']?></a>
      		            	<?php endforeach;?>
      		         	</div>
          			<?php endif;?>
          		</li>
          	<?php endforeach;?>
            </ul>
        </div>
    </div>
</nav>