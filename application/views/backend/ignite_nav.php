<nav class="navbar ignite-nav menlo">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="nav navbar-nav">
	        <li class="dropdown">
	        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contents <span class="caret"></a>
	        	<ul class="dropdown-menu">
	            	<li><a href="ignite/contentType">Content Type</a></li>
	            	<li role="separator" class="divider"></li>
	            	<?php $contentTypes = $this->main_model->get_data('content_type_tbl');?>
	            	<?php 
	            		foreach($contentTypes as $contentType):
	            	?>
	            		<li><a href="ignite/addContentByType/<?=$contentType['Id']?>"><?=$contentType['name']?></a></li>
	            	<?php 
	            		endforeach;
	            	?>
	            	<li role="separator" class="divider"></li>
	            	<li><a href="ignite/allContent">All Contents</a>
	         	</ul>
	        </li>
	        
	        <?php if($this->session->userdata['level'] != 4):?>	
	        <li>
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blocks <span class="caret"></a>
          		<ul class="dropdown-menu">
	            	<li><a href="ignite/newBlock">New Block</a></li>
	            	<li role="separator" class="divider"></li>
	            	<li><a href="ignite/blockList">Block List</a></li>
	         	</ul>
          	</li>
	        <li><a href="ignite/navigation">Navigation</a></li>
	        <li><a href="ignite/slogam">Logo & Slogam</a></li>
	        <li><a href="ignite/carousel">Carousels</a></li>
	        <li><a href="ignite/layout">Layout</a></li>
	        <li><a href="ignite/setting">Setting</a></li>
	        <?php endif;?>
	    </ul>
      
      
    </div><!-- /.navbar-collapse -->
    
    <div class="username">
	    <div class= "pull-right">
	    	<a href="ignite/index"><i class="fa fa-home"></i></a> |
	    	<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="logout">
	    		<?=$this->session->userdata('name')?>
	    	</a>

	    	<ul class="dropdown-menu" role="menu" aria-labelledby="logout">
				<li role="presentation" class="dropdown-header">Account</li>
				<li class="divider"></li>
				<li role="presentation">
					<a href="ignite/user_setting/<?=$this->session->userdata('Id')?>"><i class="fa fa-cog"></i>&nbsp;Setting</a>
				</li>
				<li role="presentation" >
					<a role="menuitem" tabindex="-1" href="ignite/logout"><i class="fa fa-lock"></i>&nbsp;Logout</a>
				</li>
				
			</ul>
	    </div>
	</div>
  </div><!-- /.container-fluid -->

</nav>