$(function() {
	
	// テキストサイズ設定
	$(".headerFont li a").textresizer({
		target: "#main",
		type: "cssClass",
		sizes: [ "fontSmall", "fontMedium" ,"fontLarge" ]
	});
	
	// テキストサイズ設定
	$(".col02 .col").matchHeight();	
	$(".col04 .col a").matchHeight();	
	
});