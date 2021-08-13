<?php

namespace FirstData\FirstApi\Client\Simple;

use FirstData\FirstApi\Client\ApiException;
use FirstData\FirstApi\Client\Model\AuthenticationUpdateRequest;
use FirstData\FirstApi\Client\Model\ErrorResponse;
use FirstData\FirstApi\Client\Model\PrimaryTransaction;
use FirstData\FirstApi\Client\Model\SecondaryTransaction;
use FirstData\FirstApi\Client\Model\TransactionResponse;
use InvalidArgumentException;

/**
 * Class PaymentApi
 * @package FirstData\FirstApi\Client\Simple
 */
class PaymentApi extends ApiWrapper
{
    /** @var \FirstData\FirstApi\Client\Api\PaymentApi */
    private $client;

    /**
     * PaymentApi constructor.
     * @param  ClientContext $context
     */
    public function __construct(ClientContext $context)
    {
        parent::__construct($context);
        $this->client = $this->buildClient(\FirstData\FirstApi\Client\Api\PaymentApi::class);
    }

    /**
     * Operation finalizeSecureTransaction
     *
     * Update a 3DSecure or UnionPay payment and continue processing.
     *
     * @param  string $transactionId Gateway transaction identifier as returned in the parameter ipgTransactionId (required)
     * @param  AuthenticationUpdateRequest $payload payload (required)
     * @param  string $region The region where client wants to process the transaction (optional)
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return TransactionResponse|ErrorResponse
     */
    public function finalizeSecureTransaction($transactionId, AuthenticationUpdateRequest $payload, $region = null)
    {
        $strPayload = $this->serialize($payload);
        $headers = $this->genHeaders($strPayload);
        return $this->client->finalizeSecureTransaction(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $transactionId,
            $payload,
            $headers->getMessageSignature(),
            $region ?? $this->getDefaultRegion()
        );
    }

    /**
     * Operation primaryPaymentTransaction
     *
     * Generate a primary transaction.
     *
     * @param  PrimaryTransaction $payload Primary Transaction request (required)
     * @param  string $region The region where client wants to process the transaction (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return TransactionResponse|ErrorResponse
     */
    public function submitPrimaryTransaction(PrimaryTransaction $payload, $region = null)
    {
        $strPayload = $this->serialize($payload);
        $headers = $this->genHeaders($strPayload);
        return $this->client->submitPrimaryTransaction(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $payload,
            $headers->getMessageSignature(),
            $region ?? $this->getDefaultRegion()
        );
    }

    /**
     * Secondary Transactions
     *
     * Return/Void/PostAuth of a Transaction.
     *
     * @param  string $transactionId Gateway transaction identifier as returned in the parameter ipgTransactionId (required)
     * @param  SecondaryTransaction $payload payload (required)
     * @param  string $region The region where client wants to process the transaction (optional)
     * @param  string $storeId An optional outlet ID for clients that support multiple stores in the same developer app (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return TransactionResponse|ErrorResponse
     */
     public function secondaryPaymentTransaction($transactionId, SecondaryTransaction $payload, $region = null, $storeId = null)
    {
        $strPayload = $this->serialize($payload);
        $headers = $this->genHeaders($strPayload);
        return $this->client->submitSecondaryTransaction(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $transactionId,
            $payload,
            $headers->getMessageSignature(),
            $region ?? $this->getDefaultRegion(),
            $storeId ?? $this->getDefaultStoreId()
        );
    } 

    /**
     * Operation transactionInquiry
     *
     * Retrieve the state of a transaction.
     *
     * @param  string $transactionId Gateway transaction identifier as returned in the parameter ipgTransactionId (required)
     * @param  string $region The region where client wants to process the transaction (optional)
     * @param  string $storeId An optional outlet ID for clients that support multiple stores in the same developer app (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return TransactionResponse|ErrorResponse
     */

    public function transactionInquiry($transactionId, $region = null, $storeId = null)
    {
        $headers = $this->genHeaders();
        return $this->client->transactionInquiry(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $transactionId,
            $headers->getMessageSignature(),
            $region ?? $this->getDefaultRegion(),
            $storeId ?? $this->getDefaultStoreId()
        );
    }
}
