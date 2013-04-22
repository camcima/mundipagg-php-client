<?php

namespace MundiPagg\Entity;

class ManageCreditCardTransactionRequest extends AbstractEntity
{
    /**
     * 
     * @var int $AmountInCents
     * @access public
     */
    public $AmountInCents;

    /**
     * 
     * @var guid $TransactionKey
     * @access public
     */
    public $TransactionKey;

    /**
     * 
     * @var string $TransactionReference
     * @access public
     */
    public $TransactionReference;

    /**
     * 
     * @param int $AmountInCents
     * @param guid $TransactionKey
     * @param string $TransactionReference
     * @access public
     */
    public function __construct($AmountInCents, $TransactionKey, $TransactionReference)
    {
        $this->AmountInCents = $AmountInCents;
        $this->TransactionKey = $TransactionKey;
        $this->TransactionReference = $TransactionReference;
    }
}
