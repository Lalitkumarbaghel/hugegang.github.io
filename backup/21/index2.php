<!DOCTYPE html>
<html>
<head>
	<title>Huge Gang</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/grude.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- flat icons -->
	<link rel="stylesheet" type="text/css" href="images/font/flaticon.css">
	<!-- google font family -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700|Ubuntu:400,400i,500,700&display=swap" rel="stylesheet">
	<style type="text/css">
		.home_profile_content {
  			display: none;
  			border-top: none;
  			position: relative;
  			width: 100%;
		}
				.home_people_move {
				    position: absolute;
				    top: 0px;
				    width: 100%;
				    display: none;
				}
				.home_people_move ul{
					display: inline-flex;
				    width: 90px;
				    justify-content: center;
				    align-items: center;
				    background: #073e8a;
				    border-radius: 25px;
				    padding: 1px 0px;
				    margin-top: 2px;
				}
				.home_people_move li{
					width: 50px!important;
				}
				.home_people_move li a{
				    border-radius: 25px;
				    display: inline-block;
				    width: 45px;
				    height: 30px;
				    
				}
				.home_people_move li a.top_pickslinks{
					background-color: transparent!important;
				}
				.home_people_move li a.top_pickslinks span::before{
					color: #bbbbbb!important;
				}
				.home_people_move li a.top_pickslinks.active2{
					background-color: #fff!important;
					box-shadow: 0px 0px 10px 2px rgba(97, 97, 97, 0.5);
				}
				.home_people_move li a.top_pickslinks.active2 span::before{
					color: #083e8a!important;
				}
				.home_people_move li a span::before{
					color: #bbbbbb;
				    line-height: 30px;
				    font-size: 17px;
				}
				.tabfeedscntnt{
					display: none;
					border-top: none;
				  	position: relative;
				}
				.mySlides {display:none;}




				/*age range slider css*/
				[slider] {
  position: relative;
    height: 14px;
    border-radius: 10px;
    text-align: left;
    margin: 25px 0 0px 0;
}

[slider] > div {
  position: absolute;
  left: 13px;
  right: 15px;
  height: 14px;
}

[slider] > div > [inverse-left] {
  position: absolute;
  left: 0;
  height: 7px;
  border-radius: 10px;
  background-color: #CCC;
  margin: 0 7px;
}

[slider] > div > [inverse-right] {
  position: absolute;
  right: 0;
  height: 7px;
  border-radius: 10px;
  background-color: #CCC;
  margin: 0 7px;
}

[slider] > div > [range] {
  position: absolute;
    left: 0;
    height: 7px;
    border-radius: 14px;
    background-color: #e43d0e;
}

[slider] > div > [thumb] {
  position: absolute;
    top: -5px;
    z-index: 2;
    height: 15px;
    width: 15px;
    text-align: left;
    margin-left: -11px;
    cursor: pointer;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.4);
    background-color: #FFF;
    border-radius: 50%;
    outline: none;
}

[slider] > input[type=range] {
  position: absolute;
  pointer-events: none;
  -webkit-appearance: none;
  z-index: 3;
  height: 14px;
  top: -2px;
  width: 100%;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: alpha(opacity=0);
  -moz-opacity: 0;
  -khtml-opacity: 0;
  opacity: 0;
}

div[slider] > input[type=range]::-ms-track {
  -webkit-appearance: none;
  background: transparent;
  color: transparent;
}

div[slider] > input[type=range]::-moz-range-track {
  -moz-appearance: none;
  background: transparent;
  color: transparent;
}

div[slider] > input[type=range]:focus::-webkit-slider-runnable-track {
  background: transparent;
  border: transparent;
}

div[slider] > input[type=range]:focus {
  outline: none;
}

div[slider] > input[type=range]::-ms-thumb {
  pointer-events: all;
  width: 28px;
  height: 28px;
  border-radius: 0px;
  border: 0 none;
  background: red;
}

div[slider] > input[type=range]::-moz-range-thumb {
  pointer-events: all;
  width: 28px;
  height: 28px;
  border-radius: 0px;
  border: 0 none;
  background: red;
}

div[slider] > input[type=range]::-webkit-slider-thumb {
  pointer-events: all;
  width: 28px;
  height: 28px;
  border-radius: 0px;
  border: 0 none;
  background: red;
  -webkit-appearance: none;
}

div[slider] > input[type=range]::-ms-fill-lower {
  background: transparent;
  border: 0 none;
}

div[slider] > input[type=range]::-ms-fill-upper {
  background: transparent;
  border: 0 none;
}

div[slider] > input[type=range]::-ms-tooltip {
  display: none;
}

[slider] > div > [sign] {
  opacity: 1;
    position: absolute;
    margin-left: -10px;
    top: -25px;
    z-index: 3;
    /* background-color: #e43d0e; */
    color: #fff;
    /* width: 28px; */
    /* height: 12px; */
    border-radius: 28px;
    -webkit-border-radius: 28px;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
    text-align: center;
}

[slider] > div > [sign]:after {
	display: none;
  position: absolute;
  content: '';
  left: 0;
  border-radius: 16px;
  top: 19px;
  border-left: 14px solid transparent;
  border-right: 14px solid transparent;
  border-top-width: 16px;
  border-top-style: solid;
  border-top-color: #e43d0e;
}

[slider] > div > [sign] > span {
  font-size: 16px;
    font-weight: 700;
    line-height: 1;
    color: #333;
}

[slider]:hover > div > [sign] {
  opacity: 1;
}
	</style>

</head>
<body>







<!-- start home -->
<div class="home_animtion" id="home_animation_txt">
<!-- start header -->
<div class="huge_header">
	<div class="home_top_header">
		<ul>
			<li onclick="hometabs(event, 'profile_tab')" class="home_tablinks active">
				<a href="javascript:void(0);" ><span class="flaticon-user"></span></a>
			</li>
			<li  onclick="hometabs(event, 'girls_ontouchmove')" id="show_people_move" class="home_tablinks">
				<a href="javascript:void(0);" id="example"><span class="flaticon-hospital-sign-of-letter-h-inside-circles"></span></a>
				<div class="home_people_move" id="home_people_move">
					<ul>
						<li>
							<a href="javascript:void(0);" onclick="openCity2(event, 'likes')" class="top_pickslinks active2">
								<span class="flaticon-hospital-sign-of-letter-h-inside-circles"></span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);" onclick="openCity2(event, 'top_picks')" class="top_pickslinks">
								<span class="flaticon-star-1"></span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<script type="text/javascript">
				function chatmasg(){
					var addd =  document.getElementById("home_people_move");
					var addd2 =  document.getElementById("show_people_move").querySelectorAll("#example");
						addd.style.display = "block";
						 addd2[0].style.visibility = "hidden";
					}
					document.querySelectorAll("#show_people_move")[0].addEventListener("click", chatmasg);
			</script>
			<li onclick="hometabs(event, 'chatmasg')" class="home_tablinks">
				<a href="javascript:void(0);" ><span class="flaticon-chat"></span></a>
			</li>
		</ul>
	</div><!--menu-->
</div>
<!-- end header -->
<!-- start profile pic -->
<div id="profile_tab" class="home_profile_content" style="display: block;">
	<div class="profile_cntnt">
		<div class="profile_pic">
			<img src="images/profile.jpg">
		</div>
	</div>
	<div class="profile_name">
			<h2>Lalit Baghel</h2>
			<p>University of Delhi Delhi Vishwavidyalaya</p>
	</div>
	<!-- end profile pic -->
	<!-- start setting -->
	<div class="huge-full section_p">
		<div class="huge-row">
			<div class="huge-4">
				<div class="home_setting_btn">
					<button>
						<span class="flaticon-gear"></span>
					</button>
					<h6>Settings</h6>
				</div>
			</div>
			<div class="huge-4">
				<div class="home_setting_btn home_camera">
					<button id="show_media">
						<span class="flaticon-photo-camera"></span>
						<span class="flaticon-add"></span>
					</button>
					<h6>Add Media</h6>
				</div>
			</div>
			<div class="huge-4">
				<div class="home_setting_btn">
					<button id="show_edit_info">
						<span class="flaticon-pencil-edit-button"></span>
					</button>
					<h6>Edit Info</h6>
				</div>
			</div>
		</div>
	</div>
	<!-- end setting -->
	<!-- start home footer carousel -->
	<div class="huge-full footer_p footer_bg">
		<div class="huge-row">
			<div class="custom-slider">
			<div class="slides">
	            <div id="slide-0">
	            	<div class="carsoul_cntnt">
	            		<h4><span class="flaticon-hospital-sign-of-letter-h-inside-circles carsose_icon"></span> Get Hugegang Gold</h4>
	            		<p>Lorem Ipsum is simply dummy text</p>
	            		<button class="btns_clr" id="show_pricin_modal">Get Hugegang Gold</button>
	            	</div>
	            </div>
	            <div id="slide-1">
	            	<div class="carsoul_cntnt">
	            		<h4><span class="flaticon-like carsose_icon"></span> Increase Your Chances</h4>
	            		<p>Lorem Ipsum is simply dummy text</p>
	            		<button class="btns_clr" id="show_hugegang_plus">My Hugegang Plus</button>
	            	</div>
	            </div>
	            <div id="slide-2">
	            	<div class="carsoul_cntnt">
	            		<h4><span class="flaticon-paragraph carsose_icon"></span> Get Matches Faster</h4>
	            		<p>Lorem Ipsum is simply dummy text</p>
	            		<button class="btns_clr">My Hugegang Plus</button>
	            	</div>
	            </div>
	            <div id="slide-3">
	            	<div class="carsoul_cntnt">
	            		<h4><span class="flaticon-star carsose_icon"></span> Stand out With Super Likes</h4>
	            		<p>Lorem Ipsum is simply dummy text</p>
	            		<button class="btns_clr">My Hugegang Plus</button>
	            	</div>
	            </div>
	            <div id="slide-4">
	            	<div class="carsoul_cntnt">
	            		<h4><span class="flaticon-restore carsose_icon"></span> I Meant to swipe Right</h4>
	            		<p>Lorem Ipsum is simply dummy text</p>
	            		<button class="btns_clr">My Hugegang Plus</button>
	            	</div>
	            </div>
	            <div id="slide-5">
	            	<div class="carsoul_cntnt">
	            		<h4><span class="flaticon-key carsose_icon"></span>Control Your Profile</h4>
	            		<p>Lorem Ipsum is simply dummy text</p>
	            		<button class="btns_clr">My Hugegang Plus</button>
	            	</div>
	            </div>
	            <div id="slide-6">
	            	<div class="carsoul_cntnt">
	            		<h4><span class="flaticon-maps-and-flags carsose_icon"></span>Swipe Around the world!!</h4>
	            		<p>Lorem Ipsum is simply dummy text</p>
	            		<button class="btns_clr">My Hugegang Plus</button>
	            	</div>
	            </div>
			</div>  
		</div>
		<div class="home_slider_btn">
		    <a href="#slide-0" class="active"></a>
		    <a href="#slide-1" class="external"></a>
		    <a href="#slide-2" class="external"></a>
		    <a href="#slide-3" class="external"></a>
		    <a href="#slide-4" class="external"></a>
		    <a href="#slide-5" class="external"></a>
		    <a href="#slide-6" class="external"></a>
	    </div>
		</div>
	</div>
</div>
<!-- end home footer carousel -->
<div id="girls_ontouchmove" class="home_profile_content" >
	

