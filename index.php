<!DOCTYPE html>
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
<script src="js/picturefill.min.js"></script>

<!--slick-->
<script src="js/slick.min.js"></script>
<link href="css/slick.css" rel="stylesheet">
<link href="css/slick-theme.css" rel="stylesheet">
</head>
<script>
$(function(){
	$('.index_page .menu_second').children('li').eq(0).addClass('active');
	$('.index_page .menu_first').children('li').eq(0).addClass('active');

	$('.index_banner_inner').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1
    });

	$('.index_hot .item_inner').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    });

    $('.index_rank .item_inner').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
        {
            breakpoint: 912,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 640,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    });
})
</script>
<body>
<div id="fb-root"></div>
 <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 

<header>
	<?php include("header.php"); ?>
</header>
<div class="index_page">
	<div class="index_banner">
		<div class="index_banner_inner">
			<div>
				<picture>
					<!--[if IE 9]><video style="display: none;"><![endif]-->
					<source srcset="images/banner_01_m.jpg" media="(max-width: 767px)">
					<source srcset="images/banner_01_pc.jpg" media="(min-width: 768px)">
					<!--[if IE 9]><video style="display: none;"><![endif]-->
					<img src="images/banner_01_pc.jpg" alt="My default image">
				</picture>
			</div>
			<div>
				<picture>
					<!--[if IE 9]><video style="display: none;"><![endif]-->
					<source srcset="images/banner_01_m.jpg" media="(max-width: 767px)">
					<source srcset="images/banner_01_pc.jpg" media="(min-width: 768px)">
					<!--[if IE 9]><video style="display: none;"><![endif]-->
					<img src="images/banner_01_pc.jpg" alt="My default image">
				</picture>
			</div>
		</div>
		<div class="header_search_menu">
			<div class="max_width">
				<div class="back">
					<i class="fas fa-chevron-left fa-lg"></i>
				</div>
				<form class="search_input" name="postForm" action="product_search.php">
					<input type="text" name="search" placeholder="輸入目的地/景點/活動，打造您的美好假期" autocomplete="off">
					<button type="submit">
						<i class="fas fa-search fa-lg"></i>
					</button>
				</form>
				<div class="header_search_menu_inner">
					<ul class="menu_first">
						<li>南投</li>
						<li>彰化</li>
						<li>嘉義</li>
						<li>台南</li>
						<li>高雄</li>
						<li>屏東</li>
					</ul>
					<ul class="menu_second">
						<li>
							<ul class="menu_third">
								<li>
									<a href="product_travel.php">南投山區</a>
								</li>
								<li>
									<a href="product_travel.php">清境農場</a>
								</li>
								<li>
									<a href="product_travel.php">杉林溪森林遊樂園區</a>
								</li>
								<li>
									<a href="product_travel.php">日月潭</a>
								</li>
							</ul>
						</li>
						<li>
							<ul class="menu_third">
								<li>
									<a href="product_travel.php">彰化市區</a>
								</li>
								<li>
									<a href="product_travel.php">彰化市</a>
								</li>
								<li>
									<a href="product_travel.php">員林市</a>
								</li>
							</ul>
							<ul class="menu_third">
								<li>
									<a href="product_travel.php">彰化縣</a>
								</li>
								<li>
									<a href="product_travel.php">鹿港</a>
								</li>
								<li>
									<a href="product_travel.php">田尾</a>
								</li>
								<li>
									<a href="product_travel.php">北斗</a>
								</li>
							</ul>
						</li>
						<li>
							<ul class="menu_third">
								<li>
									<a href="product_travel.php">嘉義市區</a>
								</li>
								<li>
									<a href="product_travel.php">嘉義市區</a>
								</li>
							</ul>
							<ul class="menu_third">
								<li>
									<a href="product_travel.php">嘉義縣</a>
								</li>
								<li>
									<a href="product_travel.php">東石漁人碼頭</a>
								</li>
								<li>
									<a href="product_travel.php">瑞里風景區</a>
								</li>
								<li>
									<a href="product_travel.php">布袋海港</a>
								</li>
								<li>
									<a href="product_travel.php">玉山塔塔加風景區</a>
								</li>
								<li>
									<a href="product_travel.php">達娜伊谷生態公園</a>
								</li>
								<li>
									<a href="product_travel.php">阿里山森林遊樂園</a>
								</li>
								<li>
									<a href="product_travel.php">劍湖山世界</a>
								</li>
								<li>
									<a href="product_travel.php">奮起湖風景區</a>
								</li>
								<li>
									<a href="product_travel.php">關子嶺溫泉區</a>
								</li>
								<li>
									<a href="product_travel.php">關子嶺溫泉區</a>
								</li>
								<li>
									<a href="product_travel.php">關子嶺溫泉區</a>
								</li>
								<li>
									<a href="product_travel.php">關子嶺溫泉區</a>
								</li>
								<li>
									<a href="product_travel.php">關子嶺溫泉區</a>
								</li>
								<li>
									<a href="product_travel.php">關子嶺溫泉區</a>
								</li>
							</ul>
						</li>
						<li>
							<ul class="menu_third">
								<li>
									<a href="product_travel.php">高雄市區</a>
								</li>
								<li>
									<a href="product_travel.php">高雄市區</a>
								</li>
							</ul>
						</li>
						<li>
							<ul class="menu_third">
								<li>
									<a href="product_travel.php">屏東市區</a>
								</li>
								<li>
									<a href="product_travel.php">屏東市</a>
								</li>
							</ul>
							<ul class="menu_third">
								<li>
									<a href="product_travel.php">屏東縣</a>
								</li>
								<li>
									<a href="product_travel.php">墾丁</a>
								</li>
								<li>
									<a href="product_travel.php">後壁湖</a>
								</li>
								<li>
									<a href="product_travel.php">小琉球</a>
								</li>
								<li>
									<a href="product_travel.php">東港</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="index_hot">
		<div class="max_width">
			<div class="block_title">熱門精選行程</div>
			<div class="item_inner">
				<div class="item">
					<a href="product_travel.php">
						<img src="images/product_01.png">
						<div class="info">
							<span class="pos"><i class="fas fa-map-marker-alt"></i>阿里山</span>
							<span class="good">519人訂購</span>
							<div class="rank">
								<span>4.5</span>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half"></i>
							</div>
						</div>
						<div class="item_title">【心靈森呼吸】訪‧阿里山奮起湖山城懷舊小火車+宿‧嘉義市二日遊(包含小火車行程)</div>
						<div class="price">$2980元起</div>
					</a>
				</div>
				<div class="item">
					<a href="product_travel.php">
						<img src="images/product_02.png">
						<div class="info">
							<span class="pos"><i class="fas fa-map-marker-alt"></i>阿里山</span>
							<span class="good">233人訂購</span>
							<div class="rank">
								<span>3.8</span>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
						<div class="item_title">【懷舊老街】阿里山奮起湖二日遊</div>
						<div class="price">$2900元起</div>
					</a>
				</div>
				<div class="item">
					<a href="product_travel.php">
						<img src="images/product_03.png">
						<div class="info">
							<span class="pos"><i class="fas fa-map-marker-alt"></i>清境農場</span>
							<span class="good">861人訂購</span>
							<div class="rank">
								<span>4.7</span>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
						<div class="item_title">【青青草原咩咩咩】清境農場‧合歡山超值二日遊</div>
						<div class="price">$2900元起</div>
					</a>
				</div>
				<div class="item">
					<a href="product_travel.php">
						<img src="images/product_04.png">
						<div class="info">
							<span class="pos"><i class="fas fa-map-marker-alt"></i>關仔嶺</span>
							<span class="good">490人訂購</span>
							<div class="rank">
								<span>4.5</span>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half"></i>
							</div>
						</div>
						<div class="item_title">【溫暖你心】阿里山奮起湖關仔嶺溫泉SPA豐富二日遊</div>
						<div class="price">$2980元起</div>
					</a>
				</div>
				<div class="item">
					<a href="product_travel.php">
						<img src="images/product_01.png">
						<div class="info">
							<span class="pos">阿里山</span>
							<span class="good">519人訂購</span>
							<div class="rank">
								<span>4.5</span>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half"></i>
							</div>
						</div>
						<div class="item_title">【心靈森呼吸】訪‧阿里山奮起湖山城懷舊小火車+宿‧嘉義市二日遊(包含小火車行程)</div>
						<div class="price">$2980元起</div>
					</a>
				</div>
			</div>
			<div class="more">
				<a href="product_travel.php" class="index_btn white">查看更多</a>
			</div>
		</div>
	</div>
	<div class="index_popularity">
		<div class="max_width">
			<div class="block_title">人氣精選目的地</div>
			<div class="block_title_2">不用去聽別人怎麼說，靠自己的雙眼去認識吧！</div>
			<div class="item_inner">
				<a href="product_travel.php">
					<div class="item">
						<div style="background-image: url('images/product-05.png');">
							<div class="mask">阿里山森林遊樂區</div>
						</div>
					</div>
				</a>
				<a href="product_travel.php">
					<div class="item">
						<div style="background-image: url('images/product-06.png');">
							<div class="mask">清境農場</div>
						</div>
					</div>
				</a>
				<a href="product_travel.php">
					<div class="item">
						<div style="background-image: url('images/product-07.png');">
							<div class="mask">日月潭</div>
						</div>
					</div>
				</a>
				<a href="product_travel.php">
					<div class="item">
						<div style="background-image: url('images/product-08.png');">
							<div class="mask">墾丁</div>
						</div>
					</div>
				</a>
				<a href="product_travel.php">
					<div class="item">
						<div style="background-image: url('images/product-09.png');">
							<div class="mask">關仔嶺</div>
						</div>
					</div>
				</a>
				<a href="product_travel.php">
					<div class="item">
						<div style="background-image: url('images/product-10.png');">
							<div class="mask">阿里山森林遊樂區</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="index_topic">
		<div class="max_width">
			<div class="block_title">本季優選主題</div>
			<div class="block_title_2">世界是本書，不從旅行獲得充足，而是為了心靈獲得休息。<br>—— 西塞羅</div>
			<div class="item_inner">
				<div class="item">
					<a href="product_topic.php">
						<div class="item_img" style="background-image: url('images/product-11.jpg');"></div> 
						<div class="item_txt">
							<div class="item_title">【嘉義文青生活小旅行】</div>
							<div class="item_txt_inner">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義</div>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="product_topic.php">
						<div class="item_img" style="background-image: url('images/product-12.jpg');"></div> 
						<div class="item_txt">
							<div class="item_title">【一月茶香春意濃】</div>
							<div class="item_txt_inner">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義</div>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="product_topic.php">
						<div class="item_img" style="background-image: url('images/product-13.jpg');"></div> 
						<div class="item_txt">
							<div class="item_title">【阿里山忘憂心靈雞湯旅行】</div>
							<div class="item_txt_inner">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義</div>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="product_topic.php">
						<div class="item_img" style="background-image: url('images/product-14.jpg');"></div> 
						<div class="item_txt">
							<div class="item_title">【親子就醬玩】</div>
							<div class="item_txt_inner">不想路途遙遠舟車勞頓的上阿里山卻又想體驗聞名世界的阿里山森林鐵路小火車嗎?這次我們貼心的規劃嘉義二日遊，讓您住在熱鬧的嘉義</div>
						</div>
					</a>
				</div>
			</div>
			<div class="more">
				<a href="product_topic_list.php" class="index_btn red">查看更多</a>
			</div>
		</div>
	</div>
	<div class="index_rank">
		<div class="max_width">
			<div class="block_title">來自用戶的聲音</div>
			<div class="item_inner">
				<div class="item">
					<div class="item_info">
						<div class="item_img">
							<img src="images/rank_icon_01.png">
						</div>
						<div class="item_info_txt">
							<div class="date">2017/9/11  19:31</div>
							<div class="type">旅遊-阿里山</div>
						</div>
					</div>
					<div class="item_txt">很好的服務，旅行社各人都很有禮貌很熱情招呼，坐的車是舒適的七、八人車，來回兩程上下山的司機不是同一人但一樣開車開得很穩檔，我們能睡得著稍作休息，真的很讚，還有阿里山上的導遊吳導也很讚呢，讓我們更了解阿里山，另外酒店也很舒適，山上的日出超美，謝謝你們的安排，繼續努力！</div>
					<div class="item_mem">來自<span>中國  李小姐</span></div>
				</div>
				<div class="item">
					<div class="item_info">
						<div class="item_img">
							<img src="images/rank_icon_02.png">
						</div>
						<div class="item_info_txt">
							<div class="date">2017/4/10  09:17</div>
							<div class="type">包車服務</div>
						</div>
					</div>
					<div class="item_txt">今天參加17,18阿里山行程結束啦(￣∇￣)！司機小江貼心滴服務讓我映象深刻(^ω^)，<br>謝謝小江滴服務呦！*^O^*</div>
					<div class="item_mem">來自<span>台灣  張小姐</span></div>
				</div>
				<div class="item">
					<div class="item_info">
						<div class="item_img">
							<img src="images/rank_icon_03.png">
						</div>
						<div class="item_info_txt">
							<div class="date">2017/9/11  19:31</div>
							<div class="type">機場接送</div>
						</div>
					</div>
					<div class="item_txt">臨時預訂行程，服務人員認真有效率的回覆。接待人員詳細解說、司機陳先生與江先生非常客氣，車子舒適又乾淨。感覺到旅行社的貼心與用心。</div>
					<div class="item_mem">來自<span>台灣  鐘先生</span></div>
				</div>
				<div class="item">
					<div class="item_info">
						<div class="item_img">
							<img src="images/rank_icon_01.png">
						</div>
						<div class="item_info_txt">
							<div class="date">2017/6/5  15:20</div>
							<div class="type">旅遊-阿里山</div>
						</div>
					</div>
					<div class="item_txt">期待已久的阿里山之旅，谢谢爱玩美的妥善安排。亲切友善的Allen, Amy & Amber ,仔细讲解，细心安排，若有任何疑问，也迅速回复，还不时透过whatsapps update & 跟进。 另外，也要大赞负责载我们上阿里山和隔天载我们到奋起湖搭的司机吴先生，年纪轻轻，驾车技术好，行驶上山也特别稳，让人非常安心。最后，谢谢爱玩美安排的阿里山专业导游吴真辉先生，幽默风趣，仔细讲解，就算自己健步如飞，也会在一站停一站讲解时，适时停留一下，让年长的，或年轻但少运动而走得特别喘吁吁的，稍休息一下，除了用咱手机帮咱拍照，还用他专业相机拍摄，上载其面子书，任由大家自由下载。171217很开心在慈云观景台看到夕阳，181217凌晨在小笠原看到云海。虽然与日出无缘，但能结识新朋友，感受爱玩美安排，这一切就是"爱"阿里山而"玩"得最"美"的旅程。</div>
					<div class="item_mem">來自<span>中國  林先生</span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="index_link">
		<div class="max_width">
			<div class="share" style="background-image: url('images/index_link_share.jpg');">
				<div class="mask">
					<div class="item_txt">
						<h3>和好友一起旅行賺購物金</h3>
						<div>分享邀請連結、好友訂單回饋、行程分享賺取購物金無上限</div>
					</div>
				</div>
			</div>
			<div class="youtube iframe-rwd">
				<iframe width="100%" src="https://www.youtube.com/embed/IKANV5YfM_g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
			<div class="fb">
				<div class="fb-page" data-href="https://www.facebook.com/profun01/" data-tabs="timeline" data-width="500" data-height="333" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
					<blockquote cite="https://www.facebook.com/profun01/" class="fb-xfbml-parse-ignore">
						<a href="https://www.facebook.com/profun01/">漫步阿里山旅遊網(愛玩美旅行社)</a>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>