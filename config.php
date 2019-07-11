<?php 

if($_SERVER['SERVER_NAME']=='localhost'){
    define('ENV', 'local')
}else{
    define('ENV', 'live')
}