<?php

namespace MundiPagg\Entity;

/**
 * RetryOrderResponse Entity
 *
 * @author Carlos Cima
 */
class RetryOrderResponse extends AbstractEntity
{
    /**
     * 
     * @var RetryOrderResponse $RetryOrderResult
     * @access public
     */
    public $RetryOrderResult;

    /**
     * 
     * @param RetryOrderResponse $RetryOrderResult
     * @access public
     */
    public function __construct($RetryOrderResult)
    {
        $this->RetryOrderResult = $RetryOrderResult;
    }
}
