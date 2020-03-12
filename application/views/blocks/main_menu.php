<?php $links = $this->main_model->get_limit_datas('link_structure_tbl','menuId',$nav_relatedId,'type','Main','sort','asc')->result_array();?>

<?php $slogam = $this->main_model->get_limit_data('slogam_tbl','Id',1)->row_array();?>
<nav class="navbar my-nav">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php if($slogam['logo'] != 'null'):?>
      <div class="logo">
      	<a href="ignite/index"><img src="<?=$slogam['logo']?>" class="img-responsive" /></a></div>
  	  <?php endif;?>
  	  <?php if($slogam['slogam'] != 'null'):?>
      <div class="slogam"><?=$slogam['slogam']?></div>
  	  <?php endif;?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-2">
	    <ul class="nav navbar-nav">
	    	<?php foreach($links as $row):?>
	    		<?php
	    			$subs = $this->main_model->get_limit_datas('link_structure_tbl','mainMenu',$row['Id'],'type','Sub','Id','asc')->result_array();
	    		?>
	    		<li <?php if(!empty($subs)){echo 'class="dropdown"';}?>>
	    			<a class="<?php if(!empty($subs)){echo 'dropdown-toggle';} if($page == $row['Id']){echo 'active';}?>" <?php if(!empty($subs)){echo 'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#"';}else{echo 'href="ignite/page/'.$row['Id'].'"';}?> >
	    				<?=$row['name']?>
	    				<?php if(!empty($subs)):?>
	    					<span class="caret">
	    				<?php endif;?>
	    			</a>
	    			<?php if(!empty($subs)):?>
	    				<ul class="dropdown-menu">
	    					<?php foreach($subs as $sub):?>
			            		<li><a href="ignite/page/<?=$sub['Id']?>"><?=$sub['name']?></a></li>
			            	<?php endforeach;?>
			         	</ul>
	    			<?php endif;?>
	    		</li>
	    	<?php endforeach;?>
	        
	        
	    </ul>
      
      
    </div><!-- /.navbar-collapse -->
    
  </div><!-- /.container-fluid -->

</nav>