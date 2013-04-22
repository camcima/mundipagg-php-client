<?php

namespace MundiPagg\Entity;

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
     * @var guid $InstantBuyKey
     * @access public
     */
    public $InstantBuyKey;

    /**
     * 
     * @var boolean $IsExpiredCreditCard
     * @access public
     */
    public $IsExpiredCreditCard;

    /**
     * 
     * @param CreditCardBrandEnum $CreditCardBrandEnum
     * @param string $CreditCardNumber
     * @param guid $InstantBuyKey
     * @param boolean $IsExpiredCreditCard
     * @access public
     */
    public function __construct($CreditCardBrandEnum, $CreditCardNumber, $InstantBuyKey, $IsExpiredCreditCard)
    {
        $this->CreditCardBrandEnum = $CreditCardBrandEnum;
        $this->CreditCardNumber = $CreditCardNumber;
        $this->InstantBuyKey = $InstantBuyKey;
        $this->IsExpiredCreditCard = $IsExpiredCreditCard;
    }
}
