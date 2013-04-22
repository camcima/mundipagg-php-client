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

}
