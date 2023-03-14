<?php

    $ch = curl_init();

//    curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // another way of doing the above in a curl_setopt_array where one can set up multiple curl options at once

    $headers = [
        "Authorization: Client-ID 8oJnUkpnVPmC5tLDttLG7ELCyeNHGOM7LCFaO1sUn3A"
    ];

    $response_headers = [];

    $header_callback = function($ch, $header) use (&$response_headers){

        $len = strlen($header);

        // if one wants to separate the header into two parts
        $parts = explode(":", $header, 2);

        if (count($parts) < 2) {
            return $len;            // just return the length, not a valid response
        }

        // now the results

        //$response_headers[] = $header;
        $response_headers[$parts[0]] = trim($parts[1]);

        return $len;
    };

    curl_setopt_array($ch, [
        CURLOPT_URL => "https://api.unsplash.com/photos/random",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_HEADERFUNCTION => $header_callback
    ]);

    $response = curl_exec($ch);

    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);


    echo $status_code."\n";

    print_r($header_callback)."\n";
    echo $response."\n";