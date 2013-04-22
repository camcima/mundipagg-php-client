<?php

namespace MundiPagg\Entity;

/**
 * GetInstantBuyDataRequest Entity
 *
 * @author Carlos Cima
 */
class GetInstantBuyDataRequest extends AbstractEntity
{
    /**
     * 
     * @var guid $BuyerKey
     * @access public
     */
    public $BuyerKey;

    /**
     * 
     * @var guid $InstantBuyKey
     * @access public
     */
    public $InstantBuyKey;

    /**
     * 
     * @var guid $MerchantKey
     * @access public
     */
    public $MerchantKey;

    /**
     * 
     * @var guid $RequestKey
     * @access public
     */
    public $RequestKey;

    /**
     * 
     * @param guid $BuyerKey
     * @param guid $InstantBuyKey
     * @param guid $MerchantKey
     * @param guid $RequestKey
     * @access public
     */
    public function __construct($BuyerKey, $InstantBuyKey, $MerchantKey, $RequestKey)
    {
        $this->BuyerKey = $BuyerKey;
        $this->InstantBuyKey = $InstantBuyKey;
        $this->MerchantKey = $MerchantKey;
        $this->RequestKey = $RequestKey;
    }
}
