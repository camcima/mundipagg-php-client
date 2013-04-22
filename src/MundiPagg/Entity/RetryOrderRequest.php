<?php

namespace MundiPagg\Entity;

/**
 * RetryOrderRequest Entity
 *
 * @author Carlos Cima
 */
class RetryOrderRequest extends AbstractEntity
{
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
     * @var array $RetryOrderCreditCardTransactionRequestCollection
     * @access public
     */
    public $RetryOrderCreditCardTransactionRequestCollection;

    /**
     * 
     * @param guid $MerchantKey
     * @param guid $OrderKey
     * @param string $OrderReference
     * @param guid $RequestKey
     * @param array $RetryOrderCreditCardTransactionRequestCollection
     * @access public
     */
    public function __construct($MerchantKey, $OrderKey, $OrderReference, $RequestKey, $RetryOrderCreditCardTransactionRequestCollection)
    {
        $this->MerchantKey = $MerchantKey;
        $this->OrderKey = $OrderKey;
        $this->OrderReference = $OrderReference;
        $this->RequestKey = $RequestKey;
        $this->RetryOrderCreditCardTransactionRequestCollection = $RetryOrderCreditCardTransactionRequestCollection;
    }
}
