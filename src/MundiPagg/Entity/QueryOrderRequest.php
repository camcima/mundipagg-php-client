<?php

namespace MundiPagg\Entity;

/**
 * QueryOrderRequest Entity
 *
 * @author Carlos Cima
 */
class QueryOrderRequest extends AbstractEntity
{
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
     * Obrigatoriedade: Não Obrigatório.
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

    /**
     * Versão do serviço da MundiPagg utilizada na comunicação.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string 
     */
    public $Version;

}
