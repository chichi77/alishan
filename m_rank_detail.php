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
	    var id = "id";
	    var ary = url.split('?')[1].split('&');

	    for(let i=0;i<=ary.length-1;i++){
	        //如果資料名稱為var id的話那就把他取出來
	        if(ary[i].split('=')[0] == id){
	            var url_type = ary[i].split('=')[1];
	            $('input[name="order_num"]').val(url_type);
	        }
	    }	    
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
			<div class="title">訂單評價填寫</div>
			<div class="m_feedback_item">
				<div class="item_img" style="background-image: url('images/product_03.png');"></div>
				<div class="item_txt">
					<div class="item_title">【青青草原咩咩咩】清境農場‧合歡山超值二日遊</div>
					<ul class="detail">
						<li>出發日期：2018/03/16</li>
						<li>選擇車型：豪華七人座</li>
					</ul>
				</div>
			</div>
			<div class="m_info_form m_rank_detail">
				<div>
					<label>
						<span>訂單編號：</span>
						<input type="email" name="order_num" disabled>
					</label>
				</div>
				<div>
					<label>
						<span>評價：</span>
						<div class="rank_star">
							<div id="starBox" class="starBox">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div id="starNotice" class="rank_txt">5顆星</div>
						</div>
					</label>
				</div>
				<div>
					<label>
						<span>評價內容：</span>
						<div class="m_rank_detail_txt">很好的服務，旅行社各人都很有禮貌很熱情招呼，坐的車是舒適的七、八人車，全程山路其實我真的很怕開車很快的司機，但發現這裡的司機開車很穩坐得很舒服，每一個彎司機都會稍微收油讓車過得很穩，明顯感受到是想客人都坐得安心，來回兩程上下山的司機不是同一人但一樣開車開得很穩檔，我們能睡得著稍作休息，真的很讚，還有阿里山上的導遊吳導也很讚呢，讓我們更了解阿里山，另外酒店也很舒適，山上的日出超美，謝謝你們的安排，繼續努力！</div>
					</label>
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