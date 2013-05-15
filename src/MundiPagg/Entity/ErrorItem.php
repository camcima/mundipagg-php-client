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

    /**
     * Get Description
     * 
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set Description
     * 
     * @param string $Description
     * @return \MundiPagg\Entity\ErrorItem
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * Get Error Code
     * 
     * @return int
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }

    /**
     * Set Error Code
     * 
     * @param int $ErrorCode
     * @return \MundiPagg\Entity\ErrorItem
     */
    public function setErrorCode($ErrorCode)
    {
        $this->ErrorCode = $ErrorCode;
        return $this;
    }

    /**
     * Get Error Field
     * 
     * @return string
     */
    public function getErrorField()
    {
        return $this->ErrorField;
    }

    /**
     * Set Error Field
     * 
     * @param string $ErrorField
     * @return \MundiPagg\Entity\ErrorItem
     */
    public function setErrorField($ErrorField)
    {
        $this->ErrorField = $ErrorField;
        return $this;
    }

    /**
     * Get Severity Code Enum
     * 
     * @see \MundiPagg\Entity\Enum\SeverityCodeEnum
     * @return string
     */
    public function getSeverityCodeEnum()
    {
        return $this->SeverityCodeEnum;
    }

    /**
     * Set Severity Code Enum
     * 
     * @see \MundiPagg\Entity\Enum\SeverityCodeEnum
     * @param string $SeverityCodeEnum
     * @return \MundiPagg\Entity\ErrorItem
     */
    public function setSeverityCodeEnum($SeverityCodeEnum)
    {
        $this->SeverityCodeEnum = $SeverityCodeEnum;
        return $this;
    }
}
