<?php
/**
* Show user information like IP address, useragent
**/
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$referrer = $_SERVER['HTTP_REFERER'];
$host = $_SERVER['SERVER_NAME'];
$hostname = gethostname();
 if ($referrer == "") {
  $referrer = "This page was accessed directly";
  }
echo "<b>Visitor IP address:</b><br/>" . $ip . "<br/>";
echo "<b>Browser (User Agent) Info:</b><br/>" . $browser . "<br/>";
echo "<b>Referrer:</b><br/>" . $referrer . "<br/>";
echo "<b>Host:</b><br/>" . $host . "<br/>";
echo "<b>Hostname:</b><br/>" . $hostname . "<br/>";
?>
