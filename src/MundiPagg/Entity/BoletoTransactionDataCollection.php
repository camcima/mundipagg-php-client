<?php

namespace MundiPagg\Entity;

/**
 * BoletoTransactionResultCollection Entity
 *
 * @author Carlos Cima
 */
class BoletoTransactionDataCollection extends AbstractEntity
{

    /**
     * Boleto Transaction Results
     * 
     * @var array
     */
    public $BoletoTransactionData = array();

    /**
     * Add New Boleto Transaction Result
     * 
     * @param \MundiPagg\Entity\BoletoTransactionData $boletoTransactionData
     */
    public function addBoletoTransactionData(BoletoTransactionData $boletoTransactionData)
    {
        $this->BoletoTransactionData[] = $boletoTransactionData;
        return $this;
    }
}
