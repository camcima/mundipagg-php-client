<?php

namespace MundiPagg\Entity;

include_once('CreateOrderRequest.php');
include_once('Buyer.php');
include_once('BuyerAddress.php');
include_once('ShoppingCart.php');
include_once('ShoppingCartItem.php');
include_once('CreditCardTransaction.php');
include_once('Recurrency.php');
include_once('BoletoTransaction.php');
include_once('CreateOrderResponse.php');
include_once('CreditCardTransactionResult.php');
include_once('OriginalAcquirerReturn.php');
include_once('OriginalAcquirerReturnItem.php');
include_once('BoletoTransactionResult.php');
include_once('MundiPaggSuggestion.php');
include_once('ErrorReport.php');
include_once('ErrorItem.php');
include_once('ManageOrderRequest.php');
include_once('ManageCreditCardTransactionRequest.php');
include_once('ManageOrderResponse.php');
include_once('QueryOrderRequest.php');
include_once('QueryOrderResponse.php');
include_once('OrderData.php');
include_once('CreditCardTransactionData.php');
include_once('BoletoTransactionData.php');
include_once('GetInstantBuyDataRequest.php');
include_once('GetInstantBuyDataResponse.php');
include_once('CreditCardData.php');
include_once('RetryOrderRequest.php');
include_once('RetryOrderCreditCardTransactionRequest.php');
include_once('RetryOrderResponse.php');
include_once('CreateOrder.php');
include_once('ManageOrder.php');
include_once('QueryOrder.php');
include_once('GetInstantBuyData.php');
include_once('RetryOrder.php');


/**
 * 
 */
class MundiPaggService extends \SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'CreateOrderRequest' => 'MundiPagg\Entity\CreateOrderRequest',
    'Buyer' => 'MundiPagg\Entity\Buyer',
    'BuyerAddress' => 'MundiPagg\Entity\BuyerAddress',
    'ShoppingCart' => 'MundiPagg\Entity\ShoppingCart',
    'ShoppingCartItem' => 'MundiPagg\Entity\ShoppingCartItem',
    'CreditCardTransaction' => 'MundiPagg\Entity\CreditCardTransaction',
    'Recurrency' => 'MundiPagg\Entity\Recurrency',
    'BoletoTransaction' => 'MundiPagg\Entity\BoletoTransaction',
    'CreateOrderResponse' => 'MundiPagg\Entity\CreateOrderResponse',
    'CreditCardTransactionResult' => 'MundiPagg\Entity\CreditCardTransactionResult',
    'OriginalAcquirerReturn' => 'MundiPagg\Entity\OriginalAcquirerReturn',
    'OriginalAcquirerReturnItem' => 'MundiPagg\Entity\OriginalAcquirerReturnItem',
    'BoletoTransactionResult' => 'MundiPagg\Entity\BoletoTransactionResult',
    'MundiPaggSuggestion' => 'MundiPagg\Entity\MundiPaggSuggestion',
    'ErrorReport' => 'MundiPagg\Entity\ErrorReport',
    'ErrorItem' => 'MundiPagg\Entity\ErrorItem',
    'ManageOrderRequest' => 'MundiPagg\Entity\ManageOrderRequest',
    'ManageCreditCardTransactionRequest' => 'MundiPagg\Entity\ManageCreditCardTransactionRequest',
    'ManageOrderResponse' => 'MundiPagg\Entity\ManageOrderResponse',
    'QueryOrderRequest' => 'MundiPagg\Entity\QueryOrderRequest',
    'QueryOrderResponse' => 'MundiPagg\Entity\QueryOrderResponse',
    'OrderData' => 'MundiPagg\Entity\OrderData',
    'CreditCardTransactionData' => 'MundiPagg\Entity\CreditCardTransactionData',
    'BoletoTransactionData' => 'MundiPagg\Entity\BoletoTransactionData',
    'GetInstantBuyDataRequest' => 'MundiPagg\Entity\GetInstantBuyDataRequest',
    'GetInstantBuyDataResponse' => 'MundiPagg\Entity\GetInstantBuyDataResponse',
    'CreditCardData' => 'MundiPagg\Entity\CreditCardData',
    'RetryOrderRequest' => 'MundiPagg\Entity\RetryOrderRequest',
    'RetryOrderCreditCardTransactionRequest' => 'MundiPagg\Entity\RetryOrderCreditCardTransactionRequest',
    'RetryOrderResponse' => 'MundiPagg\Entity\RetryOrderResponse',
    'CreateOrder' => 'MundiPagg\Entity\CreateOrder',
    'CreateOrderResponse' => 'MundiPagg\Entity\CreateOrderResponse',
    'ManageOrder' => 'MundiPagg\Entity\ManageOrder',
    'ManageOrderResponse' => 'MundiPagg\Entity\ManageOrderResponse',
    'QueryOrder' => 'MundiPagg\Entity\QueryOrder',
    'QueryOrderResponse' => 'MundiPagg\Entity\QueryOrderResponse',
    'GetInstantBuyData' => 'MundiPagg\Entity\GetInstantBuyData',
    'GetInstantBuyDataResponse' => 'MundiPagg\Entity\GetInstantBuyDataResponse',
    'RetryOrder' => 'MundiPagg\Entity\RetryOrder',
    'RetryOrderResponse' => 'MundiPagg\Entity\RetryOrderResponse');

  /**
   * 
   * @param array $config A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = 'https://transaction.mundipaggone.com/MundiPaggService.svc?wsdl')
  {
    foreach(self::$classmap as $key => $value)
  {
    if(!isset($options['classmap'][$key]))
    {
      $options['classmap'][$key] = $value;
    }
  }
  
  parent::__construct($wsdl, $options);
  }

  /**
   * 
   * @param CreateOrder $parameters
   * @access public
   */
  public function CreateOrder(CreateOrder $parameters)
  {
    return $this->__soapCall('CreateOrder', array($parameters));
  }

  /**
   * 
   * @param ManageOrder $parameters
   * @access public
   */
  public function ManageOrder(ManageOrder $parameters)
  {
    return $this->__soapCall('ManageOrder', array($parameters));
  }

  /**
   * 
   * @param QueryOrder $parameters
   * @access public
   */
  public function QueryOrder(QueryOrder $parameters)
  {
    return $this->__soapCall('QueryOrder', array($parameters));
  }

  /**
   * 
   * @param GetInstantBuyData $parameters
   * @access public
   */
  public function GetInstantBuyData(GetInstantBuyData $parameters)
  {
    return $this->__soapCall('GetInstantBuyData', array($parameters));
  }

  /**
   * 
   * @param RetryOrder $parameters
   * @access public
   */
  public function RetryOrder(RetryOrder $parameters)
  {
    return $this->__soapCall('RetryOrder', array($parameters));
  }

}
