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
			<div class="title">會員帳戶管理</div>
			<form name="postForm" id="postForm" action="m_info.php" class="m_info_form">
				<div>
					<label>
						<span>帳號：</span>
						<input type="email" value="alishan@mail.alishan.com">
					</label>
				</div>
				<div>
					<label>
						<span>密碼：</span>
						<input type="password" placeholder="若沒有要修改密碼不需填寫"">
					</label>
				</div>
				<div>
					<label>
						<span>確認密碼：</span>
						<input type="password" placeholder="若沒有要修改密碼不需填寫">
					</label>
				</div>
				<div>
					<label>
						<span>姓名：</span>
						<input type="text" value="愛玩美">
					</label>
				</div>
				<div class="radio">
					<span>性別：</span>
					<label>
						<input type="radio" name="gender" checked>
						<span>男生</span>
					</label>
					<label>
						<input type="radio" name="gender">
						<span>女生</span>
					</label>
				</div>
				<div>
					<label>
						<span>國籍：</span>
						<select>
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
						<input type="tel" value="09123456789">
					</label>
				</div>
				<div class="form_btn">
					<button type="submit">修改資料</button>
				</div>
			</form>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>