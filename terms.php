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

<script src="http://ajax.aspnetcdn.com/ajax/knockout/knockout-3.0.0.js "></script>
<script src="http://html2canvas.hertzen.com/dist/html2canvas.js"></script>
</head>
<script>
$(function(){
	
})
</script>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="about_page">
	<div class="page_title" style="background-image: url('images/title_about.jpg');">
		<div class="mask">
			<div class="page_title_txt">
				<div class="max_width">
					<span>Terms</span>
					<span>會員條款</span>
				</div>
			</div>
		</div>
	</div>
	<div class="max_width page_inner">
		<div class="edit_style">
			<p style="padding-bottom: 20px; color: blue;">以下為文字編輯內容，目前編排僅示意用途</p>
			<h4><b>一、會員服務 </b></h4>
			<p>1. 本公司完成並確認會員申請後，將依本系統當時所建置的服務頻道、項目、內容、狀態及功能，對會員提供服務；本公司保留隨時新增、減少或變更各該服務頻道、項目、內容及功能之全部或一部之權利，且不另行個別通知。</p>
			<p>2. 部份服務頻道或項目可能係由本公司之合作夥伴所建置或提供、或需由會員進行個別申請或登錄程序、或需由會員付費使用，均依當時及隨後所修改的各該服務頻道及項目之使用說明及相關頁面而定。</p>
			<p>3. 本公司保留隨時變更免費服務為收費服務、以及變更收費標準之權利，變更後之內容，除公佈於各該網頁外，不另行個別通知。</p>
			<p>4. 部分會員服務可能另訂有相關使用規範或約定，會員應同時遵守各該服務頻道或項目之使用規範及相關約定。</p>
			<p>5. 會員使用股市服務，應遵守台灣證券交易所「交易資訊使用管理辦法」等交易資訊管理相關規定。
			<p>6. 本公司會主動、或依會員之訂閱，寄送定時或不定時的各式電子報給會員，若會員確定不想要收到會員電子報，可以到下列網址取消訂閱：http://member.pchome.com.tw/cancel.html 。</p>
			<br>
			<h4><b>二、帳號、密碼與安全性 </b></h4>

			<p>1. 會員應完成註冊程序、提供會員註冊或交易流程中所要求的資料，並應擔保所提供的所有資料都是正確且即時的資料，如果會員所提供的資料事後有變更，會員應即時更新所留存的資料。如果會員未即時提供資料、未按指定方式提供資料、或所提供之資料不正確或與事實不符，本公司保留不經事先通知，隨時拒絕或暫停對該會員提供相關服務之全部或一部之權利。</p>
			<p>2. 會員可以自行選擇使用者名稱和密碼，但會員有妥善自行保管和保密的義務，不得透漏或提供予第三人使用，對於使用特定使用者名稱和密碼使用會員服務之行為、以及登入系統後之所有行為，均應由持有該使用者名稱和密碼之會員負責。</p>
			<p>3. 會員如果發現或懷疑其使用者名稱和密碼被第三人冒用或不當使用，會員應立即通知本公司，以利本公司及時採取適當的因應措施；但上述因應措施不得解釋為本公司因此而明示或默示對會員負有任何形式之賠償或補償義務。</p>
			<br>
			<h4><b>三、個人資料保護 </b></h4>

			<p>1. 本公司會保護每一位會員的個人資料，對於會員所提供的個人資料，除了會員可能涉及違法、侵權、違反本使用條款或各該服務之使用規範或約定、或經本人同意外，本公司不會將會員個人資料提供給第三人，包括贊助的廣告廠商。</p>
			<p>2. 部分會員服務是由本公司合作夥伴所經營或提供服務，為對會員提供該等服務，可能必須將會員的個人資料提供給該等合作夥伴，如果會員不願意將個人資料揭露給該等合作夥伴，可以選擇不使用各該特定服務，但如會員選擇使用該等特定服務，本公司會在適當頁面告知會員後，將會員個人資料揭露給該等特定服務的合作夥伴。</p>
			<p>3. 在下列的情況下，本公司有可能會查看或提供會員的個人資料或相關電信資料給相關政府機關、或主張其權利受侵害並提出適當證明之第三人：
				<ul>
					<li>(1) 依法令規定、或依司法機關或其他相關政府機關的命令；</li>
					<li>(2) 會員涉及違反法令、侵害第三人權益、或違反本使用條款或各該使用規範或約定；</li>
					<li>(3) 為保護會員服務系統之安全或經營者之合法權益；</li>
					<li>(4) 為保護其他使用者或其他第三人的合法權益；</li>
					<li>(5) 為維護本系統的正常運作。</li>
				</ul>
			</p>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>