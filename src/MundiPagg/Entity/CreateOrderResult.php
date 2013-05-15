<?php

namespace MundiPagg\Entity;

/**
 * CreateOrderResult Entity
 *
 * @author Carlos Cima
 */
class CreateOrderResult extends AbstractEntity
{

    /**
     * Coleção de BoletosTransactionResult que contém os resultados dos boletos que foram solicitados no Request.
     * 
     * @var \MundiPagg\Entity\BoletoTransactionResultCollection 
     */
    public $BoletoTransactionResultCollection;

    /**
     * Identificação do Buyer na plataforma One. (GUID)
     * 
     * @var string 
     */
    public $BuyerKey;

    /**
     * Coleção de CreditCardTransactionResult que contém os resultados das operações que foram solicitadas no Request.
     * 
     * @var \MundiPagg\Entity\CreditCardTransactionResultCollection 
     */
    public $CreditCardTransactionResultCollection;

    /**
     * Identificação da loja na plataforma One. (GUID)
     * 
     * @var string 
     */
    public $MerchantKey;

    /**
     * Tempo de processo na plataforma One.
     * 
     * @var int 
     */
    public $MundiPaggTimeInMilliseconds;

    /**
     * Identificação da Ordem na plataforma One. (GUID)
     * 
     * @var string 
     */
    public $OrderKey;

    /**
     * Identificação do pedido enviado pela loja.
     * 
     * @var string 
     */
    public $OrderReference;

    /**
     * Status do pedido na plataforma One.
     * 
     * @see \MundiPagg\Entity\Enum\OrderStatusEnum
     * @var string 
     */
    public $OrderStatusEnum;

    /**
     * Identificação da requisição na plataforma One. (GUID)
     * 
     * @var string 
     */
    public $RequestKey;

    /**
     * Indica se o pedido foi registrado com sucesso.
     * 
     * @var boolean 
     */
    public $Success;

    /**
     * Versão do serviço da MundiPagg utilizada na comunicação.
     * 
     * @var string 
     */
    public $Version;

    /**
     * Objeto que contém a lista de possíveis erros.
     * 
     * @var \MundiPagg\Entity\ErrorReport 
     */
    public $ErrorReport;

    /**
     * Para uso futuro.
     * 
     * @var mixed
     */
    public $MundiPaggSuggestion;

    public function getBoletoTransactionResultCollection()
    {
        return $this->BoletoTransactionResultCollection;
    }

    public function setBoletoTransactionResultCollection(\MundiPagg\Entity\BoletoTransactionResultCollection $BoletoTransactionResultCollection)
    {
        $this->BoletoTransactionResultCollection = $BoletoTransactionResultCollection;
        return $this;
    }

    public function getBuyerKey()
    {
        return $this->BuyerKey;
    }

    public function setBuyerKey($BuyerKey)
    {
        $this->BuyerKey = $BuyerKey;
        return $this;
    }

    public function getCreditCardTransactionResultCollection()
    {
        return $this->CreditCardTransactionResultCollection;
    }

    public function setCreditCardTransactionResultCollection(\MundiPagg\Entity\CreditCardTransactionResultCollection $CreditCardTransactionResultCollection)
    {
        $this->CreditCardTransactionResultCollection = $CreditCardTransactionResultCollection;
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

    public function getMundiPaggTimeInMilliseconds()
    {
        return $this->MundiPaggTimeInMilliseconds;
    }

    public function setMundiPaggTimeInMilliseconds($MundiPaggTimeInMilliseconds)
    {
        $this->MundiPaggTimeInMilliseconds = $MundiPaggTimeInMilliseconds;
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

    public function getOrderStatusEnum()
    {
        return $this->OrderStatusEnum;
    }

    public function setOrderStatusEnum($OrderStatusEnum)
    {
        $this->OrderStatusEnum = $OrderStatusEnum;
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

    public function getSuccess()
    {
        return $this->Success;
    }

    public function setSuccess($Success)
    {
        $this->Success = $Success;
        return $this;
    }

    public function getVersion()
    {
        return $this->Version;
    }

    public function setVersion($Version)
    {
        $this->Version = $Version;
        return $this;
    }

    public function getErrorReport()
    {
        return $this->ErrorReport;
    }

    public function setErrorReport(\MundiPagg\Entity\ErrorReport $ErrorReport)
    {
        $this->ErrorReport = $ErrorReport;
        return $this;
    }

    public function getMundiPaggSuggestion()
    {
        return $this->MundiPaggSuggestion;
    }

    public function setMundiPaggSuggestion($MundiPaggSuggestion)
    {
        $this->MundiPaggSuggestion = $MundiPaggSuggestion;
        return $this;
    }
}
