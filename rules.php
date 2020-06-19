<?php 
require_once 'includes/header.php';

echo ' <div class="lpmc-hero lpmc-page-title"> ';
echo ' <div class="container"> ';
echo ' <h2>'. $rules["name"] .'</h2> ';
echo ' </div> ';
echo ' </div> ';

echo ' <p>&nbsp;</p>';
echo ' <div class="container"> ';
echo ' <center><h2 style="color:#1a75ff;font-weight:bold">'. $rules["web"] .'</h2></center> &nbsp;';
echo ' <div class="row"> ';
echo ' <div class="col-sm-6 center"> ';
echo ' <ul> ';
echo ' <li>'. $rules["web_1"] .'</li> ';
echo ' <li>'. $rules["web_2"] .'</li> ';
echo ' <li>'. $rules["web_3"] .'</li> ';
echo ' <li>'. $rules["web_4"] .'</li> ';
echo ' <li>'. $rules["web_5"] .'</li> ';
echo ' <li>'. $rules["web_6"] .'</li> ';
echo ' <li>'. $rules["web_7"] .'</li> ';
echo ' </ul> ';
echo ' </div> ';

echo ' <div class="col-sm-6 center"> ';
echo ' <ul> ';
echo ' <li>'. $rules["web_8"] .'</li> ';
echo ' <li>'. $rules["web_9"] .'</li> ';
echo ' <li>'. $rules["web_10"] .'</li> ';
echo ' <li>'. $rules["web_11"] .'</li> ';
echo ' <li>'. $rules["web_12"] .'</li> ';
echo ' <li>'. $rules["web_13"] .'</li> ';
echo ' <li>'. $rules["web_14"] .'</li> ';
echo ' <li>'. $rules["web_15"] .'</li> ';
echo ' </ul> ';
echo ' </div> &nbsp;';

echo ' </div> ';
echo ' </div> ';


echo ' <div class="container"> ';
echo ' <center><h2 style="color:#33cc33;font-weight:bold">'. $rules["forum"] .'</h2></center> &nbsp;';
echo ' <div class="row"> ';

echo ' <div class="col-sm-6 center"> ';
echo ' <ul> ';
echo ' <li>'. $rules["forum_1"] .'</li> ';
echo ' <li>'. $rules["forum_2"] .'</li> ';
echo ' <li>'. $rules["forum_3"] .'</li> ';
echo ' <li>'. $rules["forum_4"] .'</li> ';
echo ' <li>'. $rules["forum_5"] .'</li> ';
echo ' <li>'. $rules["forum_6"] .'</li> ';
echo ' <li>'. $rules["forum_7"] .'</li> ';
echo ' </ul> ';
echo ' </div> ';


echo ' <div class="col-sm-6 center"> ';
echo ' <ul> ';
echo ' <li>'. $rules["forum_8"] .'</li> ';
echo ' <li>'. $rules["forum_9"] .'</li> ';
echo ' <li>'. $rules["forum_10"] .'</li> ';
echo ' <li>'. $rules["forum_11"] .'</li> ';
echo ' <li>'. $rules["forum_12"] .'</li> ';
echo ' <li>'. $rules["forum_13"] .'</li> ';
echo ' <li>'. $rules["forum_14"] .'</li> ';
echo ' <li>'. $rules["forum_15"] .'</li> ';
echo ' </ul> ';
echo ' </div> &nbsp;';

echo ' </div> ';
echo ' </div> ';

echo ' <div class="container"> ';
echo ' <center><h2 style="color:#ff3333;font-weight:bold">'. $rules["server"] .'</h2></center> &nbsp;';
echo ' <div class="row"> ';

echo ' <div class="col-sm-6 center"> ';
echo ' <ul> ';
echo ' <li>'. $rules["server_1"] .'</li> ';
echo ' <li>'. $rules["server_2"] .'</li> ';
echo ' <li>'. $rules["server_3"] .'</li> ';
echo ' <li>'. $rules["server_4"] .'</li> ';
echo ' <li>'. $rules["server_5"] .'</li> ';
echo ' <li>'. $rules["server_6"] .'</li> ';
echo ' <li>'. $rules["server_7"] .'</li> ';
echo ' </ul> ';
echo ' </div> ';

echo ' <div class="col-sm-6 center"> ';
echo ' <ul> ';
echo ' <li>'. $rules["server_8"] .'</li> ';
echo ' <li>'. $rules["server_9"] .'</li> ';
echo ' <li>'. $rules["server_10"] .'</li> ';
echo ' <li>'. $rules["server_11"] .'</li> ';
echo ' <li>'. $rules["server_12"] .'</li> ';
echo ' <li>'. $rules["server_13"] .'</li> ';
echo ' <li>'. $rules["server_14"] .'</li> ';
echo ' <li>'. $rules["server_15"] .'</li> ';
echo ' </ul> ';
echo ' </div> &nbsp;';
echo ' </div>';

echo ' </div> ';
echo ' </div> ';

