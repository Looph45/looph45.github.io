<?php 
require_once 'includes/header.php';


echo ' <div class="lpmc-hero lpmc-page-title"> ';
echo ' <div class="img-header"> ';
echo ' <div class="container"> ';
echo ' <div class="nadpis-podstranka"> ';
echo ' <h2>'. $vip["nadpis_CZ"] .'</h2> ';
echo ' </div> ';
echo ' </div> ';
echo ' </div> ';

echo ' <div class="container">  ';
echo ' <div class="row"> ';

$a = $_GET[a];
 

echo ' <p>&nbsp;</p> ';
echo ' <div class="col-sm-12">  ';
echo ' <h4>'. $vip["nick"] .'<font style="color:purple"><strong> '. $a .'</strong></font></h4> ';
echo ' <p>&nbsp;</p> ';
echo ' </div>  ';

echo ' <div class="col-sm-6">  ';
echo ' <h3 class="cosmic"><font style="color:purple">'. $vip_CZ["type_1"] .'</font></h3> ';

echo ' <p>'. $vip_CZ["value_name"] .' <font style="color:purple">'. $vip_CZ["value"] .' '. $a .'</font></p>  ';
echo ' <p>'. $vip_CZ["value_number"] .' <font style="color:purple">'. $vip_CZ["number"] .'</font></p>  ';
echo ' <hr> '; 
echo ' <p>'. $vip_CZ["value_server_name"] .' <font style="color:#00b300">'. $vip_CZ["value_server"] .'</font></p>  ';
echo ' <hr> ';
echo ' <p>'. $vip_CZ["value_expide_name"] .' <font style="color:#ff1a1a">'. $vip_CZ["value_expide"] .'</font></p> '; 
echo ' <p>'. $vip_CZ["value_prize_name"] .' <font style="color:#ff1a1a">'. $vip_CZ["value_prize"] .'</font></p>  ';

echo ' </div>  ';

echo ' <div class="col-sm-6">  ';
echo ' <h3 class="cosmic"><font style="color:purple">'. $vipplus_CZ["type_1"] .'</font></h3> ';

echo ' <p>'. $vipplus_CZ["value_name"] .' <font style="color:purple">'. $vipplus_CZ["value"] .' '. $a .'</font></p>  ';
echo ' <p>'. $vipplus_CZ["value_number"] .' <font style="color:purple">'. $vipplus_CZ["number"] .'</font></p>  ';
echo ' <hr> '; 
echo ' <p>'. $vipplus_CZ["value_server_name"] .' <font style="color:#00b300">'. $vipplus_CZ["value_server"] .'</font></p>  ';
echo ' <hr> ';
echo ' <p>'. $vipplus_CZ["value_expide_name"] .' <font style="color:#ff1a1a">'. $vipplus_CZ["value_expide"] .'</font></p> '; 
echo ' <p>'. $vipplus_CZ["value_prize_name"] .' <font style="color:#ff1a1a">'. $vipplus_CZ["value_prize"] .'</font></p>  ';


echo ' </div> ';
echo ' </div> ';
echo ' </div> ';

echo ' <p>&nbsp;</p> ';

echo ' <div class="img-header2"> ';
echo ' <div class="container"> ';
echo ' <p><h3>'. $vip["VOP"] .'</h3></p> ';
echo ' <li style="color:red">'. $vip["VOP_1"] .'</li>';
echo ' <li>'. $vip["VOP_2"] .' </br></li>';
echo ' <li>'. $vip["VOP_3"] .'</li>';
echo ' <li>'. $vip["VOP_4"] .'</li>';
echo ' </div> ';
echo ' </div> ';

echo ' </div>  ';
echo ' </div> ';

echo ' <p>&nbsp;</p> ';
echo ' <p>&nbsp;</p> ';
echo ' <p>&nbsp;</p> ';
echo ' <p>&nbsp;</p> ';

require_once 'includes/footer.php'; 

?>