<?php

    $ch = curl_init();

//    curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // another way of doing the above in a curl_setopt_array where one can set up multiple curl options at once

    $headers = [
        "Authorization: token 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TT"
        //"User-Agent: tzone85"
    ];



    curl_setopt_array($ch, [
        CURLOPT_URL => "https://api.github.com/user/starred/httpie/httpie",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_USERAGENT => "tzone85",
        CURLOPT_CUSTOMREQUEST => "PUT"       // DELETE or something else but must be in upper case
    ]);

    $response = curl_exec($ch);

    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);


    echo $status_code."\n";

    echo $response."\n";