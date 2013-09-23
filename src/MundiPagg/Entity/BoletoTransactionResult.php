<?php

namespace MundiPagg\Entity;

/**
 * BoletoTransactionResult Entity
 *
 * @author Carlos Cima
 */
class BoletoTransactionResult extends AbstractEntity
{

    /**
     * Valor pago em centavos.
     * 
     * @var int $AmountInCents
     * @access public
     */
    public $AmountInCents;

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
     * Código customizável para ser tratado pela loja.
     * 
     * @var string $CustomStatus
     * @access public
     */
    public $CustomStatus;

    /**
     * Número de identificação do boleto.
     * 
     * @var string $NossoNumero
     * @access public
     */
    public $NossoNumero;

    /**
     * 
     * @todo check existance and comment
     * @var boolean $Success
     * @access public
     */
    public $Success;

    /**
     * Identificação da transação na plataforma One. (GUID)
     * 
     * @var string $TransactionKey
     * @access public
     */
    public $TransactionKey;

    /**
     * Identificação da transação pela loja.
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
    }

    public function getBarcode() {
        return $this->Barcode;
    }

    public function setBarcode($Barcode) {
        $this->Barcode = $Barcode;
    }

    public function getBoletoTransactionStatusEnum() {
        return $this->BoletoTransactionStatusEnum;
    }

    public function setBoletoTransactionStatusEnum($BoletoTransactionStatusEnum) {
        $this->BoletoTransactionStatusEnum = $BoletoTransactionStatusEnum;
    }

    public function getBoletoUrl() {
        return $this->BoletoUrl;
    }

    public function setBoletoUrl($BoletoUrl) {
        $this->BoletoUrl = $BoletoUrl;
    }

    public function getCustomStatus() {
        return $this->CustomStatus;
    }

    public function setCustomStatus($CustomStatus) {
        $this->CustomStatus = $CustomStatus;
    }

    public function getNossoNumero() {
        return $this->NossoNumero;
    }

    public function setNossoNumero($NossoNumero) {
        $this->NossoNumero = $NossoNumero;
    }

    public function getSuccess() {
        return $this->Success;
    }

    public function setSuccess($Success) {
        $this->Success = $Success;
    }

    public function getTransactionKey() {
        return $this->TransactionKey;
    }

    public function setTransactionKey($TransactionKey) {
        $this->TransactionKey = $TransactionKey;
    }

    public function getTransactionReference() {
        return $this->TransactionReference;
    }

    public function setTransactionReference($TransactionReference) {
        $this->TransactionReference = $TransactionReference;
    }

}
