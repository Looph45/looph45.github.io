<?php
require_once 'includes/header.php';

echo '<header>';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-sm-12">';
echo '<center>';
echo '<h1 style="font-weight:bold;color:purple;font-size:45px;" class="cosmic logo">'. $sitename .'</h1>';
echo '<h3 style="font-weight:bold;color:gray;margin-top:50px;" ;>'. $sitename_down .'</h2>';
echo ' <h4 style="color:gray" class="text-center">Pod si s namy pokecať na teamspeak3 server <a title="Klikni pre pripojenie na server" style="color:purple" href="ts3server://'. $ts3["ip"] .'/?port='. $ts3["port"] .'">'. $ts3["ip"] .'</a></h4> ';
echo '<h4 style="color:gray">Práve u nás hrá <font style="color:purple;font-weight:bold;">'. $online .'</font> hráčov, pridaj sa k ním aj ty!</h4>';
echo '</center>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</header>';

echo '<div class="container">';
echo '<div class="row">';

echo '<div style="margin-top:20px;" class="text-center col-sm-6">';
echo '<p>';
echo '<h2 style="font-weight:bold">'. $status["status_line"] .'</h2>';

if(empty($ping['error'])) { 
echo ' <h4 class="text-center">'. $mc_status["N"] .': <font style="color:purple">'. $server["ip"] .'</font> </h4> ';
echo ' <h5 class="text-center">'. $mc_status["V"] .': <font style="color:purple"> '. $version .''. $server["version_new"] .'</font></h5> ';
echo ' <h5 class="text-center">'. $mc_status["P"] .': <font style="color:purple">'.$online.'</font><font style="color:gray">/'.$max.'</font></h5>';
echo ' <h5 class="text-center">'. $mc_status["S"] .':';
if(empty($ping['error'])) { 
	echo '<b style="color:green"> '. $server["online"] .'</b>'; 
}else{ 
	echo '<b style="color:red"> '. $server["offline"] .'</b>';
}
echo '</h5>';
}

echo '</p>';
echo '</div>';

echo '<div style="margin-top:20px;" class="text-center col-sm-6">';
echo '<p>';
echo '<h2 style="font-weight:bold">'. $vote["vote_line"] .'<br />'. $sitename .'</h2>';
echo '<form action="'. $linkwebu .'includes/vote" method="get">';
echo '<div class="form-group has-feedback">';
echo '<div class="input-group col-sm-12">';
echo '<input class="form-control" type="text" name="a" value="" placeholder="'. $vote["veta"] .'" required />';
echo '</div>';
echo '</div>';
echo '<button type="submit" class="btn btn-normal"> <strong>'. $vote["btn"] .'</strong></button>';
echo '</form>';
echo '</p>';
echo '</div>';

echo '<div class="text-center col-sm-12">';
echo '<p>';
echo '<h2 style="font-weight:bold">'. $server["actual"] .'</h2>';
require_once 'includes/mc_heads.php';
echo '</p>';
echo '</div>';

echo '<p>&nbsp;</p>';
echo '<div class="line"></div>';

echo '<div class="news_home">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="text-center col-sm-12">';
echo '<p><h1 style="color:white;font-weight:bold;padding-bottom:2%;">'. $new["line"] .'</h1></p>
<hr>
';
echo '</div>';

echo '<div style="margin-bottom: 1%;" class="text-center new_1 col-sm-5">';
echo '<a style="color:white;text-decoration:none;" href="'. $new["link_1"] .'">';
echo '<p><h3>'. $new["header_1"] .'</h3>';
echo '<small>'. $new["text_1"] .'</small></p>';
echo '</a>';
echo '</div>';

echo '<div class="col-sm-2"></div>';

echo '<div style="margin-bottom: 1%;" class="text-center new_2 col-sm-5">';
echo '<a style="color:white;text-decoration:none;" href="'. $new["link_2"] .'">';
echo '<p><h3>'.  $new["header_2"] .'</h3>';
echo '<small>'.  $new["text_2"] .'</small></p>';
echo '</a>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '&nbsp;';
echo '<div class="container">';
echo '<div class="row">';
echo '<div style="margin-bottom: 1%;" class="text-center new_3 col-sm-5">';
echo '<a style="color:white;text-decoration:none;" href="'.  $new["link_3"] .'">';
echo '<p><h3>'.  $new["header_3"] .'</h3>';
echo '<small>'.  $new["text_3"] .'</small></p>';
echo '</a>';
echo '</div>';

echo '<div class="col-sm-2"></div>';

echo '<div style="margin-bottom: 1%;" class="text-center new_4 col-sm-5">';
echo '<a style="color:white;text-decoration:none;" href="'. $new["link_4"] .'">';
echo '<p><h3>'. $new["header_4"] .'</h3>';
echo '<small>'. $new["text_4"] .'</small></p>';
echo '</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

include 'includes/gallery.php';
require_once 'includes/footer.php';
?>