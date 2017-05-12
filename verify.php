<?php
$access_token = 'EnWnY5W3LKZNENS/kSW2oyRGz9qjYInN9kwJpPlSbAvmRN0wMiXN45X7/EypD20zf+ANs1NAaNe8l+Cq13ndnYwfoKVPEyqjo+UpWuv/58ul5WD9Onrex5u7QHCpmeMed61xblaouLV5eOKlTPDvpwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
