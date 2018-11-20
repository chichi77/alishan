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
	$('#postForm').validate({
		errorLabelContainer: '#errorDiv',
  		wrapper: 'li',
  		showErrors: function(errorMap, errorList) {
			// 由 message 與 element 組成的物件 List
			var html = '';
			for (var idx in errorList) {
				var input_name='';

				if($(errorList[idx].element).attr('type') == 'radio'){
					input_name = $(errorList[idx].element).parent('label').prevAll('span').eq(0).text().split("：")[0].split("*")[1];
				}
				else{
					input_name = $(errorList[idx].element).prevAll('span').eq(0).text().split("：")[0].split("*")[1];
				}
				html += input_name +'欄位'+ errorList[idx].message + '<br/>';
			}
			$('#errorDiv').html(html).show();
			//this.defaultShowErrors();
		},
		rules: {
			password: {
	    		required: true,
	    		minlength: 8,
	    		maxlength: 20
	    	},
	    	confirm_password: {
	    		required: true,
	    		minlength: 5,
	    		maxlength: 20,
	    		equalTo: "#password"
	    	},
	    	email: {
				required: true,
				email: true
			},
			tel: {
				required: true,
				tel: true
			}
		},
		messages: {
			password: {
				minlength: '密碼長度不能小於8個字母',
				maxlength: '密碼長度不能大於20個字母'
			},
			confirm_password: {
				required: '請再次輸入密碼',
				equalTo:'兩次輸入的密碼不一致'
			},
			email: "請輸入正確的信箱",
			tel: "請輸入正確電話格式"
		}
	});
	$('#postForm .required').each(function(){
		if($(this).attr('type') == 'radio'){
			$(this).parent('label').prev('span').prepend('*');
		}
		else{
			$(this).prevAll('span').eq(0).prepend('*');
		}
	});
})
</script>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="m_page login">
	<div class="page_title" style="background-image: url('images/title_about.jpg');">
		<div class="mask">
			<div class="page_inner">
				<form name="postForm" id="postForm" action="m_info.php" class="m_info_form">
					<div class="title">會員註冊</div>
					<div>
						<label>
							<span>帳號：</span>
							<input name="email" type="email" class="required" placeholder="請輸入信箱作為帳號">
						</label>
					</div>
					<div>
						<label>
							<span>密碼：</span>
							<input id="password" name="password" type="password" class="required" placeholder="請輸入8~20位英數字">
						</label>
					</div>
					<div>
						<label>
							<span>確認密碼：</span>
							<input type="password" name="confirm_password" placeholder="請再次輸入密碼" class="required">
						</label>
					</div>
					<div>
						<label>
							<span>姓名：</span>
							<input type="text" name="name" class="required">
						</label>
					</div>
					<div class="radio">
						<span>性別：</span>
						<label>
							<input type="radio" name="gender" class="required">
							<span>男生</span>
						</label>
						<label>
							<input type="radio" name="gender" class="required">
							<span>女生</span>
						</label>
					</div>
					<div>
						<label>
							<span>國籍：</span>
							<select name="country">
								<option>台灣</option>
								<option>香港</option>
								<option>澳門</option>
								<option>新加坡</option>
								<option>中國</option>
								<option>泰國</option>
								<option>馬來西亞</option>
								<option>澳大利亞</option>
								<option>美國</option>
								<option>韓國</option>
								<option>其他</option>
							</select>
						</label>
					</div>
					<div>
						<label>
							<span>手機號碼：</span>
							<input type="tel" class="required">
						</label> 
					</div>
					<div>
						<label class="code">
							<span>驗證碼：</span>
							<img src="images/code.jpg">
							<input type="text" class="required" name="code">
						</label>
					</div>
					<div id="errorDiv"></div>
					<div class="form_btn">
						<input type="button" class="btn gray_btn" value="返回登入" onclick="javascript:location.href='m_login.php'">
						<input type="button" value="Facebook註冊" class="btn deepblue_btn">
						<button type="submit">確認註冊</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>