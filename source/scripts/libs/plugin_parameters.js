$(document).ready(function(){
	// სელექტორის გაფორმება
	$("select.selectori").each(function(){
		var placeholder = $(this).data('placeholder') || 'Default placeholder';
		$(this).select2({
			allowClear: true,
			minimumResultsForSearch: -1,
			placeholder: placeholder
		}); 
	});
	// სლაიდერი
	$(".main_slider").slick({
		autoplay: true,
		dots: false,
		arrows: true,
		infinite: true,
		speed: 1000,
		slidesToShow: 1,
		fade: true,
		adaptiveHeight: true,
		prevArrow: '<em class="fas fa-angle-left"></em>',
		nextArrow: '<em class="fas fa-angle-right"></em>'
	});
	// გალერეა
	$(".magnific").each(function(){
		$(this).magnificPopup({
			delegate: "a",
			type: "image",
			gallery:{
				enabled: true
			},
			zoom:{
				enabled: true,
				duration: 300
			}
		});
	});
	if($(".magnific_video").length){
		$(".magnific_video").magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
	}
	/**/
	// არტ ფორმა
	$("input.artform").artmediaForm();
});
    
    //active კლასის მინიჭება 
$("li").click(function(){
  if (!$(this).hasClass("active")) {
    $("li.active").removeClass("active");
    $(this).addClass("active");
  }
});