<div class="message_cntns">

	<div id="likes" class="tabcontent2" style="display: block;">
	 	<!--start ontouch move-->
	  <div class="ontouch_div mySlides">
		 	<img  src="images/girls.jpg" style="width:100%">
		<div class="like_dislike_btns_overlay">
			<div class="like_dislike_btns">
				<button class="like_ontouch_btn">Like</button>
				<button class="nope_ontouch_btn">Nope</button>
				<button class="super_ontouch_btn">Super Like</button>
			</div><!--like dislike btns-->

		</div>
			<div class="ontouch_overlay_cntn">
				<div class="course_overlay_bottom">
					<h1 id="show_inner_page">Dr Priya<span>35</span><span class="flaticon-info"></span></h1>
					<p><span class="flaticon-rugby-player-about-to-throw-a-ball"></span> post Doctoral Researcher at Tel advancement odwsjkdsm kjdsak</p>
					<p><span class="flaticon-mortarboard"></span> University of Delhi</p>
					<p> <span class="flaticon-home-1"></span> Lives in Delhi</p>
					<p><span class="flaticon-maps-and-flags"></span> 1 Km Away</p>
				</div>
			</div>
		</div><!--slider1-->
		<div class="ontouch_div mySlides">
		 	<img  src="images/girls2.jpg" style="width:100%">
		<div class="like_dislike_btns_overlay">
			<div class="like_dislike_btns">
				<button class="like_ontouch_btn">Like</button>
				<button class="nope_ontouch_btn">Nope</button>
				<button class="super_ontouch_btn">Super Like</button>
			</div><!--like dislike btns-->

		</div>
			<div class="ontouch_overlay_cntn">
				<div class="course_overlay_bottom">
					<h1 id="show_inner_page">Dr Priya<span>35</span><span class="flaticon-info"></span></h1>
					<p><span class="flaticon-rugby-player-about-to-throw-a-ball"></span> post Doctoral Researcher at Tel advancement odwsjkdsm kjdsak</p>
					<p><span class="flaticon-mortarboard"></span> University of Delhi</p>
					<p> <span class="flaticon-home-1"></span> Lives in Delhi</p>
					<!-- <p><span class="flaticon-maps-and-flags"></span> 1 Km Away</p> -->
				</div>
			</div>
		</div><!--slider2-->
		<div class="ontouch_div mySlides">
		 	<img  src="images/girls3.jpg" style="width:100%">
		<div class="like_dislike_btns_overlay">
			<div class="like_dislike_btns">
				<button class="like_ontouch_btn">Like</button>
				<button class="nope_ontouch_btn">Nope</button>
				<button class="super_ontouch_btn">Super Like</button>
			</div><!--like dislike btns-->

		</div>
			<div class="ontouch_overlay_cntn">
				<div class="course_overlay_bottom">
					<h1 id="show_inner_page">Dr Priya<span>35</span><span class="flaticon-info"></span></h1>
					<!-- <p><span class="flaticon-rugby-player-about-to-throw-a-ball"></span> post Doctoral Researcher at Tel advancement odwsjkdsm kjdsak</p> -->
					<p><span class="flaticon-mortarboard"></span> University of Delhi</p>
					<p> <span class="flaticon-home-1"></span> Lives in Delhi</p>
					<p><span class="flaticon-maps-and-flags"></span> 1 Km Away</p>
				</div>
			</div>
		</div><!--slider3-->
		<div class="ontouch_div mySlides">
		 	<img  src="images/girls4.jpg" style="width:100%">
		<div class="like_dislike_btns_overlay">
			<div class="like_dislike_btns">
				<button class="like_ontouch_btn">Like</button>
				<button class="nope_ontouch_btn">Nope</button>
				<button class="super_ontouch_btn">Super Like</button>
			</div><!--like dislike btns-->

		</div>
			<div class="ontouch_overlay_cntn">
				<div class="course_overlay_bottom">
					<h1 id="show_inner_page">Dr Priya<span>35</span><span class="flaticon-info"></span></h1>
					<p><span class="flaticon-rugby-player-about-to-throw-a-ball"></span> post Doctoral Researcher at Tel advancement odwsjkdsm kjdsak</p>
					<!-- <p><span class="flaticon-mortarboard"></span> University of Delhi</p> -->
					<p> <span class="flaticon-home-1"></span> Lives in Delhi</p>
					<!-- <p><span class="flaticon-maps-and-flags"></span> 1 Km Away</p> -->
				</div>
			</div>
		</div><!--slider3-->




		<div class="ontouch_btm_btn">
			<ul>
				<li>
					<button class="btm_small_btns"><span class="flaticon-restore"></span></button>
				</li>
				<li>
					<button onclick="movesliderplus(-1)"><span class="flaticon-close"></span></button>
				</li>
				<li>
					<button class="btm_small_btns"><span class="flaticon-like-1"></span></button>
				</li>
				<li>
					<button onclick="movesliderplus(1)"><span class="flaticon-love"></span></button>
				</li>
				<li>
					<button class="btm_small_btns"><span class="flaticon-flashlight"></span>
							
					</button>
					<div class="ontouch_btns_overlay">
							<p> &#x20B9;29.00</p>
						</div>
				</li>
			</ul>
			<script>
				var slideIndexmove = 1;
				showDivs2(slideIndexmove);

				function movesliderplus(n2) {
				  showDivs2(slideIndexmove += n2);
				}

				function showDivs2(n2) {
				  var i5;
				  var x5 = document.getElementsByClassName("mySlides");
				  if (n2 > x5.length) {slideIndexmove = 1}
				  if (n2 < 1) {slideIndexmove = x5.length}
				  for (i5 = 0; i5 < x5.length; i5++) {
				    x5[i5].style.display = "none";  
				  }
				  x5[slideIndexmove-1].style.display = "block";  
				}
			</script>
		</div>
		<!--end ontouch move-->
		<!-- start inner ontouch move -->
		<div class="inner_animation_div" id="inner_animation_div">
			<div class="ontouch_move_inner_height" id="height_define">
				<div class="ontouch_div_inner">
					<img src="images/girls.jpg">
					<div class="inner_ontouch_download_btn">
						<button><span class="flaticon-cloud-download"></span></button>
					</div>
					
				</div><!--img-->
				<div class="ontouch_overlay_cntn_inner">
					<ul>
						<li class="university_about">
							<h1>Dr Priya<span>35</span><span class="flaticon-info"></span></h1>
							<p><span class="flaticon-rugby-player-about-to-throw-a-ball"></span> post Doctoral Researcher at Tel advancement odwsjkdsm kjdsak</p>
							<p><span class="flaticon-mortarboard"></span> University of Delhi</p>
							<p> <span class="flaticon-home-1"></span> Lives in Delhi</p>
							<p><span class="flaticon-maps-and-flags"></span> 1 Km Away</p>
						</li>
						<li>
							<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</P>
						</li>
						<li>
							<h6>71 Instagram Photos</h6>
							<div class="caru_img">
								<div class="caru_img_box">
									<img src="images/girls.jpg">
								</div>
								<div class="instragram_connent">
									<div class="insta_cntn">
										<p>Share Your Instagram photos, too</p>
									</div>
									<div class="insta_btn">
										<button> <span class="flaticon-instagram"></span> Connect</button>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="share_profile_txt">
								<h5>Share Himanshika's Profile</h5>
								<p>See What a Friend Thinks</p>
							</div>
						</li>
						<li>
							<div class="share_profile_grey">
								<h5>Report Himanshika</h5>
							</div>
						</li>
					</ul>	
				</div><!--content-->
			</div><!--height scoll-->
			<div class="ontouch_btm_btn inner_btns_position" id="boot">
				<ul>
					<li>
						<button><span class="flaticon-close"></span></button>
					</li>
					<li>
						<button class="btm_small_btns"><span class="flaticon-like-1"></span></button>
					</li>
					<li>
						<button><span class="flaticon-love"></span></button>
					</li>
				</ul>
				<!-- <button onclick="main();">try</button> -->
			</div><!--bottom btns-->
			<!-- <script>
					function main(){
					var w = window.innerWidth
					|| document.documentElement.clientWidth
					|| document.body.clientWidth;

					var h = window.innerHeight
					|| document.documentElement.clientHeight
					|| document.body.clientHeight;

					var x = document.getElementById("demo");
					var y = document.getElementById("height_define").offsetHeight;
					x.innerHTML = "Browser inner window width: " + w + ", height: " + (h-y) + ".";
					document.getElementById("height_define").style.position = "fixed";
					document.getElementById("height_define").style.height = (h-60)+"px";
					document.getElementById("height_define").style.minHeight = (h-60)+"px";
					document.getElementById("height_define").style.overflow = "auto";
					}
					main();
</script> -->
		</div>

		
	</div><!-- end inner ontouch move -->


	<div id="top_picks" class="tabcontent2">
		<div class="message_tabs_btn">
			<ul>
				<li>
					<button class="likescntntlinks active" onclick="feedcontent(event, 'likescntnts')">0 Likes</button>			
				</li>

				<li>
					<button class="likescntntlinks" onclick="feedcontent(event, 'feedcntnts')">10 Top Picks</button>			
				</li>
			</ul>
		</div>
		<div class="tabfeedscntnt" id="likescntnts" style="display: block;">
			<div class="feed_txts m-t-4 m-b-2">
				<img src="images/golden_girls.jpg">
				<!-- <h4 class="p-t-2">Check Back Later</h4> -->
		  		<p class="p-t-1">See people who liked you with Hugegang Gold</p>
		  		<button class="btns_clr" >See Who Likes You</button>		
			</div>
		</div><!--likes-->
		<div class="tabfeedscntnt" id="feedcntnts">
			<div class="top_picks">
				<p class="updrage_txt p-t-2 p-b-1 p-l-1 p-r-1">Upgrade to Hugegang Gold for more Top Picks !</p>
				<ul>
					<li>
						<div class="huge-row" style="margin-left: -3px;margin-right: -3px;">
							<div class="huge-6">
								<div class="top_picks_img">
									<img src="images/girls.jpg">
									<div class="top_picks_overlay">
										<p class="name_girls">Marie, 19</p>
										<P class="online_times">11h Left</P>
										<div class="top_picks_golds_icns">
											<span class="flaticon-star"></span>
										</div>
									</div>
								</div>
							</div><!--col/end-->
							<div class="huge-6">
								<div class="top_picks_img">
									<img src="images/girls.jpg">
									<div class="top_picks_overlay">
										<p class="name_girls">Marie, 19</p>
										<P class="online_times">11h Left</P>
										<div class="top_picks_golds_icns">
											<span class="flaticon-star"></span>
										</div>
									</div>
								</div>
							</div><!--col/end-->
						</div><!--row/end-->
					</li><!--li/end-->
					<li>
						<div class="huge-row" style="margin-left: -3px;margin-right: -3px;">
							<div class="huge-6">
								<div class="top_picks_img">
									<img src="images/girls.jpg">
									<div class="top_picks_overlay">
										<p class="name_girls">Marie, 19</p>
										<P class="online_times">11h Left</P>
										<div class="top_picks_golds_icns">
											<span class="flaticon-star"></span>
										</div>
									</div>
								</div>
							</div><!--col/end-->
							<div class="huge-6">
								<div class="top_picks_img">
									<img src="images/girls.jpg">
									<div class="top_picks_overlay">
										<p class="name_girls">Marie, 19</p>
										<P class="online_times">11h Left</P>
										<div class="top_picks_golds_icns">
											<span class="flaticon-star"></span>
										</div>
									</div>
								</div>
							</div><!--col/end-->
						</div><!--row/end-->
					</li><!--li/end-->
					<li>
						<div class="huge-row" style="margin-left: -3px;margin-right: -3px;">
							<div class="huge-6">
								<div class="top_picks_img">
									<img src="images/girls.jpg">
									<div class="top_picks_overlay">
										<p class="name_girls">Marie, 19</p>
										<P class="online_times">11h Left</P>
										<div class="top_picks_golds_icns">
											<span class="flaticon-star"></span>
										</div>
									</div>
								</div>
							</div><!--col/end-->
							<div class="huge-6">
								<div class="top_picks_img">
									<img src="images/girls.jpg">
									<div class="top_picks_overlay">
										<p class="name_girls">Marie, 19</p>
										<P class="online_times">11h Left</P>
										<div class="top_picks_golds_icns">
											<span class="flaticon-star"></span>
										</div>
									</div>
								</div>
							</div><!--col/end-->
						</div><!--row/end-->
					</li><!--li/end-->
					<li>
						<div class="huge-row" style="margin-left: -3px;margin-right: -3px;">
							<div class="huge-6">
								<div class="top_picks_img">
									<img src="images/girls.jpg">
									<div class="top_picks_overlay">
										<p class="name_girls">Marie, 19</p>
										<P class="online_times">11h Left</P>
										<div class="top_picks_golds_icns">
											<span class="flaticon-star"></span>
										</div>
									</div>
								</div>
							</div><!--col/end-->
							<div class="huge-6">
								<div class="top_picks_img">
									<img src="images/girls.jpg">
									<div class="top_picks_overlay">
										<p class="name_girls">Marie, 19</p>
										<P class="online_times">11h Left</P>
										<div class="top_picks_golds_icns">
											<span class="flaticon-star"></span>
										</div>
									</div>
								</div>
							</div><!--col/end-->
						</div><!--row/end-->
					</li><!--li/end-->
					

				</ul>
				<div class="top_picks_btns">
					<button class="btns_clr">See Who Likes You</button>
				</div>
			</div>
		</div><!--feed content-->
		
	   <script type="text/javascript">

function feedcontent(evt2, cityName3) {
  var i2, tabcontent2, tablinks2;
  tabcontent2 = document.getElementsByClassName("tabfeedscntnt");
  for (i2 = 0; i2 < tabcontent2.length; i2++) {
  		tabcontent2[i2].style.display = "none";
  }
  tablinks2 = document.getElementsByClassName("likescntntlinks");
  for (i2 = 0; i2 < tablinks2.length; i2++) {
    tablinks2[i2].className = tablinks2[i2].className.replace(" active", "");
  }
  document.getElementById(cityName3).style.display = "block";
  evt2.currentTarget.className += " active";
}

</script>
	</div><!--feed-->	
</div>
<!-- end tabs -->
<script type="text/javascript">

function openCity2(evt2, cityName2) {
  var i2, tabcontent2, tablinks2;
  tabcontent2 = document.getElementsByClassName("tabcontent2");
  for (i2 = 0; i2 < tabcontent2.length; i2++) {
  		tabcontent2[i2].style.display = "none";
  }
  tablinks2 = document.getElementsByClassName("top_pickslinks");
  for (i2 = 0; i2 < tablinks2.length; i2++) {
    tablinks2[i2].className = tablinks2[i2].className.replace(" active2", "");
  }
  document.getElementById(cityName2).style.display = "block";
  evt2.currentTarget.className += " active2";
}

