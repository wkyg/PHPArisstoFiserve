<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $apiSecret = 'Kqhlqrca1ADeO0fvxiGcMGoMh31Tmw2wGpukLHwN7UZ';

    function guidv4($data = null) {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    function timestamp(){
        $mt = explode(' ', microtime());
        $ts = ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));    
        return $ts;
    }

    function msg_sig($apikey, $uid, $tm, $apisec, $json){                        
        $msg = $apikey . $uid . $tm. $apisec. $json;
        $hmac = hash_hmac('sha256', $msg, $apisec);
        $messageSignature = base64_encode($hmac);
        return $messageSignature;
    }

    $apiInstance = new FirstData\FirstApi\Client\Api\AuthenticationApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );
    $contentType = 'application/json'; // string | Content type.
    $clientRequestId = guidv4(); // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
    $apiKey = 'UhVgbPN3tWWhB6fz9n2ulvwPu7iaXika'; // string | Key given to merchant after boarding associating their requests with the appropriate app in Apigee.
    $timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
    $accessTokenRequest = new \FirstData\FirstApi\Client\Model\AccessTokenRequest(); // \FirstData\FirstApi\Client\Model\AccessTokenRequest | Access token request
    $messageSignature = msg_sig($apiKey, $clientRequestId, $timestamp, $apiSecret, $accessTokenRequest -> __toString()); // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.    
    
    try {
        $result = $apiInstance->authenticationAccessTokensPost($contentType, $clientRequestId, $apiKey, $timestamp, $accessTokenRequest, $messageSignature);
        print_r($result);
    } catch (Exception $e) {  
        echo $e->getMessage();          
    }
?>
