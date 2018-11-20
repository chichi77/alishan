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
	var url = location.search;
	if(url.indexOf('?')!=-1){
	    var id = "type";
	    var ary = url.split('?')[1].split('&');

	    for(let i=0;i<=ary.length-1;i++){
	        //如果資料名稱為id的話那就把他取出來
	        if(ary[i].split('=')[0] == id){
	            var url_type = parseInt(ary[i].split('=')[1]);
	        }
	    }

	    $('input[name="type"]').val(url_type);	    
	}

	if(url_type == 1){
		$('.m_order_detail_list > li[data-type="2"]').hide();
	}
	else if(url_type == 2){
		$('.m_order_detail_list > li[data-type="1"]').hide();

	}
	else{
		alert('請返回正確頁面！');
		history.go(-1);
	}
})
</script>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="m_page m_inner">
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
			<div class="title">訂單明細</div>
			<ul class="m_order_detail_list">
				<li>
					<a href="product_travel_detail.php">
						<div class="list_info">
							<div class="item_title">
								<div class="item_img" style="background-image: url(images/product_01.png);"></div>
							</div>
							<div class="item_txt">
								<div class="title">阿里山日月潭經典三日遊(08:45 天天出發)</div>
								<div class="detail">訂購時間：2018/04/13 20:57</div>
								<div class="detail">訂單編號：2018041320571326</div>
								<div class="detail blue">已付款</div>
								<!--訂單狀態
								<div class="detail red">處理中</div>
								<div class="detail blue">已付款</div>
								<div class="detail">已取消</div>-->
							</div>
						</div>
					</a>
				</li>
				<li data-type="1">
					<div class="list_title">行程資訊</div>
					<div class="list_info">
						<div class="item_title">出發時間</div>
						<div class="item_txt red_txt">2018/09/20</div>
					</div>
					<div class="list_info">
						<div class="item_title">出發時段</div>
						<div class="item_txt red_txt">08:45</div>
					</div>
					<div class="list_info hotel">
						<div class="item_title">住宿飯店</div>
						<div class="item_txt">
							<div>
								<div>2018/9/20</div>
								<div class="red_txt">阿里山櫻花大飯店</div>
							</div>
							<div>
								<div>2018/9/20</div>
								<div class="red_txt">阿里山櫻花大飯店</div>
							</div>
						</div>
					</div>
					<div class="list_info num">
						<div class="item_title">人數</div>
						<div class="item_txt">
							<div>
								<div>成人</div>
								<div class="red_txt">X9</div>
							</div>
							<div>
								<div>兒童</div>
								<div class="red_txt">X3</div>
							</div>
							<div>
								<div>幼兒</div>
								<div class="red_txt">X1</div>
							</div>
						</div>
					</div>
					<div class="list_info num">
						<div class="item_title">房型</div>
						<div class="item_txt">
							<div>
								<div>單人房</div>
								<div class="red_txt">X1</div>
							</div>
							<div>
								<div>雙人房</div>
								<div class="red_txt">X2</div>
							</div>
							<div>
								<div>三人房</div>
								<div class="red_txt">X1</div>
							</div>
							<div>
								<div>四人房</div>
								<div class="red_txt">X1</div>
							</div>
						</div>
					</div>
					<div class="list_info">
						<div class="item_title">加購項目</div>
						<div class="item_txt">嘉義高鐵接到愛玩美旅行社 單程$100/人</div>
					</div>
					<div class="list_info">
						<div class="item_title">旅遊金折抵</div>
						<div class="item_txt">200點</div>
					</div>
					<div class="list_info">
						<div class="item_title">備註</div>
						<div class="item_txt">希望安排的房間可以相鄰或在附近，然後不要邊間，謝謝！</div>
					</div>
				</li>
				<li data-type="2">
					<div class="list_title">行程資訊</div>
					<div class="list_info">
						<div class="item_title">出發時間</div>
						<div class="item_txt red_txt">2018/09/20</div>
					</div>
					<div class="list_info">
						<div class="item_title">搭乘車型</div>
						<div class="item_txt">豪華九人座</div>
					</div>
					<div class="list_info">
						<div class="item_title">車型數量</div>
						<div class="item_txt">2</div>
					</div>
					<div class="list_info num">
						<div class="item_title">人數</div>
						<div class="item_txt">
							<div>
								<div>成人</div>
								<div class="red_txt">X4</div>
							</div>
							<div>
								<div>兒童</div>
								<div class="red_txt">X3</div>
							</div>
							<div>
								<div>幼兒</div>
								<div class="red_txt">X1</div>
							</div>
						</div>
					</div>
					<div class="list_info">
						<div class="item_title">旅遊金折抵</div>
						<div class="item_txt">200點</div>
					</div>
					<div class="list_info">
						<div class="item_title">備註</div>
						<div class="item_txt">小朋友比較多希望開山路可以平穩一點，謝謝！</div>
					</div>
				</li>
				<li>
					<form name="postForm" id="postForm" class="form_btn" action="m_order_detail.php?type=<?php echo $_GET['type'];?>">
						<input type="text" value="填寫回饋單" onclick="location.href='m_feedback.php?id=2018041020571326&type=1'" class="btn skyblue_btn">
						<input type="text" value="填寫評價" onclick="location.href='m_rank.php?id=2018041020571326&type=1'" class="btn deepblue_btn">
						<input type="button" value='返回列表' onclick="location.href='m_order.php'"" class="btn">
						<button type="submit" class="gray_btn">取消訂單</button>
					</form>
				</li>
			</ul>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>