<?php 
 
$ch=curl_init();



curl_setopt($ch,CURLOPT_URL,"https://www.jdoodle.com/");
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);


 //"curl -H "Content-Type: application/json; charset=UTF-8" -X POST -d '{"clientId": "YourClientId","clientSecret":"YourClientSecret","script":"","language":"php","versionIndex":"0"}' https://api.jdoodle.com/v1/execute
            //"

curl_exec($ch);


curl_close($ch);

 ?>