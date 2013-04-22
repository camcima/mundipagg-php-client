<?php

namespace MundiPagg\Entity;

/**
 * ShoppingCart Entity
 *
 * @author Carlos Cima
 */
class ShoppingCart extends AbstractEntity
{
    /**
     * Valor do frete.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var int $FreightCostInCents
     * @access public
     */
    public $FreightCostInCents;

    /**
     * Itens do carrinho de compra.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @see \MundiPagg\Entity\ShoppingCartItem
     * @var array $ShoppingCartItemCollection
     * @access public
     */
    public $ShoppingCartItemCollection;

}
