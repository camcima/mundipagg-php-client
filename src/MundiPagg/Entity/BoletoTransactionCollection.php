<?php

namespace MundiPagg\Entity;

/**
 * BoletoTransactionCollection Entity
 *
 * @author Carlos Cima
 */
class BoletoTransactionCollection extends AbstractEntity
{
    /**
     * Boleto Transactions
     * 
     * @var array
     */
    public $BoletoTransaction = array();

    /**
     * Add New Boleto Transaction
     * 
     * @param \MundiPagg\Entity\BoletoTransaction $boletoTransaction
     */
    public function addBoletoTransaction(BoletoTransaction $boletoTransaction)
    {
        $this->BoletoTransaction[] = $boletoTransaction;
    }
}
