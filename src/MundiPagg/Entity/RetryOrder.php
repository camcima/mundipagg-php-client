<?php

namespace MundiPagg\Entity;

/**
 * RetryOrder Entity
 *
 * @author Carlos Cima
 */
class RetryOrder extends AbstractEntity
{
    /**
     * 
     * @var RetryOrderRequest $manualRetryRequest
     * @access public
     */
    public $manualRetryRequest;

    /**
     * 
     * @param RetryOrderRequest $manualRetryRequest
     * @access public
     */
    public function __construct($manualRetryRequest)
    {
        $this->manualRetryRequest = $manualRetryRequest;
    }
}
