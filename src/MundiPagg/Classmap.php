<?php

namespace MundiPagg;

/**
 * SOAP Classmap
 *
 * @author Carlos Cima
 */
class Classmap
{
    public static $classmap = array(
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

}
