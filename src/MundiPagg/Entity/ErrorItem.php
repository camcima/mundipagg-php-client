<?php

namespace MundiPagg\Entity;

/**
 * ErrorItem Entity
 *
 * @author Carlos Cima
 */
class ErrorItem extends AbstractEntity
{
    /**
     * Descrição do erro.
     * 
     * @var string $Description
     * @access public
     */
    public $Description;

    /**
     * Código Identificador do erro.
     * 
     * 400 - Dado inválido informado para o contrato do serviço.
     * 500 - Erro inesperado.
     * 
     * @var int $ErrorCode
     * @access public
     */
    public $ErrorCode;

    /**
     * Nome do campo que apresenta um dado inválido.
     * 
     * @var string $ErrorField
     * @access public
     */
    public $ErrorField;

    /**
     * Identifica o grau de severidade do problema.
     * 
     * @see \MundiPagg\Entity\Enum\SeverityCodeEnum
     * @var string $SeverityCodeEnum
     * @access public
     */
    public $SeverityCodeEnum;

}