</script>
</div>

<div id="chatmasg" class="home_profile_content" >
	<div class="message_tabs_btn">
	<ul>
		<li>
			<button class="tablinks active" onclick="openCity(event, 'messages_cntnt')">Messages</button>			
		</li>

		<li>
			<button class="tablinks" onclick="openCity(event, 'feed_cnttnt')">Feed</button>			
		</li>
	</ul>
</div>
<div class="message_cntns">
	<div id="messages_cntnt" class="tabcontent" style="display: block;">
	  <div class="chat_search">
	  	<input type="search" name="" placeholder="Search 0 matches">
	  	<button class="people_search_icns"><span class="flaticon-magnifying-glass"></span></button>
	  	<button class="filter_icn">Newest<span class="flaticon-down-arrow"></span></button>
	  </div><!--search icns-->
	  <div class="chat_new_match">
	  	<h6 class="orange_clr">New Matches</h6>
	  	<div class="custom-slider2">
			<div class="slides2">
	            <div id="slide-0">
	            	<div class="match_chat_people active">
	            		<img src="images/profile.jpg">
	            		<div class="active_people">
	            			<span class="active"></span>
	            		</div><!--active people-->
	            		<div class="overlay_cntnt">
	            			<ul>
	            				<li>
	            					<span class="flaticon-flash"></span>
	            				</li>
	            			</ul>
	            		</div><!--golden offer people-->
	            	</div>
	            </div><!--1st people-->
	            <div  >
	            	<div class="match_chat_people unactive" >
	            		<img src="images/profile.jpg">
	            		<div class="active_people">
	            			<span class="unactive"></span>
	            		</div><!--active people-->
	            		<div class="overlay_cntnt">
	            			<ul>
	            				<li>
	            					<span class="flaticon-like"></span>
	            				</li>
	            			</ul>
	            		</div><!--golden offer people-->
	            	</div>
	            </div><!--2nd people-->
	            <div id="slide-2">
	            	<div class="match_chat_people">
	            		<img src="images/profile.jpg">
	            		<div class="active_people">
	            			<span class=""></span>
	            		</div><!--active people-->
	            		<div class="overlay_cntnt">
	            			<ul>
	            				<li>
	            					<span class="flaticon-like"></span>
	            				</li>
	            			</ul>
	            		</div><!--golden offer people-->
	            	</div>
	            </div><!--3rd people-->
	            <div id="slide-3">
	            	<div class="match_chat_people">
	            		<img src="images/profile.jpg">
	            		<div class="active_people">
	            			<span class=""></span>
	            		</div><!--active people-->
	            		<div class="overlay_cntnt">
	            			<!-- <ul>
	            				<li>
	            					<span class="flaticon-like"></span>
	            				</li>
	            			</ul> -->
	            		</div><!--golden offer people-->
	            	</div>
	            </div><!--4rh people-->
	            <div id="slide-4">
	            	<div class="match_chat_people">
	            		<img src="images/profile.jpg">
	            		<div class="active_people">
	            			<!-- <span class=""></span> -->
	            		</div><!--active people-->
	            		<div class="overlay_cntnt">
	            			<!-- <ul>
	            				<li>
	            					<span class="flaticon-like"></span>
	            				</li>
	            			</ul> -->
	            		</div><!--golden offer people-->
	            	</div>
	            </div><!--5th people-->
	            <div id="slide-5">
	            	<div class="match_chat_people">
	            		<img src="images/profile.jpg">
	            		<div class="active_people">
	            			<span class="active"></span>
	            		</div><!--active people-->
	            		<div class="overlay_cntnt">
	            			<ul>
	            				<li>
	            					<span class="flaticon-flash"></span>
	            				</li>
	            			</ul>
	            		</div><!--golden offer people-->
	            	</div>
	            </div><!--6th people-->
	            <div id="slide-6">
	            	<div class="match_chat_people">
	            		<img src="images/profile.jpg">
	            		<div class="active_people">
	            			<span class="unactive"></span>
	            		</div><!--active people-->
	            		<div class="overlay_cntnt">
	            			<ul>
	            				<li>
	            					<span class="flaticon-like"></span>
	            				</li>
	            			</ul>
	            		</div><!--golden offer people-->
	            	</div>
	            </div><!--7th people-->
			</div>  
		</div><!--all chat people-->
	  </div><!--new match chat-->
	  <div class="message_cntnt m-t-2">
	  	<h6 class="orange_clr">Masseges</h6>
	  	<div class="people_masseges">
	  		<ul>
	  			<li id="show_chating2">
	  				<div class="people_masseges_full">
	  					<div class="people_chat_img">
	  						<div class="chat_pic">
	  							<img src="images/profile.jpg">
	  							<div class="messages_list_activ">
	  								<span></span>
	  							</div><!--active icn-->
	  						</div>
	  					</div>
	  					<div class="people_chat_cntnt">
	  						<p>Stella <span><img src="images/start_icn.png"></span></p>
	  						<span class="peole_inform">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span>
	  						<div class="active_time">
	  							<small>1 min ago</small>
	  						</div><!--active time-->
	  					</div>
	  				</div>
	  			</li>
	  			<li>
	  				<div class="people_masseges_full">
	  					<div class="people_chat_img">
	  						<div class="chat_pic">
	  							<img src="images/profile.jpg">
	  							<div class="messages_list_activ active">
	  								<span></span>
	  							</div><!--active icn-->
	  						</div>
	  					</div>
	  					<div class="people_chat_cntnt">
	  						<p>Leaves <span><img src="images/start_icn.png"></span></p>
	  						<span class="peole_inform">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span>
	  						<div class="active_time">
	  							<!-- <small>1 min ago</small> -->
	  						</div><!--active time-->
	  					</div>
	  				</div>
	  			</li>
	  			<li>
	  				<div class="people_masseges_full">
	  					<div class="people_chat_img">
	  						<div class="chat_pic">
	  							<img src="images/profile.jpg">
	  							<div class="messages_list_activ">
	  								<span></span>
	  							</div><!--active icn-->
	  						</div>
	  					</div>
	  					<div class="people_chat_cntnt">
	  						<p>Jon <span><img src="images/start_icn.png"></span></p>
	  						<span class="peole_inform">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span>
	  						<div class="active_time">
	  							<small>1 min ago</small>
	  						</div><!--active time-->
	  					</div>
	  				</div>
	  			</li>
	  			<li>
	  				<div class="people_masseges_full">
	  					<div class="people_chat_img">
	  						<div class="chat_pic">
	  							<img src="images/profile.jpg">
	  							<div class="messages_list_activ">
	  								<span></span>
	  							</div><!--active icn-->
	  						</div>
	  					</div>
	  					<div class="people_chat_cntnt">
	  						<p>Stella <span><img src="images/start_icn.png"></span></p>
	  						<span class="peole_inform">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span>
	  						<div class="active_time">
	  							<small>1 min ago</small>
	  						</div><!--active time-->
	  					</div>
	  				</div>
	  			</li>
	  			<li>
	  				<div class="people_masseges_full">
	  					<div class="people_chat_img">
	  						<div class="chat_pic">
	  							<img src="images/profile.jpg">
	  							<div class="messages_list_activ">
	  								<span></span>
	  							</div><!--active icn-->
	  						</div>
	  					</div>
	  					<div class="people_chat_cntnt">
	  						<p>Stella <span><img src="images/start_icn.png"></span></p>
	  						<span class="peole_inform">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span>
	  						<div class="active_time">
	  							<small>1 min ago</small>
	  						</div><!--active time-->
	  					</div>
	  				</div>
	  			</li>
	  			<li>
	  				<div class="people_masseges_full">
	  					<div class="people_chat_img">
	  						<div class="chat_pic">
	  							<img src="images/profile.jpg">
	  							<div class="messages_list_activ">
	  								<span></span>
	  							</div><!--active icn-->
	  						</div>
	  					</div>
	  					<div class="people_chat_cntnt">
	  						<p>Stella <span><img src="images/start_icn.png"></span></p>
	  						<span class="peole_inform">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span>
	  						<div class="active_time">
	  							<small>1 min ago</small>
	  						</div><!--active time-->
	  					</div>
	  				</div>
	  			</li>
	  		</ul>
	  	</div>
	  </div>
	</div><!--messages-->

	<div id="feed_cnttnt" class="tabcontent">
		<div class="feed_txts m-t-4 m-b-2">
			<img src="images/feed-img.jpg">
			<h4 class="p-t-2">Check Back Later</h4>
	  		<p class="p-t-1">We couldn't fond any social activity for your matches. Try again later.</p>		
		</div>
	   
	</div><!--feed-->	
</div>

