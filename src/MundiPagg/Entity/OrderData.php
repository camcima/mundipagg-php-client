<?php

namespace MundiPagg\Entity;

/**
 * OrderData Entity
 *
 * @author Carlos Cima
 */
class OrderData extends AbstractEntity
{

    /**
     * Data que a ordem foi criada.
     * 
     * @var \DateTime $CreateDate
     * @access public
     */
    public $CreateDate;

    /**
     * Identificação da Ordem na plataforma One.
     * 
     * @var string $OrderKey (GUID)
     * @access public
     */
    public $OrderKey;

    /**
     * Identificação da ordem enviada pelo lojista.
     * 
     * @var string $OrderReference
     * @access public
     */
    public $OrderReference;

    /**
     * Status do pedido na plataforma One.
     * 
     * @see \MundiPagg\Entity\Enum\OrderStatusEnum
     * @var string $OrderStatusEnum
     * @access public
     */
    public $OrderStatusEnum;

    /**
     * Dados das transações de cartão de crédito.
     * 
     * @see \MundiPagg\Entity\CreditCardTransactionData
     * @var array $CreditCardTransactionDataCollection
     * @access public
     */
    public $CreditCardTransactionDataCollection;

    /**
     * Dados das transações de boleto.
     * 
     * @see \MundiPagg\Entity\BoletoTransactionData
     * @var array $BoletoTransactionDataCollection
     * @access public
     */
    public $BoletoTransactionDataCollection;
    
    public function getCreateDate() {
        return $this->CreateDate;
    }

    public function setCreateDate(\DateTime $CreateDate) {
        $this->CreateDate = $CreateDate;
    }

    public function getOrderKey() {
        return $this->OrderKey;
    }

    public function setOrderKey($OrderKey) {
        $this->OrderKey = $OrderKey;
    }

    public function getOrderReference() {
        return $this->OrderReference;
    }

    public function setOrderReference($OrderReference) {
        $this->OrderReference = $OrderReference;
    }

    public function getOrderStatusEnum() {
        return $this->OrderStatusEnum;
    }

    public function setOrderStatusEnum($OrderStatusEnum) {
        $this->OrderStatusEnum = $OrderStatusEnum;
    }

    public function getCreditCardTransactionDataCollection() {
        return $this->CreditCardTransactionDataCollection;
    }

    public function setCreditCardTransactionDataCollection($CreditCardTransactionDataCollection) {
        $this->CreditCardTransactionDataCollection = $CreditCardTransactionDataCollection;
    }

    public function getBoletoTransactionDataCollection() {
        return $this->BoletoTransactionDataCollection;
    }

    public function setBoletoTransactionDataCollection($BoletoTransactionDataCollection) {
        $this->BoletoTransactionDataCollection = $BoletoTransactionDataCollection;
    }

}
