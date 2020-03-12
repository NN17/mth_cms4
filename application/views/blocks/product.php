<h2 class="text-center">Products</h2>

<?php
	$products = $this->main_model->get_product();
	foreach($products as $product):
?>
	<div class="col-md-4 mid-margin">
		<div class="product">
			<div class="text-center">
				<a href="ignite/contentView/<?=$product['Id']?>" class="text-right"><strong><?=$product['title']?></strong></a>
			</div>
			<?php
				preg_match_all('/<img[^>]+>/i',$product['text'], $result); 
					foreach($result as $img){
						if (!empty($img)){
							print $img[0];
						}
							else{
								echo '<img src="upload_img/no-preview-available.png" class="center-block img-responsive"/>';
							}
						
					}
			?>
			<?=$product['summary']?>
		</div>
	</div>
<?php endforeach;?>