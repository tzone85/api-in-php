<?php

    $ch = curl_init();

//    curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // another way of doing the above in a curl_setopt_array where one can set up multiple curl options at once

    $headers = [
        "Authorization: token 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TT"
        //"User-Agent: tzone85"
    ];

    $payload = json_encode([
        "name" => "Created from API",
        "description" => "An example API-created repo"
    ]);


    curl_setopt_array($ch, [
        CURLOPT_URL => "https://api.github.com/user/repos",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_USERAGENT => "tzone85",
        // CURLOPT_CUSTOMREQUEST => "POST",      // DELETE or something else but must be in upper case
        // CURLOPT_POST => true,                 // These two are the same.
        CURLOPT_POSTFIELDS => $payload
    ]);

    $response = curl_exec($ch);

    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);


    echo $status_code."\n";

    echo $response."\n";