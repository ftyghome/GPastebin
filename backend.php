<?php
$opentxt = fopen("users.txt", "r");
$user=fread($opentxt,filesize("users.txt"));
$user++;
fclose($opentxt);
$writetxt = fopen("users.txt", "w");
fwrite($writetxt, $user);
fclose($writetxt);
$myfile = fopen("data/".$user.".codex", "w") ;
$code=$_POST["code"]; 
$code=base64_encode($code);
fwrite($myfile, $code);
fclose($myfile);
$url="viewer.php?id=".$user;
Header("HTTP/1.1 303 See Other"); 
Header("Location: $url"); 
exit;
?>