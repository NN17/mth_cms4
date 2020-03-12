<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">
	<h3 class="text-ignite">Content Type</h3>
	<hr/>

	<a href="ignite/newContentType"><i class="fa fa-plus-square-o"></i> Add Content Type</a>
	<ul class="mid-margin list-unstyled">
		<?php foreach($contentTypes as $contentType):?>
			<li><a href="ignite/contentItem/<?=$contentType['Id']?>"><i class="fa fa-star"></i> <?=$contentType['name']?></a></li>
		<?php endforeach;?>	
	</ul>

</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>