<?php

namespace MundiPagg\Entity;

/**
 * ManageOrderResult Entity
 *
 * @author Carlos Cima
 */
class ManageOrderResult extends AbstractEntity
{

    /**
     * Coleção de CreditCardTransactionResult que contém
     * os resultados das operações que foram solicitadas no Request.
     * 
     * @see \MundiPagg\Entity\CreditCardTransactionResult
     * @var array 
     */
    public $CreditCardTransactionResultCollection;

    /**
     * Coleção de BoletosTransactionResult que contém
     * os resultados dos boletos que foram solicitados no Request.
     * 
     * @see \MundiPagg\Entity\BoletoTransactionResult
     * @var array 
     */
    public $BoletoTransactionResultCollection;

    /**
     * Para uso futuro.
     * 
     * @var mixed 
     */
    public $MundiPaggSuggestion;

    /**
     * Objeto que contém a lista de possíveis erros.
     * 
     * @var \MundiPagg\Entity\ErrorReport 
     */
    public $ErrorReport;

    /**
     * Identificação da requisição na plataforma One. (GUID)
     * 
     * @var string 
     */
    public $RequestKey;

    /**
     * Identificação da Ordem na plataforma One. (GUID)
     * 
     * @var string $OrderKey
     * @access public
     */
    public $OrderKey;

    /**
     * Identificação do pedido enviado pela loja.
     * 
     * @var string 
     */
    public $OrderReference;

    /**
     * Indica se a operação foi realizada com sucesso.
     * 
     * @var boolean 
     */
    public $Success;

    /**
     * Tipo de operação.
     * 
     * @var \MundiPagg\Entity\Enum\ManageOrderOperationEnum 
     */
    public $ManageOrderOperationEnum;

    /**
     * Tempo de processo na plataforma One.
     * 
     * @var int 
     */
    public $MundiPaggTimeInMilliseconds;

    /**
     * Status do pedido na plataforma One.
     * 
     * @see \MundiPagg\Entity\Enum\OrderStatusEnum
     * @var string 
     */
    public $OrderStatusEnum;

    /**
     * Versão do serviço da MundiPagg utilizada na comunicação.
     * 
     * @var string 
     */
    public $Version;

    public function getCreditCardTransactionResultCollection()
    {
        return $this->CreditCardTransactionResultCollection;
    }

    public function setCreditCardTransactionResultCollection($CreditCardTransactionResultCollection)
    {
        $this->CreditCardTransactionResultCollection = $CreditCardTransactionResultCollection;
        return $this;
    }

    public function getBoletoTransactionResultCollection()
    {
        return $this->BoletoTransactionResultCollection;
    }

    public function setBoletoTransactionResultCollection($BoletoTransactionResultCollection)
    {
        $this->BoletoTransactionResultCollection = $BoletoTransactionResultCollection;
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

    public function getErrorReport()
    {
        return $this->ErrorReport;
    }

    public function setErrorReport(\MundiPagg\Entity\ErrorReport $ErrorReport)
    {
        $this->ErrorReport = $ErrorReport;
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

    public function getSuccess()
    {
        return $this->Success;
    }

    public function setSuccess($Success)
    {
        $this->Success = $Success;
        return $this;
    }

    public function getManageOrderOperationEnum()
    {
        return $this->ManageOrderOperationEnum;
    }

    public function setManageOrderOperationEnum(\MundiPagg\Entity\Enum\ManageOrderOperationEnum $ManageOrderOperationEnum)
    {
        $this->ManageOrderOperationEnum = $ManageOrderOperationEnum;
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

    public function getOrderStatusEnum()
    {
        return $this->OrderStatusEnum;
    }

    public function setOrderStatusEnum($OrderStatusEnum)
    {
        $this->OrderStatusEnum = $OrderStatusEnum;
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
}
