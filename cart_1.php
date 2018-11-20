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

<script src="js/input_check.js"></script>
</head>
<script>
$(function(){
	//表單檢查
	// $('#postForm').validate({
	// 	submitHandler: function(form) {
	// 		var name=confirm("請確認以下人數資訊，確認後不可再修改：\n*兒童：3~6歲（含餐食、佔車位、不佔床位）*幼兒：0~2歲（不含餐食、不佔車位、不佔床位）\n\n成人：" + $('select[name="num_adult"]').val() +
	// 			"人\n兒童：" + $('select[name="num_child"]').val() + 
	// 			"人\n幼兒：" + $('select[name="num_baby"]').val() + "人");
	// 		if (name==true){
	// 			//form.submit();
	// 			return false;
	// 		}
	// 		else{
	// 			return false;
	// 		}
 //        }
	// });

	$("#postForm").submit(function(){
		if (check_submit($(this))){
			var name=confirm("請確認以下人數資訊，確認後不可再修改：\n*兒童：3~6歲（含餐食、佔車位、不佔床位）*幼兒：0~2歲（不含餐食、不佔車位、不佔床位）\n\n成人：" + $('select[name="num_adult"]').val() +
				"人\n兒童：" + $('select[name="num_child"]').val() + 
				"人\n幼兒：" + $('select[name="num_baby"]').val() + "人");
			if (name == false){
				return false;
				console.log(name);
			}
		}
		else{
			$(this).find(".invalid").eq(0).focus();
			return false;
		};
	});

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
	}

	if(url_type == 1){
		$('.cart_simple .item_txt>div[data-type="2"]').hide();
		$('.form_info[data-type="2"]').hide();
		$('.form_info[data-type="2"] input, .form_info[data-type="2"] select').prop('disabled', 'true');

	}
	else if(url_type == 2){
		$('.cart_simple .item_txt>div[data-type="1"]').hide();
		$('.form_inner.hotel').hide();
		$('.form_inner.info .form_info[data-type="1"]').hide();
		$('.form_info[data-type="1"] input, .form_info[data-type="1"] select').prop('disabled', 'true');

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
<div class="cart_page">
	<div class="max_width">
		<div class="cart_step">
			<div class="active">
				<span>1</span>
				<span>行程明細</span>
			</div>
			<div>
				<span>2</span>
				<span>旅客資料</span>
			</div>
			<div>
				<span>3</span>
				<span>完成預訂</span>
			</div>
		</div>
		<form class="cart_inner" id="postForm" name="postForm" action="cart_2.php">
			<div class="cart_simple">
				<div class="cart_simple_inner">
					<div class="item_img" style="background-image: url('images/product_02.png');"></div>
					<div class="item_title">阿里山日月潭經典三日遊(08:45 天天出發)</div>
					<div class="item_txt">
						<div class="code">編號：TR2017112002</div>
						<div>
							<span>出發時間</span>
							<span class="red_txt">2017-03-14</span>
						</div>
						<div data-type="1">
							<span>出發時段</span>
							<span class="red_txt">08:45</span>
						</div>
						<div data-type="2">
							<span>搭乘車型</span>
							<span>九人座小巴士</span>
						</div>
					</div>
					<div class="form_btn">
						<input name="type" type="text" value="<?php echo $_GET["type"]; ?>" style="display: none;">
						<button type="submit" class="btn deepblue_btn">下一步</button>
					</div>
				</div>
			</div>
			<div class="cart_detail">
				<div class="page_title">行程明細</div>
				<div class="cart_form">
					<div class="form_inner hotel">
						<div class="form_title">選擇飯店</div>
						<div>
							<div class="num">
								<span>DAY</span>
								<span>1</span>
							</div>
							<div class="date">2018/03/14</div>
							<div class="choice">
								<select>
									<option>阿里山櫻花飯店</option>
									<option>阿里山賓館</option>
									<option>阿里山大飯店</option>
								</select>
							</div>
						</div>
						<div>
							<div class="num">
								<span>DAY</span>
								<span>2</span>
							</div>
							<div class="date">2018/03/15</div>
							<div class="choice">
								<select>
									<option>阿里山櫻花飯店</option>
									<option>阿里山賓館</option>
									<option>阿里山大飯店</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form_inner info">
						<div class="form_title">行程資訊</div>
						<div class="explain">
							<span>*兒童：3~6歲（含餐食、佔車位、不佔床位）</span>
							<span>*幼兒：0~2歲（不含餐食、不佔車位、不佔床位）</span>
						</div>
						<div class="form_info">
							<div class="title">人數</div>
							<div class="form_input">
								<label>
									<span>成人</span>
									<select name="num_adult" class="required">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
									</select>
								</label>
							</div>
							<div class="form_input">
								<label>
									<span>兒童</span>
									<select name="num_child" class="required">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</label>
							</div>
							<div class="form_input">
								<label>
									<span>幼兒</span>
									<select name="num_baby" class="required">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</label>
							</div>
						</div>
						<div class="form_info single_input" data-type="2">
							<div class="title">車子數量</div>
							<div>
								<input type="number" min="1" value="1" class="required" name="car_num">
							</div>
						</div>
						<div class="form_info" data-type="1">
							<div class="title">房型</div>
							<div class="form_input">
								<label>
									<span>單人房</span>
									<select name="room_1" class="required">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
									</select>
								</label>
							</div>
							<div class="form_input">
								<label>
									<span>雙人房</span>
									<select name="room_2" class="required">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
									</select>
								</label>
							</div>
							<div class="form_input">
								<label>
									<span>三人房</span>
									<select name="room_3" class="required">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
									</select>
								</label>
							</div>
							<div class="form_input">
								<label>
									<span>四人房</span>
									<select name="room_4" class="required">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
									</select>
								</label>
							</div>
							<div class="form_input else_input">
								<label>
									<span>其他</span>
									<input type="text">
								</label>
							</div>
						</div>
						<div class="form_info" data-type="1">
							<div class="title">加購</div>
							<div class="form_checkbox">
								<label><input type="checkbox" value="" min="0">嘉義高鐵接到愛玩美旅行社  單程$100/人</label>
							</div>
							<div class="form_checkbox">
								<label><input type="checkbox" value="" min="0">螢火蟲導覽  $300/人</label>
							</div>
						</div>
						<div class="form_info single_input">
							<div class="title">旅遊金折抵</div>
							<div>
								<input type="number" min="0" placeholder="點數" class="required" name="points_num">
								<span class="points_txt">（現有點數<span class="red_txt">300</span>點）</span>
							</div>
						</div>
						<div class="form_info">
							<div class="title">備註</div>
							<div class="form_checkbox">
								<textarea placeholder="備註事項，例如房間需求、行程需求等等"></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>