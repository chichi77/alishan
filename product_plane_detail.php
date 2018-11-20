<!doctype html>
<html lang="zh-tw">
<head>
<meta charset="utf-8">
<?php include("head.php"); ?>
<title><?php echo $title; ?></title>
<meta name="robots" content="all">
<meta name="robots" content="index,follow">
<meta name="revisit-after" content="3 days" />
<meta name="spiders" content="all" />
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="author" content="<?php echo $author; ?>">
<meta name="copyright" content="<?php echo $copyright; ?>">
<meta name="description" content="<?php echo $description; ?>">

<!--FB-->
<meta property="og:title" content="阿里山採茶二日遊"></meta>
<meta property="og:type" content="article"></meta>
<meta property="og:url" content="http://demo.dake.com.tw/~liao/alishan/product_travel_detail.php"></meta>
<meta property="og:image" content="http://demo.dake.com.tw/~liao/alishan/images/product-12.jpg"></meta>
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="300" />
<meta property="og:description" content="愛玩美旅行社是阿里山local tour。2人成行天天出發，不跟團屬於半自由行。會安排導覽人員於特定時間帶領(eg:阿里山森林園區專業導遊解說)，可保有私人空間享受輕鬆又自在的旅程。"></meta>
<meta property="og:site_name" content="愛玩美旅遊網"></meta>

<!--slick-->
<script src="js/slick.min.js"></script>
<link href="css/slick.css" rel="stylesheet">
<link href="css/slick-theme.css" rel="stylesheet">

<!-- clipboard.js v1.7.1 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>

<!--提示套件-->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head>
<script>
$(function(){
	$('.product_info .item_img').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    var ias = $.ias({
	  container: ".rank_inner",
	  item: ".item",
	  pagination: "#pagination",
	  next: ".next a"
	});

	ias.extension(new IASSpinnerExtension({src: 'images/progress.gif'}));
	ias.on('next', function(url) {
	    if ($('.product_item_rank').eq(0).css('display') == 'none') {
	        return false;
	    }
	})

    $('.product_item_detail_menu>li').eq(0).addClass('active');
    $('.product_item_detail>div').eq(0).addClass('active');

    $('.product_item_detail_menu>li').click(function(event) {
    	let click_num = $('.product_item_detail_menu>li').index(this);

    	$('.product_item_detail_menu>li').removeClass('active');
    	$(this).addClass('active');

    	$('.product_item_detail>div').removeClass('active');
    	$('.product_item_detail>div').eq(click_num).addClass('active');
    });

    $('.cart_list .car_item').click(function(event) {
    	$('.cart_list .car_item').removeClass('active');
    	$(this).addClass('active');
    	$(this).children('input ').prop("checked", true);
    });

	//檢查日期
	function check_input_date(form_obj){
		var check_result = true;

		form_obj.find('input[type="date"]').each(function(index, el) {
			var date_val = new Date($(this).val().replace(/-/g,'/'));
			var date_min = new Date($(this).prop('min').replace(/-/g,'/'));
			var date_max = (function(check_input){
				if(typeof(check_input.attr('max')) != 'undefined'){
					return new Date(check_input.attr('max').replace(/-/g,'/'));
				}
				else{
					return new Date("2099/12/31");
				}
			}($(this)));
			
			if(date_val > date_max || date_val < date_min){
				if(!$(this).hasClass('invalid')){
					$(this).addClass('invalid');
				}

				check_result = false;
			}
			else{
				$(this).removeClass('invalid');
			}
			
		});

		form_obj.find('.invalid').eq(0).focus();

		return check_result;
	}

	$('#postForm').submit(function(event) {
		if(!check_input_date($(this))){
			alert('請輸入正確的預訂日期！');
			return false;
		}
		else if($('input[name="car_item"]:checked').length == 0){
			alert('請選擇車型');
			return false;
		}
	});

	$( "#opener" ).click(function() {
		$( "#dialog" ).dialog( "open" );
		return false;
	});

	  //一鍵複製
	var copy_result = new Clipboard( "#copy_btn" );
	copy_result.on('success', function(e) {
	    toastr.options = {
			  "closeButton": false,
			  "debug": false,
			  "newestOnTop": false,
			  "progressBar": false,
			  "positionClass": "toast-bottom-right",
			  "preventDuplicates": false,
			  "onclick": null,
			  "showDuration": "300",
			  "hideDuration": "1000",
			  "timeOut": "5000",
			  "extendedTimeOut": "1000",
			  "showEasing": "swing",
			  "hideEasing": "linear",
			  "showMethod": "fadeIn",
			  "hideMethod": "fadeOut"
			}
	    toastr.success('已成功複製個人分享行程連結！');
	});

	copy_result.on('error', function(e) {
	    alert('抱歉您的瀏覽器不支援點擊複製的功能，您可以手動複製以下網址分享給好友，好友註冊成功以後可獲得紅利金！'+ $('#copy_btn').attr('data-clipboard-text'));
	});
})
</script>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.12';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<header>
	<?php include("header.php"); ?>