echo ' <p>&nbsp;</p>';
echo ' <div class="container">';
echo ' <div class="col-sm-12"> ';
echo ' <h3 style="color:#ff3333;font-weight:bold">'. $ban["name"] .'</h3>';
echo ' <table> ';
echo ' <tr> ';
echo ' <th style="color: #1a75ff;">'. $ban["kokotina"] .'</th> ';
echo ' <th style="color: #ff3333;">'. $ban["kokotina_1"] .'</th> ';
echo ' <th style="color: #cc00cc;">'. $ban["kokotina_3"] .'</th> ';
echo ' </tr> ';
 
/* ban_rules_1 */
echo ' <tr> ';
echo ' <td style="font-weight:bold;color:#66a3ff">'. $ban["ban_rules_1"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff6666">'. $ban["ban_type_1"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff33ff">'. $ban["ban_time_1"] .'</td> ';
echo ' </tr> ';

/* ban_rules_2 */
echo ' <tr> ';
echo ' <td style="font-weight:bold;color:#66a3ff">'. $ban["ban_rules_2"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff6666">'. $ban["ban_type_2"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff33ff">'. $ban["ban_time_2"] .'</td> ';
echo ' </tr> ';

/* ban_rules_3 */
echo ' <tr> ';
echo ' <td style="font-weight:bold;color:#66a3ff">'. $ban["ban_rules_3"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff6666">'. $ban["ban_type_3"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff33ff">'. $ban["ban_time_3"] .'</td> ';
echo ' </tr> ';

/* ban_rules_4 */
echo ' <tr> ';
echo ' <td style="font-weight:bold;color:#66a3ff">'. $ban["ban_rules_4"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff6666">'. $ban["ban_type_4"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff33ff">'. $ban["ban_time_4"] .'</td> ';
echo ' </tr> ';

/* ban_rules_5 */
echo ' <tr> ';
echo ' <td style="font-weight:bold;color:#66a3ff">'. $ban["ban_rules_5"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff6666">'. $ban["ban_type_5"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff33ff">'. $ban["ban_time_5"] .'</td> ';
echo ' </tr> ';

/* ban_rules_6 */
echo ' <tr> ';
echo ' <td style="font-weight:bold;color:#66a3ff">'. $ban["ban_rules_6"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff6666">'. $ban["ban_type_6"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff33ff">'. $ban["ban_time_6"] .'</td> ';
echo ' </tr> ';

/* ban_rules_7 */
echo ' <tr> ';
echo ' <td style="font-weight:bold;color:#66a3ff">'. $ban["ban_rules_7"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff6666">'. $ban["ban_type_7"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff33ff">'. $ban["ban_time_7"] .'</td> ';
echo ' </tr> ';

/* ban_rules_8 */
echo ' <tr> ';
echo ' <td style="font-weight:bold;color:#66a3ff">'. $ban["ban_rules_8"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff6666">'. $ban["ban_type_8"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff33ff">'. $ban["ban_time_8"] .'</td> ';
echo ' </tr> ';

/* ban_rules_9 */
echo ' <tr> ';
echo ' <td style="font-weight:bold;color:#66a3ff">'. $ban["ban_rules_9"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff6666">'. $ban["ban_type_9"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff33ff">'. $ban["ban_time_9"] .'</td> ';
echo ' </tr> ';

/* ban_rules_10 */
echo ' <tr> ';
echo ' <td style="font-weight:bold;color:#66a3ff">'. $ban["ban_rules_10"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff6666">'. $ban["ban_type_10"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff33ff">'. $ban["ban_time_10"] .'</td> ';
echo ' </tr> ';

/* ban_rules_11 */
echo ' <tr> ';
echo ' <td style="font-weight:bold;color:#66a3ff">'. $ban["ban_rules_11"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff6666">'. $ban["ban_type_11"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff33ff">'. $ban["ban_time_11"] .'</td> ';
echo ' </tr> ';

/* ban_rules_12 */
echo ' <tr> ';
echo ' <td style="font-weight:bold;color:#66a3ff">'. $ban["ban_rules_12"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff6666">'. $ban["ban_type_12"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff33ff">'. $ban["ban_time_12"] .'</td> ';
echo ' </tr> ';

/* ban_rules_13 */
echo ' <tr> ';
echo ' <td style="font-weight:bold;color:#66a3ff">'. $ban["ban_rules_13"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff6666">'. $ban["ban_type_13"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff33ff">'. $ban["ban_time_13"] .'</td> ';
echo ' </tr> ';

/* ban_rules_14 */
echo ' <tr> ';
echo ' <td style="font-weight:bold;color:#66a3ff">'. $ban["ban_rules_14"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff6666">'. $ban["ban_type_14"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff33ff">'. $ban["ban_time_14"] .'</td> ';
echo ' </tr> ';

/* ban_rules_15 */
echo ' <tr> ';
echo ' <td style="font-weight:bold;color:#66a3ff">'. $ban["ban_rules_15"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff6666">'. $ban["ban_type_15"] .'</td> ';
echo ' <td style="font-weight:bold;color:#ff33ff">'. $ban["ban_time_15"] .'</td> ';
echo ' </tr> ';



echo ' </table> ';



echo ' </ul> ';
echo ' </div> ';
echo ' </div> ';


echo ' </div> ';
echo ' </div> ';

echo '<p>&nbsp;</p>';

require_once 'includes/footer.php'; 

?>