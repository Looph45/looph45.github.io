<?php 

require_once 'includes/header.php';

echo ' <div class="lpmc-hero lpmc-page-title"> ';
echo ' <div class="container"> ';
echo ' <h2>'. $new["line"] .'</h2> ';
echo ' </div> ';
echo ' </div> ';

 echo '<p>&nbsp;</p>';

echo ' <div class="container"> ';

echo ' <div class="row"> ';
echo ' <div class="col-sm-12"> ';
echo ' <h3>'. $new["header_1"] .'</h3> ';
echo ' &nbsp; ';
echo ' <p>'. $new["full_text_1"] .'</p> ';
echo ' <p style="font-size:12px;">'. $new["author_write_1"] .'<a style="text-decoration:none" href="'. $new["author_link_1"] .'"> '. $new["author_name_1"] .'</a> &nbsp; '. $new["author_write_date_1"] .' '. $new["author_date_1"] .'  </p>';
echo ' </div> ';
echo ' </div> ';

echo ' <hr> ';

echo ' <div class="row"> ';
echo ' <div class="col-sm-12"> ';
echo ' <h3>'. $new["header_2"] .'</h3> ';
echo ' &nbsp; ';
echo ' <p>'. $new["full_text_2"] .'</p> ';
echo ' <p style="font-size:12px;">'. $new["author_write_2"] .'<a style="text-decoration:none" href="'. $new["author_link_2"] .'"> '. $new["author_name_2"] .'</a> &nbsp; '. $new["author_write_date_2"] .' '. $new["author_date_2"] .'  </p>';
echo ' </div> ';
echo ' </div> ';

echo ' <hr> ';

echo ' <div class="row"> ';
echo ' <div class="col-sm-12"> ';
echo ' <h3>'. $new["header_3"] .'</h3> ';
echo ' &nbsp; ';
echo ' <p>'. $new["full_text_3"] .'</p> ';
echo ' <p style="font-size:12px;">'. $new["author_write_3"] .'<a style="text-decoration:none" href="'. $new["author_link_3"] .'"> '. $new["author_name_3"] .'</a> &nbsp; '. $new["author_write_date_3"] .' '. $new["author_date_3"] .'  </p>';
echo ' </div> ';
echo ' </div> ';

echo ' <hr> ';

echo ' <div class="row"> ';
echo ' <div class="col-sm-12"> ';
echo ' <h3>'. $new["header_4"] .'</h3> ';
echo ' &nbsp; ';
echo ' <p>'. $new["full_text_4"] .'</p> ';
echo ' <p style="font-size:12px;">'. $new["author_write_4"] .'<a style="text-decoration:none" href="'. $new["author_link_4"] .'"> '. $new["author_name_4"] .'</a> &nbsp; '. $new["author_write_date_4"] .' '. $new["author_date_4"] .'  </p>';
echo ' </div> ';
echo ' </div> ';

echo ' </div> ';

echo ' <p>&nbsp;</p> ';
require_once 'includes/footer.php';
?>