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
		$('.cart_simple tr[data-type="2"]').hide();
	}
	else if(url_type == 2){
		$('.cart_simple .item_txt>div[data-type="1"]').hide();
		$('.cart_simple tr[data-type="1"]').hide();

	}
	else{
		alert('請返回正確頁面！');
		history.go(-1);
	}

	$('.form_input.app_id input[type="checkbox"]').click(function(event) {
		if($(this).prop('checked')){
			$(this).next('input[type="text"]').removeAttr('disabled');
			//$(this).next('input[type="text"]').addClass('required');
		}
		else{
			$(this).next('input[type="text"]').prop('disabled', 'disabled');
			//$(this).next('input[type="text"]').removeClass('required');
		}
	});

	//表單檢查
	$('#postForm').validate({
		errorPlacement: function (error, element) {
		    if (element.is(':radio')) {
		        var eid = element.attr('name');
		        error.insertAfter($('input[name=' + eid + ']:last').parent('label'));
		    }
		    else {
		    }
		},
		submitHandler: function(form) {
	    alert('submit');
	  }
	});

	$('.ws-date').each(function(index, el) {
		var date_name = $(this).prev('input[type="date"]').attr('name');
		$(this).attr('name', date_name);
		console.log(date_name);
	});
})
</script>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="cart_page">
	<div class="max_width">
		<div class="cart_step">
			<div>
				<span>1</span>
				<span>行程明細</span>
			</div>
			<div class="active">
				<span>2</span>
				<span>旅客資料</span>
			</div>
			<div>
				<span>3</span>
				<span>完成預訂</span>
			</div>
		</div>
		<form class="cart_inner" name="postForm" id="postForm" action="cart_3.php">
			<input type="text" value="<?php echo $_GET['type']; ?>" name="type" hidden>
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
							<span class="red_txt">九人座小巴士</span>
						</div>
					</div>
					<table>
						<tbody>
							<tr data-type="1">
								<td rowspan="2" class="title">飯店</td>
								<td>2018/03/14</td>
								<td>阿里山櫻花飯店</td>
							</tr>
							<tr data-type="1">
								<td>2018/03/15</td>
								<td>阿里山櫻花飯店</td>
							</tr>
							<tr class="person">
								<td rowspan="2" class="title">人數</td>
								<td>成人</td>
								<td>X5</td>
							</tr>
							<tr class="person">
								<td>幼兒</td>
								<td>X1</td>
							</tr>
							<tr class="hotel" data-type="1">
								<td rowspan="2" class="title">房型</td>
								<td>單人房</td>
								<td>X1</td>
							</tr>
							<tr class="hotel" data-type="1">
								<td>四人房</td>
								<td>X1</td>
							</tr>
							<tr data-type="2">
								<td class="title">車子數量</td>
								<td colspan="2">1</td>
							</tr>
							<tr data-type="1">
								<td class="title">加購</td>
								<td colspan="2">嘉義高鐵接到愛玩美旅行社 單程$100/人</td>
							</tr>
							<tr>
								<td class="title">旅遊金抵用</td>
								<td colspan="2">100點</td>
							</tr>
							<tr>
								<td class="title">備註</td>
								<td colspan="2">希望房間不要邊間</td>
							</tr>
						</tbody>
					</table>
					<div class="form_btn step_2">
						<input type="button" value='上一步' onclick="history.back()" class="btn gray_btn">
						<button type="submit" class="btn deepblue_btn">下一步</button>
					</div>
				</div>
			</div>
			<div class="cart_detail">
				<div class="page_title">聯絡人資料</div>
				<div class="cart_form passager contact_person">
					<div class="form_inner">
						<div class="form_input">
							<input type="text" placeholder="姓名" class="required" name="contact_name">
						</div>
						<div class="form_input">
							<label><input type="radio" name="contact_gender" class="required"> 女生</label>
							<label><input type="radio" name="contact_gender" class="required"> 男生</label>
						</div>
						<div class="form_input tel">
							<select name="contact_tel_country">
								<option value="+886">台灣 +886</option>
								<option value="+852">香港 +852</option>
								<option value="+853">澳門 +853</option>
								<option value="+65">新加坡 +65</option>
								<option value="+86">中國 +86</option>
								<option value="+66">泰國 +66</option>
								<option value="+60">馬來西亞 +60</option>
								<option value="+61">澳大利亞 +61</option>
								<option value="+1">美國 +1</option>
								<option value="+82">韓國 +82</option>
								<option value="">其他</option>
							</select>
							<input type="tel" placeholder="電話號碼" name="contact_tel" class="required">
						</div>
						<div class="form_input">
							<input type="email" placeholder="E-mail" class="required" name="contact_email">
						</div>
						<div class="form_input app">
							<span>APP聯絡方式：</span>
						</div>
						<div class="form_input app_id">
							<input type="checkbox" name="app_id">
							<input type="text" placeholder="LINE ID" name="line_id" disabled>
						</div>
						<div class="form_input app_id">
							<input type="checkbox" name="app_id">
							<input type="text" placeholder="LINE電話" name="line_tel" disabled>
						</div>
						<div class="form_input app_id">
							<input type="checkbox" name="app_id">
							<input type="text" placeholder="Whatapp" name="whatapp" disabled>
						</div>
						<div class="form_input app_id">
							<input type="checkbox" name="app_id">
							<input type="text" placeholder="Wechat" name="wechat" disabled>
						</div>
					</div>
				</div>
				<div class="page_title">旅客名單</div>
				<div class="cart_form passager common_person">
					<div class="form_inner">
						<div class="form_title">成人1</div>
						<div class="form_input">
							<input type="text" placeholder="姓名" name="adult_1_name" class="required">
						</div>
						<div class="form_input">
							<label><input type="radio" name="gender_1" class="required"> 女生</label>
							<label><input type="radio" name="gender_1" class="required"> 男生</label>
						</div>
						<div class="form_input">
							<input type="text" placeholder="身份證字號/護照號碼" name="adult_1_id" class="required">
						</div>
						<div class="form_input">
							<input type="date" placeholder="出生年/月/日" name="adult_1_birth" class="required">
						</div>
					</div>
					<div class="form_inner">
						<div class="form_title">成人2</div>
						<div class="form_input">
							<input type="text" placeholder="姓名" name="adult_2_name" class="required">
						</div>
						<div class="form_input">
							<label><input type="radio" name="gender_2" class="required"> 女生</label>
							<label><input type="radio" name="gender_2" class="required"> 男生</label>
						</div>
						<div class="form_input">
							<input type="text" placeholder="身份證字號/護照號碼" name="adult_2_id" class="required">
						</div>
						<div class="form_input">
							<input type="date" placeholder="出生年/月/日" name="adult_2_birth" class="required">
						</div>
					</div>
					<!--<div class="form_inner">
						<div class="form_title">成人3</div>
						<div class="form_input">
							<input type="text" placeholder="姓名" name="adult_3_name" class="required">
						</div>
						<div class="form_input">
							<label><input type="radio" name="gender_3" class="required"> 女生</label>
							<label><input type="radio" name="gender_3" class="required"> 男生</label>
						</div>
						<div class="form_input">
							<input type="text" placeholder="身份證字號/護照號碼" name="adult_3_id" class="required">
						</div>
						<div class="form_input">
							<input type="date" placeholder="出生年/月/日" name="adult_3_birth" class="required">
						</div>
					</div>
					<div class="form_inner">
						<div class="form_title">成人4</div>
						<div class="form_input">
							<input type="text" placeholder="姓名" name="adult_4_name" class="required">
						</div>
						<div class="form_input">
							<label><input type="radio" name="gender_4" class="required"> 女生</label>
							<label><input type="radio" name="gender_4" class="required"> 男生</label>
						</div>
						<div class="form_input">
							<input type="text" placeholder="身份證字號/護照號碼" name="adult_4_id" class="required">
						</div>
						<div class="form_input">
							<input type="date" placeholder="出生年/月/日" name="adult_4_birth" class="required">
						</div>
					</div>
					<div class="form_inner">
						<div class="form_title">成人5</div>
						<div class="form_input">
							<input type="text" placeholder="姓名" name="adult_5_name" class="required">
						</div>
						<div class="form_input">
							<label><input type="radio" name="gender_5" class="required"> 女生</label>
							<label><input type="radio" name="gender_5" class="required"> 男生</label>
						</div>
						<div class="form_input">
							<input type="text" placeholder="身份證字號/護照號碼" name="adult_5_id" class="required">
						</div>
						<div class="form_input">
							<input type="date" placeholder="出生年/月/日" name="adult_5_birth" class="required">
						</div>
					</div>
					<div class="form_inner">
						<div class="form_title">幼兒1</div>
						<div class="form_input">
							<input type="text" placeholder="姓名" name="baby_1_name" class="required">
						</div>
						<div class="form_input">
							<label><input type="radio" name="baby_gender_1" class="required"> 女生</label>
							<label><input type="radio" name="baby_gender_1" class="required"> 男生</label>
						</div>
						<div class="form_input">
							<input type="text" placeholder="身份證字號/護照號碼" name="baby_1_id" class="required">
						</div>
						<div class="form_input">
							<input type="date" placeholder="出生年/月/日" name="baby_1_birth" class="required">
						</div>
					</div>-->
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