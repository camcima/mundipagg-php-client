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
     * Get Credit Card Transaction Results
     * 
     * @return array
     */
    public function getCreditCardTransactionResult()
    {
        return $this->CreditCardTransactionResult;
    }

    /**
     * Add New Credit Card Transaction Result
     * 
     * @param \MundiPagg\Entity\CreditCardTransactionResult $creditCardTransactionResult
     * @return \MundiPagg\Entity\CreditCardTransactionResultCollection
     */
    public function addCreditCardTransactionResult(CreditCardTransactionResult $creditCardTransactionResult)
    {
        $this->CreditCardTransactionResult[] = $creditCardTransactionResult;
        return $this;
    }
}
