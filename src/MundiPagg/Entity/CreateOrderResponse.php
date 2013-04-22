<?php

namespace MundiPagg\Entity;

/**
 * CreateOrder Response Entity
 *
 * @author Carlos Cima
 */
class CreateOrderResponse extends AbstractEntity
{
    public $BoletoTransactionResultCollection;
    public $BuyerKey;
    public $CreditCardTransactionResultCollection;
    public $MerchantKey;
    public $MundiPaggTimeInMilliSeconds;
    public $OrderKey;
    public $OrderReference;
    public $OrderStatusEnum;
    public $RequestKey;
    public $Success;
    public $Version;
    public $ErrorReport;

}
