<?php

namespace MundiPagg\Entity;

class QueryOrderResponse extends AbstractEntity
{
    /**
     * 
     * @var QueryOrderResponse $QueryOrderResult
     * @access public
     */
    public $QueryOrderResult;

    /**
     * 
     * @param QueryOrderResponse $QueryOrderResult
     * @access public
     */
    public function __construct($QueryOrderResult)
    {
        $this->QueryOrderResult = $QueryOrderResult;
    }
}
