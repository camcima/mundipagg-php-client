<?php

namespace MundiPagg;

use Camcima\Soap\Client as SoapClient;
use MundiPagg\Entity\CreateOrderRequest;
use MundiPagg\Entity\ManageOrderRequest;

/**
 * MundiPagg Client
 *
 * @author Carlos Cima
 */
class Client
{
    const WSDL_PRODUCTION_URL = 'https://transaction.mundipaggone.com/MundiPaggService.svc?wsdl';
    const WSDL_STAGING_URL = 'https://staging.mundipaggone.com/MundiPaggService.svc?wsdl';

    /**
     * MundiPagg Merchant Key
     * 
     * @var string 
     */
    protected $merchantKey;

    /**
     * Soap Client
     * 
     * @var \Camcima\Soap\Client
     */
    protected $soapClient;

    public function __construct($merchantKey, $wsdlUrl = self::WSDL_PRODUCTION_URL, $options = array())
    {
        $this->merchantKey = $merchantKey;

        $defaultOptions = array(
            'encoding' => 'UTF-8',
            'trace' => true,
            'exceptions' => true
        );

        $mergedOptions = array_merge($defaultOptions, $options);

        $this->soapClient = new SoapClient($wsdlUrl, $mergedOptions);
        $this->soapClient->setKeepNullProperties(false);
        $this->soapClient->setLowerCaseFirst(true);
    }

    /**
     * Get SOAP Client
     * 
     * @return \Camcima\Soap\Client
     */
    public function getSoapClient()
    {
        return $this->soapClient;
    }

    /**
     * Create Order
     * 
     * @param \MundiPagg\Entity\CreateOrderRequest $createOrderRequest
     * @return \MundiPagg\Entity\CreateOrderResult
     */
    public function createOrder(CreateOrderRequest $createOrderRequest)
    {
        $requestParams = $this->getSoapClient()->getSoapVariables($createOrderRequest, true, false);
        $soapResult = $this->getSoapClient()->CreateOrder($requestParams);
        $resultMap = array(
            'array|BoletoTransactionResult' => '\MundiPagg\Entity\BoletoTransactionResult',
            'array|CreditCardTransactionResult' => '\MundiPagg\Entity\CreditCardTransactionResult'
        );
        $mappedResult = $this->getSoapClient()->mapSoapResult($soapResult, 'CreateOrderResult', $resultMap, '\MundiPagg\Entity\\');
        /* @var $mappedResult \MundiPagg\Entity\CreateOrderResult */
        return $mappedResult;
    }

    /**
     * Manage Order
     * 
     * @param \MundiPagg\Entity\ManageOrderRequest $manageOrderRequest
     * @return \MundiPagg\Entity\ManageOrderResult
     */
    public function manageOrder(ManageOrderRequest $manageOrderRequest)
    {
        $requestParams = $this->getSoapClient()->getSoapVariables($manageOrderRequest, true, false);
        $soapResult = $this->getSoapClient()->ManageOrder($requestParams);
        $resultMap = array(
            'array|BoletoTransactionResult' => '\MundiPagg\Entity\BoletoTransactionResult',
            'array|CreditCardTransactionResult' => '\MundiPagg\Entity\CreditCardTransactionResult'
        );
        $mappedResult = $this->getSoapClient()->mapSoapResult($soapResult, 'ManageOrderResponse', $resultMap, '\MundiPagg\Entity\\');
        /* @var $mappedResult \MundiPagg\Entity\ManageOrderResult */
        return $mappedResult;
    }

}