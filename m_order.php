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
  container: ".m_order_list",
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
			<div class="title">訂單列表</div>
			<ul class="m_order_list">
				<li class="item">
					<div class="num">
						<span class="date">訂購時間：2018/04/13</span>
						<span class="code">編號：2018041320571326</span>
					</div>
					<a href="m_order_detail.php?type=1">
						<div class="item_inner">
							<div class="item_img" style="background-image: url('images/product_01.png');"></div>
							<div class="item_txt">
								<div class="title">訪‧阿里山奮起湖山城懷舊小火車+宿‧嘉義市二日遊(包含小火車行程)</div>
								<div class="detail">
									<div>出發日期：2018/07/16</div>
									<div>出發時段：08:45</div>
								</div>
							</div>
							<div class="item_state red">處理中</div>
						</div>
					</a>
					<div class="form_btn">
						<form name="postForm1">
							<button type="submit" class="gray_btn">取消訂單</button>
						</form>
					</div>
				</li>
				<li class="item">
					<div class="num">
						<span class="date">訂購時間：2018/04/10</span>
						<span class="code">編號：2018041020571326</span>
					</div>
					<a href="m_order_detail.php?type=1">
						<div class="item_inner">
							<div class="item_img" style="background-image: url('images/product_02.png');"></div>
							<div class="item_txt">
								<div class="title">訪‧阿里山奮起湖山城懷舊小火車+宿‧嘉義市二日遊(包含小火車行程)</div>
								<div class="detail">
									<div>出發日期：2018/07/16</div>
									<div>出發時段：08:45</div>
								</div>
							</div>
							<div class="item_state blue">已付款</div>
						</div>
					</a>
					<div class="form_btn">
						<input type="button" value="填寫回饋單" onclick="location.href='m_feedback.php?id=2018041020571326&type=1'" class="btn skyblue_btn">
						<input type="button" value="填寫評價" onclick="location.href='m_rank.php?id=2018041020571326'" class="btn deepblue_btn">
					</div>
				</li>
				<li class="item">
					<div class="num">
						<span class="date">訂購時間：2018/03/15</span>
						<span class="code">編號：2018031520571326</span>
					</div>
					<a href="m_order_detail.php?type=2">
						<div class="item_inner">
							<div class="item_img" style="background-image: url('images/product_03.png');"></div>
							<div class="item_txt">
								<div class="title">阿里山奮起湖山城懷舊小火車包車行程</div>
								<div class="detail">
									<div>出發日期：2018/07/16</div>
									<div>選擇車型：豪華九人座車</div>
								</div>
							</div>
							<div class="item_state gray">已取消</div>
						</div>
					</a>
				</li>
				<li class="item">
					<div class="num">
						<span class="date">訂購時間：2018/03/15</span>
						<span class="code">編號：2018031520571326</span>
					</div>
					<a href="m_order_detail.php?type=2">
						<div class="item_inner">
							<div class="item_img" style="background-image: url('images/product_03.png');"></div>
							<div class="item_txt">
								<div class="title">嘉義布袋港往返嘉義市區接送機服務</div>
								<div class="detail">
									<div>出發日期：2018/07/16</div>
									<div>選擇車型：舒適四人座車</div>
								</div>
							</div>
							<div class="item_state blue">已付款</div>
						</div>
					</a>
					<div class="form_btn">
						<input type="button" value="回饋單明細" onclick="location.href='m_feedback_detail.php?id=2018041020571326&type=2'" class="btn skyblue_btn">
						<input type="button" value="評價明細" onclick="location.href='m_rank_detail.php?id=2018041020571326&type=2'" class="btn deepblue_btn">
					</div>
				</li>
			</ul>
			<ul id="pagination" style="display: none;">
				<li><a href="m_order.php">1</a></li>
				<li class="next"><a href="m_order.php">2</a></li>
			</ul>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>