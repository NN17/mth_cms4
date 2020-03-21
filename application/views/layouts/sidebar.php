<ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
  <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
  <li class="nav-item has-treeview menu-open">
    <a href="#" class="nav-link">
      <i class="nav-icon fa fa-list-alt"></i>
      <p>
        Contents
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a class="nav-link" href="ignite/contentType">
          <i class="far fa-circle nav-icon text-sm"></i>
          <p>Content Type</p>
        </a>
      </li>
      <?php $contentTypes = $this->main_model->get_data('content_type_tbl');?>
      <?php 
        foreach($contentTypes as $contentType):
      ?>
        <li class="nav-item">
          <a class="nav-link" href="ignite/addContentByType/<?=$contentType['Id']?>">
            <i class="far fa-circle nav-icon text-sm"></i>
            <p><?=$contentType['name']?></p>
          </a>
        </li>
      <?php 
        endforeach;
      ?>
      <li class="nav-item">
        <a class="nav-link" href="ignite/allContent">
          <i class="far fa-circle nav-icon text-sm"></i>
          <p>All Contents</p>
        </a>
      </li>
    </ul>
  </li>

  <?php if($this->session->userdata['level'] != 4):?> 
  <li class="nav-item has-treeview">
    <a class="nav-link" href="javascript:void(0);" id="block">
        <i class="fa fa-th-large nav-icon text-sm"></i>
        <p>Blocks<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview" aria-labelledby="block">
      <li class="nav-item">
        <a class="nav-link" href="ignite/newBlock">
          <i class="far fa-circle nav-icon text-sm"></i>
          <p>New Block</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ignite/blockList">
          <i class="far fa-circle nav-icon text-sm"></i>
          <p>Block List</p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="ignite/navigation">
      <i class="fa fa-bars nav-icon"></i>
      <p>Navigation</p>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="ignite/slogam">
      <i class="fa fa-puzzle-piece nav-icon"></i>
      <p>Logo & Slogam</p>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="ignite/carousel">
      <i class="fa fa-image nav-icon"></i>
      <p>Carousels</p>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="ignite/layout">
      <i class="fa fa-columns nav-icon"></i>
      <p>Layout</p>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="ignite/setting">
      <i class="fa fa-cogs nav-icon"></i>
      <p>Setting</p>
    </a>
  </li>
  <?php endif;?>
  
</ul>