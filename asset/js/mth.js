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