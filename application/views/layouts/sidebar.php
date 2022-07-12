<ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
  <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
  <li class="nav-item has-treeview <?php if($this->uri->segment(1) == 'content-type' || $this->uri->segment(1) == 'add-content-by-type' || $this->uri->segment(1) == 'all-contents'){echo 'menu-open';}else{echo '';}?>">
    <a href="#" class="nav-link">
      <i class="nav-icon fa fa-list-alt"></i>
      <p>
        Contents
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a class="nav-link <?=$this->uri->segment(1) == 'content-type'?'active':''?>" href="content-type">
          <i class="far fa-circle nav-icon text-sm"></i>
          <p>Content Type</p>
        </a>
      </li>
      <?php $contentTypes = $this->main_model->get_data('content_type_tbl');?>
      <?php 
        foreach($contentTypes as $contentType):
      ?>
        <li class="nav-item">
          <a class="nav-link <?=$this->uri->segment(1) == 'add-content-by-type' && $this->uri->segment(2) == $contentType['Id']?'active':''?>" href="add-content-by-type/<?=$contentType['Id']?>">
            <i class="far fa-circle nav-icon text-sm"></i>
            <p><?=$contentType['name']?></p>
          </a>
        </li>
      <?php 
        endforeach;
      ?>
      <li class="nav-item">
        <a class="nav-link <?=$this->uri->segment(1) == 'all-contents'?'active':''?>" href="all-contents">
          <i class="far fa-circle nav-icon text-sm"></i>
          <p>All Contents</p>
        </a>
      </li>
    </ul>
  </li>

  <?php if($this->session->userdata['level'] != 4):?> 
  <li class="nav-item has-treeview <?php if($this->uri->segment(1) == 'new-block' || $this->uri->segment(1) == 'block-list'){echo 'menu-open';}else{echo '';}?>">
    <a class="nav-link" href="javascript:void(0);" id="block">
        <i class="fa fa-th-large nav-icon text-sm"></i>
        <p>Blocks<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview" aria-labelledby="block">
      <li class="nav-item">
        <a class="nav-link <?=$this->uri->segment(1) == 'new-block'?'active':''?>" href="new-block">
          <i class="far fa-circle nav-icon text-sm"></i>
          <p>New Block</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=$this->uri->segment(1) == 'block-list'?'active':''?>" href="block-list">
          <i class="far fa-circle nav-icon text-sm"></i>
          <p>Block List</p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link <?=$this->uri->segment(1) == 'navigation'?'active':''?>" href="ignite/navigation">
      <i class="fa fa-bars nav-icon"></i>
      <p>Navigation</p>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?=$this->uri->segment(1) == 'logo-slogam'?'active':''?>" href="logo-slogam">
      <i class="fa fa-puzzle-piece nav-icon"></i>
      <p>Logo & Slogam</p>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?=$this->uri->segment(1) == 'carousel'?'active':''?>" href="carousel">
      <i class="fa fa-image nav-icon"></i>
      <p>Carousels</p>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?=$this->uri->segment(1) == 'layout'?'active':''?>" href="layout">
      <i class="fa fa-columns nav-icon"></i>
      <p>Layout</p>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?=$this->uri->segment(1) == 'setting'?'active':''?>" href="setting">
      <i class="fa fa-cogs nav-icon"></i>
      <p>Setting</p>
    </a>
  </li>
  <?php endif;?>
  
</ul>