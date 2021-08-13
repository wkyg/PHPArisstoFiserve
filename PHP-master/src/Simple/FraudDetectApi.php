<?php

namespace FirstData\FirstApi\Client\Simple;

use FirstData\FirstApi\Client\ApiException;
use FirstData\FirstApi\Client\Model\ErrorResponse;
use FirstData\FirstApi\Client\Model\ScoreOnlyRequest;
use FirstData\FirstApi\Client\Model\ScoreOnlyResponse;
use FirstData\FirstApi\Client\Model\ClientRegistration;
use FirstData\FirstApi\Client\Model\PaymentRegistration;
use FirstData\FirstApi\Client\Model\FraudRegistrationResponse;
use InvalidArgumentException;

/**
 * Class FraudDetectApi
 * @package FirstData\FirstApi\Client\Simple
 */
class FraudDetectApi extends ApiWrapper
{
    /** @var \FirstData\FirstApi\Client\Api\FraudDetectApi */
    private $client;

    /**
     * FraudDetectApi constructor.
     * @param  ClientContext $context
     */
    public function __construct(ClientContext $context)
    {
        parent::__construct($context);
        $this->client = $this->buildClient(\FirstData\FirstApi\Client\Api\FraudDetectApi::class);
    }

    /**
     * Operation scoreOnly
     *
     * Score a transaction for fraud.
     *
     * @param  ScoreOnlyRequest $payload payload (required)
     * @param  string $region The region where client wants to process the transaction (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return ScoreOnlyResponse|ErrorResponse
     */
    public function scoreOnly(ScoreOnlyRequest $payload, $region = null)
    {
        $strPayload = $this->serialize($payload);
        $headers = $this->genHeaders($strPayload);
        return $this->client->scoreOnly(
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

    public function fraudClientRegistrationPost(ClientRegistration $payload,$region = null)
    {
    	$strPayload = $this->serialize($payload);
        $headers = $this->genHeaders($strPayload);
        return $this->client->fraudClientRegistrationPost(
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

    public function fraudPaymentRegistrationPost(PaymentRegistration $payload,$region = null){
    	$strPayload = $this->serialize($payload);
        $headers = $this->genHeaders($strPayload);
        return $this->client->fraudPaymentRegistrationPost(
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
