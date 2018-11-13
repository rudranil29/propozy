// init main object
// jQuery(document).ready - conflicted with some scripts
// Transition time = 2.4s = 20/10
// SlideShow delay = 6.5s = 20/10
jQuery('#wowslider-container1').wowSlider({
	effect:"blur", 
	prev:"", 
	next:"", 
	duration: 20*100, 
	delay:20*100, 
	width:960,
	height:560,
	autoPlay:true,
	autoPlayVideo:false,
	playPause:true,
	stopOnHover:false,
	loop:false,
	bullets:1,
	caption: true, 
	captionEffect:"fade",
	controls:true,
	controlsThumb:["sliders/demo-89/data1/tooltips/cat362950_1280.jpg", "sliders/demo-89/data1/tooltips/cat245374_1280.jpg", "sliders/demo-89/data1/tooltips/kitten402268_1280.jpg", "sliders/demo-89/data1/tooltips/cat594348_1280.jpg"],
	responsive:1,
	fullScreen:true,
	gestures: 2,
	onBeforeStep:0,
	images:0
});
