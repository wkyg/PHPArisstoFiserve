<?php

namespace FirstData\FirstApi\Client\Simple;

use FirstData\FirstApi\Client\ApiException;
use FirstData\FirstApi\Client\Model\ErrorResponse;
use FirstData\FirstApi\Client\Model\TransactionResponse;
use FirstData\FirstApi\Client\Model\CardVerificationRequest;
use FirstData\FirstApi\Client\Model\AccountVerificationRequest;

/**
 * Class CardVerificationApi
 * @package FirstData\FirstApi\Client\Simple
 */
class VerificationApi extends ApiWrapper
{
    /** @var \FirstData\FirstApi\Client\Api\VerificationApi */
    private $client;

    /**
     * CardVerificationApi constructor.
     * @param  ClientContext $context
     */
    public function __construct(ClientContext $context)
    {
        parent::__construct($context);
        $this->client = $this->buildClient(\FirstData\FirstApi\Client\Api\VerificationApi::class);
    }

    /**
     * Operation verifyAccount
     *
     * @param  AccountVerificationRequest $payload
     * @param  string $region The region where client wants to process the transaction (optional)
     * @throws ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return TransactionResponse|ErrorResponse
     */
    public function verifyAccount(AccountVerificationRequest $payload, $region = null)
    {
        $strPayload = $this->serialize($payload);
        $headers = $this->genHeaders($strPayload);
        return $this->client->verifyAccount(
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
     * Operation verifyCard
     *
     * @param  CardVerificationRequest $payload
     * @param  string $region The region where client wants to process the transaction (optional)
     * @throws ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return TransactionResponse|ErrorResponse
     */
    public function verifyCard(CardVerificationRequest $payload, $region = null)
    {
        $strPayload = $this->serialize($payload);
        $headers = $this->genHeaders($strPayload);
        return $this->client->verifyCard(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $payload,
            $headers->getMessageSignature(),
            $region ?? $this->getDefaultRegion()
        );
    }
}
