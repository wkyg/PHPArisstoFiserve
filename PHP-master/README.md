# 
IPG API for payment processing.

IPG API Specification.
- API version: 21.3.0
- Package version: 1.12.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```


## Repo Organization

- FirstData\FirstApi\Client\api: code auto-generated from api specification
- FirstData\FirstApi\Client\simple: code manually created for simpler API


## API Methods/Endpoints

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Interface | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | **getAccessToken** | **POST** /v2/authentication/access-tokens | Generate an access token for user authentication.
*CardInfoLookupApi* | **cardInfoLookup** | **POST** /v2/card-information | Card information lookUp
*CardVerificationApi* | **verifyCard** | **POST** /v2/card-verification | Verify a payment card.
*CurrencyConversionApi* | **getExchangeRate** | **POST** /v2/exchange-rates | Generate dynamic currency conversion transactions
*FraudDetectApi* | **scoreOnly** | **POST** /v2/fraud/score-only | Score a transaction for fraud.
*FraudDetectApi* | **clientRegistration** | **POST** /v2/fraud/client-registration | Client Registration for fraud detect.
*FraudDetectApi* | **paymentRegistration** | **POST** /v2/fraud/payment-registration | Payment Registration for fraud detect.
*OrderApi* | **orderInquiry** | **GET** /v2/orders/{order-id} | Retrieve the state of an order
*OrderApi* | **orderPostAuth** | **POST** /v2/orders/{order-id}/postauth | Capture/complete an already existing order.
*OrderApi* | **orderReturnTransaction** | **POST** /v2/orders/{order-id}/return | Return/refund an order.
*PaymentApi* | **finalizeSecureTransaction** | **PATCH** /v2/payments/{transaction-id} | Update a 3DSecure or UnionPay payment and continue processing.
*PaymentApi* | **performPaymentPostAuthorisation** | **POST** /v2/payments/{transaction-id}/postauth | Capture/complete a transaction.
*PaymentApi* | **primaryPaymentTransaction** | **POST** /v2/payments | Generate a primary transaction.
*PaymentApi* | **returnTransaction** | **POST** /v2/payments/{transaction-id}/return | Return/refund a transaction.
*PaymentApi* | **transactionInquiry** | **GET** /v2/payments/{transaction-id} | Retrieve the state of a transaction.
*PaymentApi* | **voidTransaction** | **POST** /v2/payments/{transaction-id}/void | Reverse a previous action on an existing transaction.
*PaymentSchedulesApi* | **cancelPaymentSchedule** | **DELETE** /v2/payment-schedules/{order-id} | Cancel a gateway payment schedule.
*PaymentSchedulesApi* | **createPaymentSchedule** | **POST** /v2/payment-schedules | Use this to create a gateway payment schedule.
*PaymentSchedulesApi* | **inquiryPaymentSchedule** | **GET** /v2/payment-schedules/{order-id} | View a gateway payment schedule.
*PaymentSchedulesApi* | **updatePaymentSchedule** | **PATCH** /v2/payment-schedules/{order-id} | Update a gateway payment schedule.
*PaymentTokenApi* | **createPaymentToken** | **POST** /v2/payment-tokens | Create a payment token from a payment card.
*PaymentTokenApi* | **deletePaymentToken** | **DELETE** /v2/payment-tokens/{token-id} | Delete a payment token.
*PaymentTokenApi* | **getPaymentTokenDetails** | **GET** /v2/payment-tokens/{token-id} | Get payment token details.
*PaymentUrlApi* | **createPaymentUrl** | **POST** /v2/payment-url | Create a payment URL.
*PaymentUrlApi* | **deletePaymentUrl** | **DELETE** /v2/payment-url | Delete a payment URL.
*PaymentUrlApi* | **paymentUrlDetail** | **GET** /v2/payment-url | Retrive the state of a payment URL.
for store.


## Code Overview


### MerchantCredentials

```php
namespace FirstData\FirstApi\Client\Simple;

class MerchantCredentials {
  /**
   * @param string $apiSecret
   * @param string $apiKey
   */
  public function __construct($apiSecret, $apiKey);

