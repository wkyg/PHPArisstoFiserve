<?php

namespace FirstData\FirstApi\Client\Simple;

/**
 * Class MerchantCredentials
 * @package FirstData\FirstApi\Client\Simple
 */
class MerchantCredentials
{
    /** @var  string */
    private $apiSecret;

    /** @var  string */
    private $apiKey;

    /**
     * MerchantCredentials constructor.
     * @param  string $apiSecret
     * @param  string $apiKey
     */
    public function __construct($apiSecret, $apiKey)
    {
        $this->apiSecret = $apiSecret;
        $this->apiKey = $apiKey;
    }

    /**
     * @return string
     */
    public function getApiSecret()
    {
        return $this->apiSecret;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }
}
