<?php

namespace MundiPagg\Entity;

/**
 * QueryOrder Entity
 *
 * @author Carlos Cima
 */
class QueryOrder extends AbstractEntity
{
    /**
     * 
     * @var QueryOrderRequest $queryOrderRequest
     * @access public
     */
    public $queryOrderRequest;

    /**
     * 
     * @param QueryOrderRequest $queryOrderRequest
     * @access public
     */
    public function __construct($queryOrderRequest)
    {
        $this->queryOrderRequest = $queryOrderRequest;
    }
}
