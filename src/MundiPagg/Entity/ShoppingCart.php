<?php

namespace MundiPagg\Entity;

class ShoppingCart extends AbstractEntity
{
    /**
     * 
     * @var int $FreightCostInCents
     * @access public
     */
    public $FreightCostInCents;

    /**
     * 
     * @var array $ShoppingCartItemCollection
     * @access public
     */
    public $ShoppingCartItemCollection;

    /**
     * 
     * @param int $FreightCostInCents
     * @param array $ShoppingCartItemCollection
     * @access public
     */
    public function __construct($FreightCostInCents, $ShoppingCartItemCollection)
    {
        $this->FreightCostInCents = $FreightCostInCents;
        $this->ShoppingCartItemCollection = $ShoppingCartItemCollection;
    }
}
