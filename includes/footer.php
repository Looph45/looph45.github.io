<?php
echo '<div class="line"></div>';
echo '<footer class="mainfooter" role="contentinfo"> ';
echo '<div class="footer-bottom bg-dark"> ';
echo '<div class="container"> ';
echo '<div class="row"> ';
echo '<div class="col-xs-12"> ';
echo '<p class="text-xs-center">&copy; '. $sitename .' '. date("Y") .' '. $line_copy .' <br /> '. $developed_author .': <a href="https://www.insites.sk/user/profile/1-ax1s">Denis "Ax1s" Mihál</a></p> ';
echo '</div> ';
echo '</div> ';
echo '</div> ';
echo '</div> ';
echo '</footer> ';

echo ' <script src="'. $linkwebu .'assets/js/jquery.min.js"></script> ';
echo ' <script src="'. $linkwebu .'assets/js/bootstrap.min.js"></script> ';
echo ' <script src="'. $linkwebu .'assets/js/snow.min.js"></script> ';
echo ' <script src="'. $linkwebu .'assets/js/main.js"></script> ';
echo ' <script src="'. $linkwebu .'assets/js/npm.js"></script> ';
echo ' <script src="'. $linkwebu .'assets/js/sb-admin-2.js"></script> ';
echo ' <script src="'. $linkwebu .'assets/js/jquery.validate.min.js"></script> ';
echo ' <script src="'. $linkwebu .'assets/js/bootstrap.mins.js"></script> ';
echo ' <script src="'. $linkwebu .'assets/js/meticMenu/metisMenu.min.js"></script> ';

if ($web["snow"] == true) {
	echo ' <script>createSnow("'. $linkwebu .'assets/img/snow/", 60);</script>';
}else{
	
}
echo ' </body> ';
echo ' </html> ';
?>