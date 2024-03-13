<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>How secure is my data on a VPS or server?</title>
	<link href="style.css" rel="stylesheet">
	<!--[if lt IE 9]>
		<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-5350997-21', 'auto');
	  ga('send', 'pageview');
	</script>
</head>
<body>
<div class="container">
<div class="mainbox">
	<h2 style="text-align:center;">How secure is my data on a VPS or server?</h2>
	<p>If you want to be 100% sure nobody else has access to your data. Build a server and bury it somewhere that only you know about (of course anybody with a metal detector can stumble upon it, but you have a good chance that they will just sell it for cash without booting it up).<br />
	<br />
	Short of that, colocating your own hardware (server and network gear) is the next best thing but if the data center wanted access there are plenty of methods out there.<br />
	<br />
	Renting a dedicated server is a cheaper alternative but the hardware isn't yours so there nothing stopping the data center from mirroring your network ports or cloning your hard drives (I know of a few instances where a government agency did this for data center's when the staff didn't have the knowledge to do so and the clients never knew about it).<br />
	<br />
	With a true VPS like Xen/KVM/VMware/etc... it takes a few steps for the server owner to access your data and even if you encrypt your drives they have access to the keys in RAM any time they want.<br />
	<br />
	With containers like OpenVZ then your data is basically accessible by anybody who has elevated access on the server.<br />
	<br />
	If your data is super critical and needs to remain private (as in you're going to jail or people will die if it's ever seen by anybody) then colocate your own hardware and run your own network, preferably on your own property or in a locked cage that nobody else can get into (I don't think many data centers offer cages to withstand a tank, much less bolt cutters though).<br />
	<br />
	If you're just worried about somebody else viewing your search history or your crazy image collection, then hosting with a provider you trust will save you money and headaches. If you have any doubt in your mind about a provider, don't host sensitive information with them.<br />
	<br />
	Basically, any reputable provider will not go snooping through client's files just because they are bored.<br />
</div>
</div>
<br />
<br />
<div class="footer">
</div>
</body>
</html>