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
     * @var string $TransactionKey (GUID)
     * @access public
     */
    public $TransactionKey;

}
