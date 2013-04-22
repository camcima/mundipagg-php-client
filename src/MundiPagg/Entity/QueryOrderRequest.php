<?php

namespace MundiPagg\Entity;

class QueryOrderRequest extends AbstractEntity
{
    /**
     * 
     * @var guid $MerchantKey
     * @access public
     */
    public $MerchantKey;

    /**
     * 
     * @var guid $OrderKey
     * @access public
     */
    public $OrderKey;

    /**
     * 
     * @var string $OrderReference
     * @access public
     */
    public $OrderReference;

    /**
     * 
     * @var guid $RequestKey
     * @access public
     */
    public $RequestKey;

    /**
     * 
     * @param guid $MerchantKey
     * @param guid $OrderKey
     * @param string $OrderReference
     * @param guid $RequestKey
     * @access public
     */
    public function __construct($MerchantKey, $OrderKey, $OrderReference, $RequestKey)
    {
        $this->MerchantKey = $MerchantKey;
        $this->OrderKey = $OrderKey;
        $this->OrderReference = $OrderReference;
        $this->RequestKey = $RequestKey;
    }
}
