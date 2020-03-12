<?php 
	$carousel = $this->main_model->get_limit_data('carousel_tbl','Id',$before_content_relatedId)->row_array();
    $imgs = $this->main_model->get_limit_data('carousel_img_tbl','carouselId',$carousel['Id'])->result_array();
?>

<div class="carousel-text myanmar"><h2>"အမှောင်ခွင်း၍အလင်းဆောင်မှာ မြန်မာဆိုလာပါဝါ"</h2></div>

<!-- Bootstrap Carousel -->

<?php if($carousel['type'] == 1):?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  
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

<!-- Devrama Slider -->

<?php elseif($carousel['type'] == 2):?>
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
	      'transition': '<?="fade"?>',
	      'showNavigation' : false,
	      'progressColor': '#bbb',
	      'transitionSpeed' : 2000
	      }); //Yes! that's it!
	});
	</script>
<?php elseif($carousel['type'] == 3):?>
	<?php $this->load->view('backend/owl_carousel')?>
<?php endif;?>