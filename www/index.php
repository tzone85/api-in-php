<?php

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/gists/9d92339aa433405afd3f457c4ae0fe1b",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => "tzone85"

]);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data);

/*
foreach ($data as $gist) {
    echo $gist["id"]. "-".$gist["description"]."\n";
}
*/