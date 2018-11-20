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
<script>
$(function(){
	var url = location.search;
	if(url.indexOf('?')!=-1){
	    var id = "type";
	    var ary = url.split('?')[1].split('&');

	    for(let i=0;i<=ary.length-1;i++){
	        //如果資料名稱為var id的話那就把他取出來
	        if(ary[i].split('=')[0] == id){
	            var url_type = ary[i].split('=')[1];
	            $('input[name="order_num"]').val(url_type);
	        }
	    }	    
	}

	if(url_type == 1){
		$('div[data-type="2"]').hide();
		$('li[data-type="2"]').hide();
		$('.m_page_inner>.title').append('-套裝行程');

	}
	else if(url_type == 2){
		$('div[data-type="1"]').hide();
		$('li[data-type="1"]').hide();
		$('.m_page_inner>.title').append('-包車旅遊及機場接送');
	}
	else{
		alert('請返回正確頁面！');
		history.go(-1);
	}

	//清除所有星星顏色
	function rankstar_clear(rank_item){
		rank_item.children('em').css('color','#999');
	}

	function rankstar_current(rank_item, star_index){
		for(let i =0; i < star_index+1; i++){
			rank_item.children('em').eq(i).css('color','rgb(217, 163, 0)');
		}
	}

	var rankstar_click = [];
	$('.starBox em').hover(function() {
		let rank_item_index = $('.starBox').index($(this).parent('.starBox'));
		let star_index = $('.starBox').eq(rank_item_index).children('em').index($(this));

		if(rankstar_click[rank_item_index] < star_index || rankstar_click[rank_item_index] == undefined){ 
			rankstar_clear($('.starBox').eq(rank_item_index));
			rankstar_current($('.starBox').eq(rank_item_index),star_index);
		}
	}, function() {
		let rank_item_index = $('.starBox').index($(this).parent('.starBox'));
		let star_index = $('.starBox').eq(rank_item_index).children('em').index($(this));

		rankstar_clear($('.starBox').eq(rank_item_index));
		if(rankstar_click[rank_item_index] > -1){
			rankstar_current($('.starBox').eq(rank_item_index),rankstar_click[rank_item_index]);
		}
	});

	$('.starBox em').click(function(){
		let rank_item_index = $('.starBox').index($(this).parent('.starBox'));
		let star_index = $('.starBox').eq(rank_item_index).children('em').index($(this));
		let score = star_index + 1;

		rankstar_click[rank_item_index] = star_index;
		rankstar_clear($('.starBox').eq(rank_item_index));
		rankstar_current($('.starBox').eq(rank_item_index),star_index);
		$('.starBox').eq(rank_item_index).next('.rank_txt').text(score + '顆星');
		$('.starBox').eq(rank_item_index).nextAll('.rank_error').remove();
		$('.starBox').eq(rank_item_index).nextAll('.rank_score_input').val(score);

	});

	$('input[name="getinfo"]').click(function(event) {
		$(this).eq(0).parents('.radio_input').find('.rank_error').remove();
	});

	$('#postForm').submit(function(event) {
		var error_flag = 0;
		var radio_flag = 0;
		
		for(let i = 0; i<$('.starBox').length; i++){
			$('.rank_star .rank_txt').eq(i).children('.rank_error').remove();
			if(rankstar_click[i] == undefined && $('.rank_star').eq(i).parent('div').css('display')!='none'){
				$('.rank_star').eq(i).children('.rank_txt').append('<div class="rank_error red_txt">此為必填</div>');
				
				error_flag = 1;
			}
		}	

		for(let i=0; i<$('input[name="getinfo"]').length;i++){
			if($('input[name="getinfo"]').eq(i).prop('checked') == true){
				radio_flag = 1;
			}
		}

		if(radio_flag == 0){
			$('input[name="getinfo"]').eq(0).parents('.radio_input').children('.item_title').append('<div class="rank_error red_txt">此為必填</div>');
			$('html, body').animate({scrollTop: $('input[name="getinfo"]').eq(0).parents('.radio_input').offset().top - $('.header.fixed_top').height()}, 200);
			return false;

		}	
		else if(error_flag == 1){
			$('html, body').animate({scrollTop: $('.rank_error').eq(0).parents('.rank_star').parent('div').offset().top - $('.header.fixed_top').height()}, 200);
			return false;
		}
	});
})
</script>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="m_page m_inner feedback">
	<div class="page_title" style="background-image: url('images/title_about.jpg');">
		<div class="mask">
			<div class="page_title_txt">
				<div class="max_width">
					<span>Member</span>
					<span>會員專區</span>
				</div>
			</div>
		</div>
	</div>
	<div class="max_width page_inner">
		<?php include("m_menu.php"); ?>
		<div class="m_page_inner">
			<div class="title">就是愛玩美旅遊滿意調查表</div>
			<div class="title_detail">親愛的旅客：<br>非常感謝您，選擇參加 【愛玩美旅行社】 的套裝行程，為更不斷提高服務的品質，且更了解旅客的需求。 我們由衷的期望您提供這次旅遊寶貴的經驗與建議。 讓我們朝向令旅客滿意的途徑邁進，讓愛玩美旅遊成為大家旅遊的首選。謝謝 !! <br>
			麻煩您花幾分鐘的時間填寫這份滿意度調查表~~ 感謝您的合作 ~~ 並期待您的再度光臨 !! </div>
			<div class="m_feedback_item">
				<div class="item_img" style="background-image: url('images/product_03.png');"></div>
				<div class="item_txt">
					<div class="item_title">【青青草原咩咩咩】清境農場‧合歡山超值二日遊</div>
					<ul class="detail">
						<li>出發日期：2018/03/16</li>
						<li data-type="2">選擇車型：豪華七人座</li>
						<li data-type="1">出發時段：08:45</li>
						<li>訂單編號：<?php echo $_GET['id'] ?></li>
					</ul>
				</div>
			</div>
			<form name="postForm" id="postForm" action="m_order.php" class="m_feedback_form">
				<div class="radio_input">
					<div class="item_title">請問是從哪裡得知本公司的旅遊行程?</div>
					<div>
						<label>
							<input type="radio" name="getinfo">
							<span>Yahoo奇摩搜尋</span>
						</label>
						<label>
							<input type="radio" name="getinfo">
							<span>Google搜尋</span>
						</label>
						<label>
							<input type="radio" name="getinfo">
							<span>FaceBook（<a href="https://www.facebook.com/profun01" target="_blank">漫步阿里山旅遊網(愛玩美旅行社)</a>）</span>
						</label>
						<label>
							<input type="radio" name="getinfo">
							<span>淘寶（<a href="http://shop115046113.taobao.com/?spm=2013.1.1000126.d21.U0Pj98" target="_blank">愛玩美台灣旅遊</a>）</span>
						</label>
						<label>
							<input type="radio" name="getinfo">
							<span>Youtube（<a href=" https://www.youtube.com/channel/UC-gyOQNrxBh4cICQnCJShBA" target="_blank">前往</a>）</span>
						</label>
						<label>
							<input type="radio" name="getinfo">
							<span>愛玩美旅遊官方網站（<a href="http://www.94itaiwan.com" target="_blank">前往</a>）</span>
						</label>
						<label>
							<input type="radio" name="getinfo">
							<span>朋友介紹</span>
						</label>
						<label>
							<input type="radio" name="getinfo">
							<span>其他</span>
							<input type="text" name="getinfo_else">
						</label>
					</div>
				</div>
				<div data-type="2">
					<div class="item_title">對於司機：請問您覺得司機的服務態度如何?</div>
					<div class="rank_star">
						<div class="starBox">
							<em>
								<i class="fas fa-star"></i>
							</em>
							<em>
								<i class="fas fa-star"></i>
							</em>
							<em>
								<i class="fas fa-star"></i>
							</em>
							<em>
								<i class="fas fa-star"></i>
							</em>
							<em>
								<i class="fas fa-star"></i>
							</em>
						</div>
						<div class="rank_txt"></div>
						<input name="rank_score_1" type="number" style="display: none;" class="rank_score_input required">
					</div>
				</div>
				<div data-type="2">
					<div class="item_title">對於司機：請問您覺得司機的駕車平穩度如何? </div>
					<div class="rank_star">
						<div class="starBox">
							<em>
								<i class="fas fa-star"></i>
							</em>
							<em>
								<i class="fas fa-star"></i>
							</em>
							<em>
								<i class="fas fa-star"></i>
							</em>
							<em>
								<i class="fas fa-star"></i>
							</em>
							<em>
								<i class="fas fa-star"></i>
							</em>
						</div>
						<div class="rank_txt"></div>
						<input name="rank_score_2" type="number" style="display: none;" class="rank_score_input required">
					</div>
				</div>
				<div data-type="2">
					<div class="item_title">對於車子：請問您覺得車況整潔度如何? </div>
					<div class="rank_star">
						<div class="starBox">
							<em>
								<i class="fas fa-star"></i>
							</em>
							<em>
								<i class="fas fa-star"></i>
							</em>
							<em>
								<i class="fas fa-star"></i>
							</em>
							<em>
								<i class="fas fa-star"></i>
							</em>
							<em>
								<i class="fas fa-star"></i>
							</em>
						</div>
						<div class="rank_txt"></div>
						<input name="rank_score_3" type="number" style="display: none;" class="rank_score_input required">
					</div>
				</div>
				<div data-type="2">
					<div class="item_title">若您覺得司機不錯或是有需要改進的地方,請給我們一些鼓勵或是指教~</div>
					<div>
						<textarea name="rank_txt" placeholder="請您寫下〔司機名字或綽號〕及〔意見〕"></textarea>
					</div>
				</div>
				<div data-type="1">
					<div class="item_title">對於行程：請問您覺得本公司行程安排得如何?</div>
					<div class="rank_star">
						<div class="starBox">
							<em>
								<i class="fas fa-star"></i>
							</em>
							<em>
								<i class="fas fa-star"></i>
							</em>
							<em>
								<i class="fas fa-star"></i>
							</em>
							<em>
								<i class="fas fa-star"></i>
							</em>
							<em>
								<i class="fas fa-star"></i>
							</em>
						</div>
						<div class="rank_txt"></div>
						<input name="rank_score_4" type="number" style="display: none;" class="rank_score_input required">
					</div>
				</div>
				<div data-type="1">
					<div class="item_title">麻煩您寫下對我們的鼓勵或我們需要改進的地方</div>
					<div>
						<textarea name="rank_txt" placeholder="請您寫下對〔導遊、司機、行程、餐食...〕之〔意見〕"></textarea>
					</div>
				</div>
				<div class="form_btn">
					<button type="submit">送出評價</button>
				</div>
			</form>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>