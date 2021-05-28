<?php

$curl = curl_init();


$name = $_GET["step1"]["firstName"];
$country = $_GET["step1"]["country"];
$phone= $_GET["step1"]["phone"];
$email = $_GET["step1"]["email"];
$redirect = $_GET["redirect"];
$currency = $_GET["currency"];

session_start();
$refID = "";
$pID = "";
if(isset($_SESSION["pid"])){
    $pID = $_SESSION["pid"];
}
if(isset($_SESSION["lid"])){
    $lid = $_SESSION["lid"];
}

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://secure.bkfx.io/rest/users/new?version=1.0.0",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\n\"firstName\": \"".$name."\",\n\"lastName\": \"d\",\n\"country\": \"".$country."\",\n\"phone\": \"".$phone."\",\n\"partnerId\": \"".$pID."\",\n\"referralLinkId\": \"".$lid."\",
    \n\"email\": \"".$email."\",\n\"ib\": \"true\",\n\"clientType\": \"Corporate\"\n}",
    CURLOPT_HTTPHEADER => array(
        "accept: application/json",
        "authorization: Bearer YjE4ZGJiZGY3YzNiMDY4YmJjZGE5MTM1ZGYyMDg5N2Q3Njk0ZWU3NzEyN2MyZmQzOTQ0M2E0ZTMwOWRkYjljNw",
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
        secondReq($response["id"], $currency);
        header("Location: ".$redirect."?success=true");
    }else{
        header("Location: ".$redirect."?success=false");
    }

}



function secondReq($uid, $currency){
    $curl = curl_init();

    $body = "{\n\"ibCampaignId\": \"6\",\n\"currency\": \"".$currency."\",\n\"userId\": \"".$uid."\",\n\"ibMaxViewDepth\": \"2\"}";


    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://secure.bkfx.io/rest/ib/enable?version=1.0.0",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $body,
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "authorization: Bearer YjE4ZGJiZGY3YzNiMDY4YmJjZGE5MTM1ZGYyMDg5N2Q3Njk0ZWU3NzEyN2MyZmQzOTQ0M2E0ZTMwOWRkYjljNw",
            "cache-control: no-cache",
            "content-type: application/json",
            "postman-token: c1ff6061-0c7a-953c-66b1-e4733996200e"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    return $response;

    curl_close($curl);
}