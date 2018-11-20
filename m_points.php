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
	$('.points_menu li').click(function(event) {
		$('.points_menu li').removeClass('active');
		$(this).addClass('active');

		var points_type=$(this).data('type');
		if(points_type == 1){
			$('.m_points_list li').show();
			$('.m_points_list li[data-type="2"').hide();
		}
		else if(points_type == 2){
			$('.m_points_list li').show();
			$('.m_points_list li[data-type="1"').hide();
		}
		else{
			$('.m_points_list li').show();
		}
	});
})
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
			<div class="title">旅遊金紀錄列表</div>
			<div class="m_points_inner">
				<div class="list_title">
					<div class="points_state">
						<img src="images/pic_dollar.png" alt="">
						<span class="num">$200</span>
						<span>旅遊金可使用</span>
					</div>
					<form class="points_range" name="postForm" id="postForm">
						<span>範圍：</span>
						<input type="date" value="<?php echo date("Y-m-d",strtotime("last month")) ?>">
						<span>至</span>
						<input type="date" value="<?php echo date('Y-m-d'); ?>">
						<div class="form_btn">
							<button type="submit" class="deepblue_btn">查詢</button>
						</div>
					</form>
					<ul class="points_menu">
						<li data-type="0" class="active">全部</li>
						<li data-type="1">花費</li>
						<li data-type="2">獲得</li>
					</ul>
				</div>
				<ul class="m_points_list">
					<li class="title">
						<div class="date">日期</div>
						<div class="name">名稱</div>
						<div class="num">點數</div>
					</li>
					<li data-type="2">
						<div class="date">2018/04/01</div>
						<div class="name">個人分享連結</div>
						<div class="num add">+200</div>
					</li>
					<li data-type="1">
						<div class="date">2018/03/28</div>
						<div class="name">訂單使用 <a href="m_order_detail.php?type=1">查看></a></div>
						<div class="num sub">-200</div>
					</li>
					<li data-type="2">
						<div class="date">2018/03/14</div>
						<div class="name">好友訂單</div>
						<div class="num add">+400</div>
					</li>
					<li data-type="2">
						<div class="date">2018/03/14</div>
						<div class="name">行程分享</div>
						<div class="num add">+200</div>
					</li>
					<li data-type="2">
						<div class="date">2018/03/10</div>
						<div class="name">個人分享連結</div>
						<div class="num add">+200</div>
					</li>
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