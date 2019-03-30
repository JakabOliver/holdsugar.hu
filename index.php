<?php 

$head=file_get_contents('head.part.html');
$foot=file_get_contents('foot.part.html');

if(isset($_GET['kepek'])){
    $files=scandir(__DIR__.'/kepek/');
    $site='<h2>Képek</h2><section class="row">';
    foreach($files as $file){
        if(!in_array($file, array('.', '..'))){
            $site.='
            <div class="col-12 col-md-6 col-lg-3 my-2">
                <a href="'.$file.'" target="_blank">
                <img class="img-fluid" src="'.$file.'">
                </a>
            </div>
            ';
        }
    }

}else{
    $path='';
    if(!empty($_GET['time']))
        $path.=$_GET['time'].'/';
    if(!empty($_GET['sub']))
        $path.=$_GET['sub'].'/';
        $site=file_get_contents($path.'index.part.html');
        
}



echo $head.$site.$foot;
