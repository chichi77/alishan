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
	var ias = $.ias({

	  container: ".business_list",
	  item: "li",
	  pagination: "#pagination",
	  next: ".next a"
	});

	ias.extension(new IASSpinnerExtension({src: 'images/progress.gif'}));
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
					<span>Business  Service</span>
					<span>工商服務</span>
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
				<a href="business.php">工商服務</a>
			</li>
		</ul>
		<div class="item_detail_title common">
			<div class="title_txt">如果我們合作會有那些規範和細節？</div>
		</div>
		<!--自由編輯區塊-->
		<div class="edit_style">
			<p style="padding-bottom: 20px; color: blue;">以下為文字編輯內容，目前編排僅示意用途</p>
			<h4><b>1. 認知與接受條款</b></h4>
			<p style="color: #333;">　　愛玩美係依據本服務條款提供愛玩美服務 (以下簡稱「本服務」)。當您使用本服務時，即表示您已閱讀、瞭解並同意接受本服務條款之所有內容。此外，當您使用MK的特定服務時，可能會依據該特定服務之性質，而須遵守MK所另行公告之服務條款或相關規定。此另行公告之服務條款或相關規定（包括但不限於反垃圾郵件政策）亦均併入屬於本服務條款之一部分。MK有權於任何時間修改或變更本服務條款之內容，建議您隨時注意該等修改或變更。您於任何修改或變更後繼續使用本服務，視為您已閱讀、瞭解並同意接受該等修改或變更。如果您不同意本服務條款的內容，或者您所屬的國家或地域排除本服務條款內容之全部或一部時，您應立即停止使用本服務。</p>
			<p style="color: #333;">　　若您為未滿二十歲，除應符合上述規定外，並應於您的家長（或監護人）閱讀、瞭解並同意本服務條款之所有內容及其後修改變更後，方得使用或繼續使用本服務。當您使用或繼續使用本服務時，即推定您的家長（或監護人）已閱讀、瞭解並同意接受本服務條款之所有內容及其後修改變更。</p>
			<h4><b>2. 與第三人網站的連結</b></h4>
			<p style="color: #333;">　　本服務或協力廠商可能會提供連結至其他網站或網路資源的連結。您可能會因此連結至其他業者經營的網站，但不表示MK與該等業者有任何關係。其他業者經營的網站均由各該業者自行負責，不屬MK控制及負責範圍之內。MK對任何檢索結果或外部連結，不擔保其合適性、可依賴性、即時性、有效性、正確性及完整性。您也許會檢索或連結到一些令您厭惡或不需要的網站，這是網際網路運作的可能結果，遇到此類情形時，MK建議您不要瀏覽或儘速離開該等網站。您並同意MK無須為您連結至非屬於MK之網站所生之任何損害，負損害賠償之責任。</p>
		</div><!--自由編輯區塊 END-->
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>