# This code will help to create customer in klaviyo. 

#a) You can use below code to get email data form GA4 object.

  var email = dataLayer[0]['customer_email'];

#b) Now you need to pass that email id to your custom php script using ajax.

 var scriptURL = 'filename.php?email=xxx@mail.com';

#c) USe below code in PHP script file.
$response = $client->request('GET', 'https://a.klaviyo.com/api/v2/people/search?api_key=xxxxx&email=xxxxx@mail.com', [
  'headers' => [
    'accept' => 'application/json',
  ],
]);

#b) Use below method to pass AJAX response to kalviyo
 dataLayer.push({event:"klaviyo_id", klav_id :responseEmail})  

