<h2 class="text-center">Projects</h2>

<?php
	$projects = $this->main_model->get_project();
	foreach($projects as $project):
?>
	<div class="col-md-3 mid-margin">
		<div class="project">
			<div class="text-center project-title">
				<a href="ignite/contentView/<?=$project['Id']?>" class="text-right"><strong><?=$project['title']?></strong></a>
			</div>
			<?php
				preg_match_all('/<img[^>]+>/i',$project['text'], $result); 
					foreach($result as $img){
						if (!empty($img)){
							print $img[0];
						}
							else{
								echo '<img src="upload_img/no-preview-available.png" class="center-block img-responsive"/>';
							}
						
					}
			?>
			<div class="mid-margin">
				<?=$project['summary']?>
			</div>
		</div>
	</div>
<?php endforeach;?>