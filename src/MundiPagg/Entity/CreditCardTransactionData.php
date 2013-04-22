<?php

namespace MundiPagg\Entity;

class CreditCardTransactionData extends AbstractEntity
{
    /**
     * 
     * @var string $AcquirerAuthorizationCode
     * @access public
     */
    public $AcquirerAuthorizationCode;

    /**
     * 
     * @var string $AcquirerName
     * @access public
     */
    public $AcquirerName;

    /**
     * 
     * @var int $AmountInCents
     * @access public
     */
    public $AmountInCents;

    /**
     * 
     * @var int $AuthorizedAmountInCents
     * @access public
     */
    public $AuthorizedAmountInCents;

    /**
     * 
     * @var int $CapturedAmountInCents
     * @access public
     */
    public $CapturedAmountInCents;

    /**
     * 
     * @var dateTime $CreateDate
     * @access public
     */
    public $CreateDate;

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
     * @var CreditCardTransactionStatusEnum $CreditCardTransactionStatusEnum
     * @access public
     */
    public $CreditCardTransactionStatusEnum;

    /**
     * 
     * @var string $CustomStatus
     * @access public
     */
    public $CustomStatus;

    /**
     * 
     * @var dateTime $DueDate
     * @access public
     */
    public $DueDate;

    /**
     * 
     * @var int $InstallmentCount
     * @access public
     */
    public $InstallmentCount;

    /**
     * 
     * @var guid $InstantBuyKey
     * @access public
     */
    public $InstantBuyKey;

    /**
     * 
     * @var boolean $IsReccurency
     * @access public
     */
    public $IsReccurency;

    /**
     * 
     * @var int $RefundedAmountInCents
     * @access public
     */
    public $RefundedAmountInCents;

    /**
     * 
     * @var string $TransactionIdentifier
     * @access public
     */
    public $TransactionIdentifier;

    /**
     * 
     * @var guid $TransactionKey
     * @access public
     */
    public $TransactionKey;

    /**
     * 
     * @var string $TransactionReference
     * @access public
     */
    public $TransactionReference;

    /**
     * 
     * @var string $UniqueSequentialNumber
     * @access public
     */
    public $UniqueSequentialNumber;

    /**
     * 
     * @var int $VoidedAmountInCents
     * @access public
     */
    public $VoidedAmountInCents;

    /**
     * 
     * @param string $AcquirerAuthorizationCode
     * @param string $AcquirerName
     * @param int $AmountInCents
     * @param int $AuthorizedAmountInCents
     * @param int $CapturedAmountInCents
     * @param dateTime $CreateDate
     * @param CreditCardBrandEnum $CreditCardBrandEnum
     * @param string $CreditCardNumber
     * @param CreditCardTransactionStatusEnum $CreditCardTransactionStatusEnum
     * @param string $CustomStatus
     * @param dateTime $DueDate
     * @param int $InstallmentCount
     * @param guid $InstantBuyKey
     * @param boolean $IsReccurency
     * @param int $RefundedAmountInCents
     * @param string $TransactionIdentifier
     * @param guid $TransactionKey
     * @param string $TransactionReference
     * @param string $UniqueSequentialNumber
     * @param int $VoidedAmountInCents
     * @access public
     */
    public function __construct($AcquirerAuthorizationCode, $AcquirerName, $AmountInCents, $AuthorizedAmountInCents, $CapturedAmountInCents, $CreateDate, $CreditCardBrandEnum, $CreditCardNumber, $CreditCardTransactionStatusEnum, $CustomStatus, $DueDate, $InstallmentCount, $InstantBuyKey, $IsReccurency, $RefundedAmountInCents, $TransactionIdentifier, $TransactionKey, $TransactionReference, $UniqueSequentialNumber, $VoidedAmountInCents)
    {
        $this->AcquirerAuthorizationCode = $AcquirerAuthorizationCode;
        $this->AcquirerName = $AcquirerName;
        $this->AmountInCents = $AmountInCents;
        $this->AuthorizedAmountInCents = $AuthorizedAmountInCents;
        $this->CapturedAmountInCents = $CapturedAmountInCents;
        $this->CreateDate = $CreateDate;
        $this->CreditCardBrandEnum = $CreditCardBrandEnum;
        $this->CreditCardNumber = $CreditCardNumber;
        $this->CreditCardTransactionStatusEnum = $CreditCardTransactionStatusEnum;
        $this->CustomStatus = $CustomStatus;
        $this->DueDate = $DueDate;
        $this->InstallmentCount = $InstallmentCount;
        $this->InstantBuyKey = $InstantBuyKey;
        $this->IsReccurency = $IsReccurency;
        $this->RefundedAmountInCents = $RefundedAmountInCents;
        $this->TransactionIdentifier = $TransactionIdentifier;
        $this->TransactionKey = $TransactionKey;
        $this->TransactionReference = $TransactionReference;
        $this->UniqueSequentialNumber = $UniqueSequentialNumber;
        $this->VoidedAmountInCents = $VoidedAmountInCents;
    }
}
