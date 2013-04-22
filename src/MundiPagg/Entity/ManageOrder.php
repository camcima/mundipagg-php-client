<?php

namespace MundiPagg\Entity;

class ManageOrder extends AbstractEntity
{
    /**
     * 
     * @var ManageOrderRequest $manageOrderRequest
     * @access public
     */
    public $manageOrderRequest;

    /**
     * 
     * @param ManageOrderRequest $manageOrderRequest
     * @access public
     */
    public function __construct($manageOrderRequest)
    {
        $this->manageOrderRequest = $manageOrderRequest;
    }
}
