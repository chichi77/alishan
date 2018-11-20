
<?php
$title="愛玩美旅遊網";
$keywords="愛玩美, 旅遊, 阿里山";
$author="愛玩美旅遊網";
$copyright="愛玩美旅遊網";
$description="阿里山旅遊相關行程已開放預訂，如欲至阿里山旅遊的網友們，建議您們參加此生必遊台灣四大景點行程，讓您一次遊遍阿里山、日月潭、清境農場和墾丁。詳細行程請參考阿里山日月潭二日遊、阿里山日月潭超值三日遊、阿里山日月潭九族文化村三日遊、阿里山日月潭清境農場超值豐富三日遊、阿里山墾丁超值豐富三日遊。
愛玩美旅行社是最在地的阿里山旅行社，阿里山旅遊品牌NO.1，充分掌握阿里山資源，隨時關心顧客需求，即時解決旅途上任何問題，讓顧客玩得快樂又安心。
主推以阿里山為主的旅遊行程規劃設計，為更專業服務前往阿里山、日月潭、清境及墾丁旅遊的網友們，本公司在嘉義火車站後站對面成立服務據點，從嘉義火車站後站出口步行至本公司約1~2分鐘。";

?>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
<script src="js/jquery-1-12-4.min.js"></script>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<script src="https://use.fontawesome.com/9d6bc01732.js"></script>
<script defer src="js/fontawesome-all.min.js"></script>
<link href="css/fa-svg-with-js.css" rel="stylesheet">
<link href="css/fontawesome-all.min.css" rel="stylesheet">

<!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>-->

<!--表單驗證-->
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/messages_zh_TW.js "></script>

<script src="js/jquery-ias.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css">

<!--解決IE input type="date"的使用-->
<!-- cdn for modernizr, if you haven't included it already -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://afarkas.github.io/webshim/js-webshim/minified/polyfiller.js"></script>
<script>
  //webshims.setOptions('waitReady', false);
  webshim.setOptions("forms-ext", {
	replaceUI: "auto",
	types: "date",
	date: {
		startView: 2,
		openOnFocus: true
	}
});
  webshims.polyfill('forms forms-ext');
