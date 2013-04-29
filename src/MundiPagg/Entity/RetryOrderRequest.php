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
     * @var string $MerchantKey (GUID)
     * @access public
     */
    public $MerchantKey;

    /**
     * 
     * @var string $OrderKey (GUID)
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
     * @var string $RequestKey (GUID)
     * @access public
     */
    public $RequestKey;

    /**
     * 
     * @var array $RetryOrderCreditCardTransactionRequestCollection
     * @access public
     */
    public $RetryOrderCreditCardTransactionRequestCollection;

}
