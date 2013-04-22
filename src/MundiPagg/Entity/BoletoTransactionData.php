<?php

namespace MundiPagg\Entity;

class BoletoTransactionData extends AbstractEntity
{
    /**
     * 
     * @var int $AmountInCents
     * @access public
     */
    public $AmountInCents;

    /**
     * 
     * @var int $AmountPaidInCents
     * @access public
     */
    public $AmountPaidInCents;

    /**
     * 
     * @var string $BankNumber
     * @access public
     */
    public $BankNumber;

    /**
     * 
     * @var string $Barcode
     * @access public
     */
    public $Barcode;

    /**
     * 
     * @var BoletoTransactionStatusEnum $BoletoTransactionStatusEnum
     * @access public
     */
    public $BoletoTransactionStatusEnum;

    /**
     * 
     * @var string $BoletoUrl
     * @access public
     */
    public $BoletoUrl;

    /**
     * 
     * @var dateTime $CreateDate
     * @access public
     */
    public $CreateDate;

    /**
     * 
     * @var string $CustomStatus
     * @access public
     */
    public $CustomStatus;

    /**
     * 
     * @var dateTime $ExpirationDate
     * @access public
     */
    public $ExpirationDate;

    /**
     * 
     * @var string $NossoNumero
     * @access public
     */
    public $NossoNumero;

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
     * @param int $AmountInCents
     * @param int $AmountPaidInCents
     * @param string $BankNumber
     * @param string $Barcode
     * @param BoletoTransactionStatusEnum $BoletoTransactionStatusEnum
     * @param string $BoletoUrl
     * @param dateTime $CreateDate
     * @param string $CustomStatus
     * @param dateTime $ExpirationDate
     * @param string $NossoNumero
     * @param guid $TransactionKey
     * @param string $TransactionReference
     * @access public
     */
    public function __construct($AmountInCents, $AmountPaidInCents, $BankNumber, $Barcode, $BoletoTransactionStatusEnum, $BoletoUrl, $CreateDate, $CustomStatus, $ExpirationDate, $NossoNumero, $TransactionKey, $TransactionReference)
    {
        $this->AmountInCents = $AmountInCents;
        $this->AmountPaidInCents = $AmountPaidInCents;
        $this->BankNumber = $BankNumber;
        $this->Barcode = $Barcode;
        $this->BoletoTransactionStatusEnum = $BoletoTransactionStatusEnum;
        $this->BoletoUrl = $BoletoUrl;
        $this->CreateDate = $CreateDate;
        $this->CustomStatus = $CustomStatus;
        $this->ExpirationDate = $ExpirationDate;
        $this->NossoNumero = $NossoNumero;
        $this->TransactionKey = $TransactionKey;
        $this->TransactionReference = $TransactionReference;
    }
}
