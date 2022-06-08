<?php
$user = "root";
$pwd = "";
$db = "mglsi_news";
$server = "localhost";

$link = mysqli_connect($server, $user, $pwd, $db);

if ($link)
{
echo "";
}
else 
{
die (mysqli_connect_error());
}
?>