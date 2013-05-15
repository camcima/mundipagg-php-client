<?php

namespace MundiPagg\Entity;

/**
 * CreditCardTransactionCollection Entity
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
     * @return \MundiPagg\Entity\CreditCardTransactionCollection
     */
    public function addCreditCardTransaction(CreditCardTransaction $creditCardTransaction)
    {
        $this->CreditCardTransaction[] = $creditCardTransaction;
        return $this;
    }
}
