<?php

namespace FirstData\FirstApi\Client\Simple;

use FirstData\FirstApi\Client\ApiException;
use FirstData\FirstApi\Client\Model\PaymentSchedulesRequest;
use FirstData\FirstApi\Client\Model\PaymentSchedulesResponse;
use FirstData\FirstApi\Client\Model\RecurringPaymentDetailsResponse;
use FirstData\FirstApi\Client\Model\ErrorResponse;
use InvalidArgumentException;

/**
 * Class PaymentSchedulesApi
 * @package FirstData\FirstApi\Client\Simple
 */
class PaymentSchedulesApi extends ApiWrapper
{
    /** @var \FirstData\FirstApi\Client\Api\PaymentSchedulesApi  */
    private $client;

    /**
     * PaymentSchedulesApi constructor.
     * @param  ClientContext $context
     */
    public function __construct(ClientContext $context)
    {
        parent::__construct($context);
        $this->client = $this->buildClient(\FirstData\FirstApi\Client\Api\PaymentSchedulesApi::class);
    }

    /**
     * Operation cancelPaymentSchedule
     *
     * Cancel a gateway payment schedule.
     *
     * @param  string $orderId Gateway order identifier as returned in the parameter orderId (required)
     * @param  string $region The region where client wants to process the transaction (optional)
     * @param  string $storeId An optional outlet ID for clients that support multiple stores in the same developer app (optional)
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return PaymentSchedulesResponse|ErrorResponse
     */
    public function cancelPaymentSchedule($orderId, $region = null, $storeId = null)
    {
        $headers = $this->genHeaders();
        return $this->client->cancelPaymentSchedule(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $orderId,
            $headers->getMessageSignature(),
            $region ?? $this->getDefaultRegion(),
            $storeId ?? $this->getDefaultStoreId()
        );
    }

    /**
     * Operation createPaymentSchedule
     *
     * Use this to create a gateway payment schedule.
     *
     * @param  PaymentSchedulesRequest $payload payload (required)
     * @param  string $region The region where client wants to process the transaction (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return PaymentSchedulesResponse|ErrorResponse
     */
    public function createPaymentSchedule(PaymentSchedulesRequest $payload, $region = null)
    {
        $strPayload = $this->serialize($payload);
        $headers = $this->genHeaders($strPayload);
        return $this->client->createPaymentSchedule(
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
     * Operation inquiryPaymentSchedule
     *
     * Inquire a Gateway payment schedule.
     *
     * @param  string $orderId Gateway order identifier as returned in the parameter orderId (required)
     * @param  string $region The region where client wants to process the transaction (optional)
     * @param  string $storeId An optional outlet ID for clients that support multiple stores in the same developer app (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return RecurringPaymentDetailsResponse|ErrorResponse
     */
    public function inquiryPaymentSchedule($orderId, $region = null, $storeId = null)
    {
        $headers = $this->genHeaders();
        return $this->client->inquiryPaymentSchedule(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $orderId,
            $headers->getMessageSignature(),
            $region ?? $this->getDefaultRegion(),
            $storeId ?? $this->getDefaultStoreId()
        );
    }

    /**
     * Operation updatePaymentSchedule
     *
     * Update a Gateway payment schedule.
     *
     * @param  string $orderId Gateway order identifier as returned in the parameter orderId (required)
     * @param  PaymentSchedulesRequest $payload payload (required)
     * @param  string $region The region where client wants to process the transaction (optional)
     * @param  string $storeId An optional outlet ID for clients that support multiple stores in the same developer app (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return RecurringPaymentDetailsResponse|ErrorResponse
     */
    public function updatePaymentSchedule($orderId, PaymentSchedulesRequest $payload, $region = null)
    {
        $strPayload = $this->serialize($payload);
        $headers = $this->genHeaders($strPayload);
        return $this->client->updatePaymentSchedule(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $orderId,
            $payload,
            $headers->getMessageSignature(),
            $region ?? $this->getDefaultRegion()
           // $storeId ?? $this->getDefaultStoreId()
        );
    }
}
