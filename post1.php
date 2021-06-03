<?php

$curl = curl_init();

$token = "Authorization: Bearer YjE4ZGJiZGY3YzNiMDY4YmJjZGE5MTM1ZGYyMDg5N2Q3Njk0ZWU3NzEyN2MyZmQzOTQ0M2E0ZTMwOWRkYjljNw";

$name = $_GET["step1"]["firstName"];
$name1 = $_GET["step1"]["lastName"];
$country = $_GET["step1"]["country"];
$phone= $_GET["step1"]["phone"];
$email = $_GET["step1"]["email"];
$redirect = $_GET["redirect"];
$currency = $_GET["currency"];
$initial = $_GET["initial"];
$leverage = $_GET["leverage"];
$type = $_GET["type"];

session_start();
$refID = "";
$pID = "";
$lid = "";
$groupName = "";
if(isset($_SESSION["pid"])){
    $pID = $_SESSION["pid"];
}
if(isset($_SESSION["lid"])){
    $lid = $_SESSION["lid"];
}

$body = "{\n\"firstName\": \"".$name."\",\n\"lastName\": \"".$name1."\",\n\"country\": \"".$country."\",\n\"phone\": \"".$phone."\",\n\"partnerId\": \"".$pID."\",\n\"referralLinkId\": \"".$lid."\",
    \n\"email\": \"".$email."\"}";

if($type=="1" && $currency=="USD"){
    $groupName = "demoBKFXCENTUSD";
}
if($type=="1" && $currency=="EUR"){
    $groupName = "demoBKFXCENTEUR";
}
if($type=="2" && $currency=="USD"){
    $groupName = "demoBKFXSTDUSD";
}
if($type=="2" && $currency=="EUR"){
    $groupName = "demoBKFXSTDEUR";
}
if($type=="3" && $currency=="USD"){
    $groupName = "demoBKFXPREUSD";
}
if($type=="3" && $currency=="EUR"){
    $groupName = "demoBKFXPREEUR";
}

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://secure.bkfx.io/client-api/registration/send-pin",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $body,
    CURLOPT_HTTPHEADER => array(
        "accept: application/json",
        "authorization: $token",
        "cache-control: no-cache",
        "content-type: application/json",
        "postman-token: c1ff6061-0c7a-953c-66b1-e4733996200e"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $response = json_decode($response, true);

//        echo json_encode($response);exit(); die();


    if($response["id"]){
        sendMail($response["id"], $token);
        secondReq($response["id"], $leverage, $initial, $groupName, $token);
        header("Location: ".$redirect."?success=true");
    }else{
        header("Location: ".$redirect."?success=false");
    }

}



function sendMail($uid, $token){
    $curl1 = curl_init();

    curl_setopt_array($curl1, array(
        CURLOPT_URL => "https://secure.bkfx.io/client-api/registration/send-pin",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\n\"userId\": \"".$uid."\"}",
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "authorization: $token",
            "cache-control: no-cache",
            "content-type: application/json",
            "postman-token: c1ff6061-0c7a-953c-66b1-e4733996200e"
        ),
    ));
    $response = curl_exec($curl1);
    $err = curl_error($curl1);
    curl_close($curl1);
//    echo $response; exit(); die();
//    return $response;
}

function secondReq($uid, $leverage, $initial, $groupName, $token){
    $curl = curl_init();

    $body = "{\n\"user\": \"".$uid."\",\n\"sid\": \"2\",\n\"groupName\": \"".$groupName."\",\n\"leverage\": \"".$leverage."\",\n\"initialBalance\": \"".$initial."\",
    \n\"notifyDisable\": \"false\",\n\"readOnly\": \"false\"}";
//    $body = "{\n\"user\": \"".$uid."\",\n\"sid\": \"2\",\n\"groupName\": \"demoBKFXSTDUSD\",\n\"leverage\": \"1500\",\n\"initialBalance\": \"1000\",
//    \n\"notifyDisable\": \"false\",\n\"readOnly\": \"false\"}";

//        echo $body;exit(); die();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://secure.bkfx.io/rest/accounts/new?version=1.0.0",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $body,
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "authorization: $token",
            "cache-control: no-cache",
            "content-type: application/json",
            "postman-token: c1ff6061-0c7a-953c-66b1-e4733996200e"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

//    $response = json_decode($response, true);
//    echo $response; die(); exit();
    return $response;

    curl_close($curl);
}