<?php

namespace MundiPagg\Entity;

/**
 * ShoppingCartItem Entity
 *
 * @author Carlos Cima
 */
class ShoppingCartItem extends AbstractEntity
{

    /**
     * Descrição
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string $Description
     * @access public
     */
    public $Description;

    /**
     * Identificação do item do carrinho na plataforma da loja.
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude.
     * 
     * @var string $ItemReference
     * @access public
     */
    public $ItemReference;

    /**
     * Nome
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude.
     * 
     * @var string $Name
     * @access public
     */
    public $Name;

    /**
     * Quantidade do item a ser comprado.
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude.
     * 
     * @var int $Quantity
     * @access public
     */
    public $Quantity;

    /**
     * Valor total da compra
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var int $TotalCostInCents
     * @access public
     */
    public $TotalCostInCents;

    /**
     * Custo Unitário
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude.
     * 
     * @var int $UnitCostInCents
     * @access public
     */
    public $UnitCostInCents;

}
