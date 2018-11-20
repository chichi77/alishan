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

	if(url_type > -1 && url_type < $('.page_inner .type').length){
		$('.page_inner .type').eq(url_type).addClass('active');
		$('.news_menu li').eq(url_type).addClass('active');

		var ias_container_num = url_type+1;
		var ias_container = ".page_inner .type:nth-child("+ias_container_num+")";

		var ias = $.ias({
		  container: ias_container,
		  item: ".item",
		  pagination: "#pagination",
		  next: ".next a"
		});

		ias.extension(new IASSpinnerExtension({src: 'images/progress.gif'}));
	}
	else{
		window.location.href = "?type=0";
	}

	$('.menu_title').click(function(event) {
		if($(window).width() < 768){
			$('.product_menu>ul').slideToggle();
		}
	});

	$('.product_menu>ul li').click(function(event) {
		$(this).children('ul').slideToggle();
	});
})

$(window).resize(function(event) {
	if($(window).width() > 767){
		$('.product_menu ul').removeAttr('style');
	}
});
</script>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="news_page">
	<div class="page_title" style="background-image: url('images/title_news.jpg');">
		<div class="mask">
			<div class="page_title_txt">
				<div class="max_width">
					<span>News</span>
					<span>最新消息</span>
				</div>
			</div>
			<div class="news_menu">
				<div class="max_width">
					<ul>
						<li><a href="?type=0">一般消息</a></li>
						<li><a href="?type=1">重要公告</a></li>
						<li><a href="?type=2">最新活動</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="page_inner">
		<div class="max_width">
			<div class="type">
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_01.jpg');"></div>
					<div class="item_title">2017.10/11~12/22 清境小瑞士花園整修公告</div>
					<div class="date">2017-10-11</div>
					<div class="item_txt">【公告】因小瑞士花園10/11~12/22有整修工程，故無法前往。如有參加此部分行程之旅客，本公司會再退費予旅客</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_02.jpg');"></div>
					<div class="item_title">2017日本遊輪旅遊開始訂購了</div>
					<div class="date">2016-10-07</div>
					<div class="item_txt">2017年日本遊輪旅遊於今日起即可訂購，請至以下圖片即可快速查看【藍寶石公主號】詳細旅遊行程2017年日本遊輪旅遊於今日起即可訂購，請至以下</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_03.png');"></div>
					<div class="item_title">愛玩美旅客分享旅遊阿里山日月潭清境花蓮四日遊影片</div>
					<div class="date">2016-02-01</div>
					<div class="item_txt">【【人美心也美】 #王美女 旅客用心製作了這則影片~很感謝你們參加了我們的行程~讓我們能一起分享你們旅途中的愉快:D別忘了有空要回來看看我們喔~</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_01.jpg');"></div>
					<div class="item_title">2017.10/11~12/22 清境小瑞士花園整修公告</div>
					<div class="date">2017-10-11</div>
					<div class="item_txt">【公告】因小瑞士花園10/11~12/22有整修工程，故無法前往。如有參加此部分行程之旅客，本公司會再退費予旅客</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_02.jpg');"></div>
					<div class="item_title">2017日本遊輪旅遊開始訂購了</div>
					<div class="date">2016-10-07</div>
					<div class="item_txt">2017年日本遊輪旅遊於今日起即可訂購，請至以下圖片即可快速查看【藍寶石公主號】詳細旅遊行程2017年日本遊輪旅遊於今日起即可訂購，請至以下</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_03.png');"></div>
					<div class="item_title">愛玩美旅客分享旅遊阿里山日月潭清境花蓮四日遊影片</div>
					<div class="date">2016-02-01</div>
					<div class="item_txt">【【人美心也美】 #王美女 旅客用心製作了這則影片~很感謝你們參加了我們的行程~讓我們能一起分享你們旅途中的愉快:D別忘了有空要回來看看我們喔~</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_01.jpg');"></div>
					<div class="item_title">2017.10/11~12/22 清境小瑞士花園整修公告</div>
					<div class="date">2017-10-11</div>
					<div class="item_txt">【公告】因小瑞士花園10/11~12/22有整修工程，故無法前往。如有參加此部分行程之旅客，本公司會再退費予旅客</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_02.jpg');"></div>
					<div class="item_title">2017日本遊輪旅遊開始訂購了</div>
					<div class="date">2016-10-07</div>
					<div class="item_txt">2017年日本遊輪旅遊於今日起即可訂購，請至以下圖片即可快速查看【藍寶石公主號】詳細旅遊行程2017年日本遊輪旅遊於今日起即可訂購，請至以下</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_03.png');"></div>
					<div class="item_title">愛玩美旅客分享旅遊阿里山日月潭清境花蓮四日遊影片</div>
					<div class="date">2016-02-01</div>
					<div class="item_txt">【【人美心也美】 #王美女 旅客用心製作了這則影片~很感謝你們參加了我們的行程~讓我們能一起分享你們旅途中的愉快:D別忘了有空要回來看看我們喔~</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_01.jpg');"></div>
					<div class="item_title">2017.10/11~12/22 清境小瑞士花園整修公告</div>
					<div class="date">2017-10-11</div>
					<div class="item_txt">【公告】因小瑞士花園10/11~12/22有整修工程，故無法前往。如有參加此部分行程之旅客，本公司會再退費予旅客</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_02.jpg');"></div>
					<div class="item_title">2017日本遊輪旅遊開始訂購了</div>
					<div class="date">2016-10-07</div>
					<div class="item_txt">2017年日本遊輪旅遊於今日起即可訂購，請至以下圖片即可快速查看【藍寶石公主號】詳細旅遊行程2017年日本遊輪旅遊於今日起即可訂購，請至以下</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_03.png');"></div>
					<div class="item_title">愛玩美旅客分享旅遊阿里山日月潭清境花蓮四日遊影片</div>
					<div class="date">2016-02-01</div>
					<div class="item_txt">【【人美心也美】 #王美女 旅客用心製作了這則影片~很感謝你們參加了我們的行程~讓我們能一起分享你們旅途中的愉快:D別忘了有空要回來看看我們喔~</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
			</div>
			<div class="type">
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_03.png');"></div>
					<div class="item_title">愛玩美旅客分享旅遊阿里山日月潭清境花蓮四日遊影片</div>
					<div class="date">2016-02-01</div>
					<div class="item_txt">【【人美心也美】 #王美女 旅客用心製作了這則影片~很感謝你們參加了我們的行程~讓我們能一起分享你們旅途中的愉快:D別忘了有空要回來看看我們喔~</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_01.jpg');"></div>
					<div class="item_title">2017.10/11~12/22 清境小瑞士花園整修公告</div>
					<div class="date">2017-10-11</div>
					<div class="item_txt">【公告】因小瑞士花園10/11~12/22有整修工程，故無法前往。如有參加此部分行程之旅客，本公司會再退費予旅客</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_02.jpg');"></div>
					<div class="item_title">2017日本遊輪旅遊開始訂購了</div>
					<div class="date">2016-10-07</div>
					<div class="item_txt">2017年日本遊輪旅遊於今日起即可訂購，請至以下圖片即可快速查看【藍寶石公主號】詳細旅遊行程2017年日本遊輪旅遊於今日起即可訂購，請至以下</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_03.png');"></div>
					<div class="item_title">愛玩美旅客分享旅遊阿里山日月潭清境花蓮四日遊影片</div>
					<div class="date">2016-02-01</div>
					<div class="item_txt">【【人美心也美】 #王美女 旅客用心製作了這則影片~很感謝你們參加了我們的行程~讓我們能一起分享你們旅途中的愉快:D別忘了有空要回來看看我們喔~</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_01.jpg');"></div>
					<div class="item_title">2017.10/11~12/22 清境小瑞士花園整修公告</div>
					<div class="date">2017-10-11</div>
					<div class="item_txt">【公告】因小瑞士花園10/11~12/22有整修工程，故無法前往。如有參加此部分行程之旅客，本公司會再退費予旅客</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_02.jpg');"></div>
					<div class="item_title">2017日本遊輪旅遊開始訂購了</div>
					<div class="date">2016-10-07</div>
					<div class="item_txt">2017年日本遊輪旅遊於今日起即可訂購，請至以下圖片即可快速查看【藍寶石公主號】詳細旅遊行程2017年日本遊輪旅遊於今日起即可訂購，請至以下</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_03.png');"></div>
					<div class="item_title">愛玩美旅客分享旅遊阿里山日月潭清境花蓮四日遊影片</div>
					<div class="date">2016-02-01</div>
					<div class="item_txt">【【人美心也美】 #王美女 旅客用心製作了這則影片~很感謝你們參加了我們的行程~讓我們能一起分享你們旅途中的愉快:D別忘了有空要回來看看我們喔~</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_01.jpg');"></div>
					<div class="item_title">2017.10/11~12/22 清境小瑞士花園整修公告</div>
					<div class="date">2017-10-11</div>
					<div class="item_txt">【公告】因小瑞士花園10/11~12/22有整修工程，故無法前往。如有參加此部分行程之旅客，本公司會再退費予旅客</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_02.jpg');"></div>
					<div class="item_title">2017日本遊輪旅遊開始訂購了</div>
					<div class="date">2016-10-07</div>
					<div class="item_txt">2017年日本遊輪旅遊於今日起即可訂購，請至以下圖片即可快速查看【藍寶石公主號】詳細旅遊行程2017年日本遊輪旅遊於今日起即可訂購，請至以下</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_03.png');"></div>
					<div class="item_title">愛玩美旅客分享旅遊阿里山日月潭清境花蓮四日遊影片</div>
					<div class="date">2016-02-01</div>
					<div class="item_txt">【【人美心也美】 #王美女 旅客用心製作了這則影片~很感謝你們參加了我們的行程~讓我們能一起分享你們旅途中的愉快:D別忘了有空要回來看看我們喔~</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_01.jpg');"></div>
					<div class="item_title">2017.10/11~12/22 清境小瑞士花園整修公告</div>
					<div class="date">2017-10-11</div>
					<div class="item_txt">【公告】因小瑞士花園10/11~12/22有整修工程，故無法前往。如有參加此部分行程之旅客，本公司會再退費予旅客</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_02.jpg');"></div>
					<div class="item_title">2017日本遊輪旅遊開始訂購了</div>
					<div class="date">2016-10-07</div>
					<div class="item_txt">2017年日本遊輪旅遊於今日起即可訂購，請至以下圖片即可快速查看【藍寶石公主號】詳細旅遊行程2017年日本遊輪旅遊於今日起即可訂購，請至以下</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
			</div>
			<div class="type">
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_02.jpg');"></div>
					<div class="item_title">2017日本遊輪旅遊開始訂購了</div>
					<div class="date">2016-10-07</div>
					<div class="item_txt">2017年日本遊輪旅遊於今日起即可訂購，請至以下圖片即可快速查看【藍寶石公主號】詳細旅遊行程2017年日本遊輪旅遊於今日起即可訂購，請至以下</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_03.png');"></div>
					<div class="item_title">愛玩美旅客分享旅遊阿里山日月潭清境花蓮四日遊影片</div>
					<div class="date">2016-02-01</div>
					<div class="item_txt">【【人美心也美】 #王美女 旅客用心製作了這則影片~很感謝你們參加了我們的行程~讓我們能一起分享你們旅途中的愉快:D別忘了有空要回來看看我們喔~</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_01.jpg');"></div>
					<div class="item_title">2017.10/11~12/22 清境小瑞士花園整修公告</div>
					<div class="date">2017-10-11</div>
					<div class="item_txt">【公告】因小瑞士花園10/11~12/22有整修工程，故無法前往。如有參加此部分行程之旅客，本公司會再退費予旅客</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_02.jpg');"></div>
					<div class="item_title">2017日本遊輪旅遊開始訂購了</div>
					<div class="date">2016-10-07</div>
					<div class="item_txt">2017年日本遊輪旅遊於今日起即可訂購，請至以下圖片即可快速查看【藍寶石公主號】詳細旅遊行程2017年日本遊輪旅遊於今日起即可訂購，請至以下</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_03.png');"></div>
					<div class="item_title">愛玩美旅客分享旅遊阿里山日月潭清境花蓮四日遊影片</div>
					<div class="date">2016-02-01</div>
					<div class="item_txt">【【人美心也美】 #王美女 旅客用心製作了這則影片~很感謝你們參加了我們的行程~讓我們能一起分享你們旅途中的愉快:D別忘了有空要回來看看我們喔~</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_01.jpg');"></div>
					<div class="item_title">2017.10/11~12/22 清境小瑞士花園整修公告</div>
					<div class="date">2017-10-11</div>
					<div class="item_txt">【公告】因小瑞士花園10/11~12/22有整修工程，故無法前往。如有參加此部分行程之旅客，本公司會再退費予旅客</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_02.jpg');"></div>
					<div class="item_title">2017日本遊輪旅遊開始訂購了</div>
					<div class="date">2016-10-07</div>
					<div class="item_txt">2017年日本遊輪旅遊於今日起即可訂購，請至以下圖片即可快速查看【藍寶石公主號】詳細旅遊行程2017年日本遊輪旅遊於今日起即可訂購，請至以下</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_03.png');"></div>
					<div class="item_title">愛玩美旅客分享旅遊阿里山日月潭清境花蓮四日遊影片</div>
					<div class="date">2016-02-01</div>
					<div class="item_txt">【【人美心也美】 #王美女 旅客用心製作了這則影片~很感謝你們參加了我們的行程~讓我們能一起分享你們旅途中的愉快:D別忘了有空要回來看看我們喔~</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_01.jpg');"></div>
					<div class="item_title">2017.10/11~12/22 清境小瑞士花園整修公告</div>
					<div class="date">2017-10-11</div>
					<div class="item_txt">【公告】因小瑞士花園10/11~12/22有整修工程，故無法前往。如有參加此部分行程之旅客，本公司會再退費予旅客</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_02.jpg');"></div>
					<div class="item_title">2017日本遊輪旅遊開始訂購了</div>
					<div class="date">2016-10-07</div>
					<div class="item_txt">2017年日本遊輪旅遊於今日起即可訂購，請至以下圖片即可快速查看【藍寶石公主號】詳細旅遊行程2017年日本遊輪旅遊於今日起即可訂購，請至以下</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_03.png');"></div>
					<div class="item_title">愛玩美旅客分享旅遊阿里山日月潭清境花蓮四日遊影片</div>
					<div class="date">2016-02-01</div>
					<div class="item_txt">【【人美心也美】 #王美女 旅客用心製作了這則影片~很感謝你們參加了我們的行程~讓我們能一起分享你們旅途中的愉快:D別忘了有空要回來看看我們喔~</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
				<div class="item">
					<div class="item_img" style="background-image: url('images/news_01.jpg');"></div>
					<div class="item_title">2017.10/11~12/22 清境小瑞士花園整修公告</div>
					<div class="date">2017-10-11</div>
					<div class="item_txt">【公告】因小瑞士花園10/11~12/22有整修工程，故無法前往。如有參加此部分行程之旅客，本公司會再退費予旅客</div>
					<div class="more">
						<a href="news_detail.php">more　></a>
					</div>
				</div>
			</div>
			<ul id="pagination" style="display: none;">
				<li><a href="news.php">1</a></li>
				<li class="next"><a href="news.php">2</a></li>
			</ul>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>