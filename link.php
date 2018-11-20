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
	
})

var ias = $.ias({
  container: ".page_inner",
  item: "a",
  pagination: "#pagination",
  next: ".next a"
});

ias.extension(new IASSpinnerExtension({src: 'images/progress.gif'}));
</script>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="link_page">
	<div class="page_title" style="background-image: url('images/title_about.jpg');">
		<div class="mask">
			<div class="page_title_txt">
				<div class="max_width">
					<span>Links</span>
					<span>友站連結</span>
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
				<a href="link.php">友站連結</a>
			</li>
		</ul>
		<div class="link_page_inner">
			<a href="" target="_blank">
				<div class="item">
					<div class="item_img" style="background-image: url('images/product_04.png');"></div>
					<div class="item_title">愛玩美旅遊網站</div>
				</div>
			</a>
			<a href="" target="_blank">
				<div class="item">
					<div class="item_img" style="background-image: url('images/product_01.png');"></div>
					<div class="item_title">愛玩美旅遊網站</div>
				</div>
			</a>
			<a href="" target="_blank">
				<div class="item">
					<div class="item_img" style="background-image: url('images/product_03.png');"></div>
					<div class="item_title">愛玩美旅遊網站</div>
				</div>
			</a>
			<a href="" target="_blank">
				<div class="item">
					<div class="item_img" style="background-image: url('images/product_02.png');"></div>
					<div class="item_title">愛玩美旅遊網站</div>
				</div>
			</a>
			<a href="" target="_blank">
				<div class="item">
					<div class="item_img" style="background-image: url('images/product_01.png');"></div>
					<div class="item_title">愛玩美旅遊網站</div>
				</div>
			</a>
			<a href="" target="_blank">
				<div class="item">
					<div class="item_img" style="background-image: url('images/product_03.png');"></div>
					<div class="item_title">愛玩美旅遊網站</div>
				</div>
			</a>
			<a href="" target="_blank">
				<div class="item">
					<div class="item_img" style="background-image: url('images/product_02.png');"></div>
					<div class="item_title">愛玩美旅遊網站</div>
				</div>
			</a>
			<a href="" target="_blank">
				<div class="item">
					<div class="item_img" style="background-image: url('images/product_04.png');"></div>
					<div class="item_title">愛玩美旅遊網站</div>
				</div>
			</a>
		</div>
	</div>
	<ul id="pagination" style="display: none;">
		<li><a href="link.php">1</a></li>
		<li class="next"><a href="link.php">2</a></li>
	</ul>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>