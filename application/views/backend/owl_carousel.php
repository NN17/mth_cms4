<?php
    $imgs = $this->Main_model->get_limit_data('carousel_img_tbl','carouselId',$type)->result_array();
?>
<div id="owl" class="owl-carousel">
<?php foreach($imgs as $img):?>
	<div class="item">
		<img src="<?=$img['path']?>" alt="Ignite Source" class="img-responsive" />
		<h3>Touch</h3>
	    <h4>Can touch this</h4>
	</div>
<?php endforeach;?>
</div>
<script>

    $(document).ready(function($) {
      $("#owl").owlCarousel({
      	item: 4,
      	autoPlay: true
      });
    });


    // $("body").data("page", "frontpage");

</script>