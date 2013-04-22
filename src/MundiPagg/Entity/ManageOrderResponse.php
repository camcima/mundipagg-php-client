<?php

namespace MundiPagg\Entity;

class ManageOrderResponse extends AbstractEntity
{
    /**
     * 
     * @var ManageOrderResponse $ManageOrderResult
     * @access public
     */
    public $ManageOrderResult;

    /**
     * 
     * @param ManageOrderResponse $ManageOrderResult
     * @access public
     */
    public function __construct($ManageOrderResult)
    {
        $this->ManageOrderResult = $ManageOrderResult;
    }
}
