<?php
//
date_default_timezone_set('America/Sao_Paulo');
  $dstr = date('Ymd', time());
  $dstry = date('Y', time());
  $dstrw = date('w', time());
  $dstryreiwa = date('Y（令和__）年m月d日（---）', time());
  $durl = 'https://smendx.asahi.com/honshiimage/thumb/' . $dstr . '_MT0_001.jpg';
  $wdaya = array('日', '月', '火', '水', '木', '金', '土' );
  $dstryreiwa = str_replace('__', ((int)$dstry-2018), $dstryreiwa);
  $dstryreiwa = str_replace('---', $wdaya[$dstrw], $dstryreiwa);

$str = <<<EOT
<!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/article#">
<meta name="robots" content="noindex">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>satle slide</title>
<link rel="SHORTCUT ICON" href="https://aftlife.securesite.jp/hirosato_info/img//hirosato_info.jpg">
<link rel="apple-touch-icon" href="https://aftlife.securesite.jp/hirosato_info/img//hirosato_info.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="textalogo.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="textalogo.png" />

<meta property="og:url" content="URL of page" />
<meta property="og:type" content="Category of page" />
<meta property="og:title" content=" Title of page" />
<meta property="og:description" content="Description of page" />
<meta property="og:site_name" content="Site name" />
<meta property="og:image" content="Site thumbnaii image URL" />

<meta name="fb:app_id" content="mtzhiro" />
<meta name="twitter:card" content="Summary Card" />
<meta name="twitter:site" content="@hirosato_info" />

<meta name="robots" content="noindex" />
<meta name="robots" content="noindex" />
<meta name="googlebot" content="noindex" />
<meta name="googlebot-news" content="noindex" />
<meta name="googlebot-news" content="nosnippet">

<!--link rel="stylesheet" href="style.css" type="text/css" media="screen" /-->
<!--meta http-equiv="refresh" content="0;url=https://aftlife.securesite.jp/other" -->
<style>


.typeing {
    opacity: 0;
}

.typeing.active {
    opacity: 1;
}


@media screen and (max-width: 580px) { 
  .dvcolmn-wrap {
  }
  .dvcolmn1 {

  }
  .dvcolmn2 {
  }

}
/* 580 */

@media screen and (min-width: 581px) and (max-width: 900px) {
  .dvcolmn-wrap {
    width: 100vw;
  }
  .dvcolmn1 {
    width: 99vw; float: left;
    margin: 0.1⃣vw;
  }
  .dvcolmn2 {
    width: 0vw; float: left;
    margin: 0.1⃣vw;
  }
}
/* 581 - 900 */

@media screen and (min-width: 900px) {
  .dvcolmn-wrap {
    width: 100vw;
  }
  .dvcolmn1 {
    width: 99vw; float: left;
    margin: 0.1⃣vw;
  }
  .dvcolmn2 {
    width: 0vw; float: left;
    margin: 0.1⃣vw;
  }
}
/* 900 */

pre {
/*
  overflow: auto;
  white-space: pre-wrap;
  word-wrap: break-word;
*/
  margin: 0.5vw;
}


.terminatefloat {
  clear: both;
}

.dicbg  {
    margin-top: -22px; 
    background-image: url('%AsahiShinbunImage%');
    background-size: cover;
    height: 710px;
/*    background-position: center;*/
    opacity: 0.25;
  -ms-filter: blur(0.6px);
  filter: blur(0.6px); 
  z-index: 9999;
}
.textov  {
    margin-top: -640px; 
    margin-left: 20px;
height: 10000px;
z-index: 9999;
}
.headlin {
    text-align: right;
}
.headlinm {
    font-size: 14pt;
    text-align: right;
}
.dispclock {
    margin-top: -10px; 
    margin-right: 40px; 
    text-align: right;
    color: #333;
}
.header {
  position: fixed;
  top: 0; 
  left: 0; 
  width: 100%;
  height: 67px; /* 64 width: 460px; */
  vertical-align: text-middle;
  background: #ccc; 
   z-index: 999;
    opacity: 0.9;
}
h1 {
  font-size: 50pt;
  z-index: 999;
}
ul, li {
  font-size: 40pt;
  z-index: 999;
}
.initpage {
  height: 800px;
}
</style>
</head>
<body>

<div class="dvcolmn-wrap">

