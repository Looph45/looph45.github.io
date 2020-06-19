<?php 
require_once 'includes/header.php';

echo ' <div class="lpmc-hero lpmc-page-title"> ';
echo ' <div class="container"> ';
echo ' <h2>'. $recruitment["title"] .' na '. $sitename .'</h2> ';
echo ' </div> ';
echo ' </div> ';


echo ' <p>&nbsp;</p> ';
 
echo ' <div class="container"> ';
echo ' <div class="row"> ';

echo ' <div class="col-sm-12"> ';
echo ' <img style="float:left;width:500px;height:250px;margin-right:15px;" src="assets/img/'. $builder["img"] .'"> <h3>'. $recruitment["builder_title_1"] .' <font style="color:#b300b3;font-weight:bold;">'. $recruitment["builder_name_1"] .'</font></h3>
<br /> <h4 style="font-weight:bold;">'. $recruitment["title_stauts_1"] .': '. $recruitment["recruitment_status_1"] .'</h4> 
<p>
<h4>'. $recruitment["recruitment_rules_title_1"] .':</h4>
<li>'. $recruitment["recruitment_rules_1_1"] .'</li>
<li>'. $recruitment["recruitment_minecraft_title_1"] .' <a style="color:green" href="http://minecraft.net">'. $recruitment["recruitment_minecraft_1"] .'</a></li></li>
<li>'. $recruitment["recruitment_teamspeak3_title_1"] .' <a href="https://www.teamspeak.com/en/">'. $recruitment["recruitment_ts3_1"] .'</a></li>
</p>
<li style="color:#ff4d4d">'. $recruitment["download_title_ts3_1"] .'<a href="https://www.teamspeak.com/en/downloads"> '. $recruitment["download_name_button_ts3_1"] .'</a></li>
<li>'. $recruitment["recruitment_complication_contact_1"] .' <font style="color:#1a75ff">'. $web["mail"] .'</font></li>';
echo ' </div> ';

echo ' <p> &nbsp; </p>';
echo ' <p> &nbsp; </p>';


echo ' <div class="col-sm-12"> ';
echo ' <img style="float:left;width:500px;height:250px;margin-right:15px;" src="assets/img/'. $helper["img"] .'"> <h3>'. $recruitment["builder_title_2"] .' <font style="color:#00b300;font-weight:bold;">'. $recruitment["builder_name_2"] .'</font></h3>
<br /> <h4 style="font-weight:bold;">'. $recruitment["title_stauts_2"] .': '. $recruitment["recruitment_status_2"] .'</h4> 
<p>
<h4>'. $recruitment["recruitment_rules_title_2"] .':</h4>
<li>'. $recruitment["recruitment_rules_1_2"] .'</li>
<li>'. $recruitment["recruitment_minecraft_title_2"] .' <a style="color:green" href="http://minecraft.net">'. $recruitment["recruitment_minecraft_2"] .'</a></li></li>
<li>'. $recruitment["recruitment_teamspeak3_title_2"] .' <a href="https://www.teamspeak.com/en/">'. $recruitment["recruitment_ts3_2"] .'</a></li>
</p>
<li style="color:#ff4d4d">'. $recruitment["download_title_ts3_1"] .'<a href="https://www.teamspeak.com/en/downloads"> '. $recruitment["download_name_button_ts3_2"] .'</a></li>
<li>'. $recruitment["recruitment_complication_contact_2"] .' <font style="color:#1a75ff">'. $web["mail"] .'</font></li>';
echo ' </div> ';

echo ' <p> &nbsp; </p>';
echo ' <p> &nbsp; </p>';

echo '<div class="col-sm-12">';
echo '<h1>'. $recruitment["external_title"] .'</h1>';
echo ' <p> ';
echo ' <h4>'. $recruitment["external_name"] .'</h4> ';
echo ' <h5>'. $recruitment["external_title_rules"] .'</h5>
       <li>'. $recruitment["external_rules_1"] .'</li>
       <li>'. $recruitment["external_rules_2"] .' <a style="color:green" href="http://minecraft.net">'. $recruitment["external_game_minecraft_title"] .'</a></li>
       <li>'. $recruitment["external_rules_3"] .'</li>';
echo ' </p> ';

echo ' <h4>'. $recruitment["external_contact"] .' <font style="color:#1a75ff">'. $web["mail"] .'</font></h4> ';
echo ' </div> ';

echo ' </div> ';
echo ' </div> ';

echo ' <p>&nbsp;</p>';
echo ' <p>&nbsp;</p>';
require_once 'includes/footer.php';
?>