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
var ias = $.ias({
  container: ".index_topic .max_width .item_inner",
  item: ".item",
  pagination: "#pagination",
  next: ".next a"
});

ias.extension(new IASSpinnerExtension({src: 'images/progress.gif'}));
</script>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="product_page service">
	<div class="page_title" style="background-image: url('images/title_topic.jpg');">
		<div class="mask">
			<div class="page_title_txt">
				<div class="max_width">
					<span>優選主題</span>
					<span>Topic Items</span>
				</div>
			</div>
		</div>
	</div>
	<div class="index_page">
		<div class="index_topic">
			<div class="max_width">
				<ul class="breadcrumb">
					<li>
						<a href="index.php">首頁</a>
					</li>
					<li>
						<a href="product_topic_list.php">優選主題</a>
					</li>
				</ul>
				<div class="item_inner">
					<div class="item">
						<a href="product_topic.php">
							<div class="item_img" style="background-image: url('images/product-11.jpg');"></div> 
							<div class="item_txt">
								<div class="item_title">【嘉義文青生活小旅行】</div>
								<div class="item_txt_inner">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義</div>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="product_topic.php">
							<div class="item_img" style="background-image: url('images/product-12.jpg');"></div> 
							<div class="item_txt">
								<div class="item_title">【一月茶香春意濃】</div>
								<div class="item_txt_inner">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義</div>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="product_topic.php">
							<div class="item_img" style="background-image: url('images/product-13.jpg');"></div> 
							<div class="item_txt">
								<div class="item_title">【阿里山忘憂心靈雞湯旅行】</div>
								<div class="item_txt_inner">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義</div>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="product_topic.php">
							<div class="item_img" style="background-image: url('images/product-14.jpg');"></div> 
							<div class="item_txt">
								<div class="item_title">【親子就醬玩】</div>
								<div class="item_txt_inner">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義</div>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="product_topic.php">
							<div class="item_img" style="background-image: url('images/product-11.jpg');"></div> 
							<div class="item_txt">
								<div class="item_title">【嘉義文青生活小旅行】</div>
								<div class="item_txt_inner">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義</div>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="product_topic.php">
							<div class="item_img" style="background-image: url('images/product-12.jpg');"></div> 
							<div class="item_txt">
								<div class="item_title">【一月茶香春意濃】</div>
								<div class="item_txt_inner">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義</div>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="product_topic.php">
							<div class="item_img" style="background-image: url('images/product-13.jpg');"></div> 
							<div class="item_txt">
								<div class="item_title">【阿里山忘憂心靈雞湯旅行】</div>
								<div class="item_txt_inner">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義</div>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="product_topic.php">
							<div class="item_img" style="background-image: url('images/product-14.jpg');"></div> 
							<div class="item_txt">
								<div class="item_title">【親子就醬玩】</div>
								<div class="item_txt_inner">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義</div>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="product_topic.php">
							<div class="item_img" style="background-image: url('images/product-11.jpg');"></div> 
							<div class="item_txt">
								<div class="item_title">【嘉義文青生活小旅行】</div>
								<div class="item_txt_inner">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義</div>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="product_topic.php">
							<div class="item_img" style="background-image: url('images/product-12.jpg');"></div> 
							<div class="item_txt">
								<div class="item_title">【一月茶香春意濃】</div>
								<div class="item_txt_inner">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義</div>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="product_topic.php">
							<div class="item_img" style="background-image: url('images/product-13.jpg');"></div> 
							<div class="item_txt">
								<div class="item_title">【阿里山忘憂心靈雞湯旅行】</div>
								<div class="item_txt_inner">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義</div>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="product_topic.php">
							<div class="item_img" style="background-image: url('images/product-14.jpg');"></div> 
							<div class="item_txt">
								<div class="item_title">【親子就醬玩】</div>
								<div class="item_txt_inner">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<ul id="pagination" style="display: none;">
				<li><a href="product_topic_list.php">1</a></li>
				<li class="next"><a href="product_topic_list.php">2</a></li>
			</ul>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>