  // ...
}
```


### ClientContext

```php
namespace FirstData\FirstApi\Client\Simple;

class ClientContext {
  /**
   * base path defaults to https://cert.api.firstdata.com/gateway
   *
   * @param MerchantCredentials $creds
   * @param string $apiBasePath    (optional)
   * @param string $defaultRegion  (optional)
   * @param string $defaultStoreId (optional)
   * @return ClientContext
   */
  public static function create(MerchantCredentials $creds, $apiBasePath = ClientContext::DEFAULT_BASE_PATH, $defaultRegion = null, $defaultStoreId = null);

  /**
   * @return ClientFactory
   */
  public function getFactory();

  /**
   * @param string $basePath
   */
  public function setApiBasePath($basePath);


  // ...
}
```

### ClientFactory

```php
namespace FirstData\FirstApi\Client\Simple;

class ClientFactory {
  /**
   * @return AuthenticationApi
   */
  public function getAuthenticationApi();

  /**
   * @return CardInfoLookupApi
   */
  public function getCardInfoLookupApi();

  /**
   * @return CardVerificationApi
   */
  public function getCardVerificationApi();

  /**
   * @return CurrencyConversionApi
   */
  public function getCurrencyConversionApi();

  /**
   * @return FraudDetectApi
   */
  public function getFraudDetectApi();

  /**
   * @return OrderApi
   */
  public function getOrderApi();

  /**
   * @return PaymentApi
   */
  public function getPaymentApi();

  /**
   * @return PaymentSchedulesApi
   */
  public function getPaymentSchedulesApi();

  /**
   * @return PaymentTokenApi
   */
  public function getPaymentTokenApi();

  /**
   * @return PaymentUrlApi
   */
  public function getPaymentUrlApi();


  // ...
}
```


### AuthenticationApi

```php
namespace FirstData\FirstApi\Client\Simple;
use FirstData\FirstApi\Client\Model\AccessTokenResponse;
use FirstData\FirstApi\Client\Model\ErrorResponse;

class AuthenticationApi {
  /**
   * @return AccessTokenResponse|ErrorResponse
   */
  public function authenticationAccessTokensPost();

  // ...
}
```


### CardInfoLookupApi

```php
namespace FirstData\FirstApi\Client\Simple;
use FirstData\FirstApi\Client\Model\CardInfoLookupRequest;
use FirstData\FirstApi\Client\Model\CardInfoLookupResponse;
use FirstData\FirstApi\Client\Model\ErrorResponse;

class CardInfoLookupApi {
  /**
   * @param CardInfoLookupRequest $payload
   * @param string $region (optional)
   * @return CardInfoLookupResponse|ErrorResponse
   */
  public function cardInfoLookup(CardInfoLookupRequest $payload, $region = null);

  // ...
}
```


### CardVerificationApi

```php
namespace FirstData\FirstApi\Client\Simple;
use FirstData\FirstApi\Client\Model\CardVerificationRequest;
use FirstData\FirstApi\Client\Model\TransactionResponse;
use FirstData\FirstApi\Client\Model\ErrorResponse;

class CardVerificationApi {
  /**
   * @param CardVerificationRequest $payload
   * @param string $region (optional)
   * @return TransactionResponse|ErrorResponse
   */
  public function verifyCard(CardVerificationRequest $payload, $region = null);

  // ...
}
```


### CurrencyConversionApi

```php
namespace FirstData\FirstApi\Client\Simple;
use FirstData\FirstApi\Client\Model\ExchangeRateRequest;
use FirstData\FirstApi\Client\Model\ExchangeRateResponse;
use FirstData\FirstApi\Client\Model\ErrorResponse;

class CurrencyConversionApi {
  /**
   * @param ExchangeRateRequest $payload
   * @param string $region (optional)
   * @return ExchangeRateResponse|ErrorResponse
   */
  public function getExchangeRate(ExchangeRateRequest $payload, $region = null);

  // ...
}
```


### FraudDetectApi

```php
namespace FirstData\FirstApi\Client\Simple;
use FirstData\FirstApi\Client\Model\ScoreOnlyRequest;
use FirstData\FirstApi\Client\Model\ScoreOnlyResponse;
use FirstData\FirstApi\Client\Model\ClientRegistration;
use FirstData\FirstApi\Client\Model\PaymentRegistration;
use FirstData\FirstApi\Client\Model\FraudRegistrationResponse;
use FirstData\FirstApi\Client\Model\ErrorResponse;

