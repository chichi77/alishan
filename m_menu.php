<!-- clipboard.js v1.7.1 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
<script>
$(function(){
	var copy_result = new Clipboard( "#copy_btn" );
	copy_result.on('success', function(e) {
	    alert('已成功複製個人連結，快分享給好友註冊，註冊成功可得旅遊金哦！')
	});

	copy_result.on('error', function(e) {
	    alert('抱歉您的瀏覽器不支援點擊複製的功能，您可以手動複製以下網址分享給好友，好友註冊成功以後可獲得紅利金！'+ $('#copy_btn').attr('data-clipboard-text'));
	});
})
</script>

<ul class="m_menu">
	<li class="title">
		<i class="far fa-user-circle"></i>
		<span class="name">愛玩美</span>
		<span>先生，您好！</span>

		<div class="form_btn">
			<!--把要複製的連結寫在data-clipboard-text=裡面-->
			<input type="button" id="copy_btn" class="btn skyblue_btn" value="註冊連結" data-clipboard-text="http://demo.dake.com.tw/~liao/alishan/m_info.php">
		</div>
	</li>
	<li>
		<a href="m_info.php">會員帳戶</a>
	</li>
	<li>
		<a href="m_points.php">旅遊金查詢</a>
	</li>
	<li>
		<a href="m_order.php">訂單查詢</a>
	</li>
	<li>
		<a href="m_favor.php">我的收藏</a>
	</li>
</ul>