<nav class="navbar navbar-expand-lg ignite-nav">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contents
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          	<a class="dropdown-item" href="content-type">Content Type</a>
          	<div class="dropdown-divider"></div>
        	<?php $contentTypes = $this->main_model->get_data('content_type_tbl');?>
        	<?php 
        		foreach($contentTypes as $contentType):
        	?>
        		<a class="dropdown-item" href="add-content-by-type/<?=$contentType['Id']?>"><?=$contentType['name']?></a>
        	<?php 
        		endforeach;
        	?>
        	<a class="dropdown-item" href="all-contents">All Contents</a>
        </div>
      </li>
      <?php if($this->session->userdata['level'] != 4):?>	
	    <li class="nav-item dropdown">
		    <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Blocks
	        </a>
	  		<div class="dropdown-menu" aria-labelledby="block">
	        	<a class="dropdown-item" href="new-block">New Block</a>
	        	<a class="dropdown-item" href="block-list">Block List</a>
	     	</div>
	  	</li>
	    <li class="nav-item">
	    	<a class="nav-link" href="navigation">Navigation</a>
	    </li>
	    <li class="nav-item">
	    	<a class="nav-link" href="logo-slogam">Logo & Slogam</a>
	    </li>
	    <li class="nav-item">
	    	<a class="nav-link" href="carousel">Carousels</a>
	    </li>
	    <li class="nav-item">
	    	<a class="nav-link" href="layout">Layout</a>
	    </li>
	    <li class="nav-item">
	    	<a class="nav-link" href="setting">Setting</a>
	    </li>
	    <?php endif;?>
    </ul>
  </div>

  	<div class="navbar-nav ml-auto px-3">
	    <div class="dropdown">
	    	<a href="ignite/index"><i class="fa fa-home"></i></a> |
	    	<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="logout">
	    		<?=$this->session->userdata('name')?>
	    	</a>
	    	<div class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="logout">
				<div class="dropdown-header" role="presentation" class="dropdown-header">Account</div>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="ignite/user_setting/<?=$this->session->userdata('Id')?>"><i class="fa fa-cog"></i>&nbsp;Setting</a>
				<a class="dropdown-item" role="menuitem" tabindex="-1" href="ignite/logout"><i class="fa fa-lock"></i>&nbsp;Logout</a>	
			</div>
	    </div>
	</div>
</nav>