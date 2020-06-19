<?php
require_once 'config.php';
require_once '../languages/'. $web["lan"] .'';
$a = $_GET[a]; 

echo '<meta http-equiv="refresh" content="0; url='. $vote["link"] .''. $a .' ?>" />';

?>