<?php

namespace FirstData\FirstApi\Client\Simple;

use Ramsey\Uuid\Uuid;

/**
 * Class Headers
 * @package FirstData\FirstApi\Client\Simple
 */
class Headers
{
    /**
     * @param  string $contentType
     * @param  MerchantCredentials $creds
     * @param  string $payload
     * @return Headers
     */
    public static function from($contentType, MerchantCredentials $creds, $payload)
    {
        $clientRequestId = self::genClientRequestId();
        $timestamp = self::genTimestamp();

        $message = $creds->getApiKey() . $clientRequestId . $timestamp . $payload;
        $messageSignature = MessageSignature::generate($creds->getApiSecret(), $message);
        return new self($contentType, $clientRequestId, $creds->getApiKey(), $timestamp, $messageSignature);
    }

    /**
     * @return string
     */
    private static function genClientRequestId()
    {
        return Uuid::uuid4()->toString();
    }

    /**
     * @return float|int
     */
    private static function genTimestamp()
    {
        return time() * 1000;
    }

    /** @var string  */
    private $contentType;

    /** @var string  */
    private $clientRequestId;

    /** @var string  */
    private $apiKey;

    /** @var string  */
    private $timestamp;

    /** @var string  */
    private $messageSignature;

    /**
     * Headers constructor.
     * @param  string $contentType
     * @param  string $clientRequestId
     * @param  string $apiKey
     * @param  string $timestamp
     * @param  string $messageSignature
     */
    public function __construct($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature)
    {
        $this->contentType = $contentType;
        $this->clientRequestId = $clientRequestId;
        $this->apiKey = $apiKey;
        $this->timestamp = $timestamp;
        $this->messageSignature = $messageSignature;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @return string
     */
    public function getClientRequestId()
    {
        return $this->clientRequestId;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return string
     */
    public function getMessageSignature()
    {
        return $this->messageSignature;
    }
}
