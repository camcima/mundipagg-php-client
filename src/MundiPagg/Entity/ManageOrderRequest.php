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

}
