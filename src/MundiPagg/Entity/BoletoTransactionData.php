<?php

namespace MundiPagg\Entity;

/**
 * BoletoTransactionData Entity
 *
 * @author Carlos Cima
 */
class BoletoTransactionData extends AbstractEntity
{

    /**
     * Valor total da transação em centavos.
     * 
     * @var int $AmountInCents
     * @access public
     */
    public $AmountInCents;

    /**
     * Valor pago em centavos.
     * 
     * @var int $AmountPaidInCents
     * @access public
     */
    public $AmountPaidInCents;

    /**
     * Número do banco.
     * 
     * @var string $BankNumber
     * @access public
     */
    public $BankNumber;

    /**
     * Linha digitável do boleto.
     * 
     * @var string $Barcode
     * @access public
     */
    public $Barcode;

    /**
     * Status do boleto dentro da plataforma One.
     * 
     * @see \MundiPagg\Entity\Enum\BoletoTransactionStatusEnum
     * @var string $BoletoTransactionStatusEnum
     * @access public
     */
    public $BoletoTransactionStatusEnum;

    /**
     * Url do boleto gerado.
     * 
     * @var string $BoletoUrl
     * @access public
     */
    public $BoletoUrl;

    /**
     * Data em que a transação foi criada.
     * 
     * @var \DateTime $CreateDate
     * @access public
     */
    public $CreateDate;

    /**
     * Código customizável para ser tratado pela loja
     * 
     * @var string $CustomStatus
     * @access public
     */
    public $CustomStatus;

    /**
     * Data de expiração do boleto.
     * 
     * @var \DateTime $ExpirationDate
     * @access public
     */
    public $ExpirationDate;

    /**
     * Número de identificação do boleto.
     * 
     * @var string $NossoNumero
     * @access public
     */
    public $NossoNumero;

    /**
     * Identificador da transação na plataforma One. (GUID)
     * 
     * @var string $TransactionKey
     * @access public
     */
    public $TransactionKey;

    /**
     * Identificador da transação pela loja.
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

    public function getAmountPaidInCents() {
        return $this->AmountPaidInCents;
    }

    public function setAmountPaidInCents($AmountPaidInCents) {
        $this->AmountPaidInCents = $AmountPaidInCents;
        return $this;
    }

    public function getBankNumber() {
        return $this->BankNumber;
    }

    public function setBankNumber($BankNumber) {
        $this->BankNumber = $BankNumber;
        return $this;
    }

    public function getBarcode() {
        return $this->Barcode;
    }

    public function setBarcode($Barcode) {
        $this->Barcode = $Barcode;
        return $this;
    }

    public function getBoletoTransactionStatusEnum() {
        return $this->BoletoTransactionStatusEnum;
    }

    public function setBoletoTransactionStatusEnum($BoletoTransactionStatusEnum) {
        $this->BoletoTransactionStatusEnum = $BoletoTransactionStatusEnum;
        return $this;
    }

    public function getBoletoUrl() {
        return $this->BoletoUrl;
    }

    public function setBoletoUrl($BoletoUrl) {
        $this->BoletoUrl = $BoletoUrl;
        return $this;
    }

    public function getCreateDate() {
        return $this->CreateDate;
    }

    public function setCreateDate(\DateTime $CreateDate) {
        $this->CreateDate = $CreateDate;
        return $this;
    }

    public function getCustomStatus() {
        return $this->CustomStatus;
    }

    public function setCustomStatus($CustomStatus) {
        $this->CustomStatus = $CustomStatus;
        return $this;
    }

    public function getExpirationDate() {
        return $this->ExpirationDate;
    }

    public function setExpirationDate(\DateTime $ExpirationDate) {
        $this->ExpirationDate = $ExpirationDate;
        return $this;
    }

    public function getNossoNumero() {
        return $this->NossoNumero;
    }

    public function setNossoNumero($NossoNumero) {
        $this->NossoNumero = $NossoNumero;
        return $this;
    }

    public function getTransactionKey() {
        return $this->TransactionKey;
    }

    public function setTransactionKey($TransactionKey) {
        $this->TransactionKey = $TransactionKey;
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
