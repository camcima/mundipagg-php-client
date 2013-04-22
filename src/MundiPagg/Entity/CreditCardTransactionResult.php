<?php

namespace MundiPagg\Entity;

class CreditCardTransactionResult extends AbstractEntity
{
    /**
     * 
     * @var string $AcquirerMessage
     * @access public
     */
    public $AcquirerMessage;

    /**
     * 
     * @var string $AcquirerReturnCode
     * @access public
     */
    public $AcquirerReturnCode;

    /**
     * 
     * @var int $AmountInCents
     * @access public
     */
    public $AmountInCents;

    /**
     * 
     * @var string $AuthorizationCode
     * @access public
     */
    public $AuthorizationCode;

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
     * @var string $CreditCardNumber
     * @access public
     */
    public $CreditCardNumber;

    /**
     * 
     * @var CreditCardOperationEnum $CreditCardOperationEnum
     * @access public
     */
    public $CreditCardOperationEnum;

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
     * @var int $ExternalTimeInMilliseconds
     * @access public
     */
    public $ExternalTimeInMilliseconds;

    /**
     * 
     * @var guid $InstantBuyKey
     * @access public
     */
    public $InstantBuyKey;

    /**
     * 
     * @var int $RefundedAmountInCents
     * @access public
     */
    public $RefundedAmountInCents;

    /**
     * 
     * @var boolean $Success
     * @access public
     */
    public $Success;

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
     * @var OriginalAcquirerReturn $OriginalAcquirerReturnCollection
     * @access public
     */
    public $OriginalAcquirerReturnCollection;

    /**
     * 
     * @param string $AcquirerMessage
     * @param string $AcquirerReturnCode
     * @param int $AmountInCents
     * @param string $AuthorizationCode
     * @param int $AuthorizedAmountInCents
     * @param int $CapturedAmountInCents
     * @param string $CreditCardNumber
     * @param CreditCardOperationEnum $CreditCardOperationEnum
     * @param CreditCardTransactionStatusEnum $CreditCardTransactionStatusEnum
     * @param string $CustomStatus
     * @param dateTime $DueDate
     * @param int $ExternalTimeInMilliseconds
     * @param guid $InstantBuyKey
     * @param int $RefundedAmountInCents
     * @param boolean $Success
     * @param string $TransactionIdentifier
     * @param guid $TransactionKey
     * @param string $TransactionReference
     * @param string $UniqueSequentialNumber
     * @param int $VoidedAmountInCents
     * @param OriginalAcquirerReturn $OriginalAcquirerReturnCollection
     * @access public
     */
    public function __construct($AcquirerMessage, $AcquirerReturnCode, $AmountInCents, $AuthorizationCode, $AuthorizedAmountInCents, $CapturedAmountInCents, $CreditCardNumber, $CreditCardOperationEnum, $CreditCardTransactionStatusEnum, $CustomStatus, $DueDate, $ExternalTimeInMilliseconds, $InstantBuyKey, $RefundedAmountInCents, $Success, $TransactionIdentifier, $TransactionKey, $TransactionReference, $UniqueSequentialNumber, $VoidedAmountInCents, $OriginalAcquirerReturnCollection)
    {
        $this->AcquirerMessage = $AcquirerMessage;
        $this->AcquirerReturnCode = $AcquirerReturnCode;
        $this->AmountInCents = $AmountInCents;
        $this->AuthorizationCode = $AuthorizationCode;
        $this->AuthorizedAmountInCents = $AuthorizedAmountInCents;
        $this->CapturedAmountInCents = $CapturedAmountInCents;
        $this->CreditCardNumber = $CreditCardNumber;
        $this->CreditCardOperationEnum = $CreditCardOperationEnum;
        $this->CreditCardTransactionStatusEnum = $CreditCardTransactionStatusEnum;
        $this->CustomStatus = $CustomStatus;
        $this->DueDate = $DueDate;
        $this->ExternalTimeInMilliseconds = $ExternalTimeInMilliseconds;
        $this->InstantBuyKey = $InstantBuyKey;
        $this->RefundedAmountInCents = $RefundedAmountInCents;
        $this->Success = $Success;
        $this->TransactionIdentifier = $TransactionIdentifier;
        $this->TransactionKey = $TransactionKey;
        $this->TransactionReference = $TransactionReference;
        $this->UniqueSequentialNumber = $UniqueSequentialNumber;
        $this->VoidedAmountInCents = $VoidedAmountInCents;
        $this->OriginalAcquirerReturnCollection = $OriginalAcquirerReturnCollection;
    }
}
