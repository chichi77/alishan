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
				var input_name = $(errorList[idx].element).prevAll('span').eq(0).text().split("：")[0].split("*")[1];
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
			email: "請輸入正確的信箱"
		}
	});
	$('#postForm .required').each(function(){
		$(this).prevAll('span').eq(0).prepend('*');
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
				<form name="postForm" id="postForm" action="m_info.php">
					<div class="title">忘記密碼</div>
					<p>請輸入註冊的帳號/信箱，我們將發送您的密碼以讓您取回您的帳號</p>
					<div>
						<label>
							<span>信箱：</span>
							<input name="email" type="email" class="required" placeholder="請輸入信箱">
						</label>
					</div>
					<div>
						<label class="code">
							<span>驗證碼：</span>
							<img src="images/code.jpg">
							<input type="text" class="required">
						</label>
					</div>
					<div id="errorDiv" style="display: none; "></div>
					<div class="form_btn">
						<input type="button" class="btn gray_btn" value="取消" onclick="javascript:location.href='m_login.php'">
						<button type="submit">送出</button>
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