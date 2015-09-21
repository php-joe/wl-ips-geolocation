<?php

//Problem: Build an array of IPs and run a function on each ip
// to grab the Telize


function locateIPS(){
$myIPSArray = array("72.229.28.185", "4.34.54.2");
  foreach ($myIPSArray as $ip) {
    # code...
    $url = "http://www.telize.com/geoip/".$ip;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    $result=curl_exec($ch);
    curl_close($ch);
    $resulting = json_decode($result, true);
    print_r($resulting);
    echo "<br><br>";
    //just print out the country
    print_r($resulting['country']);
}


}
