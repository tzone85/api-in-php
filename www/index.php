<?php

    $ch = curl_init();

//    curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // another way of doing the above in a curl_setopt_array where one can set up multiple curl options at once

    $headers = [
        "Authorization: Client-ID 8oJnUkpnVPmC5tLDttLG7ELCyeNHGOM7LCFaO1sUn3A"
    ];
    curl_setopt_array($ch, [
        CURLOPT_URL => "https://api.unsplash.com/photos/random",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers
    ]);

    $response = curl_exec($ch);

    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    echo $status_code."\n";

    echo $response."\n";