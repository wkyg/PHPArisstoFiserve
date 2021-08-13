<?php

namespace FirstData\FirstApi\Client\Simple;

use FirstData\FirstApi\Client\ApiException;
use FirstData\FirstApi\Client\Model\ErrorResponse;
use FirstData\FirstApi\Client\Model\ExchangeRateRequest;
use FirstData\FirstApi\Client\Model\ExchangeRateResponse;
use InvalidArgumentException;

/**
 * Class CurrencyConversionApi
 * @package FirstData\FirstApi\Client\Simple
 */
class CurrencyConversionApi extends ApiWrapper
{
    /** @var \FirstData\FirstApi\Client\Api\CurrencyConversionApi */
    private $client;

    /**
     * CurrencyConversionApi constructor.
     * @param  ClientContext $context
     */
    public function __construct(ClientContext $context)
    {
        parent::__construct($context);
        $this->client = $this->buildClient(\FirstData\FirstApi\Client\Api\CurrencyConversionApi::class);
    }


    /**
     * Operation getExchangeRate
     *
     * Generate dynamic currency conversion transactions
     *
     * @param  ExchangeRateRequest $payload Dynamic currency conversion payload (required)
     * @param  string $region The region where client wants to process the transaction (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return ExchangeRateResponse|ErrorResponse
     */
    public function getExchangeRate(ExchangeRateRequest $payload, $region = null)
    {
        $strPayload = $this->serialize($payload);
        $headers = $this->genHeaders($strPayload);
        return $this->client->getExchangeRate(
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
