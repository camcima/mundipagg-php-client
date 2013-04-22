<?php

namespace MundiPagg\Entity;

/**
 * Credit Card Transaction Collection Entity
 *
 * @author Carlos Cima
 */
class CreditCardTransactionCollection extends AbstractEntity
{
    /**
     * Credit Card Transactions
     * 
     * @var array
     */
    public $CreditCardTransaction = array();

    /**
     * Add New Credit Card Transaction
     * 
     * @param \MundiPagg\Entity\CreditCardTransaction $creditCardTransaction
     */
    public function addCreditCardTransaction(CreditCardTransaction $creditCardTransaction)
    {
        $this->CreditCardTransaction[] = $creditCardTransaction;
    }
}
