<div>

<h3 class="text-info"><?=$linkStructure['name']?></h3>
<hr/>

<?php if(!empty($contentDatas)):?>

	<?php foreach($contentDatas as $contentData):?>
		
		<?php if($this->session->userdata('loginState') == true):?>
		<div class="text-right">
			<a href="ignite/editContent/<?=$contentData['Id']?>/<?=$contentData['contentTypeId']?>" class="text-warning"><i class="fa fa-edit"></i></a>
		</div>
		<?php endif;?>

		<div class="content-data small-padding small-side-padding small-margin clearfix">
		
		<?php if(!empty($contentData['summary'])):?>
			<div class="col-md-5 summary-img">
			<?php
				preg_match_all('/<img[^>]+>/i',$contentData['text'], $result); 
				foreach($result as $img){
					if (!empty($img)){
						print $img[0];
					}
						else{
							echo '<img src="upload_img/no-preview-available.png" class="center-block"/>';
						}
					
				}
			?>
			</div>
			<div class="col-md-7">
			<h4><?=$contentData['title']?></h4>
			<?=$contentData['summary']?>
			<br/><a href="ignite/contentView/<?=$contentData['Id']?>">Read More... >></a>
			</div>
		<?php else:?>
			<?=$contentData['text']?>
		<?php endif;?>
		</div>
	<?php endforeach;?>
<?php endif;?>

<nav class="pull-right">
	<ul class="my-pagination">
      <?=$this->pagination->create_links()?>
    </ul>
</nav>

</div>