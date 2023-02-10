<!DOCTYPE html>
<html>
<head>
<title>@ngl.jedlik.budapest</title>
<link rel="stylesheet" href="https://ngl.link/stylesheets/normalize.css">
<link rel="stylesheet" href="https://ngl.link/stylesheets/style.css?v=3">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ngl.link/scripts/main.js?v=2"></script>
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta property="og:site_name" content="NGL: Anonymous Q&A">
<style type="text/css">
@font-face { font-family: Roboto; src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf"); }
</style>
<script src="https://www.googletagmanager.com/gtag/js?l=dataLayer&amp;id=G-5DV1ZR5ZHG" async=""></script>
<style>
      .comment {
        resize: none;
        height: 60px;
        width: 400px;
      }
    </style>
</head>
<body>
<form action="sent.php" method="post">
<div class="container">
	<form id="mainform" class="form" method="post">
		<div class="bubble">
			<div class="header">
				<div class="pfp-container">
					<!-- You can change photo in here -->
					<img class="pfp" src="https://play-lh.googleusercontent.com/ZcYo7MXo6XuUzjbTPOE0Dz6p25QqB6mmkpYn0WNB8odFlVkpHrpozYENhUbFpcrSrGw=w240-h480-rw">
				</div>
				<!-- You can change username in here -->
				<div class="user-container">
					<div class="username">@ngl</div>
					<div class="prompt">send me anonymous messages!</div>
				</div>
			</div>
			<div class="textarea-container form-group">
				<div class="top-right-corner"></div>
				<div class="top-left-corner"></div>
				<div class="dice-button" onclick="dice()">🎲</div>

				<textarea id="TestArea" oninput="disappearer(false)" placeholder="send me anonymous messages..." name="text9" autocomplete="off" type="text" required></textarea>
			</div>
			<input class="deviceId" type="hidden" name="deviceId" value="c6eeb22a-a2a5-41ac-ba18-a39b7264d18e"></div>
		<div class="anonymous-tooltip">🔒 anonymous q&a</div>
		<div id="data1"></div>
		<button class="submit" id="gomb9" type="submit" style="display: none;">Send!</button>
	</form>
</div>
<div class="bottom-container" style="">
	<h2 class="download-prompt">👇 <span class="clickCount" id="clickCountID">234</span> people just tapped the button👇 </h2>
	<a class="button download-link pulse" href="https://apps.apple.com/us/app/ask-fun/id1596550932" target="_blank">Get your own messages!</a>
	<div class="tos-privacy">
		<a class="tos" href="https://ngl.link/p/terms">Terms</a>
		<a class="privacy" href="https://ngl.link/p/privacy">Privacy</a>
	</div>
</div>
</body>
<script>
function dice(){
	fetch('random.txt').then(response => response.text())
  .then(text => document.getElementById("TestArea").innerHTML = text.split('\n')[getRndInteger_Vissza(0, text.split('\n').length - 1)].trim())
  .then(disappearer(true))
  .then(writeUserData(0, "asd"))
}
function getRndInteger_Vissza(min, max){
return Math.floor(Math.random() * (max - min + 1) ) + min;
}
function getRndInteger(min, max) {document.getElementById('clickCountID').innerHTML = Math.floor(Math.random() * (max - min + 1) ) + min;}
(function myLoop(i) {
  setTimeout(function() {
	getRndInteger(200, 300);             
    if (--i) myLoop(i);   //  decrement i and call myLoop again if i > 0
  }, 1000)
})(9999);

function disappearer(zsorce){   //zsorce = force
	var len = document.getElementById('TestArea').value.length;
	var yourUl = document.getElementById("gomb9");
	yourUl.style.display = len >= 1 || zsorce ? 'block' : 'none';
	
}
</script>
</html>