<?php 
require 'function.php';

echo '
<div class="span8" style="font-size:0px;">
<h3>'. htmlspecialchars($TITLE_BLOCK_TWO) .'</h3>
';

if($HEADS == '3D') {
	$url = "https://cravatar.eu/helmhead/";
} else {
	$url = "https://cravatar.eu/helmavatar/";
}


if(empty($query['error'])) {
	if($playerlist != "null") {
		$shown = "0";
		foreach ($playerlist as $player) {
			$shown++;
			if($shown < $show_max + 1 || $show_max == ''.$show_max.'') {

echo '<a data-placement="top" rel="tooltip" style="display: inline-block;" title="'. $player .'">';
echo '<img src="'. $url.$player .'/50" size="40" width="40" height="40" style="width: 40px; height: 40px; margin-bottom: 5px; margin-right: 5px; border-radius: 3px; "/></a>';
 	}
}
if($shown > $show_max && $show_max != ''.$show_max.'') {
	echo '<div class="span8" style="font-size:16px; margin-left: 0px;">';
	echo 'and ' . (count($playerlist) - $show_max) . ' more ...';
	echo '</div>';
}
} 
	} else {
		echo '<h4><font style="color:purple">Server:</font> Nikto nie je online.</h4>';
	}
echo '</div>';
echo '</div>';
echo '</div>';
?>