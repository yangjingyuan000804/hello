<?php
$page=$_GET['page'];
$html = file_get_contents("https://api.tumiv.com/v2/cqupt/student?year=2015&page=".$page);
echo $html;
?>
