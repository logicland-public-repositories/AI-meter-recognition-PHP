<?php
require __DIR__ . '/record_recognition.php';
$short_options = "l:p:i:u:";
$long_options = ["login", "password", "image_path", "url"];
$options = getopt($short_options, $long_options);
if(count($argv) != 9 ){
    exit("incorrect number of arguments");
}

$username = isset($options["l"]) ? $options["l"] : $options["login"];
$password = isset($options["p"]) ? $options["p"] : $options["password"];
$img_path = isset($options["i"]) ? $options["i"] : $options["image_path"];
$url = isset($options["u"]) ? $options["u"] : $options["url"];

try{
    $result = record_recognition($url, $username, $password, $img_path);
    echo $result;
}catch(Exception $e){
    echo "". $e->getMessage() ."";
}
