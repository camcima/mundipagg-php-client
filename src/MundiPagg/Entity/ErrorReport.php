<?php

namespace MundiPagg\Entity;

/**
 * ErrorReport Entity
 *
 * @author Carlos Cima
 */
class ErrorReport extends AbstractEntity
{
    /**
     * Identifica o tipo de erro retornado.
     * 
     * @see \MundiPagg\Entity\Enum\ErrorCategoryEnum
     * @var string $Category
     * @access public
     */
    public $Category;

    /**
     * Coleção de objetos do tipo ErrorItem.
     * 
     * @see \MundiPagg\Entity\ErrorItem
     * @var array $ErrorItemCollection
     * @access public
     */
    public $ErrorItemCollection;

}