class FraudDetectApi {
  /**
   * @param ScoreOnlyRequest $payload
   * @param string $region (optional)
   * @return ScoreOnlyResponse|ErrorResponse
   */
  public function scoreOnly(ScoreOnlyRequest $payload, $region = null);

   /**
     * Operation Client Registration
     *
     * CLient Registration for fraud
     *
     * @param  ClientRegistration $payload payload (required)
     * @param  string $region The region where client wants to process the transaction (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return FraudRegistrationResponse|ErrorResponse
     */

    public function fraudClientRegistrationPost(ClientRegistration $payload,$region = null);

     /**
     * Operation Payment Registration
     *
     * Payment Registration for fraud
     *
     * @param  PaymentRegistration $payload payload (required)
     * @param  string $region The region where client wants to process the transaction (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return FraudRegistrationResponse|ErrorResponse
     */

    public function fraudPaymentRegistrationPost(PaymentRegistration $payload,$region = null);

  // ...
}
```


### OrderApi

```php
namespace FirstData\FirstApi\Client\Simple;
use FirstData\FirstApi\Client\Model\OrderResponse;
use FirstData\FirstApi\Client\Model\SecondaryTransaction;
use FirstData\FirstApi\Client\Model\TransactionResponse;
use FirstData\FirstApi\Client\Model\ErrorResponse;

class OrderApi {
  /**
   * @param string $orderId
   * @param string $region (optional)
   * @param string $storeId (optional)
   * @return OrderResponse|ErrorResponse
   */
  public function orderInquiry($orderId, $region = null, $storeId = null);

  /**
   * @param string $orderId
   * @param SecondaryTransaction $payload
   * @param string $region (optional)
   * @param string $storeId (optional)
   * @return TransactionResponse|ErrorResponse
   */
  public function submitSecondaryTransaction($orderId, SecondaryTransaction $payload, $region = null, $storeId = null);
}
```


### PaymentApi

```php
namespace FirstData\FirstApi\Client\Simple;
use FirstData\FirstApi\Client\Model\AuthenticationVerificationRequest;
use FirstData\FirstApi\Client\Model\PrimaryTransaction;
use FirstData\FirstApi\Client\Model\SecondaryTransaction;
use FirstData\FirstApi\Client\Model\TransactionResponse;
use FirstData\FirstApi\Client\Model\ErrorResponse;

class PaymentApi {
  /**
   * @param string $transactionId
   * @param AuthenticationResponseVerificationRequest $payload
   * @param string $region (optional)
   * @return TransactionResponse|ErrorResponse
   */
  public function finalizeSecureTransaction($transactionId, AuthenticationVerificationRequest $payload, $region = null);


  /**
   * @param PrimaryTransaction $payload
   * @param string $region (optional)
   * @return TransactionResponse|ErrorResponse
   */
  public function primaryPaymentTransaction(PrimaryTransaction $payload, $region = null);

  /**
   * @param string $transactionId
   * @param SecondaryTransaction $payload
   * @param string $region (optional)
   * @param string $storeId (optional)
   * @return TransactionResponse|ErrorResponse
   */
  public function secondaryPaymentTransaction($transactionId, SecondaryTransaction $payload, $region = null, $storeId = null);

  /**
   * @param string $transactionId
   * @param string $region (optional)
   * @param string $storeId (optional)
   * @return TransactionResponse|ErrorResponse
   */
  public function transactionInquiry($transactionId, $region = null, $storeId = null);


  // ...
}
```


### PaymentSchedulesApi

```php
namespace FirstData\FirstApi\Client\Simple;
use FirstData\FirstApi\Client\Model\PaymentSchedulesRequest;
use FirstData\FirstApi\Client\Model\PaymentSchedulesResponse;
use FirstData\FirstApi\Client\Model\RecurringPaymentDetailsResponse;
use FirstData\FirstApi\Client\Model\ErrorResponse;