</script>
<script>
$(function(){
	var url = location.pathname;
	if(url.indexOf('cart') != -1){
		$('.back_top').addClass('cart');
	}
	else{
		$('.back_top').removeClass('cart');
	}

	//header search menu initial active class
	$('.header .menu_second').children('li').eq(0).addClass('active');
	$('.header .menu_first').children('li').eq(0).addClass('active');
	$('.index_page .item').addClass('slide-in slide-up');

	//slide-in
	var item=$('.slide-in');
    for(let i=0; i<item.length; i++){
        const slideAt = $(window).innerHeight() + $(window).scrollTop();
        const imageBottom = item.eq(i).offset().top + item.eq(i).height();
        const isHalfShown = slideAt > item.eq(i).offset().top;
        const isNotScrolledPast = $(window).scrollTop() < imageBottom;
        if (isHalfShown && isNotScrolledPast) {
            item.eq(i).addClass('active');
        } else {
            item.eq(i).removeClass('active');
        }
    }

	//header main menu icon click
	$('.header_icon .menu_icon').click(function(event) {
		if($('.header_menu').css('display') == 'none'){
			$('html').css('overflow','hidden');
			$('body').css('overflow','hidden');
			$('.header_icon .menu_icon').css('color','#FFF');
		}
		else{
			$('html').removeAttr('style');
			$('body').removeAttr('style'); 
			$('.header_icon .menu_icon').removeAttr('style');
		}
		$('.header_menu').slideToggle();
	});

	//header main menu item click
	$('.header_menu li').click(function(event) {
		if($(window).width() < 768){
			$(this).children('ul').eq(0).slideToggle();
		}
	});

	//header search menu icon and header "travel" click
	$('.header_icon .search_icon, .search_click').click(function(event) {
		if($(this).hasClass('active')){
			$('.header .header_search_menu').hide();
			$('.header_icon .search_icon, .search_click').removeClass('active');
		}
		else{
			$('.header_icon .search_icon, .search_click').removeClass('active');
			$(this).addClass('active');
			$('.header .header_search_menu').show();
			if($(window).width() < 768){
				$('html').css('overflow', 'hidden');
				$('body').css('overflow', 'hidden');
			}
		}
	});

	//When header search menu input:focus show header search menu
	$('.search_input input[type="text"]').focus(function(event) {
		if($(window).width() > 767){
			$(this).parent('form').next('.header_search_menu_inner').slideDown();
		}
	});

	//When header search menu input:blur(lost :focus) hide header search menu
	$('.search_input input[type="text"]').blur(function(event) {
		if($(window).width() > 767){
			$(this).parent('form').next('.header_search_menu_inner').slideUp();
		}
	});

	//header search menu back btn click
	//reset header search menu li initial active class
	$('.header_search_menu .back').click(function(event) {
		$('.header_icon .search_icon, .search_click').removeClass('active');
		$('.header_search_menu').removeAttr('style');
		$('.menu_second li').removeClass('active');
		$('.menu_first li').removeClass('active');

		$('html').removeAttr('style');
		$('body').removeAttr('style');

		$('.menu_second').children('li').eq(0).addClass('active');
		$('.menu_first').children('li').eq(0).addClass('active');
	});

	//header search menu first floor click
	$('.header .menu_first li').click(function(event) {
		let list_num = $('.header .menu_first li').index(this);

		$('.header .menu_second li').removeClass('active');
		$('.header .menu_first li').removeClass('active');

		$('.header .menu_second').children('li').eq(list_num).addClass('active');
		$(this).addClass('active');
	});

	//index banner and header search menu hover
	$('.header_search_menu_inner .menu_first li').hover(function() {
		let list_num2 = $(this).parent('.menu_first').children('li').index(this);
		console.log(list_num2);

		$(this).parent('.menu_first').children('li').removeClass('active');
		$(this).addClass('active');
		$(this).parents('.header_search_menu_inner').children('.menu_second').children('li').removeClass('active');
		$(this).parents('.header_search_menu_inner').children('.menu_second').children('li').eq(list_num2).addClass('active');
	}, function() {
		/* Stuff to do when the mouse leaves the element */
	});

    $(".back_top").click(function(){
		jQuery("html,body").animate({
			scrollTop:0
		},500);
	});
})

$(window).scroll(function(event) {
	if($(window).scrollTop() > 30){
		$('.header').addClass('fixed_top');
	}
	else{
		$('.header').removeClass('fixed_top');
	}

	//slide-in
	var item=$('.slide-in');
    for(let i=0; i<item.length; i++){
        const slideAt = $(window).innerHeight() + $(window).scrollTop();
        const imageBottom = item.eq(i).offset().top + item.eq(i).height();
        const isHalfShown = slideAt > item.eq(i).offset().top;
        const isNotScrolledPast = $(window).scrollTop() < imageBottom;
        if (isHalfShown && isNotScrolledPast) {
            item.eq(i).addClass('active');
        } else {
            item.eq(i).removeClass('active');
        }
    }
});

$(window).resize(function(event) {
	$('.search_input').removeAttr('style');
	$('.header .menu_second li').removeClass('active');
	$('.header .menu_first li').removeClass('active');
	$('.header_search_menu_inner').removeAttr('style');
	$('.header_menu').removeAttr('style');

	$('.header .menu_second').children('li').eq(0).addClass('active');
	$('.header .menu_first').children('li').eq(0).addClass('active');
	$('.index_page .menu_second').children('li').eq(0).addClass('active');
	$('.index_page .menu_first').children('li').eq(0).addClass('active');

	$('.header_menu li ul').removeAttr('style');
});
</script>