<!-- start chating form -->
<div class="chat_content" id="chating_cntnt">
	<div class="chat_box">	
		<div class="menu">
			<div class="chating_top_profile">
				<div class="chatting_profile_img">
					<ul>
						<li class="self_img_li">
							<div class="chat_profile_pic_icn">
								<span class="flaticon-left-arrow-1" id="remove_chating_cntnt"></span>
								<div class="chat_profile_pic">
									<img src="images/people_icn.png">
								</div>
							</div>
						</li>
						<li class="self_online">
							<div class="chat_profile_name">
								<P class="people_name">Lalit kumar Baghel</P>
								<span class="chat_typing" style="display: none;">Typing...</span>
								<time>12:30am</time>
							</div>
						</li>
					</ul>
				</div><!--profile img-->
				<div class="chatting_vedio_call">
					<div class="chating_vedio_icns">
						<ul>
							<li>
								<a href="#">
									<span class="flaticon-video-camera"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="flaticon-telephone"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="flaticon-menu"></span>
								</a>
							</li>
						</ul>
					</div>
				</div><!--call icn-->
			</div>
		 </div>
		    <ul class="chat">
		    <li class="other">
		        <div class="avatar">
		        	<div class="avatar_img">
		        		<img src="images/people_icn.png" draggable="false"/>
		        	</div>
		        </div><!--img-->
		      <div class="msg">
		      	<div class="msg_cntnt">
		        	<p>Hello!</p>
		        	<p>Lorem ipsum dolor sit amet,? <emoji class="pizza"/></p>
		        	<time>20:17</time>
		        </div>
		      </div><!--msg-->
		    </li>
		    <li class="self">
		        <div class="avatar">
		        	<div class="avatar_img right_avter">
		        		<img src="images/people_icn.png" draggable="false"/>
		        	</div>
		        </div><!--img-->
		      <div class="msg self_after">
		      	<div class="msg_cntnt">
		        	<p>hi...</p>
		        	<p>AEtiam non enim vestibulum,... <emoji class="books"/></p>
		        	<p>Praesent convallis</p>
		        	<time>20:18</time>
		        </div>
		      </div><!--msg-->
		    </li>
		    <li class="other">
		        <div class="avatar">
		        	<div class="avatar_img">
		        		<img src="images/people_icn.png" draggable="false"/>
		        	</div>
		        </div><!--img-->
		      <div class="msg">
		      	<div class="msg_cntnt">
		        	<p>Nulla interdum facilisis sapien ut venenatis. <emoji class="suffocated"/></p>
		        	<time>20:18</time>
		    	</div>
		      </div><!--img-->
		    </li>
		    <li class="self">
		        <div class="avatar">
		        	<div class="avatar_img right_avter">
		        		<img src="images/people_icn.png" draggable="false"/>
		        	</div>
		        </div><!--img-->
		      <div class="msg self_after">
		      	<div class="msg_cntnt">
		        	<p>Lorem ipsum dolor sit amet,</p>
		        	<p>Lorem ipsum dolor sit amet,...</p>
		        	<time>20:18</time>
		        </div><!--msg-->
		      </div>
		    </li>
		    <li class="other">
		         <div class="avatar">
		        	<div class="avatar_img">
		        		<img src="images/people_icn.png" draggable="false"/>
		        	</div>
		        </div><!--img-->
		      <div class="msg">
		      	<div class="msg_cntnt">
		        	<p><emoji class="scream"/></p>
		        	<p>hello...........! <emoji class="please"/></p>
		        	<time>20:18</time>
		        </div><!--msg-->
		      </div>
		    </li>
		    <li class="self">
		        <div class="avatar">
		        	<div class="avatar_img right_avter">
		        		<img src="images/people_icn.png" draggable="false"/>
		        	</div>
		        </div><!--img-->
		      <div class="msg self_after">
		      	<div class="msg_cntnt">
		        	<img src="https://i.imgur.com/QAROObc.jpg" draggable="false"/>
		        	<time>20:19</time>
		    	</div><!--msg-->
		      </div>
		    </li>
		    <li class="other">
		       <div class="avatar">
		        	<div class="avatar_img">
		        		<img src="images/people_icn.png" draggable="false"/>
		        	</div>
		        </div><!--img-->
		      <div class="msg">
		      	<div class="msg_cntnt">
		        	<p>thanks you! <emoji class="hearth_blue"/></p>
		        	<time>20:20</time>
		    	</div>
		      </div><!--msg-->
		    </li>
		     <div class="day"><p>Sunday</p></div>
			<li class="self">
			    <div class="avatar">
		        	<div class="avatar_img right_avter">
		        		<img src="images/people_icn.png" draggable="false"/>
		        	</div>
		      	</div><!--img-->
			      <div class="msg self_after">
			      	<div class="msg_cntnt ">
			        	<p>Aenean facilisis est vel est volutpat,?</p>
			        	<time>18:03</time>
			    	</div>
			      </div><!--msg-->
			    </li>
		    <li class="other">
		        <div class="avatar">
		        	<div class="avatar_img">
		        		<img src="images/people_icn.png" draggable="false"/>
		        	</div>
		        </div><!--img-->
		      <div class="msg">
		      	<div class="msg_cntnt">
		        	<p>Fusce vel eros eu ex elementum facilisis...</p>
		        	<time>18:07</time>
		    	</div><!--msg-->
		      </div>
		    </li>
		    <li class="self">
		        <div class="avatar">
		        	<div class="avatar_img right_avter">
		        		<img src="images/people_icn.png" draggable="false"/>
		        	</div>
		      	</div><!--img-->
		      <div class="msg self_after">
			      	<div class="msg_cntnt ">
			        	<p>Sed tempus ultrices massa?</p>
			        	<time>18:03</time>
			    	</div>
			    </div><!--msg-->
		    </li>
		    <li class="other">
		         <div class="avatar">
		        	<div class="avatar_img">
		        		<img src="images/people_icn.png" draggable="false"/>
		        	</div>
		        </div><!--img-->
		      <div class="msg">
		      	<div class="msg_cntnt">
		        	<p><emoji class="lmao"/></p>
		        	<time>18:08</time>
		    	</div><!--msg-->
		      </div>
		    </li>
		    <li class="self">
		        <div class="avatar">
		        	<div class="avatar_img right_avter">
		        		<img src="images/people_icn.png" draggable="false"/>
		        	</div>
		      	</div><!--img-->
		      <div class="msg self_after">
		      	<div class="msg_cntnt">
		        	<p>miss you</p>
		        	<p>heloo!</p>
		        	<p><span><emoji class="moai"/></span><span><emoji class="moai"/></span><span><emoji class="moai"/></span><span><emoji class="moai"/></span><span><emoji class="moai"/></span><span><emoji class="moai"/></span></p>
		        	<time>18:09</time>
		    	</div><!--msg-->
		      </div>
		    </li>
		    <li class="other">
		         <div class="avatar">
		        	<div class="avatar_img">
		        		<img src="images/people_icn.png" draggable="false"/>
		        	</div>
		        </div><!--img-->
		      <div class="msg">
		      	<div class="msg_cntnt">
		          <p>copun</p>
		        	<p><emoji class="funny"/></p>
		        	<time>18:08</time>
		    	</div>
		      </div><!--msg-->
		    </li>
		    <li class="self">
		         <div class="avatar">
		        	<div class="avatar_img right_avter">
		        		<img src="images/people_icn.png" draggable="false"/>
		        	</div>
		        </div><!--img-->
		      <div class="msg self_after">
		      	<div class="msg_cntnt">
		        	<p>Aenean facilisis est vel est volutpat, et venenatis neque malesuada.</p>
		        	<p><a href="https://codepen.io/Varo/pen/YPmwpQ" target="parent">link file 2.0</a></p>
		        	<time>18:09</time>
		    	</div>
		      </div><!--msg-->
		    </li>
		    </ul><!-- end chat form -->
		    <!-- start chat form -->
		    <div class="chatting_form" id="chatting_form">
		    	<div class="chatting_text_area">
		    		<textarea cols="" rows="" placeholder="Type a Message..."></textarea>
		    		<div class="emoji_icn">
		    			<span class="flaticon-emoji"></span>
		    		</div><!--emoji_icn-->
		    		<div class="sendbtnchat">
		    			<ul>
		    				<li>
		    					<a href="javascript:void(0)">
		    						<span class="flaticon-paperclip"></span>
		    					</a>
		    				</li>
		    				<li>
		    					<a href="javascript:void(0)">
		    						<span class="flaticon-photo-camera"></span>
		    					</a>
		    				</li>
		    			</ul>
		    		</div><!--emoji_icn-->	
		    	</div>
		    	 <div class="voice_recoder">
		    	 	<span class="flaticon-microphone"></span>
		    	 </div>
		    </div>
		   </div>
</div><!--chat/end-->
<!-- end chating form -->

<script type="text/javascript">

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
  		tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

</script>

</div>

</div>
<!-- end home page -->
<!-- start setting content -->
<div class="profile_setting" id="profile_setting">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button class="removeclass"><span class="flaticon-left-arrow"></span></button>
					<h4>Settings</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="setting_cntnt">
					<span><img src="images/logo2.png"><span class="setting_right_logo">Gold</span></span>
					<p>Unlock our most exclusive feature</p>
				</div><!--1st setting-->
				<div class="setting_cntnt">
					<span><img src="images/logo2.png"><span class="setting_right_logo plus_">+</span></span>
					<p>Unlimited Likes & more!</p>
				</div><!--2nd setting-->
				<div class="setting_cntnt get_boot">
					<button>
						<span class="flaticon-flash"></span>
					</button>
					<p>Get Boosts to increase your matches!</p>
				</div><!--3rd setting-->
				<div class="account_setting">
					<h4>Account Settings</h4>
					<div class="setting_cntnt">
						<div class="huge-row mobile_number">
							<div class="huge-6">
								<p>Phone Number</p>
							</div><!--end/col-->
							<div class="huge-6">
								<p class="right_txt">+91 7838015881<span class="flaticon-right-arrow"></span></p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
					<p class="btm_txt">Verify a phone number to help secure your account.</p>	
				</div>
				<div class="account_setting">
					<h4>Discovery settings</h4>
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-4">
								<p>Location</p>
							</div><!--end/col-->
							<div class="huge-8">
								<h6 class="right_txt location" id="myloction_btn">My Current Location</h6>
							</div><!--end/col-->
							<div class="huge-12 locationhide_cntnt">
								<div class="location_add">
									<h6><span class="loction_icn"><i class="flaticon-maps-and-flags"></i></span> My Current Location <span class="check_loction"><i class="flaticon-foursquare-check-in"></i></span></h6>
									<a href="#">Add a new location</a>
								</div>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
					<p class="btm_txt">Change Your Location to see Hugegang members in other cities.</p>	
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<div class="setting_cntnt" id="show_me_women">
						<div class="huge-row">
							<div class="huge-12">
								<h6 class="orange_clr">Show Me</h6>
							</div><!--end/col-->
							<div class="huge-12">
								<p class="range_name">Women<span class="flaticon-right-arrow"></span></p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-8">
								<h6 class="orange_clr">Maximum Distance</h6>
							</div><!--end/col-->
							<div class="huge-4">
								<h6 id="distance_range" style="float: right;">1 Km.</h6>
							</div>
							<div class="huge-12">
								<div class="slidecontainer">
								  <input type="range" min="1" max="150" value="1"  class="rangeslider" id="myRange">
								</div>
								<!-- <p class="range_name">Women<span class="flaticon-right-arrow"></span></p> -->
								<script>
									var slider2 = document.getElementById("myRange");
									var output = document.getElementById("distance_range");
									output.innerHTML = slider2.value;
									slider2.oninput = function() {
									  output.innerHTML = this.value + "Km.";
									}
									</script>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-12">
								<h6 class="orange_clr">Age Range</h6>
							</div><!--end/col-->
							<!-- <div class="huge-4">
								<h6 id="distance_range2" style="float: right;">15+</h6>
							</div> --><!--end/col-->
							<div class="huge-12">
								<div slider id="slider-distance">
								  <div>
								    <div inverse-left style="width:70%;"></div>
								    <div inverse-right style="width:70%;"></div>
								    <div range style="left:30%;right:40%;"></div>
								    <span thumb style="left:30%;"></span>
								    <span thumb style="left:60%;"></span>
								    <div sign style="left:30%;">
								      <span id="value">30</span>
								    </div>
								    <div sign style="left:60%;">
								      <span id="value">60</span>
								    </div>
								  </div>
								  <input type="range" tabindex="0" value="30" max="100" min="0" step="1" oninput="
								  this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
								  var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
								  var children = this.parentNode.childNodes[1].childNodes;
								  children[1].style.width=value+'%';
								  children[5].style.left=value+'%';
								  children[7].style.left=value+'%';children[11].style.left=value+'%';
								  children[11].childNodes[1].innerHTML=this.value;" />

								  <input type="range" tabindex="0" value="60" max="100" min="0" step="1" oninput="
								  this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
								  var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
								  var children = this.parentNode.childNodes[1].childNodes;
								  children[3].style.width=(100-value)+'%';
								  children[5].style.right=(100-value)+'%';
								  children[9].style.left=value+'%';children[13].style.left=value+'%';
								  children[13].childNodes[1].innerHTML=this.value;" />
								</div>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
					<p class="btm_txt">Change Your Location to see Hugegang members in other cities.</p>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-8">
								<p>Show me on Hugegang</p>
							</div><!--end/col-->
							<div class="huge-4">
								<label class="switch">
								  <input type="checkbox" class="toggle_input">
								  <span class="slider2 round"></span>
								</label>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
					<p class="btm_txt">Change Your Location to see Hugegang members in other cities.</p>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-12" id="show_feed_cntnt">
								<p>Shara My Feed</p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
					<p class="btm_txt">Change Your Location to see Hugegang members in other cities.</p>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-8">
								<p>Recommended Sort</p>
							</div><!--end/col-->
							<div class="huge-4">
								<label class="switch">
								  <input type="checkbox" class="toggle_input">
								  <span class="slider2 round"></span>
								</label>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
					<p class="btm_txt">Change Your Location to see Hugegang members in other cities.</p>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<h4>Data Usage</h4>
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-12" id="show_auto_cntnt">
								<p class="range_name">Autoplay Videos<span class="flaticon-right-arrow"></span></p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
					<p class="btm_txt">Change Your Location to see Hugegang members in other cities.</p>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-12">
								<h6 class="orange_clr">Web Profile</h6>
							</div><!--end/col-->
							<div class="huge-12">
								<div class="huge-row" style="margin-left: -8px;margin-right: -8px;" id="show_username">
									<div class="huge-6">
										<p>Username</p>
									</div><!--end/col-->
									<div class="huge-6">
										<p class="right_txt">Claim Yours<span class="flaticon-right-arrow"></span></p>
									</div><!--end/col-->
								</div>
							</div>
							<div class="huge-12">
								<p class="small_font">Create a username. Share your username. Have people all over the world match with you right on Hugegang</p>
							</div>
						</div><!--end/row-->
					</div>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<h4>Top Picks</h4>
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-12">
								<h6 class="orange_clr">Manage Top Picks</h6>
							</div><!--end/col-->
							<div class="huge-12" id="show_hugegang">
								<p class="range_name">Settings<span class="flaticon-right-arrow"></span></p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<h4>Read Receipts</h4>
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-12">
								<h6 class="orange_clr">Manage Read Receipts</h6>
							</div><!--end/col-->
							<div class="huge-12" id="show_read_receipts">
								<p class="range_name">Settings<span class="flaticon-right-arrow"></span></p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<h4>Swipe Surge<sup style="font-size: 9px;">TM</sup></h4>
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-12">
								<h6 class="orange_clr">Manage Swipe Surge<sup style="font-size: 9px;">TM</sup></h6>
							</div><!--end/col-->
							<div class="huge-12" id="show_swipe">
								<p class="range_name">Settings<span class="flaticon-right-arrow"></span></p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<h4>App Setting</h4>
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-12">
								<h6 class="orange_clr">Notifications</h6>
							</div><!--end/col-->
							<div class="huge-12 p-t-1">
								<p class="range_name" id="show_email_cntnt">Email</p>
								<p class="range_nam p-t-1 p-b-1" id="push_notif_show">Push Notifications</p>
								<p class="range_name" id="team_hugegang">Team Hugegang</p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-9">
								<h6 class="orange_clr">Show Distances In</h6>
							</div><!--end/col-->
							<div class="huge-3">
								<h6 id="metter_" style="float: right;">Km.</h6>
							</div><!--end/col-->
							<div class="huge-12">
								<div class="distance_btn">
									<button onclick="change1()" id="km_btn" class="kmaddclass">Km.</button>
									<button onclick="change2()" id="mi_btn">Mi.</button>
								</div>
							</div><!--end/col-->
							<script>
					          function change1(){
						          document.getElementById("metter_").innerHTML= document.getElementById("km_btn").innerHTML;
						          document.getElementById("km_btn").classList.add("kmaddclass");
						          document.getElementById("mi_btn").classList.remove("kmaddclass");
					          }
					          function change2(){
						          document.getElementById("metter_").innerHTML= document.getElementById("mi_btn").innerHTML;
						          document.getElementById("km_btn").classList.remove("kmaddclass");
						          document.getElementById("mi_btn").classList.add("kmaddclass");
					          }
					       </script>
						</div><!--end/row-->
					</div>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<h4>Payment Account</h4>
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-12">
								<p class="range_name" style="padding-bottom: 10px;">Email <span class="flaticon-right-arrow"></span></p>
								<hr style="border-top: 1px solid #d6d5d5;">
								<p class="range_name" style="padding-top: 10px;">Push Notifications <span class="flaticon-right-arrow"></span></p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<h4>Contact Us</h4>
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-12">
								<h5 style="text-align: center;">Help & Support</h5>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<h4>Community</h4>
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-12">
								<p class="range_name" style="padding-bottom: 10px;">Community Guidelines <span class="flaticon-right-arrow"></span></p>
								<hr style="border-top: 1px solid #d6d5d5;">
								<p class="range_name" style="padding-top: 10px;">Safety Tips <span class="flaticon-right-arrow"></span></p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-12">
								<h5 style="text-align: center;">Share Hugegang</h5>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-12">
								<h6 class="orange_clr">Legal</h6>
							</div><!--end/col-->
							<div class="huge-12">
								<p class="range_name">Licenses</p>
								<p class="range_name" style="padding-top: 5px;padding-bottom: 5px;">Privacy Policy</p>
								<p class="range_name">Terms Of Service</p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
				</div><!--end/account-->
				<div class="account_setting range_cntnt">
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-12">
								<h5 style="text-align: center;">Logout</h5>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
				</div><!--end/account-->
				<div class="version_pic">
					<img src="images/logo2.png">
					<p>Version 29.7.0(29070090)</p>
				</div><!--end/version-->
				<div class="delete_account">
					<button class="btns_clr">Delete Account</button>
				</div><!--end/version-->
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end setting content -->