class PaymentSchedulesApi {
  /**
   * @param string $orderId
   * @param string $region (optional)
   * @param string $storeId (optional)
   * @return PaymentSchedulesResponse|ErrorResponse
   */
  public function cancelPaymentSchedule($orderId, $region = null, $storeId = null);

  /**
   * @param PaymentSchedulesRequest $payload
   * @param string $region (optional)
   * @return PaymentSchedulesResponse|ErrorResponse
   */
  public function createPaymentSchedule(PaymentSchedulesRequest $payload, $region = null);

  /**
   * @param string $orderId
   * @param string $region (optional)
   * @param string $storeId (optional)
   * @return RecurringPaymentDetailsResponse|ErrorResponse
   */
  public function inquiryPaymentSchedule($orderId, $region = null, $storeId = null);

  /**
   * @param string $orderId
   * @param PaymentSchedulesRequest $payload
   * @param string $region (optional)
   * @param string $storeId (optional)
   * @return PaymentSchedulesResponse|ErrorResponse
   */
  public function updatePaymentSchedule($orderId, PaymentSchedulesRequest $payload, $region = null, $storeId = null);

  // ...
}
```


### PaymentTokenApi

```php
namespace FirstData\FirstApi\Client\Simple;
use FirstData\FirstApi\Client\Model\PaymentTokenizationRequest;
use FirstData\FirstApi\Client\Model\PaymentTokenizationResponse;
use FirstData\FirstApi\Client\Model\ErrorResponse;

class PaymentTokenApi {
  /**
   * @param PaymentTokenizationRequest $payload
   * @param string $authorization (optional)
   * @param string $region (optional)
   * @return PaymentTokenizationResponse|ErrorResponse
   */
  public function createPaymentToken(PaymentTokenizationRequest $payload, $authorization = null, $region = null);

  /**
   * @param string $tokenId
   * @param string $authorization (optional)
   * @param string $region (optional)
   * @param string $storeId (optional)
   * @return PaymentTokenizationResponse|ErrorResponse
   */
  public function deletePaymentToken($tokenId, $authorization = null, $region = null, $storeId = null);

   /**
   * @param string $tokenId
   * @param string $authorization (optional)
   * @param string $region (optional)
   * @param string $storeId (optional)
   * @return PaymentTokenizationResponse|ErrorResponse
   */
  public function getPaymentTokenDetails($tokenId, $authorization = null, $region = null, $storeId = null)

  // ...
}
```


### PaymentUrlApi

```php
namespace FirstData\FirstApi\Client\Simple;
use FirstData\FirstApi\Client\Model\PaymentUrlRequest;
use FirstData\FirstApi\Client\Model\PaymentUrlResponse;
use FirstData\FirstApi\Client\Model\PaymentUrlDetailResponse;
use FirstData\FirstApi\Client\Model\ErrorResponse;

class PaymentUrlApi {
  /**
   * @param PaymentUrlRequest $payload
   * @param string $region (optional)
   * @return PaymentUrlResponse|ErrorResponse
   */
  public function createPaymentUrl(PaymentUrlRequest $payload, $region = null);

  /**
     * Operation deletePaymentUrl
     *
     * Delete a payment URL.
     *
     * @param  transactionId
     * @param  orderId
     * @param  paymentUrlId
     * @param  transactionTime
     * @param  storeId
     * @param  string $region The region where client wants to process the transaction (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return PaymentUrlResponse|ErrorResponse
     */

    public function deletePaymentUrl($region = null,$storeId = null,$transactionId = null,$orderId = null,$paymentUrlId = null,$transactionTime = null);

    /**
     * Operation paymentUrlDetailResponse
     *
     * get detials of a payment URL.
     *
     * @param  fromDate(required)
     * @param  orderId
     * @param  toDate(required)
     * @param  merchantTransactionId
     * @param  status
     * @param  storeId
     * @param  string $region The region where client wants to process the transaction (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return PaymentUrlResponse|ErrorResponse
     */

    public function paymentUrlDetail($region = null,$storeId = null,$fromDate,$toDate,$orderId = null,$merchantTransactionId = null,$status = null);

  // ...
}
```