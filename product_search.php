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
	$('.menu_title').click(function(event) {
		if($(window).width() < 768){
			$('.product_menu>ul').slideToggle();
		}
	});

	$('.product_menu>ul li').click(function(event) {
		$(this).children('ul').slideToggle();
	});

	$(window).resize(function(event) {
		if($(window).width() > 767){
			$('.product_menu ul').removeAttr('style');
		}
	});
})

var ias = $.ias({
  container: ".product_item_inner",
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
	<div class="page_title" style="background-image: url('images/product-06.png');">
		<div class="mask">
			<div class="page_title_txt">
				<div class="max_width">
					<span>行程搜尋</span>
					<span>Search</span>
				</div>
			</div>
		</div>
	</div>
	<div class="product_page_inner">
		<div class="max_width">
			<div class="product_item">
				<div class="product_car_menu">
					<span>搜尋關鍵字"<?php echo $_GET['search'] ?>"，共有12筆資料</span>
				</div>
				<div class="product_item_inner">
					<div class="item">
						<a href="product_plane_detail.php">
							<div class="item_img" style="background-image: url('images/product-15.jpg');">
							</div>
							<div class="item_txt">
								<div class="title">沒球練的嘉義文青生活二日遊小旅行 (09:00出發)</div>
								<div class="rank">
									<span>4.5</span>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star-half" style="color: #D9A300;"></i>
								</div>
								<div class="detail">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義市區裡，鄰近嘉義火車站，也可以一次體驗嘉義兩大特色：森鐵小火車 & KANO棒球熱血魂~</div>
								<div class="good"><i class="far fa-thumbs-up"></i>315人購買</div>
							</div>
							<div class="price">NT$ 3,150 起</div>
						</a>
					</div>
					<div class="item">
						<a href="product_plane_detail.php">
							<div class="item_img" style="background-image: url('images/product-11.jpg');">
							</div>
							<div class="item_txt">
								<div class="title">嘉義城市文青慢慢二日遊 (09:00出發)</div>
								<div class="rank">
									<span>3.8</span>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
								</div>
								<div class="detail">簡單帶你探訪嘉義在地景點，蔗埕文化園區/故宮南院/新港板陶窯/檜意森活村/蘭潭/泰郁美學堂/交趾陶博物館/島呼冊店</div>
								<div class="good"><i class="far fa-thumbs-up"></i>233人購買</div>
							</div>
							<div class="price">NT$ 3,350 起</div>
						</a>
					</div>
					<div class="item">
						<a href="product_plane_detail.php">
							<div class="item_img" style="background-image: url('images/product-15.jpg');">
							</div>
							<div class="item_txt">
								<div class="title">沒球練的嘉義文青生活二日遊小旅行 (09:00出發)</div>
								<div class="rank">
									<span>4.5</span>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star-half" style="color: #D9A300;"></i>
								</div>
								<div class="detail">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義市區裡，鄰近嘉義火車站，也可以一次體驗嘉義兩大特色：森鐵小火車 & KANO棒球熱血魂~</div>
								<div class="good"><i class="far fa-thumbs-up"></i>315人購買</div>
							</div>
							<div class="price">NT$ 3,150 起</div>
						</a>
					</div>
					<div class="item">
						<a href="product_plane_detail.php">
							<div class="item_img" style="background-image: url('images/product-11.jpg');">
							</div>
							<div class="item_txt">
								<div class="title">嘉義城市文青慢慢二日遊 (09:00出發)</div>
								<div class="rank">
									<span>3.8</span>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
								</div>
								<div class="detail">簡單帶你探訪嘉義在地景點，蔗埕文化園區/故宮南院/新港板陶窯/檜意森活村/蘭潭/泰郁美學堂/交趾陶博物館/島呼冊店</div>
								<div class="good"><i class="far fa-thumbs-up"></i>233人購買</div>
							</div>
							<div class="price">NT$ 3,350 起</div>
						</a>
					</div>
					<div class="item">
						<a href="product_plane_detail.php">
							<div class="item_img" style="background-image: url('images/product-15.jpg');">
							</div>
							<div class="item_txt">
								<div class="title">沒球練的嘉義文青生活二日遊小旅行 (09:00出發)</div>
								<div class="rank">
									<span>4.5</span>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star-half" style="color: #D9A300;"></i>
								</div>
								<div class="detail">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義市區裡，鄰近嘉義火車站，也可以一次體驗嘉義兩大特色：森鐵小火車 & KANO棒球熱血魂~</div>
								<div class="good"><i class="far fa-thumbs-up"></i>315人購買</div>
							</div>
							<div class="price">NT$ 3,150 起</div>
						</a>
					</div>
					<div class="item">
						<a href="product_plane_detail.php">
							<div class="item_img" style="background-image: url('images/product-11.jpg');">
							</div>
							<div class="item_txt">
								<div class="title">嘉義城市文青慢慢二日遊 (09:00出發)</div>
								<div class="rank">
									<span>3.8</span>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
								</div>
								<div class="detail">簡單帶你探訪嘉義在地景點，蔗埕文化園區/故宮南院/新港板陶窯/檜意森活村/蘭潭/泰郁美學堂/交趾陶博物館/島呼冊店</div>
								<div class="good"><i class="far fa-thumbs-up"></i>233人購買</div>
							</div>
							<div class="price">NT$ 3,350 起</div>
						</a>
					</div>
					<div class="item">
						<a href="product_plane_detail.php">
							<div class="item_img" style="background-image: url('images/product-15.jpg');">
							</div>
							<div class="item_txt">
								<div class="title">沒球練的嘉義文青生活二日遊小旅行 (09:00出發)</div>
								<div class="rank">
									<span>4.5</span>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star-half" style="color: #D9A300;"></i>
								</div>
								<div class="detail">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義市區裡，鄰近嘉義火車站，也可以一次體驗嘉義兩大特色：森鐵小火車 & KANO棒球熱血魂~</div>
								<div class="good"><i class="far fa-thumbs-up"></i>315人購買</div>
							</div>
							<div class="price">NT$ 3,150 起</div>
						</a>
					</div>
					<div class="item">
						<a href="product_plane_detail.php">
							<div class="item_img" style="background-image: url('images/product-11.jpg');">
							</div>
							<div class="item_txt">
								<div class="title">嘉義城市文青慢慢二日遊 (09:00出發)</div>
								<div class="rank">
									<span>3.8</span>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
								</div>
								<div class="detail">簡單帶你探訪嘉義在地景點，蔗埕文化園區/故宮南院/新港板陶窯/檜意森活村/蘭潭/泰郁美學堂/交趾陶博物館/島呼冊店</div>
								<div class="good"><i class="far fa-thumbs-up"></i>233人購買</div>
							</div>
							<div class="price">NT$ 3,350 起</div>
						</a>
					</div>
					<div class="item">
						<a href="product_plane_detail.php">
							<div class="item_img" style="background-image: url('images/product-15.jpg');">
							</div>
							<div class="item_txt">
								<div class="title">沒球練的嘉義文青生活二日遊小旅行 (09:00出發)</div>
								<div class="rank">
									<span>4.5</span>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star-half" style="color: #D9A300;"></i>
								</div>
								<div class="detail">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義市區裡，鄰近嘉義火車站，也可以一次體驗嘉義兩大特色：森鐵小火車 & KANO棒球熱血魂~</div>
								<div class="good"><i class="far fa-thumbs-up"></i>315人購買</div>
							</div>
							<div class="price">NT$ 3,150 起</div>
						</a>
					</div>
					<div class="item">
						<a href="product_plane_detail.php">
							<div class="item_img" style="background-image: url('images/product-11.jpg');">
							</div>
							<div class="item_txt">
								<div class="title">嘉義城市文青慢慢二日遊 (09:00出發)</div>
								<div class="rank">
									<span>3.8</span>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
								</div>
								<div class="detail">簡單帶你探訪嘉義在地景點，蔗埕文化園區/故宮南院/新港板陶窯/檜意森活村/蘭潭/泰郁美學堂/交趾陶博物館/島呼冊店</div>
								<div class="good"><i class="far fa-thumbs-up"></i>233人購買</div>
							</div>
							<div class="price">NT$ 3,350 起</div>
						</a>
					</div>
					<div class="item">
						<a href="product_plane_detail.php">
							<div class="item_img" style="background-image: url('images/product-15.jpg');">
							</div>
							<div class="item_txt">
								<div class="title">沒球練的嘉義文青生活二日遊小旅行 (09:00出發)</div>
								<div class="rank">
									<span>4.5</span>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star-half" style="color: #D9A300;"></i>
								</div>
								<div class="detail">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義市區裡，鄰近嘉義火車站，也可以一次體驗嘉義兩大特色：森鐵小火車 & KANO棒球熱血魂~</div>
								<div class="good"><i class="far fa-thumbs-up"></i>315人購買</div>
							</div>
							<div class="price">NT$ 3,150 起</div>
						</a>
					</div>
					<div class="item">
						<a href="product_plane_detail.php">
							<div class="item_img" style="background-image: url('images/product-11.jpg');">
							</div>
							<div class="item_txt">
								<div class="title">嘉義城市文青慢慢二日遊 (09:00出發)</div>
								<div class="rank">
									<span>3.8</span>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
									<i class="fas fa-star" style="color: #D9A300;"></i>
								</div>
								<div class="detail">簡單帶你探訪嘉義在地景點，蔗埕文化園區/故宮南院/新港板陶窯/檜意森活村/蘭潭/泰郁美學堂/交趾陶博物館/島呼冊店</div>
								<div class="good"><i class="far fa-thumbs-up"></i>233人購買</div>
							</div>
							<div class="price">NT$ 3,350 起</div>
						</a>
					</div>
				</div>
				<ul id="pagination" style="display: none;">
					<li><a href="product_plane.php">1</a></li>
					<li class="next"><a href="product_plane.php">2</a></li>
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