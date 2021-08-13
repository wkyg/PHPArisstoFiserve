<?php

namespace FirstData\FirstApi\Client\Simple;

/**
 * Class MessageSignature
 * @package FirstData\FirstApi\Client\Simple
 */
class MessageSignature
{
    /**
     * @param  string $secretKey
     * @param  string $msg
     * @return string
     */
    public static function generate($secretKey, $msg)
    {
        $signature = \hash_hmac('sha256', $msg, $secretKey);
        return \base64_encode($signature);
    }
}

