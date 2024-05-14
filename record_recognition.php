<?php
function record_recognition($url, $username, $password, $img_path){
    $file = new \CURLFile($img_path);
    $data = array('file' => $file);
    $dict = array($username => $password);
    $auth = base64_encode(json_encode($dict));
    $curl_log ="";
    $ch = curl_init();
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => 1,     
        CURLOPT_HEADER => 1,
        CURLOPT_HTTPHEADER => ["Authorization: $auth"],
        CURLOPT_POSTFIELDS => $data
    );
  
    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);
    if(curl_getinfo($ch, CURLINFO_RESPONSE_CODE)  != 200){
        $lines=explode("\r", $response);
        $response = $lines[0];
        throw new Exception($response);
    }
    $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $body = substr($response,$headerSize);

    curl_close($ch);
    return $body;
}
