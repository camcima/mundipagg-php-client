<?php

namespace MundiPagg\Entity;

/**
 * CreditCardTransactionCollection Entity
 *
 * @author Carlos Cima
 */
class CreditCardTransactionDataCollection extends AbstractEntity
{

    /**
     * Credit Card Transactions
     * 
     * @var array
     */
    public $CreditCardTransactionData = array();

    /**
     * Add New Credit Card Transaction
     * 
     * @param \MundiPagg\Entity\CreditCardTransactionData $creditCardTransactionData
     * @return \MundiPagg\Entity\CreditCardTransactionCollectionData
     */
    public function addCreditCardTransaction(CreditCardTransactionData $creditCardTransactionData)
    {
        $this->CreditCardTransactionData[] = $creditCardTransactionData;
        return $this;
    }
}
