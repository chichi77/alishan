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
	    var id = "id";
	    var type = 'type';
	    var ary = url.split('?')[1].split('&');

	    for(let i=0;i<=ary.length-1;i++){
	        //如果資料名稱為var id的話那就把他取出來
	        if(ary[i].split('=')[0] == id){
	            var url_id = ary[i].split('=')[1];
	            $('input[name="order_num"]').val(url_id);
	        }

	        else if(ary[i].split('=')[0] == type){
	            var url_type = ary[i].split('=')[1];

				if(url_type == 1){
					$('li[data-type="2"]').hide();
				}
				else if(url_type == 2){
					$('li[data-type="1"]').hide();

				}
				else{
					alert('請返回正確頁面！');
					history.go(-1);
				}
	        }
	    }	    
	}

	$('#postForm').submit(function(event) {
		if($('input[name="rank_score"]').val() == ''){
			alert('請幫我們填寫一下評分哦，謝謝！');
			return false;
		}
	});
})

//星級評價
window.onload = function(){
    var star = document.getElementsByTagName('em');
    var oDiv = document.getElementById('starBox');
    var temp = 0;
     
    for(var i = 0, len = star.length; i < len; i++){
        star[i].index = i;
         
        star[i].onmouseover = function(){
            clear();
            for(var j = 0; j < this.index + 1; j++){
                star[j].style.color = '#D9A300';
            }
        }
         
        star[i].onmouseout = function(){
            for(var j = 0; j < this.index + 1; j++){
                star[j].style.color = '#999999';
            }
            current(temp);
        }
         
        star[i].onclick = function(){
            temp = this.index +1;
            document.getElementById('starNotice').innerHTML = temp + ' 顆星';
            current(temp);
            document.getElementsByClassName('rank_score_input')[0].value= temp;
        }
    }
    //清除所有
    function clear(){
        for(var i = 0, len = star.length; i < len; i++){
            star[i].style.backgroundPosition = '0 -20px';
        }
    }
    //显示当前第几颗星
    function current(temp){
        for(var i = 0; i < temp; i++){
            star[i].style.color = '#D9A300';
        }
    }
};
</script>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="m_page m_inner feedback">
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
			<div class="title">訂單評價填寫</div>
			<div class="m_feedback_item">
				<div class="item_img" style="background-image: url('images/product_03.png');"></div>
				<div class="item_txt">
					<div class="item_title">【青青草原咩咩咩】清境農場‧合歡山超值二日遊</div>
					<ul class="detail">
						<li>出發日期：2018/03/16</li>
						<li data-type="1">出發時段：08:45</li>
						<li data-type="2">選擇車型：豪華七人座</li>
					</ul>
				</div>
			</div>
			<form name="postForm" id="postForm" action="m_order.php" class="m_info_form">
				<div>
					<label>
						<span>訂單編號：</span>
						<input type="email" name="order_num" disabled>
					</label>
				</div>
				<div>
					<label>
						<span>評價：</span>
						<div class="rank_star">
							<div id="starBox" class="starBox">
								<em>
									<i class="fas fa-star"></i>
								</em>
								<em>
									<i class="fas fa-star"></i>
								</em>
								<em>
									<i class="fas fa-star"></i>
								</em>
								<em>
									<i class="fas fa-star"></i>
								</em>
								<em>
									<i class="fas fa-star"></i>
								</em>
							</div>
							<div id="starNotice" class="rank_txt"></div>
							<input name="rank_score" type="number" style="display: none;" class="required rank_score_input">
						</div>
					</label>
				</div>
				<div>
					<label>
						<span>評價內容：</span>
						<textarea name="rank_txt" placeholder="歡迎填入詳細的心得或意見描述，讓我們有進步的動力！若是滿意我們的服務也請不吝惜給我們一個讚哦！謝謝"></textarea>
					</label>
				</div>
				<div class="form_btn">
					<button type="submit">送出評價</button>
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