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
			<div class="m_feedback_form">
				<div class="radio_input">
					<div class="item_title">請問是從哪裡得知本公司的旅遊行程?</div>
					<div>FaceBook（<a href="https://www.facebook.com/profun01" target="_blank">漫步阿里山旅遊網(愛玩美旅行社)</a>）</div>
				</div>
				<div data-type="2">
					<div class="item_title">對於司機：請問您覺得司機的服務態度如何?</div>
					<div class="rank_star">
						<div class="starBox">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<div class="rank_txt">5顆星</div>
					</div>
				</div>
				<div data-type="2">
					<div class="item_title">對於司機：請問您覺得司機的駕車平穩度如何? </div>
					<div class="rank_star">
						<div class="starBox">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<div class="rank_txt">4顆星</div>
					</div>
				</div>
				<div data-type="2">
					<div class="item_title">對於車子：請問您覺得車況整潔度如何? </div>
					<div class="rank_star">
						<div class="starBox">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<div class="rank_txt">5顆星</div>
					</div>
				</div>
				<div data-type="2">
					<div class="item_title">若您覺得司機不錯或是有需要改進的地方,請給我們一些鼓勵或是指教~</div>
					<div>很好的服務，旅行社各人都很有禮貌很熱情招呼，坐的車是舒適的七、八人車，全程山路其實我真的很怕開車很快的司機，但發現這裡的司機開車很穩坐得很舒服，每一個彎司機都會稍微收油讓車過得很穩，明顯感受到是想客人都坐得安心，來回兩程上下山的司機不是同一人但一樣開車開得很穩檔，我們能睡得著稍作休息，真的很讚，還有阿里山上的導遊吳導也很讚呢，讓我們更了解阿里山，另外酒店也很舒適，山上的日出超美，謝謝你們的安排，繼續努力！</div>
				</div>
				<div data-type="1">
					<div class="item_title">對於行程：請問您覺得本公司行程安排得如何?</div>
					<div class="rank_star">
						<div class="starBox">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<div class="rank_txt">5顆星</div>
					</div>
				</div>
				<div data-type="1">
					<div class="item_title">麻煩您寫下對我們的鼓勵或我們需要改進的地方</div>
					<div>很好的服務，旅行社各人都很有禮貌很熱情招呼，坐的車是舒適的七、八人車，全程山路其實我真的很怕開車很快的司機，但發現這裡的司機開車很穩坐得很舒服，每一個彎司機都會稍微收油讓車過得很穩，明顯感受到是想客人都坐得安心，來回兩程上下山的司機不是同一人但一樣開車開得很穩檔，我們能睡得著稍作休息，真的很讚，還有阿里山上的導遊吳導也很讚呢，讓我們更了解阿里山，另外酒店也很舒適，山上的日出超美，謝謝你們的安排，繼續努力！</div>
				</div>
				<div class="form_btn">
					<input type="button" class="btn" value="返回列表" onclick="location.href='m_order.php'">
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