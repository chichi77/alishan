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
		<ol class="business_list">
			<li>
				<a href="business_detail.php">如果我們合作會有那些規範和細節？</a>
			</li>
			<li>
				<a href="business_detail.php">愛玩美的特約店家有哪些？</a>
			</li>
			<li>
				<a href="business_detail.php">愛玩美網站相關法規</a>
			</li>
			<li>
				<a href="business_detail.php">愛玩美公司登記</a>
			</li>
			<li>
				<a href="business_detail.php">愛玩美產業登記</a>
			</li>
			<li>
				<a href="business_detail.php">如果和愛玩美合作可以擁有優惠嗎？</a>
			</li>
			<li>
				<a href="business_detail.php">如果我們合作會有那些規範和細節？</a>
			</li>
			<li>
				<a href="business_detail.php">愛玩美的特約店家有哪些？</a>
			</li>
			<li>
				<a href="business_detail.php">愛玩美網站相關法規</a>
			</li>
			<li>
				<a href="business_detail.php">愛玩美公司登記</a>
			</li>
			<li>
				<a href="business_detail.php">愛玩美產業登記</a>
			</li>
			<li>
				<a href="business_detail.php">如果和愛玩美合作可以擁有優惠嗎？</a>
			</li>
		</ol>
	</div>
	<ul id="pagination" style="display: none;">
		<li><a href="business.php">1</a></li>
		<li class="next"><a href="business.php">2</a></li>
	</ul>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>