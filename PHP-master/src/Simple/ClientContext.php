<?php

namespace FirstData\FirstApi\Client\Simple;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use FirstData\FirstApi\Client\Configuration;
use FirstData\FirstApi\Client\HeaderSelector;

/**
 * Class ClientContext
 * @package FirstData\FirstApi\Client\Simple
 */
class ClientContext
{
    const CONTENT_TYPE = 'application/json';
    const DEFAULT_BASE_PATH = 'https://cert.api.firstdata.com/gateway/v2';

    /**
     * @param  MerchantCredentials $creds
     * @param  string $apiBasePath
     * @param  string $defaultRegion
     * @param  string $defaultStoreId
     * @return ClientContext
     */
    public static function create(MerchantCredentials $creds, $apiBasePath = self::DEFAULT_BASE_PATH, $defaultRegion = null, $defaultStoreId = null)
    {
        $context = new self(
          new Client(),
          new Configuration(),
          new HeaderSelector(),
          $creds,
          $defaultRegion,
          $defaultStoreId
        );
        $context->setApiBasePath($apiBasePath);
        return $context;
    }

    /** @var  ClientInterface */
    private $client;

    /** @var  Configuration */
    private $config;

    /** @var  HeaderSelector */
    private $selector;

    /** @var  MerchantCredentials */
    private $credentials;

    /** @var  string */
    private $defaultRegion;

    /** @var  string */
    private $defaultStoreId;

    /**
     * ClientContext constructor.
     * @param  ClientInterface $client
     * @param  Configuration $config
     * @param  HeaderSelector $selector
     * @param  MerchantCredentials $credentials
     * @param  string $defaultRegion
     * @param  string $defaultStoreId
     */
    public function __construct(
        ClientInterface $client,
        Configuration $config,
        HeaderSelector $selector,
        MerchantCredentials $credentials,
        $defaultRegion = null,
        $defaultStoreId = null
    ) {
        $this->client = $client;
        $this->config = $config;
        $this->selector = $selector;
        $this->credentials = $credentials;
        $this->defaultRegion = $defaultRegion;
        $this->defaultStoreId = $defaultStoreId;
    }

    /**
     * @return ClientFactory
     */
    public function getFactory()
    {
        return new ClientFactory($this);
    }

    /**
     * @return ClientInterface
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @return HeaderSelector
     */
    public function getSelector()
    {
        return $this->selector;
    }

    /**
     * @return MerchantCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @return string|null
     */
    public function getDefaultRegion()
    {
        return $this->defaultRegion;
    }

    /**
     * @return string|null
     */
    public function getDefaultStoreId()
    {
        return $this->defaultStoreId;
    }

    /**
     * @param  string $basePath
     */
    public function setApiBasePath($basePath)
    {
        $this->config->setHost($basePath);
    }
}
