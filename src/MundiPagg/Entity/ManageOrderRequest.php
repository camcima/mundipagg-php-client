<?php

namespace MundiPagg\Entity;

class ManageOrderRequest extends AbstractEntity
{
    /**
     * 
     * @var array $ManageCreditCardTransactionCollection
     * @access public
     */
    public $ManageCreditCardTransactionCollection;

    /**
     * 
     * @var ManageOrderOperationEnum $ManageOrderOperationEnum
     * @access public
     */
    public $ManageOrderOperationEnum;

    /**
     * 
     * @var guid $MerchantKey
     * @access public
     */
    public $MerchantKey;

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
     * @var guid $RequestKey
     * @access public
     */
    public $RequestKey;

    /**
     * 
     * @param array $ManageCreditCardTransactionCollection
     * @param ManageOrderOperationEnum $ManageOrderOperationEnum
     * @param guid $MerchantKey
     * @param guid $OrderKey
     * @param string $OrderReference
     * @param guid $RequestKey
     * @access public
     */
    public function __construct($ManageCreditCardTransactionCollection, $ManageOrderOperationEnum, $MerchantKey, $OrderKey, $OrderReference, $RequestKey)
    {
        $this->ManageCreditCardTransactionCollection = $ManageCreditCardTransactionCollection;
        $this->ManageOrderOperationEnum = $ManageOrderOperationEnum;
        $this->MerchantKey = $MerchantKey;
        $this->OrderKey = $OrderKey;
        $this->OrderReference = $OrderReference;
        $this->RequestKey = $RequestKey;
    }
}
