<?php

namespace MundiPagg\Entity;

class OrderData extends AbstractEntity
{
    /**
     * 
     * @var dateTime $CreateDate
     * @access public
     */
    public $CreateDate;

    /**
     * 
     * @var guid $OrderKey
     * @access public
     */
    public $OrderKey;

    /**
     * 
     * @var string $OrderReference
     * @access public
     */
    public $OrderReference;

    /**
     * 
     * @var OrderStatusEnum $OrderStatusEnum
     * @access public
     */
    public $OrderStatusEnum;

    /**
     * 
     * @var array $CreditCardTransactionDataCollection
     * @access public
     */
    public $CreditCardTransactionDataCollection;

    /**
     * 
     * @var array $BoletoTransactionDataCollection
     * @access public
     */
    public $BoletoTransactionDataCollection;

    /**
     * 
     * @param dateTime $CreateDate
     * @param guid $OrderKey
     * @param string $OrderReference
     * @param OrderStatusEnum $OrderStatusEnum
     * @param array $CreditCardTransactionDataCollection
     * @param array $BoletoTransactionDataCollection
     * @access public
     */
    public function __construct($CreateDate, $OrderKey, $OrderReference, $OrderStatusEnum, $CreditCardTransactionDataCollection, $BoletoTransactionDataCollection)
    {
        $this->CreateDate = $CreateDate;
        $this->OrderKey = $OrderKey;
        $this->OrderReference = $OrderReference;
        $this->OrderStatusEnum = $OrderStatusEnum;
        $this->CreditCardTransactionDataCollection = $CreditCardTransactionDataCollection;
        $this->BoletoTransactionDataCollection = $BoletoTransactionDataCollection;
    }
}
