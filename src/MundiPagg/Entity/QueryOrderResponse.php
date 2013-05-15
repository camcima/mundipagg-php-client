<?php

namespace MundiPagg\Entity;

/**
 * QueryOrderResponse Entity
 *
 * @author Carlos Cima
 */
class QueryOrderResponse extends AbstractEntity
{

    /**
     * Coleção de pedidos que pertencem a ordem.
     * 
     * @see \MundiPagg\Entity\OrderData
     * @var array 
     */
    public $OrderDataCollection;

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
     * Tempo de processo na plataforma One.
     * 
     * @var int 
     */
    public $MundiPaggTimeInMilliseconds;

    /**
     * Indica se a operação foi realizada com sucesso.
     * 
     * @var boolean 
     */
    public $Success;

    /**
     * Identificação da requisição na plataforma One. (GUID)
     * 
     * @var string 
     */
    public $RequestKey;

    /**
     * Quantidade de pedidos encontrados para o número enviado.
     * 
     * @var int 
     */
    public $OrderDataCount;

}
