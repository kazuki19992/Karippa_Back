<?php
include('./config.php');
include('./helpers/db_helper.php');
include('./helpers/extra_helper.php');

$request_json = $_POST['request'];

$request = json_decode($request_json);

if($request['appver'] >= SUPPORT_APP && $request['appver'] <= LATEST_APP){
    
}else{
    $response = array(
        "response" => "error",
        "code" => 000,
        "detail" => "this app is not supported."
    );
    $response_json = json_encode($response, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

echo $response_json;