<?php

namespace MundiPagg\Entity;

/**
 * BoletoTransactionResultCollection Entity
 *
 * @author Carlos Cima
 */
class BoletoTransactionResultCollection extends AbstractEntity
{
    /**
     * Boleto Transaction Results
     * 
     * @var array
     */
    public $BoletoTransactionResult = array();

    /**
     * Add New Boleto Transaction Result
     * 
     * @param \MundiPagg\Entity\BoletoTransactionResult $boletoTransactionResult
     */
    public function addBoletoTransactionResult(BoletoTransactionResult $boletoTransactionResult)
    {
        $this->BoletoTransactionResult[] = $boletoTransactionResult;
    }

}
