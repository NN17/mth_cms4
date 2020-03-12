<div class="contact-form">
	<div class="row">
		<?=form_open('ignite/contact_email')?>
		<div class="form-group col-md-3">
			<?=form_label('Title')?>
			<?=form_textarea('title','','class="form-control" placeholder="Title" required="required"')?>
		</div>
		<div class="form-group col-md-3">
			<?=form_label('Subject')?>
			<?=form_textarea('subject','','class="form-control" placeholder="Subject" required="required"')?>
		</div>
		<div class="form-group col-md-3">
			<?=form_label('Message')?>
			<?=form_textarea('message','','class="form-control" placeholder="Your Message" required="required"')?>
		</div>
		<div class="form-group col-md-3">
			<?=form_label('Email Address')?>
			<?=form_textarea('email','','class="form-control" placeholder="Your Email Address" required="required"')?>
		</div>
		<div class="form-group col-md-4 col-md-push-4">
			<?=form_submit('send','Send Message','class="btn btn-primary center-block"')?>
		</div>
		<?=form_close()?>
	</div>
</div>