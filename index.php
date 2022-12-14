<?php

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/gists/4c7767c9d3b50c86297ee7830b4150d1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => "daveh"
]);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data);

//foreach ($data as $gist) {
//
//    echo $gist["id"], " - ", $gist["description"], "\n";
//}
