<?php

    $ch = curl_init();

//    curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // another way of doing the above in a curl_setopt_array where one can set up multiple curl options at once

    curl_setopt_array($ch, [
        CURLOPT_URL => "https://api.openweathermap.org/data/2.5/weather?g=London&appid=9d15fee35ff5df920ff7f135bec06c6d",
        CURLOPT_RETURNTRANSFER => true
    ]);

    $response = curl_exec($ch);

    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    echo $status_code."\n";

    echo $response."\n";