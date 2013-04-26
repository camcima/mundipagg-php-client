<?php

namespace MundiPagg\Entity;

/**
 * ManageOrderRequest Entity
 *
 * @author Carlos Cima
 */
class ManageOrderRequest extends AbstractEntity
{

    /**
     * Coleção de CreditCardTransactionRequest que contém
     * os resultados das operações que foram solicitadas no Request.
     * 
     * Obrigatoriedade: Obrigatório em casos de captura e cancelamentos de transações específicas dentro de um pedido.
     * 
     * @see \MundiPagg\Entity\ManageCreditCardTransactionRequest
     * @var array $ManageCreditCardTransactionCollection
     * @access public
     */
    public $ManageCreditCardTransactionCollection;

    /**
     * Tipo de operação.
     * 
     * Obrigatoriedade: Todas operações.
     * 
     * @see \MundiPagg\Entity\Enum\ManageOrderOperationEnum
     * @var string $ManageOrderOperationEnum
     * @access public
     */
    public $ManageOrderOperationEnum;

    /**
     * Identificação da loja na plataforma One. (GUID)
     * 
     * Obrigatoriedade: Todas operações.
     * 
     * @var string $MerchantKey
     * @access public
     */
    public $MerchantKey;

    /**
     * Identificação da Ordem na plataforma One. (GUID)
     * 
     * Obrigatoriedade: Todas operações.
     * 
     * @var string $OrderKey
     * @access public
     */
    public $OrderKey;

    /**
     * Identificação da ordem enviada pelo lojista.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string $OrderReference
     * @access public
     */
    public $OrderReference;

    /**
     * Identificação da requisição na plataforma One. (GUID)
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string $RequestKey
     * @access public
     */
    public $RequestKey;

    public function getManageCreditCardTransactionCollection()
    {
        return $this->ManageCreditCardTransactionCollection;
    }

    public function setManageCreditCardTransactionCollection($ManageCreditCardTransactionCollection)
    {
        $this->ManageCreditCardTransactionCollection = $ManageCreditCardTransactionCollection;
        return $this;
    }

    public function getManageOrderOperationEnum()
    {
        return $this->ManageOrderOperationEnum;
    }

    public function setManageOrderOperationEnum($ManageOrderOperationEnum)
    {
        $this->ManageOrderOperationEnum = $ManageOrderOperationEnum;
        return $this;
    }

    public function getMerchantKey()
    {
        return $this->MerchantKey;
    }

    public function setMerchantKey($MerchantKey)
    {
        $this->MerchantKey = $MerchantKey;
        return $this;
    }

    public function getOrderKey()
    {
        return $this->OrderKey;
    }

    public function setOrderKey($OrderKey)
    {
        $this->OrderKey = $OrderKey;
        return $this;
    }

    public function getOrderReference()
    {
        return $this->OrderReference;
    }

    public function setOrderReference($OrderReference)
    {
        $this->OrderReference = $OrderReference;
        return $this;
    }

    public function getRequestKey()
    {
        return $this->RequestKey;
    }

    public function setRequestKey($RequestKey)
    {
        $this->RequestKey = $RequestKey;
        return $this;
    }
}
