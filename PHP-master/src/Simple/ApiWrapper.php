<?php

namespace FirstData\FirstApi\Client\Simple;

use FirstData\FirstApi\Client\ObjectSerializer;

/**
 * Class ApiWrapper
 * @package FirstData\FirstApi\Client\Simple
 */
class ApiWrapper
{

    /** @var ClientContext  */
    private $context;

    /**
     * ApiWrapper constructor.
     * @param  ClientContext $context
     */
    protected function __construct(ClientContext $context)
    {
        $this->context = $context;
    }

    /**
     * @return string|null
     */
    protected function getDefaultRegion()
    {
        return $this->context->getDefaultRegion();
    }

    /**
     * @return string|null
     */
    protected function getDefaultStoreId()
    {
        return $this->context->getDefaultStoreId();
    }

    /**
     * @param  string $payload
     * @return Headers
     */
    protected function genHeaders($payload = '')
    {
        return Headers::from(ClientContext::CONTENT_TYPE, $this->context->getCredentials(), $payload);
    }

    /**
     * @param  $payload
     * @return string
     */
    protected function serialize($payload)
    {
        return \GuzzleHttp\json_encode(
          ObjectSerializer::sanitizeForSerialization(
            $payload
          )
        );
    }

    /**
     * @param  string $class
     * @return mixed
     */
    protected function buildClient($class)
    {
        return new $class($this->context->getClient(), $this->context->getConfig(), $this->context->getSelector());
    }
}
