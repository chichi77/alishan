<?php include("session.php"); ?>
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
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="about_page">
	<div class="page_title" style="background-image: url('images/title_about.jpg');">
		<div class="mask">
			<div class="page_title_txt">
				<div class="max_width">
					<span>Hotel</span>
					<span>住宿資訊</span>
				</div>
			</div>
		</div>
	</div>
	<div class="max_width page_inner">
		<ul class="breadcrumb">
			<li>
				<a href="index.php">首頁</a>
			</li>
			<li>
				<a href="hotel.php">住宿資訊</a>
			</li>
		</ul>
		<div class="item_detail_title simple_img">
			<div class="title_img" style="background-image: url('images/hotel_01.jpg');"></div>
			<div class="title_txt">阿里山賓館</div>
			<div class="link_item">
				<span>連結：</span>
				<a href="http://www.alishanhouse.com.tw/" target="_blank">
					<span class="fa-stack fa-2x">
						<i class="fas fa-circle fa-stack-2x"></i>
						<i class="fas fa-link fa-stack-1x fa-inverse"></i>
					</span>
				</a>
			</div>
		</div>
		<!--編輯器-->
		<div class="edit_style">
			<div style="color: #0059B2;">以下為文字編輯內容，目前編排僅示意用途</div>
			<h4><b>歷史館-貴賓雙人房(一大床)</b></h4>
			<p style="color: #555;">位於國寶級之吉野櫻花旁，係依日據大正二年起所建之阿里山俱樂部，全部檜木建造，極具高雅之品味，每房面山，可遠眺群山，觀看雲海、晚霞，令人心曠神怡，宛如置身於仙境之中。<br>房費包含：住宿一晚、自助式早餐、自助式晚餐<br>網路免費使用及免費設施使用。(價格已含稅及10%服務費)<br><br>※房價不適用寒暑假、櫻花季、國定假期、連續假期等特殊節日；若阿里山森林遊樂區舉辦特殊活動，或是特殊日期之房價將依據現場公告。特殊節日之房價請依飯店公告。</p>
			<p style="color: red;"><large>平日特價 6500 元</large></p>
			<img src="images/hotel_01_01.jpg" style="width: 50%; max-width: 400px;">
			<img src="images/hotel_01_02.jpg" style="width: 50%; max-width: 400px;">

			<hr color="#CCC" size="1" style="margin: 30px 0;"></hr>

			<h4><b>歷史館-貴賓四人房(二大床+附按摩浴缸)</b></h4>
			<p style="color: #555;">位於全館景緻最佳之點，套房內有兩大床、精緻客廳，寬敞衛浴備有貴賓獨享之按摩浴缸，讓您盡情享受阿里山森林SPA,泡澡同時還可眺望窗外迷人山景，讓身心完全放鬆沉盡在塔山、夕陽、雲海美景中。<br>房費包含：住宿一晚、自助式早餐、自助式晚餐<br>網路免費使用及免費設施使用。(價格已含稅及10%服務費)<br><br>※房價不適用寒暑假、櫻花季、國定假期、連續假期等特殊節日；若阿里山森林遊樂區舉辦特殊活動，或是特殊日期之房價將依據現場公告。特殊節日之房價請依飯店公告。</p>
			<p style="color: red;"><large>平日特價 11000 元</large></p>
			<img src="images/hotel_01_01.jpg" style="width: 50%; max-width: 400px;">
			<img src="images/hotel_01_02.jpg" style="width: 50%; max-width: 400px;">

			<hr color="#CCC" size="1" style="margin: 30px 0;"></hr>

			<h4><b>現代館-豪華雙人房(一大床或二小床)</b></h4>
			<p style="color: #555;">屬於兩人最貼切的空間，寬廣的設計，深入您心。舉凡情侶出遊、新婚蜜月或是好友旅行，優雅的暖色系房間，拉近彼此的距離。<br>房費包含：住宿一晚、自助式早餐、自助式晚餐<br>網路免費使用及免費設施使用。(價格已含稅及10%服務費)<br><br>※房價不適用寒暑假、櫻花季、國定假期、連續假期等特殊節日；若阿里山森林遊樂區舉辦特殊活動，或是特殊日期之房價將依據現場公告。特殊節日之房價請依飯店公告。</p>
			<p style="color: red;"><large>平日特價 8800 元</large></p>
			<img src="images/hotel_01_01.jpg" style="width: 50%; max-width: 400px;">
			<img src="images/hotel_01_02.jpg" style="width: 50%; max-width: 400px;">
		</div><!--編輯器 END-->
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>