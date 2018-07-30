<?php
session_start();
session_destroy();
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
	setcookie('username', $uname, time()-60*60*24*60);
	setcookie('password', $pass, time()-60*60*24*60);
}
if (isset($_COOKIE['lastvisit'])) {
	setcookie('lastvisit', $visit, time()-60*60*24*60);
}
if (isset($_COOKIE['loggedintime'])) {
	setcookie('loggedintime', $logTime, time()-60*60*24*60);
}

header("location:SignIn.php");
?>