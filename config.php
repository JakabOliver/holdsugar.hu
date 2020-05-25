<?php 

if($_SERVER['SERVER_NAME']=='local.holdsugar.hu'){
    define('ENV', 'local');
}else{
    define('ENV', 'live');
}