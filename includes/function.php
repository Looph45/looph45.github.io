<?php

require_once 'config.php';
require(dirname(__DIR__) . '/languages/'. $web["lan"] .'');

// Server Ping, Query Settings // 
$ping = json_decode(file_get_contents('http://api.minetools.eu/ping/' . $server["ip"] . '/' . $server["port"] . ''), true);
$query = json_decode(file_get_contents('http://api.minetools.eu/query/' . $server["ip"] . '/' . $server["query_port"] . ''), true);

// Pinging elements //
if(empty($ping['error'])) { 
	$version = $ping['version']['name'];
	$online = $ping['players']['online'];
	$max = $ping['players']['max'];
	$motd = $ping['description'];
	$favicon = $ping['favicon'];
}

if(empty($query['error'])) {
	$playerlist = $query['Playerlist'];
}


?>
