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

<script src="http://ajax.aspnetcdn.com/ajax/knockout/knockout-3.0.0.js "></script>
<script src="http://html2canvas.hertzen.com/dist/html2canvas.js"></script>
</head>
<script>
$(function(){
	
})
</script>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="about_page">
	<div class="page_title" style="background-image: url('images/title_about.jpg');">
		<div class="mask">
			<div class="page_title_txt">
				<div class="max_width">
					<span>About</span>
					<span>關於愛玩美</span>
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
				<a href="about.php">關於愛玩美</a>
			</li>
		</ul>
		<!--自由編輯區塊-->
		<div class="edit_style">
			<p style="padding-bottom: 20px; color: blue;">以下為文字編輯內容，目前編排僅示意用途</p>
			<div style="font-size: 0; border-bottom: 1px #CCC solid; padding: 20px 0 30px 0;">
				<div style="display: inline-block; vertical-align: middle; width: 70%; font-size: 16px; padding-right: 5%; line-height: 1.6em;">
					<h3 style="color: #FF7373;">
						<i class="fas fa-caret-right" style=""></i>
						<span style="padding-left: 10px; color: #333;">簡介</span>
					</h3>
					<p style="color: #555;">    我們是一群專注以阿里山旅遊為據點的旅遊規劃設計愛好者，在阿里山旅遊有非常豐富的經驗及資源，請放心把旅程交給我們，我們絕不與操短線的同業作削價競爭來獲得客戶的青睞，我們爭取的是顧客的安全與服務，以提升整體旅遊業的品質。</p>
					<p style="color: #555;">    本公司的核心價值為對阿里山旅遊專業、對顧客友善及對工作熱情。對未來的經營策略將以對國內旅遊的專業結合網路科技，強調「豐富、低價、便利、創新」的個人化精緻旅遊服務。 我們對阿里山旅遊相關行程規劃非常嚴謹，幾乎是不斷地審視整個行程，我們唯一期盼就是希望您們在旅遊上能夠獲得最大的滿足，玩樂在美麗的風景中。</p>
				</div>
				<div style="display: inline-block; vertical-align: middle; width: 30%;">
					<img src="images/product_01.png" alt="" width="100%">	
				</div>
			</div>
			<div style="font-size: 0; padding: 20px 0 30px 0;">
				<div style="display: inline-block; vertical-align: middle; width: 70%; font-size: 16px; padding-right: 5%; line-height: 1.6em;">
					<h3 style="color: #FF7373;">
						<i class="fas fa-caret-right" style=""></i>
						<span style="padding-left: 10px; color: #333;">愛玩美特色</span>
					</h3>
					<p style="color: #555;"><i class="fas fa-circle"></i>　　目前台灣旅遊已經不像從前一樣，一大堆人跟著導遊到處走，而是三五好友、公司同事或者一個家庭為單位以有主題、有目的式的精緻旅遊。所以本公司利用網際網路機制很容易依顧客的個人需求來自組商品以滿足所需。</p>
					<p style="color: #555;"><i class="fas fa-circle"></i>　　阿里山旅遊行程及訂房等與其它旅遊業者同質性的商品，一律採低價策略！讓顧客無需到處比價，就能在此找到最便宜的商品。</p>
					<p style="color: #555;"><i class="fas fa-circle"></i>　　積極開發「差異化趨勢性商品」 以滿足消費者多元化的需求，提昇核心競爭力以創造利潤。</p>
				</div>
				<div style="display: inline-block; vertical-align: middle; width: 30%;">
					<img src="images/about_01.png" alt="" width="100%">	
				</div>
			</div>
			<div style="font-size: 0; border-bottom: 1px #CCC solid; padding: 20px 0 30px 0; line-height: 1.6em;">
				<div style="display: inline-block; vertical-align: middle; width: 32.5%; padding-right: 2.5%;">
					<img src="images/about_02.png" alt="" width="100%">	
				</div>
				<div style="display: inline-block; vertical-align: middle; width: 35%; padding-right: 2.5%; padding-left: 2.5%;">
					<img src="images/about_03.png" alt="" width="100%">	
				</div>
				<div style="display: inline-block; vertical-align: middle; width: 32.5%; padding-left: 2.5%;">
					<img src="images/about_04.png" alt="" width="100%">	
				</div>
			</div>
			<div style="padding: 20px 0 30px 0; line-height: 1.6em;">
				<h3 style="color: #FF7373;">
					<i class="fas fa-caret-right" style=""></i>
					<span style="padding-left: 10px; color: #333;">服務項目</span>
				</h3>
				<p style="color: #555;"><i class="fas fa-square"></i>　　代訂阿里山、日月潭、清境農場、墾丁或是台灣其它各地飯店或民宿之服務 (享有旅行社優惠價)</p>
				<p style="color: #555;"><i class="fas fa-square"></i>　　專門安排前往阿里山、日月潭、清境農場及墾丁旅遊，不論是個人或團體出遊皆可規劃</p>
				<p style="color: #555;"><i class="fas fa-square"></i>　　嘉義火車站後站設有旅行社門市據點及嘉義火車站專人駐站服務 (目前有諳英文及日文人員)</p>
				<p style="color: #555;"><i class="fas fa-square"></i>　　代為安排阿里山森林遊樂園區導覽服務 (中文導覽和英文導覽服務)</p>
				<p style="color: #555;"><i class="fas fa-square"></i>　　計乘車及九人座小巴士之阿里山旅遊包車服務</p>
			</div>
		</div><!--自由編輯區塊 END-->
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>