<div class="dvcolmn1">
  <header class="header">
   <div style="width: 100vw;">
     <div style="width: 60vw; float: left; font-size: 15pt; margin-top: 20px;">
      &nbsp; &nbsp;  <b>hirosato-matzuura.biz</b>
       &nbsp; &nbsp;
       <span class="dispclock" id="RealtimeClockArea">※ここに時計が表示されます。</span>
     </div>
     <!--div style="width: 40vw; float: left;  background: #eee;  height: 67px; font-size: 14pt; font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;　"-->
     <div style="width: 40vw; float: left;  background: #eee;  height: 67px; font-size: 13.5pt; font-family: 'Noto Serif CJK JP','游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif; font-weight:600; margin-top: -10px;   -ms-filter: blur(0.7px);  filter: blur(0.7px); opacity: 0.8; ">
<!--      &nbsp; &nbsp; &nbsp;  <img src="branipohead1.jpg">-->
<br>         &nbsp; &nbsp;     &nbsp; &nbsp; &nbsp;  $dstryreiwa<a style="z-index: 999;" href="https://hirosato-matsuura.biz/satle/slide/img/kidnapped-man-newspaper-800x600.jpg" target="_blank">■</a> <a style="z-index: 999;" href="#" target="_blank">[]</a> <a style="font-size: 8pt; z-index: 999;" href="https://www.asahi.com" target="_blank">A</a>

     </div>
    </div>
  </header>

<script>
function showClock1() {
   var nowTime = new Date();
   var nowYear = nowTime.getUTCFullYear();
   var nowYearRei = (nowTime.getUTCFullYear() -2018);
   var nowMonth  = nowTime.getUTCMonth() + 1;
   var nowDay  = nowTime.getUTCDate();
   var nowHour = nowTime.getHours();
//   var nowHour2 = nowHour + 12;
//   var nowDay2 = nowDay;
   var  nYear = nowYear;
   var  nMonth = nowMonth;

//   if (nowMonth + 1 = 13) {
//     nYear = nowYear + 1;
//     nMonth = 1;
//   } else {
//     nYear = nowYear;
//     nMonth = nowMonth;
//   }
//   nTime = new Date( 2023, 9, 0 );
////   nTime = new Date( nYear, nMonth - 1, 0 );
//   var nowLastD = nTime.getUTCDate();
////   var nowLastD = 31;
//   if (nowHour2 > 23) {
//     nowHour2 = nowHour - 12;
//     nowDay2 = nowDay + 1;
//     if (nowDay2 > 31) {
//       nowDay2 = 1;
//     }
//   }
   var nowMin  = nowTime.getMinutes();
   var nowSec  = nowTime.getSeconds();

   nowYearRei = ('0' + nowYearRei).slice(-2);
   nowMonth = ('0' + nowMonth).slice(-2);
   nowDay = ('0' + nowDay).slice(-2);
   nowHour = ('0' + nowHour).slice(-2);
   nowMin = ('0' + nowMin).slice(-2);
   nowSec = ('0' + nowSec).slice(-2);
var msg = "" + '(Reiwa' + nowYearRei  + ') '  + nowYear + '-' + nowMonth + '-' + nowDay + ' ' + nowHour + ":" + nowMin + ":" + nowSec + "[UTC-3]"; //  + "(" + nowDay2  + "|" + nowLastD + ")"
   document.getElementById("RealtimeClockArea").innerHTML = msg;
}
setInterval('showClock1()',1000);
</script>
<div class="dicbg">
  </div><!-- backg image -->
  <div class="textov">
<div class="initpage">
    <h1>SATLE slide</h1>
<ul>
<li>testing</li>
<li>write topic</li>
</ul>
</div><!-- initpage -->


<div>
    <h1>test</h1>
<ul>
<li>test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 </li>
<li>test2 test2 test2 test2 </li>
</ul>
    test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1<br>
    test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1<br>
    test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1<br>
    test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1<br>
    test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1<br>
    test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1<br>
    test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1<br>
    test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1<br>
    test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1<br>
    test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1<br>
    test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1<br>
    test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1<br>
    test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1 test1<br>
</div>




</div>

    


</div><!-- end float 1 (dvcolmn 1)-->








<div class="dvcolmn2">


</div><!-- end float 2 (dvcolmn 2 )-->







</div><!-- end width 99vw (wrap-dvcolmn)-->


<div class="terminatefloat"></div><!-- terminate float -->




</body>
</html>
EOT;



$str = str_replace('%AsahiShinbunImage%', $durl, $str);

echo $str;
