<?php

namespace FirstData\FirstApi\Client\Simple;

class ClientFactory
{
    /** @var ClientContext **/
    private $context;

    public function __construct(ClientContext $context)
    {
        $this->context = $context;
    }

    public function getAuthenticationApi()
    {
        return new AuthenticationApi($this->context);
    }

    public function getInformationLookupApi()
    {
        return new InformationLookupApi($this->context);
    }

    public function getVerificationApi()
    {
      return new VerificationApi($this->context);
    }

    public function getCurrencyConversionApi()
    {
        return new CurrencyConversionApi($this->context);
    }

    public function getFraudDetectApi()
    {
        return new FraudDetectApi($this->context);
    }

    public function getOrderApi()
    {
        return new OrderApi($this->context);
    }

    public function getPaymentApi()
    {
        return new PaymentApi($this->context);
    }

    public function getPaymentSchedulesApi()
    {
        return new PaymentSchedulesApi($this->context);
    }

    public function getPaymentTokenApi()
    {
        return new PaymentTokenApi($this->context);
    }

    public function getPaymentUrlApi()
    {
        return new PaymentUrlApi($this->context);
    }
}