<!-- start setting number -->
<div class="fixed_div number_setting">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button class="removeclass"><span class="flaticon-left-arrow"></span></button>
					<h4>Phone Number Settings</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="account_setting">
					<h4>Phone Number</h4>
					<div class="setting_cntnt">
						<div class="huge-row">
							<div class="huge-8">
								<p>+91 7838015881</p>
							</div><!--end/col-->
							<div class="huge-4">
								<p class="right_txt"><span class="flaticon-foursquare-check-in"></span></p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
					<p class="btm_txt">Verify Phone Number.</p>	
				</div><!--end/account-->
				<div class="delete_account">
					<button class="btns_clr phone_numbers">Update My Phone Number</button>
				</div><!--end/version-->
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end setting content -->

<!-- start setting number -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="ubdate_number">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button class="removeclass"><span class="flaticon-left-arrow"></span></button>
					<h4>My Number</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="account_setting">
					<div class="udate_number_input">
						<div class="huge-row">
							<div class="huge-4">
								<select>
									<option>IN +91</option>
									<option>DZ +213</option>
									<option>AI +1</option>
								</select>
							</div><!--end/col-->
							<div class="huge-8">
								<input type="number" name="" placeholder="Phone Number" id="myInput" oninput="ininput_showbtn()">
							</div><!--end/col-->
							<div class="huge-12">
								<p class="btm_txt login_txt">Changed Your Phone Number?<span><a href="#" class="login_email" id="login_email">LOG IN BY EMAIL</a></span></p>
							</div>
						</div><!--end/row-->
					</div>
					<p class="btm_txt update_number">When You tap "Continue" Hugegang will send a text with verification code. Message and data rates may apply. The Verified phone number can be used to log in.</p>	
					<a href="#" class="btm_txt">Learn what happens when your number changes</a>

				</div><!--end/account-->
				<div class="delete_account">
					<button class="cuntinue_btn" id="cuntinue_btn2">CONTINUE</button>
				</div><!--end/version-->
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end setting content -->

<!-- start setting number -->
<div class="btm_innerbgimg left_divs fixed_div" id="otp_animtion">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button class="otp_remove"><span class="flaticon-left-arrow"></span></button>
					<h4>My Code is</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="account_setting udate_number_input">
						<div class="huge-row">
							<div class="huge-12">
								<input class="otp_input" type="text" id="otp_input1" name="" maxlength="1" onkeyup="keyfressFun1();"> 
								<input class="otp_input" type="text" id="otp_input2" name="" maxlength="1" onkeyup="keyfressFun2();"> 
								<input class="otp_input" type="text" id="otp_input3" name="" maxlength="1" onkeyup="keyfressFun3();">
								<input class="otp_input" type="text" id="otp_input4" name="" maxlength="1" onkeyup="keyfressFun4();">
								<input class="otp_input" type="text" id="otp_input5" name="" maxlength="1" onkeyup="keyfressFun5();">
								<input class="otp_input" type="text" id="otp_input6" name="" maxlength="1" onkeyup="keyfressFun6();">
							</div><!--end/col-->
							<div class="huge-12 ">
								<div class="resend_opt m-t-1">
									<h6>+91 7838015881</h6>
									<button id="otp_resend_btn">Resend</button>
								</div>
							</div><!--end/col-->
						</div><!--end/row-->
				</div><!--end/account-->
				<div class="delete_account ">
					<button class="cuntinue_btn" id="cuntinue_btn3">CONTINUE</button>
				</div><!--end/version-->
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end setting content -->
<!-- start modal send -->
<div class="send_otp_modal" id="send_otp_modal">
	<div class="modal_cntn">
		 <svg id="icon-check" viewBox="0 0 225 225" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                        <g transform="matrix(1,0,0,1,-178.667,-170.667)">
                                <g class="check" transform="matrix(1,0,0,1,176,113)">
                                        <path d="M65,166L101,202L165,138" style="fill:none;stroke:#e43d0e;stroke-width:16.67px;" />
                                </g>
                                <circle class="circle" cx="291" cy="283" r="104" style="fill:none;stroke:#333;stroke-width:16.67px;" />
                        </g>
                </svg>
		<!-- <a href="../images/icon-checkmark.html"></a> -->
		<p class="model_txt">Send OTP</p>
	</div>
</div>
<!-- end modal send -->

<!-- start Error page -->
<div class="btm_innerbgimg fixed_div left_divs" id="oops_show">
	<div class="oops_cntnt">
		<div class="setting_header_bdr">
				<div class="setting_header" >
					<button id="oops_remove"><span class="flaticon-left-arrow"></span></button>
				</div>
			</div><!--end/col-->
			<div class="oops_icn m-t-2">
				<svg version="1.1" id="icon-disk-full" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
				      x="0px" y="0px" viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
				      <g class="full" fill="#e43d0e">
				        <rect x="384" y="106.667" width="42.667" height="106.667" />
				        <rect x="384" y="256" width="42.667" height="42.667" />
				      </g>
				      <path fill="#1651a3" d="M170.667,42.667C76.373,42.667,0,119.04,0,213.333S76.373,384,170.667,384s170.667-76.373,170.667-170.667
				                  S264.96,42.667,170.667,42.667z M170.667,256C147.093,256,128,236.907,128,213.333s19.093-42.667,42.667-42.667
				                  c23.573,0,42.667,19.093,42.667,42.667S194.24,256,170.667,256z" />
				   </svg>
		    </div>
		<!-- <a href="../images/icon-checkmark.html"></a> -->
		<div class="oops_cntnt_btm m-b-2 m-t-1">
			<h1>Oops</h1>
			<p class="model_txt">It appears somrthing went wrong.</p>
			<p class="model_txt">Please try again. Error Code 123212321</p>
			<button class="btns_clr">TRY AGAIN</button>
		</div>
	</div>
</div>
<!-- end Error page -->

<!-- start setting number -->
<div class="update_number_cntnt btm_innerbgimg fixed_div left_divs" id="login_email2">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="loginemail_remove"><span class="flaticon-left-arrow"></span></button>
					<h2 style="padding-left: 10px;">Log In by Email</h2>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="account_setting login_email2">
						<div class="huge-row">
							<div class="huge-12">
								<input type="email" name="" placeholder="Your Email is" id="emailinput" oninput="return validateemail()">
							</div><!--end/col-->
							<div class="huge-12">
								<p class="btm_txt login_txt">We' ll email you a link that will instantly log you in</p>
							</div>
							<script type="text/javascript">
								function validateemail()  
									{  
									var x2=document.getElementById("emailinput").value;  
									var atposition=x2.indexOf("@");  
									var dotposition=x2.lastIndexOf(".");  
									if (atposition < 1 && dotposition < atposition + 2 && x2 == ""){  
									   document.getElementById("cuntinue_btn4").classList.remove("bgclr");
									  return false;  
									  }
									  else{
									  	// return true;
									  	document.getElementById("cuntinue_btn4").classList.add("bgclr");
									  }  
									}  
							</script>
						</div><!--end/row-->
				</div><!--end/account-->
				<div class="delete_account">
					<button class="cuntinue_btn" id="cuntinue_btn4">Send Email</button>
				</div><!--end/version-->
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end setting content -->

<!-- start show me women -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="show_me_woman_cntnt">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="remove_women"><span class="flaticon-left-arrow"></span></button>
					<h4>Show Me</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="account_setting">
					<h4>Show Me</h4>
					<div class="show_me_btns">
						<div class="huge-row">
							<div class="huge-12">
								<ul>
									<li>
										<label class="rad">
										  <input type="radio" name="rad1" value="a" checked>
										  <i></i> Men
										</label>
									</li>
									<li>
										<label class="rad">
										  <input type="radio" name="rad1" value="b" checked>
										  <i></i> Women
										</label>		
									</li>
									<li>
										<label class="rad">
										  <input type="radio" name="rad1" value="b" >
										  <i></i> Everyone
										</label>		
									</li>
								</ul>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
					<div class="show_me_txt m-t-2">
						<p style="font-weight: 600;">Hugegang welcomes everyonr.</p>
						<br>
						<p class="btm_txt">Discovery setting now show users who include more information about their gender identity. Once users add information about their gender, they can choose to be shown in Searches that best reflect their identity.</p>
						<br>
						<p><span><a href="#">Learn More </a></span> about Hugegange's gender feature.</p>
					</div>
				</div><!--end/account-->
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end show me women -->

<!-- start show my feed -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="feed_me">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="remove_feed" ><span class="flaticon-left-arrow"></span></button>
					<h4>Share my Feed</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="account_setting">
					<!-- <h4>Show Me</h4> -->
					<div class="show_me_btns">
						<div class="huge-row">
							<div class="huge-12">
								<ul>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>Share my Feed</p>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
								</ul>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
					<div class="show_me_txt m-t-1">
						<p class="btm_txt">Sharing your Social content will greatly increase your chances of receiving messages!</p>
					</div>
				</div><!--end/account-->
			</div><!--end/col-->
			<div class="huge-12">
				<div class="show_me_btns">
						<div class="huge-row">
							<div class="huge-12">
								<h4 class="p-b-1 p-t-1">Shared content</h4>
								<ul>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>Photo</p>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>Spotify anthem</p>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>Top Spotify Artists</p>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>Bio</p>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>School</p>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>Work</p>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
								</ul>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end my feed -->
<!-- start show me women -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="audo_play">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="remove_audo"><span class="flaticon-left-arrow"></span></button>
					<h4>Autoplay videos</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="account_setting">
					<h4>Autoplay Vidoes</h4>
					<div class="show_me_btns">
						<div class="huge-row">
							<div class="huge-12">
								<ul>
									<li>
										<label class="rad">
										  <input type="radio" name="wifi" value="a" checked>
										  <i></i> On Wi-fi and mobile data
										</label>
									</li>
									<li>
										<label class="rad">
										  <input type="radio" name="wifi" value="b" checked>
										  <i></i> Only Wi-Fi only
										</label>		
									</li>
									<li>
										<label class="rad">
										  <input type="radio" name="wifi" value="b" >
										  <i></i> Never autoplay videos
										</label>		
									</li>
								</ul>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
					<div class="show_me_txt m-t-2">
						<p class="btm_txt">Playing videos users more data than displaying photos, so choose when videos autoplay here.</p>
					</div>
				</div><!--end/account-->
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end show me women -->
<!-- start username -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="username_cntnt">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="remove_username"><span class="flaticon-left-arrow"></span></button>
					<h4>Username</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="account_setting">
					<div class="udate_number_input login_email2">
						<div class="huge-row">
							<div class="huge-12">
								<input type="email" name="" value="hugegang.com/@" id="myInput" oninput="ininput_showbtn()">
							</div><!--end/col-->
						</div><!--end/row-->
					</div>

				</div><!--end/account-->
				<div class="delete_account">
					<button class="cuntinue_btn" id="cuntinue_btn2">CONFIRM</button>
				</div><!--end/version-->
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end username -->

<!-- start hugegang -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="hugegang_cntnt">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="remove_hugegang"><span class="flaticon-left-arrow"></span></button>
					<h4>Hugegang</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="account_setting">
					<!-- <h4>Show Me</h4> -->
					<div class="show_me_btns">
						<div class="huge-row">
							<div class="huge-12">
								<ul>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>Show me in Top Picks</p>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
								</ul>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
					<div class="show_me_txt m-t-1">
						<p class="btm_txt">Turning this on will allow you to be shown as a featured Top Pick to other users near you.</p>
					</div>
				</div><!--end/account-->
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end hugegang -->

