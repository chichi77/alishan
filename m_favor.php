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
	
})

var ias = $.ias({
  container: ".m_favor_list",
  item: ".item",
  pagination: "#pagination",
  next: ".next a"
});

ias.extension(new IASSpinnerExtension({src: 'images/progress.gif'}));

function check_all(obj,cName) { 
    var checkboxs = document.getElementsByName(cName); 
    for(var i=0;i<checkboxs.length;i++){checkboxs[i].checked = obj.checked;} 
}
</script>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="m_page m_inner info">
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
			<div class="title">我的收藏列表</div>
			<form name="postForm" id="postForm" class="m_favor_form">
				<div class="form_btn">
					<button type="submit" class="deepblue_btn">刪除</button>
				</div>
				<div class="m_favor_list">
					<div class="list_title">
						<div class="item_check">
							<input type="checkbox" name="favor_item_all" onclick="check_all(this,'favor_item')">
						</div>
						<div class="item_img">商品</div>
						<div class="item_txt">內容</div>
					</div>
					<div class="item">
						<div class="item_check">
							<input type="checkbox" name="favor_item">
						</div>
						<a href="product_travel_detail.php">
							<div class="item_img" style="background-image: url('images/product-15.jpg');">
							</div>
						</a>
						<a href="product_travel_detail.php">
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
								<div class="good">315人參加過</div>
								<div class="price">NT$ 3,150 起</div>
							</div>
						</a>
					</div>
					<div class="item">
						<div class="item_check">
							<input type="checkbox" name="favor_item">
						</div>
						<a href="product_travel_detail.php">
							<div class="item_img" style="background-image: url('images/product-15.jpg');">
							</div>
						</a>
						<a href="product_travel_detail.php">
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
								<div class="good">315人參加過</div>
								<div class="price">NT$ 3,150 起</div>
							</div>
						</a>
					</div>
					<div class="item">
						<div class="item_check">
							<input type="checkbox" name="favor_item">
						</div>
						<a href="product_travel_detail.php">
							<div class="item_img" style="background-image: url('images/product-15.jpg');">
							</div>
						</a>
						<a href="product_travel_detail.php">
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
								<div class="good">315人參加過</div>
								<div class="price">NT$ 3,150 起</div>
							</div>
						</a>
					</div>
					<div class="item">
						<div class="item_check">
							<input type="checkbox" name="favor_item">
						</div>
						<a href="product_travel_detail.php">
							<div class="item_img" style="background-image: url('images/product-15.jpg');">
							</div>
						</a>
						<a href="product_travel_detail.php">
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
								<div class="good">315人參加過</div>
								<div class="price">NT$ 3,150 起</div>
							</div>
						</a>
					</div>
				</div>
				<ul id="pagination" style="display: none;">
					<li><a href="m_favor.php">1</a></li>
					<li class="next"><a href="m_favor.php">2</a></li>
				</ul>
			</form>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>