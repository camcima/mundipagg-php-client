<?php

namespace MundiPagg\Entity;

class CreateOrder extends AbstractEntity
{
    /**
     * 
     * @var CreateOrderRequest $createOrderRequest
     * @access public
     */
    public $createOrderRequest;

    /**
     * 
     * @param CreateOrderRequest $createOrderRequest
     * @access public
     */
    public function __construct($createOrderRequest)
    {
        $this->createOrderRequest = $createOrderRequest;
    }
}
