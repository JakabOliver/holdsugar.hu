<?php 

$head=file_get_contents('head.part.html');
$foot=file_get_contents('foot.part.html');


$path='';
if(!empty($_GET['time']))
    $path.=$_GET['time'].'/';
if(!empty($_GET['sub']))
    $path.=$_GET['sub'].'/';


$site=file_get_contents($path.'index.html');


echo $head.$site.$foot;
