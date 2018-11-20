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
function printScreen(printlist) {
	var value = printlist.innerHTML;
	var printPage = window.open("", "Printing...", "");
	printPage.document.open();
	printPage.document.write("<HTML><head></head><BODY onload='window.print();window.close()'>");
	printPage.document.write("<PRE>");
	printPage.document.write(value);
	printPage.document.write("</PRE>");
	printPage.document.close("</BODY></HTML>");
}

$(function(){
	$(".btn.gray_btn").click(function() {
      html2canvas($(".cart_inner")[0]).then(function(canvas) {
          var $div = $("fieldset div");
          $div.empty();
          $("<img />", { src: canvas.toDataURL("image/png"), id: "print_img"}).appendTo($div);

          printScreen(print_img_div);
      });
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
	
})
</script>
<style>
@page {
	margin: 1cm; /*print邊界*/
	size:210mm 148mm; /*列印紙張大小*/
}
</style>
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
			<div>
				<span>2</span>
				<span>旅客資料</span>
			</div>
			<div class="active">
				<span>3</span>
				<span>完成預訂</span>
			</div>
		</div>
		<div class="cart_inner" id="print_parts">
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
				</div>
			</div>
			<div class="cart_detail">
				<div class="page_title">預訂單完成</div>
				<div class="cart_message">
					<img src="images/logo-03.png" alt="">
					<p>謝謝您的填寫，我們已經收到您的預訂單，會盡快確認過您的行程內容以後和您聯繫匯款資訊</p>
				</div>
				<div class="cart_form passager bill_info">
					<div class="form_inner cart_finish">
						<div class="form_title">聯絡人資料</div>
						<div class="form_input">
							<div class="title">姓名</div>
							<div class="txt">王曉明</div>
						</div>
						<div class="form_input">
							<div class="title">手機</div>
							<div class="txt">09123456789</div>
						</div>
						<div class="form_input">
							<div class="title">性別</div>
							<div class="txt">男</div>
						</div>
						<div class="form_input">
							<div class="title">E-mail</div>
							<div class="txt">match@mail.match.com</div>
						</div>
						<div class="form_input">
							<div class="title">LINE ID</div>
							<div class="txt">a55879</div>
						</div>
					</div>
					<div class="form_btn">
						<input type="button" class="btn gray_btn" value="列印訂單">
						<input type="button" class="btn" value="查看訂單" onclick="location.href=m_order.php">
						<p class="hidden-xs" style="color: #555;"><i class="fas fa-info-circle"></i>　如果您無法列印訂單請確認您的瀏覽器是否有封鎖彈跳視窗！</p>
					</div>
				</div>
				<fieldset class="bill_img">
				    <legend>圖檔</legend>
				    <div id="print_img_div">
				    </div>
				</fieldset>
			</div>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>