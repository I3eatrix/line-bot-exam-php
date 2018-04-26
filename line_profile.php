<?php
 
$strAccessToken = "og+NhSWGfzZszWwdTHH4SbHhjv1SCmYVWE6aBLk69lvkl1TlIw1D79fM+P4bdkihn/xrcKfZ9plsI1qeI/Xneg54ZBaYs08NiSUlx9wvjxdLkngKFylgqgskf5gCTZnhQFrgTIdRxiXcJQIoerA8ugdB04t89/1O/w1cDnyilFU=";

$temp_userid = "Ud85993840ead50c0d03a78bc670ccde";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/profile/".$temp_userid;
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>
