<?php

namespace MundiPagg\Entity;

class ShoppingCartItem extends AbstractEntity
{
    /**
     * 
     * @var string $Description
     * @access public
     */
    public $Description;

    /**
     * 
     * @var string $ItemReference
     * @access public
     */
    public $ItemReference;

    /**
     * 
     * @var string $Name
     * @access public
     */
    public $Name;

    /**
     * 
     * @var int $Quantity
     * @access public
     */
    public $Quantity;

    /**
     * 
     * @var int $TotalCostInCents
     * @access public
     */
    public $TotalCostInCents;

    /**
     * 
     * @var int $UnitCostInCents
     * @access public
     */
    public $UnitCostInCents;

    /**
     * 
     * @param string $Description
     * @param string $ItemReference
     * @param string $Name
     * @param int $Quantity
     * @param int $TotalCostInCents
     * @param int $UnitCostInCents
     * @access public
     */
    public function __construct($Description, $ItemReference, $Name, $Quantity, $TotalCostInCents, $UnitCostInCents)
    {
        $this->Description = $Description;
        $this->ItemReference = $ItemReference;
        $this->Name = $Name;
        $this->Quantity = $Quantity;
        $this->TotalCostInCents = $TotalCostInCents;
        $this->UnitCostInCents = $UnitCostInCents;
    }
}
