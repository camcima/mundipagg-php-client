<?php

namespace MundiPagg\Entity;

class Buyer extends AbstractEntity
{
    /**
     * 
     * @var guid $BuyerKey
     * @access public
     */
    public $BuyerKey;

    /**
     * 
     * @var string $BuyerReference
     * @access public
     */
    public $BuyerReference;

    /**
     * 
     * @var dateTime $CreateDateInMerchant
     * @access public
     */
    public $CreateDateInMerchant;

    /**
     * 
     * @var string $Email
     * @access public
     */
    public $Email;

    /**
     * 
     * @var string $FacebookId
     * @access public
     */
    public $FacebookId;

    /**
     * 
     * @var GenderEnum $GenderEnum
     * @access public
     */
    public $GenderEnum;

    /**
     * 
     * @var string $HomePhone
     * @access public
     */
    public $HomePhone;

    /**
     * 
     * @var string $IpAddress
     * @access public
     */
    public $IpAddress;

    /**
     * 
     * @var dateTime $LastBuyerUpdateInMerchant
     * @access public
     */
    public $LastBuyerUpdateInMerchant;

    /**
     * 
     * @var string $MobilePhone
     * @access public
     */
    public $MobilePhone;

    /**
     * 
     * @var string $Name
     * @access public
     */
    public $Name;

    /**
     * 
     * @var PersonTypeEnum $PersonTypeEnum
     * @access public
     */
    public $PersonTypeEnum;

    /**
     * 
     * @var string $TaxDocumentNumber
     * @access public
     */
    public $TaxDocumentNumber;

    /**
     * 
     * @var TaxDocumentTypeEnum $TaxDocumentTypeEnum
     * @access public
     */
    public $TaxDocumentTypeEnum;

    /**
     * 
     * @var string $TwitterId
     * @access public
     */
    public $TwitterId;

    /**
     * 
     * @var string $WorkPhone
     * @access public
     */
    public $WorkPhone;

    /**
     * 
     * @var array $BuyerAddressCollection
     * @access public
     */
    public $BuyerAddressCollection;

    /**
     * 
     * @param guid $BuyerKey
     * @param string $BuyerReference
     * @param dateTime $CreateDateInMerchant
     * @param string $Email
     * @param string $FacebookId
     * @param GenderEnum $GenderEnum
     * @param string $HomePhone
     * @param string $IpAddress
     * @param dateTime $LastBuyerUpdateInMerchant
     * @param string $MobilePhone
     * @param string $Name
     * @param PersonTypeEnum $PersonTypeEnum
     * @param string $TaxDocumentNumber
     * @param TaxDocumentTypeEnum $TaxDocumentTypeEnum
     * @param string $TwitterId
     * @param string $WorkPhone
     * @param array $BuyerAddressCollection
     * @access public
     */
    public function __construct($BuyerKey, $BuyerReference, $CreateDateInMerchant, $Email, $FacebookId, $GenderEnum, $HomePhone, $IpAddress, $LastBuyerUpdateInMerchant, $MobilePhone, $Name, $PersonTypeEnum, $TaxDocumentNumber, $TaxDocumentTypeEnum, $TwitterId, $WorkPhone, $BuyerAddressCollection)
    {
        $this->BuyerKey = $BuyerKey;
        $this->BuyerReference = $BuyerReference;
        $this->CreateDateInMerchant = $CreateDateInMerchant;
        $this->Email = $Email;
        $this->FacebookId = $FacebookId;
        $this->GenderEnum = $GenderEnum;
        $this->HomePhone = $HomePhone;
        $this->IpAddress = $IpAddress;
        $this->LastBuyerUpdateInMerchant = $LastBuyerUpdateInMerchant;
        $this->MobilePhone = $MobilePhone;
        $this->Name = $Name;
        $this->PersonTypeEnum = $PersonTypeEnum;
        $this->TaxDocumentNumber = $TaxDocumentNumber;
        $this->TaxDocumentTypeEnum = $TaxDocumentTypeEnum;
        $this->TwitterId = $TwitterId;
        $this->WorkPhone = $WorkPhone;
        $this->BuyerAddressCollection = $BuyerAddressCollection;
    }
}
