<?php

namespace MundiPagg\Entity;

/**
 * BoletoTransactionCollection Entity
 *
 * @author Carlos Cima
 */
class OrderDataCollection extends AbstractEntity
{

    /**
     * Order Datas
     * 
     * @var array
     */
    public $OrderData = array();

    /**
     * Add New Order Data
     * 
     * @param \MundiPagg\Entity\OrderData $orderData
     */
    public function addOrderData(OrderData $orderData)
    {
        $this->OrderData[] = $orderData;
        return $this;
    }
}
