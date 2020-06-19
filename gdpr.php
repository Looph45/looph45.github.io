<?php 
require_once 'includes/header.php';

echo ' <div class="lpmc-hero lpmc-page-title"> ';
echo ' <div class="container"> ';
echo ' <h2>'. $gdpr["name"] .'</h2> ';
echo ' </div> ';
echo ' </div> ';

echo ' <p>&nbsp;</p>';
echo ' <p>&nbsp;</p>';
echo ' <div class="container"> ';
echo ' <div class="row"> ';
echo ' <div class="col-sm-12"> ';
echo ' <h3 style="font-weight:bold;">'. $gdpr["title"] .'</h3> ';
echo ' <p>';
echo ' <font style="margin-top:30px;color:#ff4d4d;font-weight:bold">'. $gdpr["text"] .'</font>';
echo ' </p>';

echo ' <h6 style="margin-top:35px;color:">'. $gdpr["contact"] .' <br />'. $gdpr["text_contact"] .': <font style="color:#1a75ff">'. $web["mail"] .'</font><h6>';


echo '<p>';
echo ' <h3 style="font-weight:bold;margin-top:30px;">'. $gdpr["rules_title"] .'</h3> ';
echo ' <li>'. $gdpr["rules_1"] .'</li>';
echo ' <li>'. $gdpr["rules_2"] .'</li>';
echo '</p>';
echo ' </div> ';
echo ' </div> ';
echo ' </div> ';

echo '<div style="margin-bottom:30%;"></div>';
require_once 'includes/footer.php';
?>

