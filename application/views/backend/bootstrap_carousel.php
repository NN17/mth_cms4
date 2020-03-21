<?php
  $imgs = $this->main_model->get_limit_data('carousel_img_tbl','carouselId',$carouselId)->result_array();
?>
<div class="wrapper">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <?php
        $i = 0; 
        foreach($imgs as $row):
      ?>
        <div class="carousel-item <?php if($i<1){ echo 'active';}?>">
          <img class="d-block w-100" src="<?=$row['path']?>" alt="Ignite Source">
        </div>
      <?php 
        $i++;
        endforeach;
      ?>
    </div>
  </div>
</div>

