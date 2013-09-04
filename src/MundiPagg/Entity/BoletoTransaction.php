<?php

namespace MundiPagg\Entity;

/**
 * BoletoTransaction Entity
 *
 * @author Carlos Cima
 */
class BoletoTransaction extends AbstractEntity
{

    /**
     * Valor do boleto em centavos.
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @var int $AmountInCents
     * @access public
     */
    public $AmountInCents;

    /**
     * Número do banco.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string $BankNumber
     * @access public
     */
    public $BankNumber;

    /**
     * Dias que serão adicionados a data atual até o vencimento.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var int $DaysToAddInBoletoExpirationDate
     * @access public
     */
    public $DaysToAddInBoletoExpirationDate;

    /**
     * Instrução que irá aparecer no corpo do boleto.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string $Instructions
     * @access public
     */
    public $Instructions;

    /**
     * Número de identificação do boleto.
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @var string $NossoNumero
     * @access public
     */
    public $NossoNumero;
    
    /**
     * Enviar vazio para transações em produção e “1” para transações em homologação.
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @see \MundiPagg\Entity\Enum\PaymentMethodCodeEnum
     * @var int 
     */
    public $PaymentMethodCode;

    /**
     * Identificador da transação pela loja.
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @var string $TransactionReference
     * @access public
     */
    public $TransactionReference;
    
    public function getAmountInCents() {
        return $this->AmountInCents;
    }

    public function setAmountInCents($AmountInCents) {
        $this->AmountInCents = $AmountInCents;
        return $this;
    }

    public function getBankNumber() {
        return $this->BankNumber;
    }

    public function setBankNumber($BankNumber) {
        $this->BankNumber = $BankNumber;
        return $this;
    }

    public function getDaysToAddInBoletoExpirationDate() {
        return $this->DaysToAddInBoletoExpirationDate;
    }

    public function setDaysToAddInBoletoExpirationDate($DaysToAddInBoletoExpirationDate) {
        $this->DaysToAddInBoletoExpirationDate = $DaysToAddInBoletoExpirationDate;
        return $this;
    }

    public function getInstructions() {
        return $this->Instructions;
    }

    public function setInstructions($Instructions) {
        $this->Instructions = $Instructions;
        return $this;
    }

    public function getNossoNumero() {
        return $this->NossoNumero;
    }

    public function setNossoNumero($NossoNumero) {
        $this->NossoNumero = $NossoNumero;
        return $this;
    }
    
    public function getPaymentMethodCode() {
        return $this->PaymentMethodCode;
    }

    public function setPaymentMethodCode($PaymentMethodCode) {
        $this->PaymentMethodCode = $PaymentMethodCode;
        return $this;
    }

    public function getTransactionReference() {
        return $this->TransactionReference;
    }

    public function setTransactionReference($TransactionReference) {
        $this->TransactionReference = $TransactionReference;
        return $this;
    }

}
