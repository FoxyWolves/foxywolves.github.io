<?php
include("../res/x5engine.php");
$nameList = array("r72","3tt","edc","u3n","v2p","ms2","eaj","m8n","dxc","ad8");
$charList = array("X","X","8","A","6","L","W","E","3","N");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
