<?php
/*
    require_once('vendor\autoload.php');

    $apiSecret = 'Kqhlqrca1ADeO0fvxiGcMGoMh31Tmw2wGpukLHwN7UZ';
    $apiKey = 'UhVgbPN3tWWhB6fz9n2ulvwPu7iaXika';
    $apiBasePath = 'https://prod.api.firstdata.com/gateway/v2';
    $defaultRegion = 'MY';
    $defaultStoreId = '4945018794';   
    
    $cred = new FirstData\FirstApi\Client\Simple\MerchantCredentials($apiSecret, $apiKey);
    $config = new FirstData\FirstApi\Client\Configuration();
    $headerSel = new FirstData\FirstApi\Client\HeaderSelector();
    $clientctx = new FirstData\FirstApi\Client\Simple\ClientContext(new GuzzleHttp\Client(), $config, $headerSel, $cred);
    $auth = new FirstData\FirstApi\Client\Simple\AuthenticationApi($clientctx);
    $acstokreqs = new FirstData\FirstApi\Client\Model\AccessTokenRequest();      

    echo $cred -> getApiSecret();
    echo '<br><br>';
    echo $cred -> getApiKey();
    echo '<br><br>';
    echo $auth -> getAccessToken($acstokreqs);
    echo '<br><br>';
*/
    function getDateTime() {
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $dateTime = date("Y:m:d-H:i:s");
        return $dateTime;
    }

    $ref = 'int_test';//$_REQUEST['ref'];
    $amt = '0.00';//$_REQUEST['amt'];

    $url = 'https://www4.ipg-online.com/connect/gateway/processing';
    $storeId = "4945018794";
    $sharedSecret = "u5ae7rasBT";
    $ref = $ref.'_'.date("ymdis");
    $amt = number_format((float)$amt, 2, '.', '');
    $currency = "458";
    $stringToHash = $storeId . getDateTime() . $amt . $currency . $sharedSecret;
    $ascii = bin2hex( $stringToHash );
    $hashKey = hash( "sha256", $ascii );

    $detail = '<h3>Update Detail</h3><br/>';
    $detail .= '<table class="gate" align="center" width="100%">
    {detail}
    <tr><td>Reference No</td><td>'.$ref.'</td></tr></table>';
    //$detail .= '<br/><p>'.__('Thank you for your submission, please click "Update Card" to proceed.').'</p>';
    
    $form = '<form method="post" action="' . $url . '">
        <input type="hidden" name="checkoutoption" value="combinedpage">
        <input type="hidden" name="txntype" value="sale">
        <input type="hidden" name="timezone" value="Asia/Kuala_Lumpur"/>
        <input type="hidden" name="txndatetime" value="' . getDateTime() . '"/>
        <input type="hidden" name="hash_algorithm" value="SHA256"/>
        <input type="hidden" name="hash" value="' . $hashKey . '"/>
        <input type="hidden" name="storename" value="' . $storeId . '"/>
        <input type="hidden" name="mode" value="payonly"/>
        <input type="hidden" name="chargetotal" value="' . $amt . '"/>
        <input type="hidden" name="currency" value="' . $currency . '"/>
        <input type="hidden" name="oid" value="' . $ref . '"/>
        <input type="hidden" name="assignToken" value="true"/>
        <input type="hidden" name="responseSuccessURL" value="https://arissto.com/my/firstdata-token-update-success"/>
        <input type="hidden" name="responseFailURL" value="https://arissto.com/my/firstdata-token-update-fail/"/>
        <input type="submit" value="Update Card">
    </form>';

    echo $form;
?>