<!-- start read receipts -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="receipts_cntnt">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="remove_receipts"><span class="flaticon-left-arrow"></span></button>
					<h4>Manage Read Receipts</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="account_setting">
					<!-- <h4>Show Me</h4> -->
					<div class="show_me_btns">
						<div class="huge-row">
							<div class="huge-12">
								<ul>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>Show Read Receipts</p>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
								</ul>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
					<div class="show_me_txt m-t-1">
						<p class="btm_txt">Turning this off will prevent any matches from activating Read Receipts i your conversation from this moment forward.</p>
					</div>
				</div><!--end/account-->
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end read receipts -->

<!-- start swipe surge -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="swipe_cntnt">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="remove_swipe"><span class="flaticon-left-arrow"></span></button>
					<h4>Manage Swipe Surge</h4><sup style="font-size: 10px;">TM</sup>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="account_setting">
					<!-- <h4>Show Me</h4> -->
					<div class="show_me_btns">
						<div class="huge-row">
							<div class="huge-12">
								<ul>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>Show me in Swipe Surge</p>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
								</ul>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
					<div class="show_me_txt m-t-1">
						<p class="btm_txt">Turning this off will prevent you from being shown as swiping to other active users during a Swipe Surge</p>
					</div>
				</div><!--end/account-->
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end swipe surge -->

<!-- start email verification -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="email_notif_cntnt">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="remove_email_notif"><span class="flaticon-left-arrow"></span></button>
					<h4>Email</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="account_setting">
					<div class="show_me_txt m-t-1">
						<p class="btm_txt">Control the emails you want to get - all of them, just the important stuff or the bare minimum. You can always unsubscribe at the bottom of any email.</p>
					</div>
				</div><!--end/account-->
			</div><!--end/col-->
			<div class="huge-12 login_email2">
				<input type="email" name="" value="hugegang.com/@" id="myInput2" oninput="ininput_showbtn2()">
				<div class="delete_account">
					<button class="cuntinue_btn" id="cuntinue_btn2">Send Verification Email</button>
				</div>
			</div><!--end/col-->
			<div class="huge-12">
				<div class="show_me_btns">
						<div class="huge-row">
							<div class="huge-12">
								<ul>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>New matches</p>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>New messages</p>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>Promotions</p>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
									<li>
										<button class="subscribe_btn">Unsubscribe From All</button>
									</li>
								</ul>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end email verification -->

<!-- start push notification -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="push_notif_cntnt">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="remove_push_notif"><span class="flaticon-left-arrow"></span></button>
					<h4>Push Notifications</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12">
				<div class="show_me_btns">
						<div class="huge-row">
							<div class="huge-12">
								<ul>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>New matches</p>
												<span class="push_btm_cntnt">You just got a new match</span>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>Messages</p>
												<span class="push_btm_cntnt">Someone send you a new message</span>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>Message Likes</p>
												<span class="push_btm_cntnt">You,ve been Super Liked! Swipe to found out by whom.</span>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>Top Picks</p>
												<span class="push_btm_cntnt">Your daily Top Picks are ready!</span>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
								</ul>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end push notification -->

<!-- start Hugegang Team -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="team_hugegang_cntnt">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="remove_team"><span class="flaticon-left-arrow"></span></button>
					<h4>Team Hugegang</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12">
				<div class="show_me_btns">
						<div class="huge-row">
							<div class="huge-12">
								<ul>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>Team Hugegang</p>
												<span class="push_btm_cntnt">I want to receive news, Update and offers from Hugegang.</span>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
								</ul>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end Hugegang Team -->

<!-- start add media  -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="add_media_cntnt">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button class="remove_addmedia_cntnt"><span class="flaticon-left-arrow"></span></button>
					<h4>Select Source</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12">
			<div class="add_media_cntnt">
				<ul>
					<li>
						<a href="#"><span class="add_media_icn"><i class="flaticon-photo-camera"></i></span> Camera</a>
					</li>
					<li>
						<a href="#"><span class="add_media_icn"><i class="flaticon-gallery"></i></span> Gallery</a>
					</li>
				</ul>
			</div>
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end add media  -->

<!-- start edit profile -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="edit_info">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="remove_edit_info"><span class="flaticon-left-arrow"></span></button>
					<h4>Edit Profile</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12">
				<div class="edit_profile">
					<ul>
						<li class="btn">
							<!-- <a href="#"> -->
								<div class="profile_pic2">
									<img src="images/profile.jpg">
									<div class="profile_add_icons">
										<span class="flaticon-add"></span>
									</div>
								</div>
							<!-- </a> -->
						</li>
						<li class="btn">
							<!-- <a href="#"> -->
								<div class="profile_pic2">
									<!-- <img src=""> -->
									<div class="profile_add_icons">
										<span class="flaticon-add"></span>
									</div>
								</div>
							<!-- </a> -->
						</li>
						<li class="btn">
							<a href="#">
								<div class="profile_pic2">
									<!-- <img src=""> -->
									<div class="profile_add_icons">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</a>
						</li>
						<li class="btn">
							<a href="#">
								<div class="profile_pic2">
									<!-- <img src=""> -->
									<div class="profile_add_icons">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</a>
						</li>
						<li class="btn">
							<a href="#">
								<div class="profile_pic2">
									<!-- <img src=""> -->
									<div class="profile_add_icons">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</a>
						</li>
						<li class="btn">
							<a href="#">
								<div class="profile_pic2">
									<!-- <img src=""> -->
									<div class="profile_add_icons">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</a>
						</li>
						<li class="btn">
							<a href="#">
								<div class="profile_pic2">
									<!-- <img src=""> -->
									<div class="profile_add_icons">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</a>
						</li>
						<li class="btn">
							<a href="#">
								<div class="profile_pic2">
									<!-- <img src=""> -->
									<div class="profile_add_icons">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</a>
						</li>
						<li class="btn">
							<a href="#">
								<div class="profile_pic2">
									<!-- <img src=""> -->
									<div class="profile_add_icons">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</a>
						</li>

						

					</ul>
					<script type="text/javascript">
							function showRel(){
  
								var boxs = document.getElementById("add_media_cntnt");
								var box3 = document.getElementById("edit_info");
								boxs.classList.add("left_divs_show");
								box3.classList.add("number_animation2");
							}
							function showRel2(){	
								var boxs = document.getElementById("add_media_cntnt");
								var box3 = document.getElementById("edit_info");
								boxs.classList.remove("left_divs_show");
								box3.classList.remove("number_animation2");
  							}
							function attachClickEvent(){
						    	var btnList = document.getElementsByClassName('btn');
						  		var listLength = btnList.length;
						    	var i=0;
						    	// console.log(btnList.length);
						  		for(;i<listLength;i++){
						      		btnList[i].addEventListener("click", showRel);
						    	}  
						                                                                               
							}
							window.onload = attachClickEvent;
							 document.querySelectorAll(".remove_addmedia_cntnt")[0].addEventListener("click", showRel2);
							
						</script>
					
				</div>
			</div><!--end/col-->
			<div class="huge-12">
				<div class="add_media_btn">
					<button class="btns_clr btn" >Add Media</button>
				</div>
			</div><!--end/col-->
				<div class="huge-12">
				<div class="smart_photo">
						<div class="huge-row">
							<div class="huge-8">
								<h6>Smart Photos</h6>
							</div><!--end/col-->
							<div class="huge-4">
								<label class="switch">
								  <input type="checkbox" class="toggle_input">
								  <span class="slider2 round"></span>
								</label>
							</div><!--end/col-->
							<div class="huge-12">
								<p class="btm_txt">Smart Photos continuosly tests all your profile photos to find the best one.</p>
							</div>
						</div><!--end/row-->
					</div>
			</div><!--end/col-->
		</div><!--end/row-->
		<div class="huge-row">
			<div class="huge-12">
				<div class="edit_profile_form">
					<form>
						<ul>
							<li>
								<label>About Lalit Baghel</label>
								<textarea placeholder="About You"></textarea>
								<p class="btm_txt" style="text-align: right;padding-top: 0px;">500</p>
							</li>
							<li>
								<label>Job Title</label>
								<input type="text" name="" placeholder="Add Job Title">
							</li>
							<li>
								<label>Company</label>
								<input type="text" name="" placeholder="Add Company">
							</li>
							<li  id="show_schools">
								<label>School</label>
								<input type="text" name="" placeholder="Add University">
							</li>
							<li  id="show_adress">
								<label>Living In</label>
								<input type="text" name="" placeholder="Add City">
							</li>
						</ul>
					</form>
				</div>
			</div><!--end/col-->
		</div><!--end/row-->
		<div class="huge-row">
			<div class="huge-12">
				<div class="account_setting">
					<h6>Show My instagram Photos</h6>
					<div class="setting_cntnt">
						<div class="huge-row mobile_number">
							<div class="huge-12">
								<p style="font-weight: 600;color: #e43d0e;font-size: 16px;">Connect Instagram</p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>	
				</div>
			</div><!--end/col-->
			<div class="huge-12">
				<div class="account_setting">
					<h6>My Anthem</h6>
					<div class="setting_cntnt">
						<div class="huge-row mobile_number">
							<div class="huge-12" id="show_search_anthem">
								<p>Choose an anthem</p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
					<p class="btm_txt" id="anthem_setting_add">Control how you share your Spotify anthem on feed in <span style="color: #1651a3;font-weight: bold;">Settings</span>.</p>	
				</div>
			</div><!--end/col-->
			<div class="huge-12">
				<div class="account_setting">
					<h6>My Top Spotify Artists</h6>
					<div class="setting_cntnt">
						<div class="huge-row mobile_number">
							<div class="huge-12">
								<p style="font-weight: 600;color: #e43d0e;font-size: 16px;text-align: center;">Add Spotify to Your Profile</p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
					<p class="btm_txt" id="anthem_setting_add2">Control how you share your Top Spotify artists on feed in <span style="color: #1651a3;font-weight: bold;">Settings</span>.</p>	
				</div>
			</div><!--end/col-->
			<div class="huge-12">
				<div class="account_setting">
					<h6>I am</h6>
					<div class="setting_cntnt">
						<div class="huge-row mobile_number">
							<div class="huge-12" id="edit_men">
								<p style="padding-left: 10px;">Man</p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>	
				</div>
			</div><!--end/col-->
			<div class="huge-12">
				<div class="account_setting">
					<h6>Sexual Orientation</h6>
					<div class="setting_cntnt">
						<div class="huge-row mobile_number">
							<div class="huge-12" id="sexual_show">
								<p style="padding-left: 10px;">Straight</p>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>	
				</div>
			</div><!--end/col-->
			<div class="huge-12 m-t-2 m-b-2">
				<div class="show_me_btns">
						<div class="huge-row">
							<div class="huge-12">
								<h6 style="padding-left: 10px;">Control Your Profile <span>T<sup>+</sup></span></h6>
								<ul class="m-t-1">
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>Don't Show My Age</p>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
									<li>
										<div class="huge-row">
											<div class="huge-8">
												<p>Make My Distance Invisible</p>
											</div>
											<div class="huge-4">
												<label class="switch">
												  <input type="checkbox" class="toggle_input">
												  <span class="slider2 round"></span>
												</label>
											</div>
										</div>
									</li>
								</ul>
							</div><!--end/col-->
						</div><!--end/row-->
					</div>
			</div>
		</div><!--end/row-->
	</div>
</div>
<!-- end edit profile -->

<!-- start i am -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="edit_mans">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="edit_man_remove"><span class="flaticon-left-arrow"></span></button>
					<h4>I am</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="account_setting">
					<div class="show_me_btns">
						<div class="huge-row">
							<div class="huge-12">
								<ul>
									<li>
										<label class="rad">
										  <input type="radio" name="rad2" value="a" checked="">
										  <i></i> Man
										</label>
									</li>
									<li>
										<label class="rad">
										  <input type="radio" name="rad2" value="b" checked="">
										  <i></i> Woman
										</label>		
									</li>
									<li>
										<label class="rad">
										  <input type="radio" name="rad2" value="b">
										  <i></i> Everyone
										</label>		
									</li>
								</ul>
							</div><!--end/col-->
						</div><!--end/row-->
						<div class="huge-row">
							<div class="huge-12 ">
								<div class="show_me_btns">
									<div class="huge-row">
										<div class="huge-12">
											<ul>
												<li>
													<div class="huge-row">
														<div class="huge-9">
															<p>Show my gender on my profile</p>
														</div>
														<div class="huge-3">
															<label class="switch">
															  <input type="checkbox" class="toggle_input">
															  <span class="slider2 round"></span>
															</label>
														</div>
													</div>
												</li>
											</ul>
										</div><!--end/col-->
										<div class="huge-12">
											<p class="btm_txt p-t-1 "><span class="orangeclr">Learn more</span> about Hugegang's gender feature.</p>
										</div>
									</div><!--end/row-->
								</div>
							</div>
						</div>
					</div>
				</div><!--end/account-->
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end i am -->

