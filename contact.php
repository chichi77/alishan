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
	
})
</script>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="contact_page">
	<div class="page_title" style="background-image: url('images/title_about.jpg');">
		<div class="mask">
			<div class="page_title_txt">
				<div class="max_width">
					<span>Contact</span>
					<span>聯絡我們</span>
				</div>
			</div>
		</div>
	</div>
	<div class="page_inner">
		<div class="max_width">
			<ul class="breadcrumb">
				<li>
					<a href="index.php">首頁</a>
				</li>
				<li>
					<a href="contact.php">聯絡我們</a>
				</li>
			</ul>
			<div class="iframe-rwd">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.4498945087316!2d120.43723051435323!3d23.480299504958897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e94291b299c2b%3A0x84ffba3ee350f2c0!2zNjAw5ZiJ576p5biC6KW_5Y2A5Lit6IiI6LevMjPomZ8!5e0!3m2!1szh-TW!2stw!4v1522636453710" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<form class="contact_form" name="postForm">
				<label>
					<span>問題類型</span>
					<select>
						<option value="">行程內容詢問</option>
						<option value="">查詢訂單狀態</option>
						<option value="">其他問題</option>
					</select>
				</label>
				<label>
					<span>姓名</span>
					<input type="text">
				</label>
				<label>
					<span>聯絡電話</span>
					<input type="tel">
				</label>
				<label>
					<span>EMAIL</span>
					<input type="email">
				</label>
				<label>
					<span>留言內容</span>
					<textarea rows="5"></textarea>
				</label>
				<label class="code">
					<span>驗證碼</span>
					<img src="images/code.jpg">
					<input type="text" class="required" name="code">
				</label>
				<div class="form_btn">
					<button type="submit">送出</button>
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