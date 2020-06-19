<?php 
require_once 'includes/header.php';

echo ' <div class="lpmc-hero lpmc-page-title"> ';
echo ' <div class="container"> ';
echo ' <h2>'. $vip["line"] .'</h2> ';
echo ' </div> ';
echo ' </div> ';

echo ' <p>&nbsp;</p>'; 

echo ' <div class="container"> ';
echo ' <div class="row"> ';
echo ' <div class="col-sm-6">  ';
echo ' <div class="panel panel-custom-once">  ';

echo ' <div class="panel-heading"><h4 style="font-size: 30px" class="cosmic">'. $vip["republic_1"] .'</h4></div>  ';  
echo ' <div class="panel-body">  ';

echo ' <form action="'. $linkwebu .'gen-vip2" method="get">  ';
echo ' <div class="form-group has-feedback">  ';
echo ' <div class="input-group"> <input class="form-control formINPUT" type="text" name="a" value="" placeholder="'. $vip["gen_placeholder_1"] .'" required></div>  ';
echo ' </div>  ';
echo ' <button type="submit" class="btn moj btn-sm center-block btn-block steamBTN"> <strong>'. $vip["gen_button_1"] .'</strong> </button> ';
echo ' </form> ';
echo ' <p>&nbsp;</p>'; 
echo ' </div> '; 
echo ' </div> ';
echo ' </div> ';



echo ' <div class="col-sm-6">  ';
echo ' <div class="panel-heading"><h4 style="font-size: 30px" class="cosmic">'. $vip["republic_2"] .'</h4></div>   ';

echo ' <form action="'. $linkwebu .'gen-vip1" method="get">  ';
echo ' <div class="form-group has-feedback">  ';
echo ' <div class="input-group"> <input class="form-control formINPUT" type="text" name="a" value="" placeholder="'. $vip["gen_placeholder_2"] .'" required /></div>  ';
echo ' </div>  ';
echo ' <button type="submit" class="btn moj btn-sm center-block btn-block steamBTN"> <strong>'. $vip["gen_button_2"] .'</strong> </button> ';
echo ' </form>  ';
                
echo ' </div>   ';
 


echo ' <div class="col-sm-6">  ';
echo ' <div class="panel panel-custom-once">  ';
echo ' <div class="panel-heading"><h5 class="cosmic" style="font-size: 30px">'. $vip["benefits_1"] .' (<font style="color:#0099ff">'. $vip["type_1"] .'</font>)</h5></div> ';  
echo ' <div class="panel-body"> ';
echo ' <h5 style="color:#00b300;font-weight:bold;">'. $vip["server_1"] .'</h5>  ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip_1"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip_2"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip_3"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip_4"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip_5"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip_6"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip_7"] .'</h6> ';
echo ' <br /> ';
echo ' <h5 style="color:#ff3333;font-weight:bold;">'. $vip["server_2"] .'</h5>  ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip_8"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip_9"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip_10"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip_11"] .'</h6> ';
echo ' <br /> ';
echo ' <h5 style="color:#0066ff;font-weight:bold;">'. $vip["server_3"] .'</h5> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip_12"] .'</h6> ';
echo ' </div>   ';
echo ' </div>   ';
echo ' </div> ';






echo ' <div class="col-sm-6">  ';
echo ' <div class="panel panel-custom-once">  ';
echo ' <div class="panel-heading"><h5 class="cosmic" style="font-size: 30px">'. $vip["benefits_2"] .' (<font style="color:#0099ff">'. $vip["type_2"] .'</font>)</h5></div>   ';
echo ' <div class="panel-body"> ';
echo ' <h5 style="color:#00b300;font-weight:bold;">'. $vip["server_1"] .'</h5> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip+_1"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip+_2"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip+_3"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip+_4"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip+_5"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip+_6"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip+_7"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip+_8"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip+_9"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip+_10"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip+_11"] .'</h6> ';
echo ' <br /> ';
echo ' <h5 style="color:#ff3333;font-weight:bold;">'. $vip["server_2"] .'</h5>  ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip+_12"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip+_13"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip+_14"] .'</h6> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip+_15"] .'</h6> ';
echo ' <br /> ';
echo ' <h5 style="color:#0066ff;font-weight:bold;">'. $vip["server_3"] .'</h5> ';
echo ' <h6 style="font-weight:bold">'. $vip["benefits_vip+_16"] .'</h6> ';
echo ' </div> ';
echo ' </div> '; 
echo ' </div> ';
echo ' </div> ';
echo ' </div> ';

require_once 'includes/footer.php';

?>