<!-- start Sexual -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="edit_sexual">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="remove_sexual"><span class="flaticon-left-arrow"></span></button>
					<h4>Sexual Orientation</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="show_me_btns">
					<ul>
						<li>
							<div class="huge-row">
								<div class="huge-9">
									<p>Show my gender on my profile</p>
								</div>
								<div class="huge-3">
									<label class="switch">
										<input type="checkbox" class="toggle_input">
										<span class="slider2 round"></span>
									</label>
								</div>
							</div>
						</li>
					</ul>
				</div>		
			</div><!--end/col-->
			<div class="huge-12 m-b-2">
				<div class="sexual_check">
					<h6>Select up to 3</h6>
					<ul class="unstyled centered">
						<li>
							<input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1" checked>
							<label for="styled-checkbox-1">Straight</label>
						</li>
						<li>
							<input class="styled-checkbox" id="styled-checkbox-2" type="checkbox" value="value1" >
							<label for="styled-checkbox-2">Gay</label>
						</li>
						<li>
							<input class="styled-checkbox" id="styled-checkbox-3" type="checkbox" value="value1">
							<label for="styled-checkbox-3">Lesbian</label>
						</li>
						<li>
							<input class="styled-checkbox" id="styled-checkbox-4" type="checkbox" value="value1">
							<label for="styled-checkbox-4">Bisexual</label>
						</li>
						<li>
							<input class="styled-checkbox" id="styled-checkbox-5" type="checkbox" value="value1">
							<label for="styled-checkbox-5">Asexual</label>
						</li>
						<li>
							<input class="styled-checkbox" id="styled-checkbox-6" type="checkbox" value="value1">
							<label for="styled-checkbox-6">Demisexual</label>
						</li>
						<li>
							<input class="styled-checkbox" id="styled-checkbox-7" type="checkbox" value="value1">
							<label for="styled-checkbox-7">Pansexual</label>
						</li>
						<li>
							<input class="styled-checkbox" id="styled-checkbox-8" type="checkbox" value="value1">
							<label for="styled-checkbox-8">Queer</label>
						</li>
						<li>
							<input class="styled-checkbox" id="styled-checkbox-9" type="checkbox" value="value1">
							<label for="styled-checkbox-9">Bicuious</label>
						</li>
						<li>
							<input class="styled-checkbox" id="styled-checkbox-10" type="checkbox" value="value4">
							<label for="styled-checkbox-10">Aromantic</label>
						</li>
					</ul>
				</div>
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end Sexual -->

<!-- start University -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="schools_location">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="remove_schools_loc"><span class="flaticon-left-arrow"></span></button>
					<h4>Edit University Info</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="edit_profile_form">
					<form>
						<ul>
							<li>
								<label>Add University</label>
								<input type="search" name="" placeholder="Add University">
							</li>
						</ul>
					</form>
				</div>
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end University -->

<!-- start Location -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="address_location">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="remove_address_lo"><span class="flaticon-left-arrow"></span></button>
					<h4>Edit City</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="edit_profile_form location_map">
					<form>
						<ul>
							<li>
								<input type="search" id="search_input" name="" placeholder="Search for City" oninput="location_search();">
								<button class="search_btn" id="search_icn"><span class="flaticon-magnifying-glass"></span></button>
								<script type="text/javascript">
									function location_search() {
										var number_value2 = document.getElementById("search_input").value;
										var search_btn = document.getElementById("search_icn");
										if(number_value2 == "" || number_value2 == null){
											search_btn.classList.remove("searchaddclass");
											document.getElementById("location_result").style.display = "none";
											document.getElementById("nearst_location").style.display = "block";
											}
										else{
											search_btn.classList.add("searchaddclass");
											document.getElementById("location_result").style.display = "block";
											document.getElementById("nearst_location").style.display = "none";
										}
									}
								</script>
							</li>
						</ul>
					</form>
				</div>
				<div class="location_result" id="location_result">
					<h6>Results</h6>
					<ul>
						<li>
							<p><span class="flaticon-maps-and-flags"></span> Gurgoan, Haryana</p>
						</li>
						<li>
							<p><span class="flaticon-maps-and-flags"></span> Gurgoan, Haryana</p>
						</li>
						<li>
							<p><span class="flaticon-maps-and-flags"></span> Gurgoan, Haryana</p>
						</li>
						<li>
							<p><span class="flaticon-maps-and-flags"></span> Gurgoan, Haryana</p>
						</li>
						<li>
							<p><span class="flaticon-maps-and-flags"></span> Gurgoan, Haryana</p>
						</li>
					</ul>
				</div>
				<div class="nearst_location" id="nearst_location">
					<ul>
						<li id="show_search_result">
							<p class="current_loction"><span class="flaticon-cursor"></span> Near Current Location</p>
						</li>
						<li>
							<p><span class="flaticon-closed-sign"></span> I don't want to show my city</p>
						</li>
					</ul>
				</div>

			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end Location -->

<!-- start Location -->
<div class="update_number_cntnt btm_innerbgimg left_divs fixed_div" id="search_anthem2">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr">
				<div class="setting_header">
					<button id="remove_search_anthem"><span class="flaticon-left-arrow"></span></button>
					<h4>Choose An Anthem</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t">
				<div class="edit_profile_form location_map">
					<form>
						<ul>
							<li>
								<input type="search" id="search_input2" name="" placeholder="Search Spotify Songs" oninput="location_search2();">
								<button class="search_btn" id="search_icn2"><span class="flaticon-magnifying-glass"></span></button>
								<script type="text/javascript">
									function location_search2() {
										var number_value3 = document.getElementById("search_input2").value;
										var search_btn2 = document.getElementById("search_icn2");
										if(number_value3 == "" || number_value3 == null){
											search_btn2.classList.remove("searchaddclass");
											}
										else{
											search_btn2.classList.add("searchaddclass");
										}
									}
								</script>
							</li>
						</ul>
					</form>
				</div>
				
				<div class="nearst_location" id="nearst_location">
					<ul>
						<li>
							<p><span class="flaticon-closed-sign"></span> I don't want to show my city</p>
						</li>
					</ul>
				</div>
				<div class="location_result spotify_cntnt2" id="location_result" style="display: block;">
					<h6 class="m-t-2">Popular On Spotify</h6>
					<ul>
						<li>
							<div class="huge-row" style="margin-left: -8px;margin-right: -8px;">
								<div class="huge-2 p-r-0">
									<div class="spotify_left_img">
										<img src="images/profile.jpg">
									</div>
								</div><!--end/col-->
								<div class="huge-10">
									<p>The Box</p>
									<small class="spotify_cntnt_box"><span class="flaticon-heliport"></span>Roddy Ricch</small> 
								</div><!--end/col-->
							</div><!--end/row-->
						</li>
						<li>
							<div class="huge-row" style="margin-left: -8px;margin-right: -8px;">
								<div class="huge-2 p-r-0">
									<div class="spotify_left_img">
										<img src="images/profile.jpg">
									</div>
								</div><!--end/col-->
								<div class="huge-10">
									<p>Life is Good (feat.Drake)</p>
									<small class="spotify_cntnt_box"><span class="flaticon-heliport"></span>Future</small> 
								</div><!--end/col-->
							</div><!--end/row-->
						</li>
						<li>
							<div class="huge-row" style="margin-left: -8px;margin-right: -8px;">
								<div class="huge-2 p-r-0">
									<div class="spotify_left_img">
										<img src="images/profile.jpg">
									</div>
								</div><!--end/col-->
								<div class="huge-10">
									<p>Roxanne</p>
									<small class="spotify_cntnt_box"><span class="flaticon-heliport"></span>Arizone Zervas</small> 
								</div><!--end/col-->
							</div><!--end/row-->
						</li>
						<li>
							<div class="huge-row" style="margin-left: -8px;margin-right: -8px;">
								<div class="huge-2 p-r-0">
									<div class="spotify_left_img">
										<img src="images/profile.jpg">
									</div>
								</div><!--end/col-->
								<div class="huge-10">
									<p>Intentions</p>
									<small class="spotify_cntnt_box"><span class="flaticon-heliport"></span>Justin Beiber</small> 
								</div><!--end/col-->
							</div><!--end/row-->
						</li>
						<li>
							<div class="huge-row" style="margin-left: -8px;margin-right: -8px;">
								<div class="huge-2 p-r-0">
									<div class="spotify_left_img">
										<img src="images/profile.jpg">
									</div>
								</div><!--end/col-->
								<div class="huge-10">
									<p>High Fashion (feat.Mustard)</p>
									<small class="spotify_cntnt_box"><span class="flaticon-heliport"></span>Roddy Ricch</small> 
								</div><!--end/col-->
							</div><!--end/row-->
						</li>
						<li>
							<div class="huge-row" style="margin-left: -8px;margin-right: -8px;">
								<div class="huge-2 p-r-0">
									<div class="spotify_left_img">
										<img src="images/profile.jpg">
									</div>
								</div><!--end/col-->
								<div class="huge-10">
									<p>Blinding Lights</p>
									<small class="spotify_cntnt_box"><span class="flaticon-heliport"></span>The Weekend</small> 
								</div><!--end/col-->
							</div><!--end/row-->
						</li>
						<li>
							<div class="huge-row" style="margin-left: -8px;margin-right: -8px;">
								<div class="huge-2 p-r-0">
									<div class="spotify_left_img">
										<img src="images/profile.jpg">
									</div>
								</div><!--end/col-->
								<div class="huge-10">
									<p>Falling</p>
									<small class="spotify_cntnt_box"><span class="flaticon-heliport"></span>Trevor Daniel</small> 
								</div><!--end/col-->
							</div><!--end/row-->
						</li>
						<li>
							<div class="huge-row" style="margin-left: -8px;margin-right: -8px;">
								<div class="huge-2 p-r-0">
									<div class="spotify_left_img">
										<img src="images/profile.jpg">
									</div>
								</div><!--end/col-->
								<div class="huge-10">
									<p>Godzilla (Feat. Juice World)</p>
									<small class="spotify_cntnt_box"><span class="flaticon-heliport"></span>Eminem</small> 
								</div><!--end/col-->
							</div><!--end/row-->
						</li>
						<li>
							<div class="huge-row" style="margin-left: -8px;margin-right: -8px;">
								<div class="huge-2 p-r-0">
									<div class="spotify_left_img">
										<img src="images/profile.jpg">
									</div>
								</div><!--end/col-->
								<div class="huge-10">
									<p>Circles</p>
									<small class="spotify_cntnt_box"><span class="flaticon-heliport"></span>Post Malone</small> 
								</div><!--end/col-->
							</div><!--end/row-->
						</li>
						<li>
							<div class="huge-row" style="margin-left: -8px;margin-right: -8px;">
								<div class="huge-2 p-r-0">
									<div class="spotify_left_img">
										<img src="images/profile.jpg">
									</div>
								</div><!--end/col-->
								<div class="huge-10">
									<p>Dance Monkey</p>
									<small class="spotify_cntnt_box"><span class="flaticon-heliport"></span>Tones and I</small> 
								</div><!--end/col-->
							</div><!--end/row-->
						</li>
					</ul>
				</div>

			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end Location -->


