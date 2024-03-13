<?php

function passgen($length){
  $chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
            '0123456789';

  $str = '';
  $max = strlen($chars) - 1;

  for ($i=0; $i < $length; $i++)
    $str .= $chars[rand(0, $max)];

  return $str;
}

?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>rand(PW) - Random Password</title>
	<style type="text/css">
	body {
		background: #f0f0f0;
		margin: 0;
		padding: 0;
		font: 10px normal Verdana, Arial, Helvetica, sans-serif;
		color: #444;
	}
	h1 {font-size: 3em; margin: 20px 0;}
	.container {width: 800px; margin: 10px auto;}
	ul.tabs {
		margin: 0;
		padding: 0;
		float: left;
		list-style: none;
		height: 32px;
		border-bottom: 1px solid #999;
		border-left: 1px solid #999;
		width: 100%;
	}
	ul.tabs li {
		float: left;
		margin: 0;
		padding: 0;
		height: 31px;
		line-height: 31px;
		border: 1px solid #999;
		border-left: none;
		margin-bottom: -1px;
		background: #e0e0e0;
		overflow: hidden;
		position: relative;
	}
	ul.tabs li a {
		text-decoration: none;
		color: #000;
		display: block;
		font-size: 1.2em;
		padding: 0 20px;
		border: 1px solid #fff;
		outline: none;
	}
	ul.tabs li a:hover {
		background: #ccc;
	}	
	html ul.tabs li.active, html ul.tabs li.active a:hover  {
		background: #fff;
		border-bottom: 1px solid #fff;
	}
	.tab_container {
		border: 1px solid #999;
		border-top: none;
		clear: both;
		float: left; 
		width: 100%;
		background: #fff;
		-moz-border-radius-bottomright: 5px;
		-khtml-border-radius-bottomright: 5px;
		-webkit-border-bottom-right-radius: 5px;
		-moz-border-radius-bottomleft: 5px;
		-khtml-border-radius-bottomleft: 5px;
		-webkit-border-bottom-left-radius: 5px;
	}
	.tab_content {
		padding: 20px;
		font-size: 1.2em;
	}
	.tab_content h2 {
		font-weight: normal;
		padding-bottom: 10px;
		border-bottom: 1px dashed #ddd;
		font-size: 1.8em;
	}
	.tab_content h3 a{
		color: #254588;
	}
	.tab_content img {
		float: left;
		margin: 0 20px 20px 0;
		border: 1px solid #ddd;
		padding: 5px;
	}
	</style>
	<script type="text/javascript"src="jquery.js"></script>
    <script language="javascript" src="passchk_fast.js"></script>
	<script language="javascript" src="passchk_test.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {

		//Default Action
		$(".tab_content").hide(); //Hide all content
		$("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(".tab_content:first").show(); //Show first tab content
		
		//On Click Event
		$("ul.tabs li").click(function() {
			$("ul.tabs li").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(".tab_content").hide(); //Hide all tab content
			var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active content
			return false;
		});

	});
	</script>
</head>
<body>
<div class="container">

	<center><h1>rand(PW)</h1></center>
    <ul class="tabs">
        <li><a href="#complex">Complex Password</a></li>
        <li><a href="#simple">Simple Passwords</a></li>
        <li><a href="#software">Recommended Software</a></li>
    </ul>
    <div class="tab_container">
        <div id="complex" class="tab_content">
            <h2>Complex Passwords - Hard to remember</h2>
			<p>
            <h3>Here, try this password on for size:</h3>
			<form method="POST" action="#" onSubmit="return false" name="passchk_form">
			<input type="text" size="40" id="passchk_field" value="<?php echo passgen(rand(20, 22)); ?>" style="text-align:center;"> <i><- Feel free to enter your own password to test it.</i>
			</form>
			<span id="passchk_result">Loading...</span>
			Your password can be brute forced in <span id="time">less than one second</span> (based on 300 billion guesses per second, <a href="https://twitter.com/Chick3nman512/status/1580712040179826688" target="_blank">the rate of a RTX 4090 as of October 2022</a>).
			<script language="javascript" src="pwdstr.js"></script>
			<script>
				$('#passchk_field').pwdstr('#time').focus();
			</script>
			</p>
        </div>
        <div id="simple" class="tab_content">
            <h2>Simple Passwords - Easy to remember</h2>
			<p><center><a href="https://xkcd.com/936/" target="_blank"><img src="https://imgs.xkcd.com/comics/password_strength.png"></a></center></p>
        </div>
        <div id="software" class="tab_content">
            <h2>Recommended Password Software</h2>
			<p><a href="https://keepass.info" target="_blank">KeePass</a> - Highly recommended for password storage and creation. Available for multiple platforms including Windows and Android (sync your password database with your phone).</p> 
            
        </div>
    </div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5350997-21', 'rand.pw');
  ga('send', 'pageview');

</script>
</body>
</html>
