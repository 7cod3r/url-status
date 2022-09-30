<?php

error_reporting(0);
ini_set('display_errors', 0);

$banner="
\e[1;31m==≠≠≠≠≠≠≠=≠≠=≠≠≠≠≠≠≠≠≠≠==
\e[1;32m  Created by endercoder
\e[1;31m==≠≠≠≠≠≠≠=≠≠=≠≠≠≠≠≠≠≠≠≠==

";
function ping($host, $port, $timeout){
  $sec = microtime(true);
  $Cport = fSockOpen($host, $port, $errno, $errstr, $timeout);
  if (!$Cport) {
	return "\e[1;31m [!] Server is down.\n";
  }
  $secs = microtime(true);
  return "\e[1;32m [!] Server is active.\n";
}

echo $banner;
$input = readline("\e[1;32m [+] Enter IP or URL: \e[1;33m");
if (empty($input)){
echo "\e[1;31m [!] URL not found!\n";
} else{
echo ping($input, 80, 5);
}

?>
