<?php

namespace MundiPagg\Entity;

class BoletoTransaction extends AbstractEntity
{
    /**
     * 
     * @var int $AmountInCents
     * @access public
     */
    public $AmountInCents;

    /**
     * 
     * @var string $BankNumber
     * @access public
     */
    public $BankNumber;

    /**
     * 
     * @var int $DaysToAddInBoletoExpirationDate
     * @access public
     */
    public $DaysToAddInBoletoExpirationDate;

    /**
     * 
     * @var string $Instructions
     * @access public
     */
    public $Instructions;

    /**
     * 
     * @var string $NossoNumero
     * @access public
     */
    public $NossoNumero;

    /**
     * 
     * @var string $TransactionReference
     * @access public
     */
    public $TransactionReference;

    /**
     * 
     * @param int $AmountInCents
     * @param string $BankNumber
     * @param int $DaysToAddInBoletoExpirationDate
     * @param string $Instructions
     * @param string $NossoNumero
     * @param string $TransactionReference
     * @access public
     */
    public function __construct($AmountInCents, $BankNumber, $DaysToAddInBoletoExpirationDate, $Instructions, $NossoNumero, $TransactionReference)
    {
        $this->AmountInCents = $AmountInCents;
        $this->BankNumber = $BankNumber;
        $this->DaysToAddInBoletoExpirationDate = $DaysToAddInBoletoExpirationDate;
        $this->Instructions = $Instructions;
        $this->NossoNumero = $NossoNumero;
        $this->TransactionReference = $TransactionReference;
    }
}
