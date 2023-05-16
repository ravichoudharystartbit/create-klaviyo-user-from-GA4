<?php
/*Allow Origin*/
header("Access-Control-Allow-Origin: *");

/* get GA4 email data using  ajax */
$emailGet =  $_REQUEST['emailGet'];

/*****install composer******/
require_once('vendor/autoload.php');

//klaviyo script call
$client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'https://a.klaviyo.com/api/v2/people/search?api_key=xxxxx&email='.$emailGet, [
  'headers' => [
    'accept' => 'application/json',
  ],
]);
//get klaviyo resposne
$klaviyoJsonData = $response->getBody();
$klaviyoJsonDecodeData = json_decode($klaviyoJsonData);
//get klaviyo response email id
if($klaviyoJsonDecodeData->id != ''){
	echo $klaviyoJsonDecodeData->id;
}else{
	echo "email id not valid";
}

?>
