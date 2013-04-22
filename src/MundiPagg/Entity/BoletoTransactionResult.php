<?php

namespace MundiPagg\Entity;

class BoletoTransactionResult extends AbstractEntity
{
    /**
     * 
     * @var int $AmountInCents
     * @access public
     */
    public $AmountInCents;

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
     * @var string $CustomStatus
     * @access public
     */
    public $CustomStatus;

    /**
     * 
     * @var string $NossoNumero
     * @access public
     */
    public $NossoNumero;

    /**
     * 
     * @var boolean $Success
     * @access public
     */
    public $Success;

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
     * @param string $Barcode
     * @param BoletoTransactionStatusEnum $BoletoTransactionStatusEnum
     * @param string $BoletoUrl
     * @param string $CustomStatus
     * @param string $NossoNumero
     * @param boolean $Success
     * @param guid $TransactionKey
     * @param string $TransactionReference
     * @access public
     */
    public function __construct($AmountInCents, $Barcode, $BoletoTransactionStatusEnum, $BoletoUrl, $CustomStatus, $NossoNumero, $Success, $TransactionKey, $TransactionReference)
    {
        $this->AmountInCents = $AmountInCents;
        $this->Barcode = $Barcode;
        $this->BoletoTransactionStatusEnum = $BoletoTransactionStatusEnum;
        $this->BoletoUrl = $BoletoUrl;
        $this->CustomStatus = $CustomStatus;
        $this->NossoNumero = $NossoNumero;
        $this->Success = $Success;
        $this->TransactionKey = $TransactionKey;
        $this->TransactionReference = $TransactionReference;
    }
}
