<?php
echo ' <div class="line"></div>';
echo ' <div class="container"> ';
echo ' <div class="row"> ';
echo ' <div class="text-center col-sm-12"> ';
echo ' <p>&nbsp;<h1 style="color:white;font-weight:bold;padding-bottom:1.5%;">'. $gallery["title"] .'</h1></p> 
<hr>
';
echo ' </div> ';

echo ' <div class="col-sm-3 zoom"> ';
echo ' <a href="'. $gallery["img_1_url"] .'" class="d-block mb-4"> ';
echo ' <img style="weight:400px;" class="img-fluid img-thumbnail" src="'. $linkwebu .'gallery/'. $gallery["img_1"] .'"> ';
echo ' </a> ';
echo ' </div> ';

echo ' <div class="col-sm-3 zoom"> ';
echo ' <a href="'. $gallery["img_2_url"] .'" class="d-block mb-4"> ';
echo ' <img style="weight:400px;" class="img-fluid img-thumbnail" src="'. $linkwebu .'gallery/'. $gallery["img_2"] .'"> ';
echo ' </a> ';
echo ' </div> ';

echo ' <div class="col-sm-3 zoom"> ';
echo ' <a href="'. $gallery["img_3_url"] .'" class="d-block mb-4"> ';
echo ' <img style="weight:400px;" class="img-fluid img-thumbnail" src="'. $linkwebu .'gallery/'. $gallery["img_3"] .'"> ';
echo ' </a> ';
echo ' </div> ';

echo ' <div class="col-sm-3 zoom"> ';
echo ' <a href="'. $gallery["img_4_url"] .'" class="d-block mb-4"> ';
echo ' <img style="weight:400px;" class="img-fluid img-thumbnail" src="'. $linkwebu .'gallery/'. $gallery["img_4"] .'"> ';
echo ' </a> ';
echo ' </div> ';

echo ' <p>&nbsp;</p>';
echo ' <p>&nbsp;</p>';

echo ' </div> ';
echo ' </div> ';

?>