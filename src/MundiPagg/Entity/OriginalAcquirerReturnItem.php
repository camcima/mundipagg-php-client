<?php

namespace MundiPagg\Entity;

/**
 * OriginalAcquirerReturnItem Entity
 *
 * @author Carlos Cima
 */
class OriginalAcquirerReturnItem extends AbstractEntity
{
    /**
     * Chave de identificação da adquirente.
     * 
     * @var string $Key
     * @access public
     */
    public $Key;

    /**
     * Valor recebido pela adquirente de acordo com a chave.
     * 
     * @var string $Value
     * @access public
     */
    public $Value;

}
