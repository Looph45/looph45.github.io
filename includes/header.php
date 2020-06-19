<?php 

require_once 'function.php';

 
 $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');

/* start navbar */


echo ' <html> ';
echo ' <head> ';
echo ' <meta charset="utf-8"> ';
echo '<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>';
echo ' <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> ';
echo ' <meta name="description" content="'. $content_key .'">';
echo ' <meta name="description" content="'. $sitename_down .'">';
echo ' <meta name="author" content="Denis "Ax1s" Mihál"> ';
echo ' <title>'. ucfirst($sitename) .' | '. ucfirst($page_name) .'</title> ';
echo ' <link href="'. $linkwebu .'assets/css/bootstrap.min.css" rel="stylesheet"> ';
echo ' <link href="'. $linkwebu .'assets/css/half-slider.css" rel="stylesheet"> ';
echo ' <link href="'. $linkwebu .'assets/css/half-slider.css" rel="stylesheet"> ';
echo ' <link href="'. $linkwebu .'assets/js/meticMenu/metisMenu.min.css" rel="stylesheet"> ';
echo ' <link rel="icon" href="assets/img/'. $web["favicon"] .'" type="image/png"> ';
echo ' </head> ';
echo ' <body> ';
echo ' <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"> ';
echo ' <div class="container"> ';
echo ' <a class="navbar-brand" style="color:purple;font-weight:bold;" href="#">'. $sitename .'</a> ';
echo ' <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> ';
echo ' <span class="navbar-toggler-icon"></span> ';
echo ' </button> ';

echo ' <div class="collapse navbar-collapse" id="navbarResponsive"> ';

echo ' <ul class="navbar-nav ml-auto"> ';

if ($page_name == $menu["lin_1"]) echo '<li class="nav-item active"> <a class="nav-link" href="'. $linkwebu .''. $menu["lin_1"] .'"><i class="fas fa-home"></i> '. $menu["1"] .'</a></li>';
    else echo ' <li class="nav-item"> <a class="nav-link" href="'. $linkwebu .''. $menu["lin_1"] .'"><i class="fas fa-home"></i> '. $menu["1"] .'</a></li> ';

if ($page_name == $menu["lin_2"]) echo '<li class="nav-item active"> <a class="nav-link" href="'. $linkwebu .''. $menu["lin_2"] .'"><i class="fas fa-users"></i> '. $menu["2"] .'</a></li>';
    else echo ' <li class="nav-item"> <a class="nav-link" href="'. $linkwebu .''. $menu["lin_2"] .'"><i class="fas fa-users"></i> '. $menu["2"] .'</a></li> ';

if ($page_name == $menu["lin_3"]) echo '<li class="nav-item active"> <a style="color:#ffd700" class="nav-link" href="'. $linkwebu .''. $menu["lin_3"] .'"><i class="fas fa-star-half"></i>'. $menu["3"] .'</a></li>';
    else echo ' <li class="nav-item"> <a class="nav-link" href="'. $linkwebu .''. $menu["lin_3"] .'"><i class="fas fa-star-half"></i>'. $menu["3"] .'</a></li> ';

if ($page_name == $menu["lin_4"]) echo '<li class="nav-item active"> <a class="nav-link" href="'. $linkwebu .''. $menu["lin_4"] .'"><i class="far fa-newspaper"></i> '. $menu["4"] .'</a></li>';
    else echo ' <li class="nav-item"> <a class="nav-link" href="'. $linkwebu .''. $menu["lin_4"] .'"><i class="far fa-newspaper"></i> '. $menu["4"] .'</a></li> ';

if ($page_name == $menu["lin_5"]) echo '<li class="nav-item active"> <a style="color:red" class="nav-link" href="'. $linkwebu .''. $menu["lin_5"] .'">'. $menu["5"] .'</a></li>';
    else echo ' <li class="nav-item"> <a class="nav-link" href="'. $linkwebu .''. $menu["lin_5"] .'">'. $menu["5"] .'</a></li> ';

if ($page_name == $menu["lin_6"]) echo '<li class="nav-item active"> <a class="nav-link" href="'. $linkwebu .''. $menu["lin_6"] .'">'. $menu["6"] .'</a></li>';
    else echo ' <li class="nav-item"> <a class="nav-link" href="'. $linkwebu .''. $menu["lin_6"] .'">'. $menu["6"] .'</a></li> ';

if ($page_name == $menu["lin_7"]) echo '<li class="nav-item active"> <a class="nav-link" href="'. $linkwebu .''. $menu["lin_7"] .'">'. $menu["7"] .'</a></li>';
    else echo ' <li class="nav-item"> <a class="nav-link" href="'. $linkwebu .''. $menu["lin_7"] .'">'. $menu["7"] .'</a></li> ';



echo ' <div class="dropdown"> ';
echo ' <button style="color:gray" class="btn nnav dropdown-toggle" data-toggle="dropdown">'. $menu["dropname"] .'</button> ';
echo ' <div style="backgrond-color:transparent" class="dropdown-menu"> ';
echo ' <a class="dropdown-item" style="color:#ff4d4d" href="'. $linkwebu .''. $menu["lin_9"] .'"><i class="fas fa-exclamation"></i> '. $menu["9"] .'</a> ';
echo ' <a class="dropdown-item" style="color:#009900" href="'. $linkwebu .''. $menu["lin_10"] .'"><i class="far fa-plus-square"></i> '. $menu["10"] .'</a> ';
echo ' <a class="dropdown-item" style="color:#ffa500" href="'. $menu["lin_11"] .'"><i class="fas fa-chart-line"></i> '. $menu["11"] .'</a> ';
echo ' <a class="dropdown-item" href="'. $linkwebu .''. $menu["lin_8"] .'"><i class="fas fa-ban"></i> '. $menu["8"] .'</a> ';
echo ' <a class="dropdown-item" href="'. $linkwebu .''. $menu["lin_12"] .'">'. $menu["12"] .'</a> ';
echo ' <a class="dropdown-item" href="'. $linkwebu .''. $menu["lin_13"] .'">'. $menu["13"] .'</a> ';
echo ' <a class="dropdown-item" href="'. $linkwebu .''. $menu["lin_14"] .'">'. $menu["14"] .'</a> ';
echo ' </div> ';
echo ' </div> ';


echo ' </ul> ';
echo ' </div> ';
echo ' </div> ';
echo ' </nav> ';

/* End navbar */
?>
