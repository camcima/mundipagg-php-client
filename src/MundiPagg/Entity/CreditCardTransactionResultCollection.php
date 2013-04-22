<?php

namespace MundiPagg\Entity;

/**
 * CreditCardTransactionResultCollection Entity
 *
 * @author Carlos Cima
 */
class CreditCardTransactionResultCollection extends AbstractEntity
{
    /**
     * Credit Card Transaction Results
     * 
     * @var array
     */
    public $CreditCardTransactionResult = array();

    /**
     * Add New Credit Card Transaction Result
     * 
     * @param \MundiPagg\Entity\CreditCardTransactionResult $creditCardTransactionResult
     */
    public function addCreditCardTransactionResult(CreditCardTransactionResult $creditCardTransactionResult)
    {
        $this->CreditCardTransactionResult[] = $creditCardTransactionResult;
    }

}
