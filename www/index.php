<?php

$response = file_get_contents("https://randomuser.me/api");

$data = json_decode($response);

var_dump($data);