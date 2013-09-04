<?php

namespace MundiPagg\Entity;

/**
 * QueryOrderResponse Entity
 *
 * @author Carlos Cima
 */
class QueryOrderResult extends AbstractEntity
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
    
    public function getOrderDataCollection() {
        return $this->OrderDataCollection;
    }

    public function setOrderDataCollection($OrderDataCollection) {
        $this->OrderDataCollection = $OrderDataCollection;
        return $this;
    }

    public function getMundiPaggSuggestion() {
        return $this->MundiPaggSuggestion;
    }

    public function setMundiPaggSuggestion($MundiPaggSuggestion) {
        $this->MundiPaggSuggestion = $MundiPaggSuggestion;
        return $this;
    }

    public function getErrorReport() {
        return $this->ErrorReport;
    }

    public function setErrorReport(\MundiPagg\Entity\ErrorReport $ErrorReport) {
        $this->ErrorReport = $ErrorReport;
        return $this;
    }

    public function getMundiPaggTimeInMilliseconds() {
        return $this->MundiPaggTimeInMilliseconds;
    }

    public function setMundiPaggTimeInMilliseconds($MundiPaggTimeInMilliseconds) {
        $this->MundiPaggTimeInMilliseconds = $MundiPaggTimeInMilliseconds;
        return $this;
    }

    public function getSuccess() {
        return $this->Success;
    }

    public function setSuccess($Success) {
        $this->Success = $Success;
        return $this;
    }

    public function getRequestKey() {
        return $this->RequestKey;
    }

    public function setRequestKey($RequestKey) {
        $this->RequestKey = $RequestKey;
        return $this;
    }

    public function getOrderDataCount() {
        return $this->OrderDataCount;
    }

    public function setOrderDataCount($OrderDataCount) {
        $this->OrderDataCount = $OrderDataCount;
        return $this;
    }

}
