<?php

namespace MundiPagg\Entity;

/**
 * RetryOrderCreditCardTransactionRequest Entity
 *
 * @author Carlos Cima
 */
class RetryOrderCreditCardTransactionRequest extends AbstractEntity
{
    /**
     * 
     * @var string $SecurityCode
     * @access public
     */
    public $SecurityCode;

    /**
     * 
     * @var guid $TransactionKey
     * @access public
     */
    public $TransactionKey;

    /**
     * 
     * @param string $SecurityCode
     * @param guid $TransactionKey
     * @access public
     */
    public function __construct($SecurityCode, $TransactionKey)
    {
        $this->SecurityCode = $SecurityCode;
        $this->TransactionKey = $TransactionKey;
    }
}
