<?php

namespace FirstData\FirstApi\Client\Simple;

use FirstData\FirstApi\Client\ApiException;
use FirstData\FirstApi\Client\Model\ErrorResponse;
use FirstData\FirstApi\Client\Model\PaymentTokenizationRequest;
use FirstData\FirstApi\Client\Model\PaymentCardPaymentTokenUpdateRequest;
use FirstData\FirstApi\Client\Model\PaymentTokenizationResponse;
use InvalidArgumentException;

/**
 * Class PaymentTokenApi
 * @package FirstData\FirstApi\Client\Simple
 */
class PaymentTokenApi extends ApiWrapper
{
    /** @var \FirstData\FirstApi\Client\Api\PaymentTokenApi */
    private $client;

    /**
     * PaymentTokenApi constructor.
     * @param  ClientContext $context
     */
    public function __construct(ClientContext $context)
    {
        parent::__construct($context);
        $this->client = $this->buildClient(\FirstData\FirstApi\Client\Api\PaymentTokenApi::class);
    }

    /**
     * Operation createPaymentToken
     *
     * To perform payment tokenization with a payment card
     *
     * @param  PaymentTokenizationRequest $payload Payment Tokenization request (required)
     * @param  string $authorization The access token previously generated with the access-tokens call. Use the format &#39;Bearer {access-token}&#39;. (optional)
     * @param  string $region The region where client wants to process the transaction (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return PaymentTokenizationResponse|ErrorResponse
     */
    public function createPaymentToken(PaymentTokenizationRequest $payload, $authorization = null, $region = null)
    {
        if (isset($authorization)) {
          $headers = $this->genHeaders();
        } else {
          $strPayload = $this->serialize($payload);
          $headers = $this->genHeaders($strPayload);
        }
        return $this->client->createPaymentToken(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $payload,
            isset($authorization) ? null : $headers->getMessageSignature(),
            $authorization,
            $region ?? $this->getDefaultRegion()
        );
    }

    /**
     * Operation deletePaymentToken
     *
     * Delete a payment token
     *
     * @param  string $tokenId Identifies a payment token (required)
     * @param  string $authorization The access token previously generated with the access-tokens call. Use the format &#39;Bearer {access-token}&#39;. (optional)
     * @param  string $region The region where client wants to process the transaction (optional)
     * @param  string $storeId An optional outlet ID for clients that support multiple stores in the same developer app (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return PaymentTokenizationResponse|ErrorResponse
     */
    public function deletePaymentToken($tokenId, $authorization = null, $region = null, $storeId = null)
    {
        $headers = $this->genHeaders();
        return $this->client->deletePaymentToken(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $tokenId,
            isset($authorization) ? null : $headers->getMessageSignature(),
            $authorization,
            $region ?? $this->getDefaultRegion(),
            $storeId ?? $this->getDefaultStoreId()
        );
    }

    /**
     * Operation getPaymentTokenDetails
     *
     * Get details of a payment token
     *
     * @param  string $tokenId Identifies a payment token (required)
     * @param  string $authorization The access token previously generated with the access-tokens call. Use the format &#39;Bearer {access-token}&#39;. (optional)
     * @param  string $region The region where client wants to process the transaction (optional)
     * @param  string $storeId An optional outlet ID for clients that support multiple stores in the same developer app (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return PaymentTokenizationResponse|ErrorResponse
     */

    public function getPaymentTokenDetails($tokenId, $authorization = null, $region = null, $storeId = null)
    {
        $headers = $this->genHeaders();
        return $this->client->getPaymentTokenDetails(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $tokenId,
            isset($authorization) ? null : $headers->getMessageSignature(),
            $authorization,
            $region ?? $this->getDefaultRegion(),
            $storeId ?? $this->getDefaultStoreId()
        );
    }

     /**
     * Operation updatePaymentToken
     *
     * To update payment token information
     *
     * @param  PaymentCardPaymentTokenUpdateRequest $payload Payment Tokenization request (required)
     * @param  string $authorization The access token previously generated with the access-tokens call. Use the format &#39;Bearer {access-token}&#39;. (optional)
     * @param  string $region The region where client wants to process the transaction (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return PaymentTokenizationResponse|ErrorResponse
     */
    public function updatePaymentToken(PaymentCardPaymentTokenUpdateRequest $payload, $authorization = null, $region = null)
    {
        if (isset($authorization)) {
          $headers = $this->genHeaders();
        } else {
          $strPayload = $this->serialize($payload);
          $headers = $this->genHeaders($strPayload);
        }
        return $this->client->updatePaymentToken(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $payload,
            isset($authorization) ? null : $headers->getMessageSignature(),
            $authorization,
            $region ?? $this->getDefaultRegion()
        );
    }



}
