<?php

    $ch = curl_init();

//    curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // another way of doing the above in a curl_setopt_array where one can set up multiple curl options at once

    curl_setopt_array($ch, [
        CURLOPT_URL => "https://randomuser.me/api",
        CURLOPT_RETURNTRANSFER => true
    ]);

    $response = curl_exec($ch);

    curl_close($ch);

    echo $response."\n";