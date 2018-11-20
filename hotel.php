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
<script>
$(function(){
	var ias = $.ias({
	  container: ".info_item_wrapper",
	  item: ".item",
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
<div class="product_page service">
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
		<div class="product_car_menu">
			<form class="menu" name="postFrom1">
				<select name="">
					<option value="hotel.php">南部</option>
					<option value="hotel.php">北部</option>
					<option value="hotel.php">中部</option>
					<option value="hotel.php">東部</option>
				</select>
			</form>
		</div>
		<div class="info_item_wrapper">
			<div class="item">
				<a href="hotel_detail.php">
					<div class="item_img" style="background-image: url('images/hotel_01.jpg');"></div>
					<div class="item_title">阿里山賓館</div>
				</a>
			</div>
			<div class="item">
				<a href="hotel_detail.php">
					<div class="item_img" style="background-image: url('images/hotel_02.jpg');"></div>
					<div class="item_title">阿里山櫻山大飯店</div>
				</a>
			</div>
			<div class="item">
				<a href="hotel_detail.php">
					<div class="item_img" style="background-image: url('images/hotel_03.jpg');"></div>
					<div class="item_title">阿里山美麗亞山莊</div>
				</a>
			</div>
			<div class="item">
				<a href="hotel_detail.php">
					<div class="item_img" style="background-image: url('images/hotel_04.jpg');"></div>
					<div class="item_title">阿里山閣大飯店 A棟(新館)</div>
				</a>
			</div>
			<div class="item">
				<a href="hotel_detail.php">
					<div class="item_img" style="background-image: url('images/hotel_05.jpg');"></div>
					<div class="item_title">阿里山高峰大飯店</div>
				</a>
			</div>
			<div class="item">
				<a href="hotel_detail.php">
					<div class="item_img" style="background-image: url('images/hotel_01.jpg');"></div>
					<div class="item_title">阿里山賓館</div>
				</a>
			</div>
			<div class="item">
				<a href="hotel_detail.php">
					<div class="item_img" style="background-image: url('images/hotel_02.jpg');"></div>
					<div class="item_title">阿里山櫻山大飯店</div>
				</a>
			</div>
			<div class="item">
				<a href="hotel_detail.php">
					<div class="item_img" style="background-image: url('images/hotel_03.jpg');"></div>
					<div class="item_title">阿里山美麗亞山莊</div>
				</a>
			</div>
			<div class="item">
				<a href="hotel_detail.php">
					<div class="item_img" style="background-image: url('images/hotel_04.jpg');"></div>
					<div class="item_title">阿里山閣大飯店 A棟(新館)</div>
				</a>
			</div>
			<div class="item">
				<a href="hotel_detail.php">
					<div class="item_img" style="background-image: url('images/hotel_05.jpg');"></div>
					<div class="item_title">阿里山高峰大飯店</div>
				</a>
			</div>
			<div class="item">
				<a href="hotel_detail.php">
					<div class="item_img" style="background-image: url('images/hotel_01.jpg');"></div>
					<div class="item_title">阿里山賓館</div>
				</a>
			</div>
			<div class="item">
				<a href="hotel_detail.php">
					<div class="item_img" style="background-image: url('images/hotel_02.jpg');"></div>
					<div class="item_title">阿里山櫻山大飯店</div>
				</a>
			</div>
		</div>
		<ul id="pagination" style="display: none;">
			<li><a href="hotel.php">1</a></li>
			<li class="next"><a href="hotel.php">2</a></li>
		</ul>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>