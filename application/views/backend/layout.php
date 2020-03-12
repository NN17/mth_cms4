<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ($this->session->userdata('loginState') == true):
?>

<div class="backend">
	<h3 class="text-ignite mid-margin">Ignite Source Template Layout Structure</h3>
	<hr/>

	<div class="row">
		<div class="col-md-2">
			<div class="mid-padding bg-primary text-center">Logo</div>
		</div>
		<div class="col-md-8">
			<div class="mid-padding bg-primary text-center">Slogam</div>
		</div>
		<div class="col-md-2">
			<div class="mid-padding bg-primary text-center">Header Right</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="small-padding bg-info text-center small-margin">Navigation</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="big-padding bg-warning text-center">Before Content</div>
		</div>
		<div class="col-md-4 small-margin">
			<div class="big-padding text-center bg-dark-pink text-white">Before Content 2</div>
		</div>
		<div class="col-md-4 small-margin">
			<div class="big-padding text-center bg-dark-pink text-white">Before Content 3</div>
		</div>
		<div class="col-md-4 small-margin">
			<div class="big-padding text-center bg-dark-pink text-white">Before Content 4</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 small-margin">
			<div class="big-padding text-center bg-dark-pink text-white">Before Content 5</div>
		</div>
		<div class="col-md-4 small-margin">
			<div class="big-padding text-center bg-dark-pink text-white">Before Content 6</div>
		</div>
		<div class="col-md-4 small-margin">
			<div class="big-padding text-center bg-dark-pink text-white">Before Content 7</div>
		</div>
	</div>

	<div class="row small-margin">
		<div class="col-md-3">
			<div class="bg-light-green big-padding text-center">Sidebar Left</div>
		</div>
		<div class="col-md-6">
			<div class="bg-light-green big-padding text-center">Content</div>
		</div>
		<div class="col-md-3">
			<div class="bg-light-green big-padding text-center">Sidebar Right</div>
		</div>
	</div>

	<div class="row small-margin">
		<div class="col-md-4">
			<div class="bg-light-grey big-padding text-center">After Content 1</div>
		</div>
		<div class="col-md-4">
			<div class="bg-light-grey big-padding text-center">After Content 2</div>
		</div>
		<div class="col-md-4">
			<div class="bg-light-grey big-padding text-center">After Content 3</div>
		</div>
	</div>

	<div class="row small-margin">
		<div class="col-md-4">
			<div class="bg-light-grey big-padding text-center">After Content 4</div>
		</div>
		<div class="col-md-4">
			<div class="bg-light-grey big-padding text-center">After Content 5</div>
		</div>
		<div class="col-md-4">
			<div class="bg-light-grey big-padding text-center">After Content 6</div>
		</div>
	</div>

	<div class="row small-margin">
		<div class="col-md-4">
			<div class="mid-padding bg-dark-grey text-center text-white">Footer First Left</div>
		</div>
		<div class="col-md-4">
			<div class="mid-padding bg-dark-grey text-center text-white">Footer First Center</div>
		</div>
		<div class="col-md-4">
			<div class="mid-padding bg-dark-grey text-center text-white">Footer First Right</div>
		</div>
		<div class="col-md-12">
			<div class="small-padding black3d text-center small-margin">Footer Second</div>
		</div>
	</div>
</div>

<?php else:?>
    Your Login Session is expired. Please <?=anchor('login/index','Login')?> again ....
<?php endif;?>