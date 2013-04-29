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
     * @var string $BuyerKey (GUID)
     * @access public
     */
    public $BuyerKey;

    /**
     * 
     * @var string $InstantBuyKey (GUID)
     * @access public
     */
    public $InstantBuyKey;

    /**
     * 
     * @var string $MerchantKey (GUID)
     * @access public
     */
    public $MerchantKey;

    /**
     * 
     * @var string $RequestKey (GUID)
     * @access public
     */
    public $RequestKey;

}
