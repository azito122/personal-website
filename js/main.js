function rand(min,max) {
    return Math.floor(Math.random()*(max-min+1)+min);
}

function slideshow() {
	var n = rand(1,8);
	if ($('.section_title .img_headshot.active')) {
		$('.section_title .img_headshot.active').hide();
		$('.section_title .img_headshot.active').removeClass('active');
	}
	$('.section_title .img_headshot.headshot_0' + n).show();
	$('.section_title .img_headshot.headshot_0' + n).addClass('active');
	setTimeout(slideshow, 300);
}	

$(document).ready(function() {
	slideshow();
});