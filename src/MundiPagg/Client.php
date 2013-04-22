<?php

namespace MundiPagg;

use Camcima\Soap\Client as SoapClient;
use MundiPagg\Entity\CreateOrderRequest;

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

    public function createOrder(CreateOrderRequest $createOrderRequest)
    {
        $requestParams = $this->getSoapVariables($createOrderRequest);
        var_dump($requestParams);
        $result = $this->getSoapClient()->CreateOrder($requestParams);
        return $result;
    }

    /**
     * Get SOAP Request Variables
     * 
     * Prepares request parameters to be
     * sent in the SOAP Request Body.
     * 
     * @param mixed $requestObject
     * @return array
     */
    protected function getSoapVariables($requestObject)
    {
        $objectName = lcfirst($requestObject->__toString());
        $stdClass = new \stdClass();
        $stdClass->$objectName = $requestObject;

        return $this->objectToArray($stdClass);
    }

    /**
     * Convert Objet to Array
     * 
     * This method omits null value properties
     * 
     * @param mixed $obj
     * @return array
     */
    protected function objectToArray($obj)
    {
        $arrObj = is_object($obj) ? get_object_vars($obj) : $obj;
        foreach ($arrObj as $key => $val) {
            $val = (is_array($val) || is_object($val)) ? $this->objectToArray($val) : $val;
            if ($val !== null) {
                $arr[$key] = is_scalar($val) ? ((string) $val) : $val;
            }
        }
        return $arr;
    }
}