<!-- start my hugegang plus -->
<div class="update_number_cntnt myhgegang_plus_btm  p-b-2" style="background: #e7e7e7;" id="my_hugegang_plus">
	<div class="huge-full">
		<div class="huge-row">
			<div class="huge-12 setting_header_bdr" style="background: #fff;">
				<div class="setting_header">
					<button id="remove_hugegang_plus"><span class="flaticon-left-arrow"></span></button>
					<h4>My Hugegang Plus</h4>
				</div>
			</div><!--end/col-->
			<div class="huge-12" style="padding: 0px;">
				<!-- start banner -->
				<div class="myhuge_banner" style="">
					<h5>Power On</h5>
					<button class="btns_clr">Get Hugegang Plus</button>
				</div>
			</div><!--end/col-->
			<div class="huge-12 se_m_t" style="padding: 0px;">
				<div class="myhugegang_cntnt">
					<div class="hugegange_top_cntnt">
						<div class="hugegang_img">
							<div class="huge_img_divs">
								<img src="images/profile.jpg">
							</div>
						</div>
						<div class="hugegang_right_cntnt">
							<p>Unlimited Right Swipes</p>
							<span>Swipe as much as you like.</span>
						</div>

					</div><!--top cntnt-->
					<div class="hugegange_top_cntnt brdr_remove">
						<div class="hugegang_right_cntnt myhuge_btm_cntnt">
							<p>Unlimitd Likes</p>
							<small>Give me the ability to like as many people as I want</small>
						</div>
						<div class="hugegang_img ">
							<label class="switch">
								<input type="checkbox" class="toggle_input">
								<span class="slider2 round"></span>
							</label>
						</div>
					</div><!--bottom cntnt-->
				</div><!--1st myhugegang-->
				<div class="myhugegang_cntnt">
					<div class="hugegange_top_cntnt">
						<div class="hugegang_img">
							<div class="huge_img_divs">
								<img src="images/profile.jpg">
							</div>
						</div>
						<div class="hugegang_right_cntnt">
							<p>Skip the queue</p>
							<span>Be a top profile in your area for 30 minutes to get more matches.</span>
						</div>

					</div><!--top cntnt-->
					<div class="hugegange_top_cntnt brdr_remove">
						<div class="hugegang_right_cntnt myhuge_btm_cntnt">
							<p>Hugegang Boost</p>
							<!-- <small>Give me the ability to like as many people as I want</small> -->
						</div>
						<div class="hugegang_img ">
							<label class="switch">
								<input type="checkbox" class="toggle_input">
								<span class="slider2 round"></span>
							</label>
						</div>
					</div><!--bottom cntnt-->
				</div><!--2nd myhugegang-->
				<div class="myhugegang_cntnt">
					<div class="hugegange_top_cntnt">
						<div class="hugegang_img">
							<div class="huge_img_divs">
								<img src="images/profile.jpg">
							</div>
						</div>
						<div class="hugegang_right_cntnt">
							<p>Control Who You See</p>
							<span>It's simple now to choose the type of people you want to see on Hugegange.</span>
						</div>

					</div><!--top cntnt-->
					<div class="hugegange_top_cntnt">
						<div class="hugegang_right_cntnt myhuge_btm_cntnt">
							<p>Balanced Recommendations</p>
							<small>See the most relevent people to you (default setting)</small>
						</div>
						<div class="hugegang_img">
							<span class="flaticon-foursquare-check-in huge_checkmark"></span>
						</div>
					</div><!--bottom cntnt-->
					<div class="hugegange_top_cntnt brdr_remove">
						<div class="hugegang_right_cntnt myhuge_btm_cntnt">
							<p>Recently Active</p>
							<small>See the most relevant people first</small>
						</div>
						<div class="hugegang_img ">
							
						</div>
					</div><!--bottom cntnt-->
				</div><!--3rd myhugegang-->
				<div class="myhugegang_cntnt">
					<div class="hugegange_top_cntnt">
						<div class="hugegang_img">
							<div class="huge_img_divs">
								<img src="images/profile.jpg">
							</div>
						</div>
						<div class="hugegang_right_cntnt">
							<p>Control Who Sees You</p>
							<span>Only be shown to certain types of people on Hugegang</span>
						</div>

					</div><!--top cntnt-->
					<div class="hugegange_top_cntnt">
						<div class="hugegang_right_cntnt myhuge_btm_cntnt">
							<p>Standerd</p>
							<small>Only be shown to certain types of people for individual recommendations.</small>
						</div>
						<div class="hugegang_img">
							<span class="flaticon-foursquare-check-in huge_checkmark"></span>
						</div>
					</div><!--bottom cntnt-->
					<div class="hugegange_top_cntnt brdr_remove">
						<div class="hugegang_right_cntnt myhuge_btm_cntnt">
							<p>Only People I' ve Liked</p>
							<small>Only people I've right swiped will see me</small>
						</div>
						<div class="hugegang_img ">
							
						</div>
					</div><!--bottom cntnt-->
				</div><!--4th myhugegang-->
				<div class="myhugegang_cntnt">
					<div class="hugegange_top_cntnt">
						<div class="hugegang_img">
							<div class="huge_img_divs">
								<img src="images/profile.jpg">
							</div>
						</div>
						<div class="hugegang_right_cntnt">
							<p>Control Your Profile</p>
							<span>Make parts of your profile information invisible to other people</span>
						</div>

					</div><!--top cntnt-->
					<div class="hugegange_top_cntnt">
						<div class="hugegang_right_cntnt myhuge_btm_cntnt">
							<p>Don't Show my Age</p>
							<!-- <small>Give me the ability to like as many people as I want</small> -->
						</div>
						<div class="hugegang_img ">
							<label class="switch">
								<input type="checkbox" class="toggle_input">
								<span class="slider2 round"></span>
							</label>
						</div>
					</div><!--bottom cntnt-->
					<div class="hugegange_top_cntnt brdr_remove">
						<div class="hugegang_right_cntnt myhuge_btm_cntnt">
							<p>Make my Distance Invisible</p>
							<!-- <small>Give me the ability to like as many people as I want</small> -->
						</div>
						<div class="hugegang_img ">
							<label class="switch">
								<input type="checkbox" class="toggle_input">
								<span class="slider2 round"></span>
							</label>
						</div>
					</div><!--bottom cntnt-->
				</div><!--5th myhugegang-->
				<div class="myhugegang_cntnt">
					<div class="hugegange_top_cntnt">
						<div class="hugegang_img">
							<div class="huge_img_divs">
								<img src="images/profile.jpg">
							</div>
						</div>
						<div class="hugegang_right_cntnt">
							<p>Passport To Any Location</p>
							<span>Match with people all around the world, Pairs, Los Angeles, Sydney, Go!</span>
						</div>

					</div><!--top cntnt-->
					<div class="hugegange_top_cntnt brdr_remove">
						<div class="hugegang_img">
							<p style="font-size: 16px;font-weight: 600;">Location</p>
						</div>
						<div class="hugegang_right_cntnt myhuge_btm_cntnt">
							<p style="text-align: right;">My Current Location</p>
						</div>
						
					</div><!--bottom cntnt-->
				</div><!--6th myhugegang-->
				<div class="myhugegang_cntnt">
					<div class="hugegange_top_cntnt">
						<div class="hugegang_img">
							<div class="huge_img_divs">
								<img src="images/profile.jpg">
							</div>
						</div>
						<div class="hugegang_right_cntnt">
							<p>Rewind Your Last Swipe</p>
							<span>Accidentally swiped on someone? Rewind and swipe again.</span>
						</div>

					</div><!--top cntnt-->
					<div class="hugegange_top_cntnt brdr_remove">
						<div class="hugegang_right_cntnt myhuge_btm_cntnt">
							<p>Rewind Last Swipe</p>
							<small>Give me the ability to rewind my last swipe</small>
						</div>
						<div class="hugegang_img ">
							<label class="switch">
								<input type="checkbox" class="toggle_input">
								<span class="slider2 round"></span>
							</label>
						</div>
					</div><!--bottom cntnt-->
				</div><!--7th myhugegang-->
				<div class="myhugegang_cntnt">
					<div class="hugegange_top_cntnt">
						<div class="hugegang_img">
							<div class="huge_img_divs">
								<img src="images/profile.jpg">
							</div>
						</div>
						<div class="hugegang_right_cntnt">
							<p>Hide Ads</p>
							<span>Enjoy a completely ad free experience.</span>
						</div>

					</div><!--top cntnt-->
					<div class="hugegange_top_cntnt brdr_remove">
						<div class="hugegang_right_cntnt myhuge_btm_cntnt">
							<p>Hide Advertisements</p>
						</div>
						<div class="hugegang_img ">
							<label class="switch">
								<input type="checkbox" class="toggle_input">
								<span class="slider2 round"></span>
							</label>
						</div>
					</div><!--bottom cntnt-->
				</div><!--8th myhugegang-->
			</div><!--end/col-->
		</div><!--end/row-->
	</div>
</div>
<!-- end my hugegang plus -->

<!-- start pricing modal -->
<div class="pricing_modal" id="pricing_modal">
	<div class="pricing_modal_cntnt btm_innerbgimg">
		<div class="modal_pricing_list">
			<h2>Get Hugegang Plus</h2>
			<div class="lists_pricing ">
				<ul class="nav2">
					<li>
						<a href="javascript:void(0);">
							<div class="bst_vlue_box">
								<p class="best_off_txt">BEST VALUE</p>
							</div>
							<h6 class="count_month">12</h6>
							<p class="mnths">Months</p>
							<p class="month_price">&#8377;178.09/mo</p>
							<small class="offers">Save 50%</small>
						</a>
					</li>
					<li class="modla_priceaddclass">
						<a href="javascript:void(0);">
							<div class="bst_vlue_box">
								<!-- <p class="best_off_txt">BEST VALUE</p> -->
							</div>
							<h6 class="count_month">6</h6>
							<p class="mnths">Months</p>
							<p class="month_price">&#8377;237.41/mo</p>
							<small class="offers">Save 33%</small>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<div class="bst_vlue_box">
								<!-- <p class="best_off_txt">BEST VALUE</p> -->
							</div>
							<h6 class="count_month">12</h6>
							<p class="mnths">Months</p>
							<p class="month_price">&#8377;335.59/mo</p>
						</a>	
					</li>
				</ul>
				<script type="text/javascript">
					var a = document.querySelectorAll(".nav2 li a");
					for (var i = 0, length = a.length; i < length; i++) {
					  a[i].onclick = function() {
					    var b = document.querySelector(".nav2 li.modla_priceaddclass");
					    if (b){
					    	b.classList.remove("modla_priceaddclass");
					    } 
					    	this.parentNode.classList.add('modla_priceaddclass');	
					  };
					}
				</script>
			</div>
		</div>
		<div class="modal_pricing_slider">
			<div class="custom-slider">
				<div class="slides">
		            <div id="slide-0">
		            	<div class="carsoul_cntnt modal_slider_icns">
		            		<span class="flaticon-like carsose_icon"></span>
		            		<h4>Don't miss out</h4>
		            		<p>Get Unlimited Likes with Hugegang Plus</p>
		            		<button class="btns_clr">Keep Liking</button>
		            	</div>
		            </div>
		            <div id="slide-1">
		            	<div class="carsoul_cntnt modal_slider_icns">
		            		<span class="flaticon-hospital-sign-of-letter-h-inside-circles carsose_icon"></span>
		            		<h4>Get 1 free boost every month.</h4>
		            		<p>Skip the queue & get more matches!</p>
		            		<button class="btns_clr">Continue</button>
		            	</div>
		            </div>
		            <div id="slide-2">
		            	<div class="carsoul_cntnt modal_slider_icns">
		            		<span class="flaticon-key carsose_icon"></span>
		            		<h4> Choose Who sees you</h4>
		            		<p>Only be shown to people you've liked.</p>
		            		<button class="btns_clr">Continue</button>
		            	</div>
		            </div>
		            <div id="slide-3">
		            	<div class="carsoul_cntnt modal_slider_icns">
		            		<span class="flaticon-toggle carsose_icon toggle_tp"></span>
		            		<h4>Control Your Profile</h4>
		            		<p>Limit what others see with Hugegang Plus.</p>
		            		<button class="btns_clr">Continue</button>
		            	</div>
		            </div>
		            <div id="slide-4">
		            	<div class="carsoul_cntnt modal_slider_icns">
		            		<span class="flaticon-star carsose_icon"></span>
		            		<h4>Super Likes Every Day</h4>
		            		<p>You're Times  more likely to get a match!</p>
		            		<button class="btns_clr">Continue</button>
		            	</div>
		            </div>
		            <div id="slide-5">
		            	<div class="carsoul_cntnt modal_slider_icns">
		            		<span class="flaticon-maps-and-flags carsose_icon"></span>
		            		<h4>Like people around  the world</h4>
		            		<p>Become a jet-setter with Hugegang plus</p>
		            		<button class="btns_clr">Start Travelling</button>
		            	</div>
		            </div>
		            <div id="slide-6">
		            	<div class="carsoul_cntnt modal_slider_icns">
		            		<span class="flaticon-restore carsose_icon"></span>
		            		<h4>Don't miss a match!</h4>
		            		<p>Give them a second chance with hugegang plus</p>
		            		<button class="btns_clr">Get Reviews</button>
		            	</div>
		            </div>
		             <div id="slide-7">
		            	<div class="carsoul_cntnt modal_slider_icns">
		            		<span class="flaticon-block carsose_icon"></span>
		            		<h4>Turn off Ads</h4>
		            		<p>Have fun swiping</p>
		            		<button class="btns_clr">Continue</button>
		            	</div>
		            </div>
				</div>  
			</div>
			<div class="home_slider_btn">
			    <a href="#slide-0" class="active"></a>
			    <a href="#slide-1" class="external"></a>
			    <a href="#slide-2" class="external"></a>
			    <a href="#slide-3" class="external"></a>
			    <a href="#slide-4" class="external"></a>
			    <a href="#slide-5" class="external"></a>
			    <a href="#slide-6" class="external"></a>
			    <a href="#slide-7" class="external"></a>
		    </div>
		</div>
	</div>
</div>
<!-- end pricing modal -->

<script src="js/addclass2.js"></script>

<script type="text/javascript">

function hometabs(evt3, home_top_tabs) {
  var i2, tabcontent2, tablinks2;
  tabcontent2 = document.getElementsByClassName("home_profile_content");
  var addd =  document.getElementById("home_people_move");
  for (i2 = 0; i2 < tabcontent2.length; i2++) {
  		tabcontent2[i2].style.display = "none";

  }
  tablinks2 = document.getElementsByClassName("home_tablinks");
  for (i2 = 0; i2 < tablinks2.length; i2++) {
    tablinks2[i2].className = tablinks2[i2].className.replace(" active", "");
  }
  document.getElementById(home_top_tabs).style.display = "block";
  evt3.currentTarget.className += " active";
}

</script>
</body>
</html>