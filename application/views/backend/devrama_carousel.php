<?php
    $imgs = $this->main_model->get_limit_data('carousel_img_tbl','carouselId',$carouselId)->result_array();
?>
<div class="animation">
  <?php foreach($imgs as $img):?>
   <div data-lazy-background="<?=$img['path']?>">
       <!-- <h3 class="text-center mid-padding" data-pos="['75%', '110%', '75%', '40%']" data-duration="700" data-effect="move">
           Caption 1
       </h3>
       <div class="img-text" data-pos="['50%', '10%']" data-duration="700" data-effect="fadein">
           Kandawgyi Palace
       </div>
       <div class="img-text" data-pos="['60%', '13%']" data-duration="700" data-effect="fadein">
           Hotel
       </div> -->
   </div>
  <?php endforeach;?>
  
</div>

<script>
$(document).ready(function(){
    $('.animation').DrSlider({
      'transition': 'fade',
      'showNavigation' : false,
      'progressColor': '#bbb',
      'transitionSpeed' : 2000
      }); //Yes! that's it!
});
</script>