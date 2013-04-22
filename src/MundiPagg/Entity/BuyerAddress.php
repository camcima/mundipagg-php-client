<?php

namespace MundiPagg\Entity;

class BuyerAddress extends AbstractEntity
{
    /**
     * 
     * @var AddressTypeEnum $AddressTypeEnum
     * @access public
     */
    public $AddressTypeEnum;

    /**
     * 
     * @var string $City
     * @access public
     */
    public $City;

    /**
     * 
     * @var string $Complement
     * @access public
     */
    public $Complement;

    /**
     * 
     * @var CountryEnum $CountryEnum
     * @access public
     */
    public $CountryEnum;

    /**
     * 
     * @var string $District
     * @access public
     */
    public $District;

    /**
     * 
     * @var string $Number
     * @access public
     */
    public $Number;

    /**
     * 
     * @var string $State
     * @access public
     */
    public $State;

    /**
     * 
     * @var string $Street
     * @access public
     */
    public $Street;

    /**
     * 
     * @var string $ZipCode
     * @access public
     */
    public $ZipCode;

    /**
     * 
     * @param AddressTypeEnum $AddressTypeEnum
     * @param string $City
     * @param string $Complement
     * @param CountryEnum $CountryEnum
     * @param string $District
     * @param string $Number
     * @param string $State
     * @param string $Street
     * @param string $ZipCode
     * @access public
     */
    public function __construct($AddressTypeEnum, $City, $Complement, $CountryEnum, $District, $Number, $State, $Street, $ZipCode)
    {
        $this->AddressTypeEnum = $AddressTypeEnum;
        $this->City = $City;
        $this->Complement = $Complement;
        $this->CountryEnum = $CountryEnum;
        $this->District = $District;
        $this->Number = $Number;
        $this->State = $State;
        $this->Street = $Street;
        $this->ZipCode = $ZipCode;
    }
}
