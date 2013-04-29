<?php

namespace MundiPagg\Entity;

/**
 * CreditCardData Entity
 *
 * @author Carlos Cima
 */
class CreditCardData extends AbstractEntity
{

    /**
     * 
     * @var CreditCardBrandEnum $CreditCardBrandEnum
     * @access public
     */
    public $CreditCardBrandEnum;

    /**
     * 
     * @var string $CreditCardNumber
     * @access public
     */
    public $CreditCardNumber;

    /**
     * 
     * @var string $InstantBuyKey (GUID)
     * @access public
     */
    public $InstantBuyKey;

    /**
     * 
     * @var boolean $IsExpiredCreditCard
     * @access public
     */
    public $IsExpiredCreditCard;

}
