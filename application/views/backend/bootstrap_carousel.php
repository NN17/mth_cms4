<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <?php
    $imgs = $this->main_model->get_limit_data('carousel_img_tbl','carouselId',$carouselId)->result_array();
  ?>
  <ol class="carousel-indicators">
    <?php
      $i = 0; 
      foreach($imgs as $row):
    ?>
      <li data-target="#myCarousel" data-slide-to="<?=$i?>" <?php if($i<1){ echo 'class="active"';}?>></li>
    <?php 
      $i++;
      endforeach;
    ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php
      $i = 0; 
      foreach($imgs as $row):
    ?>
      <div class="item <?php if($i<1){ echo 'active';}?>">
        <img src="<?=$row['path']?>" alt="Ignite Source">
      </div>
    <?php 
      $i++;
      endforeach;
    ?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>