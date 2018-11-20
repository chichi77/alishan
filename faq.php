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
</head>
<script>
$(function(){
	$('.faq_menu>li').eq(0).addClass('active');
	$('.faq_list>li').eq(0).addClass('active');

	$('.faq_list>li ul>li .item_title').click(function(event) {
		$(this).parent('li').children('.edit_style').eq(0).slideToggle();
	});

	$('.faq_menu>li').click(function(event) {
		$('.faq_list>li ul .active').find('.edit_style').removeAttr('style');
		$('.faq_list>li').removeClass('active');
		$('.faq_menu>li').removeClass('active');

		var faq_num = $('.faq_menu>li').index(this);
		$(this).addClass('active');
		$('.faq_list>li').eq(faq_num).addClass('active');
	});
})
</script>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="faq_page">
	<div class="page_title" style="background-image: url('images/title_news.jpg');">
		<div class="mask">
			<div class="page_title_txt">
				<div class="max_width">
					<span>Q&A</span>
					<span>幫助中心</span>
				</div>
			</div>
		</div>
	</div>
	<div class="page_inner">
		<div class="max_width">
			<ul class="breadcrumb">
				<li>
					<a href="index.php">首頁</a>
				</li>
				<li>
					<a href="faq.php">常見問題</a>
				</li>
			</ul>
			<div class="faq_page_inner">
				<ul class="faq_menu">
					<li>常見問題</li>
					<li>預定流程</li>
					<li>支付流程</li>
					<li>退款說明</li>
				</ul>
				<ul class="faq_list">
					<li>
						<ul>
							<li>
								<div class="item_title">如果成為會員可以享有什麼權利？</div>
								<div class="edit_style">
									加入會員可以享有下訂單、分享獲得旅遊金、邀請獲得旅遊金並使用旅遊金折抵消費的優惠。
								</div>
							</li>
							<li>
								<div class="item_title">如何加入會員？</div>
								<div class="edit_style">
									<p>可以點選頁面上方的下拉選單中的"登入/加入會員"的連結，就可以進行註冊，認證通過以後就可以成為會員享有會員權利。</p>
									<br>
									<img src="images/faq_01_02.JPG" width="100%">
								</div>
							</li>
							<li>
								<div class="item_title">我該如何聯繫愛玩美？</div>
								<div class="edit_style">
									<p>您有以下的方式可以聯繫我們:</p>
									<p>1. 前往<a href="contact.php">聯絡我們</a>頁面填寫線上表單，我們會在收到表單以後透過您留下的聯絡方式盡快回覆您！</p>
									<p>2. 撥打我們的客服電話：<br>客服專線1：+886-5-2911658<br>客服專線2：+886-5-2323766<br>客服專線3：+886-5-2331377</p>
									<p>3. 透過傳真+886-5-2331077</p>
									<p>4. 透過電子信箱:<br>profun03@gmail.com<br>e600008@hotmail.com</p>
								</div>
							</li>
						</ul>
					</li>
					<li>
						<ul>
							<li>
								<div class="item_title">我該如何預定？</div>
								<div class="edit_style">
									<p>幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字</p>
								</div>
							</li>
							<li>
								<div class="item_title">在哪裡可以看到我已經預訂的訂單？</div>
								<div class="edit_style">
									<p>幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字</p>
									<p>幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字</p>
								</div>
							</li>
							<li>
								<div class="item_title">我可以修改或取消已經預定的訂單嗎？</div>
								<div class="edit_style">
									<p>幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字</p>
								</div>
							</li>
						</ul>
					</li>
					<li>
						<ul>
							<li>
								<div class="item_title">預定完之後該怎麼支付我的訂單？</div>
								<div class="edit_style">
									<p>幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字</p>
								</div>
							</li>
							<li>
								<div class="item_title">怎麼知道我已經完成支付？</div>
								<div class="edit_style">
									<p>幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字</p>
									<p>幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字</p>
								</div>
							</li>
						</ul>
					</li>
					<li>
						<ul>
							<li>
								<div class="item_title">如果我有其他因素想取消訂單，怎麼申請訂單的退款？</div>
								<div class="edit_style">
									<p>幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字</p>
								</div>
							</li>
							<li>
								<div class="item_title">申請退款之後之後大概會多久退款？</div>
								<div class="edit_style">
									<p>幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字</p>
									<p>幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字</p>
									<p>幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字</p>
								</div>
							</li>
							<li>
								<div class="item_title">訂單的退款比例是怎麼計算呢？</div>
								<div class="edit_style">
									<p>幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字</p>
									<p>幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字幫助中心示範內容文字</p>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>