</header>
<div class="product_page detail service_detail">
	<div class="page_title" style="background-image: url('images/title_plane.jpg');">
		<div class="mask">
			<div class="page_title_txt">
				<div class="max_width">
					<span>機場接送</span>
					<span>The best drivers</span>
				</div>
			</div>
		</div>
	</div>
	<div class="product_page_inner">
		<div class="max_width">
			<ul class="breadcrumb">
				<li>
					<a href="index.php">首頁</a>
				</li>
				<li>
					<a href="product_plane.php">機場接送</a>
				</li>
			</ul>
			<div class="product_item">
				<div class="product_item_inner">
					<div class="item_detail_title common">
						<div class="title_txt">阿里山日月潭經典三日遊(08:45 天天出發)</div>
						<div class="item_code">編號：TR2017112002</div>
					</div>
					<div class="product_info">
						<div class="item_img">
							<div>
								<img src="images/product-12.jpg">
							</div>
							<div>
								<img src="images/product-12.jpg">
							</div>
						</div>
						<ul class="item_info_txt">
							<li>服務時長：10小時</li>
							<li>超時服務費：400元/HR</li>
						</ul>
						<div class="form_btn share_btn">
							<span class="title">分享：</span>
							<div class="fb-like" data-href="http://demo.dake.com.tw/~liao/alishan/product_travel_detail.php" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
							<a href='javascript: void(window.open(&apos;https://lineit.line.me/share/ui?url=&apos; .concat(encodeURIComponent(location.href)) ));' title='分享給 LINE 好友' class="line_share"><i class="fab fa-line"></i></a>
						</div>
					</div>
					<div class="product_cart">
						<form name="postForm" id="postForm" action="cart_1.php">
							<div class="cart_item">
								<div class="tip">開放日期：2018/03/01 ~ 2018/12/31</div>
								<input type="date" name="date" class="required" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" max="2018-12-31">
								<input name="type" type="num" value="2" style="display: none;">
								<div class="submit_btn">
									<button type="submit" class="deepblue_btn">線上預訂</button>
								</div>
							</div>
							<div class="cart_list">
								<div class="car_item">
									<input type="radio" name="car_item">
									<div class="item_img" style="background-image: url('images/car_02.jpg');"></div>
									<div class="item_txt">
										<div class="title">九人座小巴士</div>
										<span class="people">限乘人數：8</span>
										<span class="package">行李：10</span>
										<span class="same">參考車型：豐田 海獅 9座版、大眾/福斯 凱路威 9座版、現代 斯塔雷斯 9座版</span>
									</div>
									<div class="price">$ 5950</div>
								</div>
								<div class="car_item">
									<input type="radio" name="car_item">
									<div class="item_img" style="background-image: url('images/car_01.JPG');"></div>
									<div class="item_txt">
										<div class="title">七人座小巴士</div>
										<span class="people">限乘人數：7</span>
										<span class="package">行李：7</span>
										<span class="same">參考車型：日產/尼桑 驪威 7座版、豐田 Wish 7座版</span>
									</div>
									<div class="price">$ 5950</div>
								</div>
							</div>
						</form>
						<div class="form_btn">
							<form name="postForm2">
								<!--把要複製的連結寫在data-clipboard-text=裡面-->
								<input type="button" id="copy_btn" class="btn skyblue_btn" data-clipboard-text="http://demo.dake.com.tw/~liao/alishan/product_travel_detail.php" value="分享連結">
								<input type="button" onclick="" class="btn deepblue_btn" value="加入收藏">
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="product_item_detail">
				<ul class="product_item_detail_menu">
					<li>詳細介紹</li>
					<li>評論(322)</li>
				</ul>
				<div class="product_item_edit edit_style">
					<div style="color: #0059B2;">以下為文字編輯內容，目前編排僅示意用途</div>
					<br>
					<br>
					<h4><b>行程特色</b></h4>
					<p>1.茶席體驗 </p>
					<p>體驗阿里山比賽茶席與太興大地茶席，突破以往品茗界線，徜徉在茶香世界</p>
					<p>2.揉茶DIY </p>
					<p>透過揉茶DIY，把心情沉澱下來與茶葉對話，每位旅客可以透過揉捻的動作，體驗製茶師的輕柔緩慢。</p>
					<p>3.咖啡烘培DIY </p>
					<p>你有看咖啡豆在跳舞嗎? 了解咖啡豆處理過程後，就來試試手藝，特製的容器中，咖啡豆一邊跳舞一邊散發特有迷人的香氣，這是阿里山咖啡的精華~ 每位遊客可以咖啡烘豆DIY，創作你專屬的耳掛式咖啡包。</p>
				</div>
				<div class="product_item_rank">
					<div class="rank_inner">
						<div class="item">
							<i class="fas fa-user-circle"></i>
							<div class="info">
								<span class="name">張小姐</span>
								<span class="time">2017-11-10  14:52</span>
							</div>
							<div class="rank">
								<span class="red_txt">5.0</span>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="txt">司機開車很溫柔，山路也不會暈，覺得很棒的一次經驗！</div>
						</div>
						<div class="item">
							<i class="fas fa-user-circle"></i>
							<div class="info">
								<span class="name">張小姐</span>
								<span class="time">2017-11-10  14:52</span>
							</div>
							<div class="rank">
								<span class="red_txt">5.0</span>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="txt">司機開車很溫柔，山路也不會暈，覺得很棒的一次經驗！</div>
						</div>
						<div class="item">
							<i class="fas fa-user-circle"></i>
							<div class="info">
								<span class="name">王小姐</span>
								<span class="time">2017-11-03  07:21</span>
							</div>
							<div class="rank">
								<span class="red_txt">4.2</span>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half"></i>
							</div>
							<div class="txt">旅行社的人服務很好！讓人很放心，司機小江超貼心，同車有位阿伯，還特別準備椅凳方便阿伯上車！</div>
						</div>
						<div class="item">
							<i class="fas fa-user-circle"></i>
							<div class="info">
								<span class="name">王先生</span>
								<span class="time">2017-11-08  20:16</span>
							</div>
							<div class="rank">
								<span class="red_txt">4.2</span>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="txt">很好的服務，旅行社各人都很有禮貌很熱情招呼，坐的車是舒適的七、八人車，全程山路其實我真的很怕開車很快的司機，但發現這裡的司機開車很穩坐得很舒服，每一個彎司機都會稍微收油讓車過得很穩，明顯感受到是想客人都坐得安心，來回兩程上下山的司機不是同一人但一樣開車開得很穩檔，我們能睡得著稍作休息，真的很讚，還有阿里山上的導遊吳導也很讚呢，讓我們更了解阿里山，另外酒店也很舒適，山上的日出超美，謝謝你們的安排，繼續努力！</div>
						</div>
						<div class="item">
							<i class="fas fa-user-circle"></i>
							<div class="info">
								<span class="name">王小姐</span>
								<span class="time">2017-10-22  17:21</span>
							</div>
							<div class="rank">
								<span class="red_txt">3.8</span>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="txt">行程安排得很周到！非常不錯</div>
						</div>
						<div class="item">
							<i class="fas fa-user-circle"></i>
							<div class="info">
								<span class="name">劉先生</span>
								<span class="time">2017-10-09  22:35</span>
							</div>
							<div class="rank">
								<span class="red_txt">3.8</span>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="txt">謝謝鐘先生親切穩定的駕駛<br>讓我們全家輕鬆愉快的阿里山之旅<br>阿里山真是個空氣清新的好地方<br>有機會會想再前往美麗的阿里山</div>
						</div>
						<div class="item">
							<i class="fas fa-user-circle"></i>
							<div class="info">
								<span class="name">江先生</span>
								<span class="time">2017-10-09  22:35</span>
							</div>
							<div class="rank">
								<span class="red_txt">3.8</span>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="txt">接待人員親切解說，推薦。</div>
						</div>
					</div>
					<ul id="pagination" style="display: none;">
						<li><a href="product_travel_detail.php">1</a></li>
						<li class="next"><a href="product_travel_detail.php">2</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>