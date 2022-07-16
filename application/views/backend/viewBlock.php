<h4 class="text-ignite">Create View Block ( <?=$blockData['name']?> )</h4>
<hr/>

<div class="row">
	<?=form_open_multipart('ignite/addViewBlock/'.$blockData['Id'])?>
		<div class="form-group col-md-6">
			<?=form_label('Title')?>
			<?=form_input('title','','class="form-control" placeholder="Title for Content" required="required"')?>
		</div>
		<div class="form-group col-md-8">
			<?=form_label('Body Text')?>
			<?=$this->ckeditor->editor('text','','')?>
		</div>
		
		<div class="form-group col-md-8">
			<?=form_submit('save','Save','class="btn btn-warning"')?>
		</div>
	<?=form_close()?>
</div>
