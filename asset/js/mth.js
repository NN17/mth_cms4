$(document).ready(function(){

	$("#system1").on('click', function(){
		$("#modal1").modal('show');
	});

	$("#system2").on('click', function(){
		$("#modal2").modal('show');
	});

	$("#system3").on('click', function(){
		$("#modal3").modal('show');
	});

	$("#system4").on('click', function(){
		$("#modal4").modal('show');
	});

	$("#system5").on('click', function(){
		$("#modal5").modal('show');
	});

	$("#system6").on('click', function(){
		$("#modal6").modal('show');
	});

	$("#systemR1").on('click', function(){
		$("#modalR1").modal('show');
	});

	$("#systemR2").on('click', function(){
		$("#modalR2").modal('show');
	});

	$("#systemR3").on('click', function(){
		$("#modalR3").modal('show');
	});

	$("#systemR4").on('click', function(){
		$("#modalR4").modal('show');
	});

	$("#systemR5").on('click', function(){
		$("#modalR5").modal('show');
	});

	$("#systemR6").on('click', function(){
		$("#modalR6").modal('show');
	});

	$("#systemR7").on('click', function(){
		$("#modalR7").modal('show');
	});

});

function mediaMobile(x) {
	if (x.matches) {
		$("#slide1").attr('src', 'asset/upload_img/rf_mobile.jpg');
		$("#slide2").attr('src', 'asset/upload_img/solar_mobile.jpg');
		$("#slide3").attr('src', 'asset/upload_img/enc_mobile.jpg');
		$("#slide4").attr('src', 'asset/upload_img/mfp_mobile.jpg');
		$("#slide5").attr('src', 'asset/upload_img/shekinah_mobile.jpg');
	}
		else {
			$("#slide1").attr('src', 'asset/upload_img/rainflower_slide.jpg');
			$("#slide2").attr('src', 'asset/upload_img/solar_slide.jpg');
			$("#slide3").attr('src', 'asset/upload_img/enc.jpg');
			$("#slide4").attr('src', 'asset/upload_img/mfp_slide.jpg');
			$("#slide5").attr('src', 'asset/upload_img/shekinah_slide.jpg');
		}
}

var x = window.matchMedia("(max-width: 700px)")
mediaMobile(x) // Call listener function at run time
x.addListener(mediaMobile) // Attach listener function on state changes