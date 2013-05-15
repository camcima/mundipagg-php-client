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
     * @var \MundiPagg\Entity\ErrorItemCollection $ErrorItemCollection
     * @access public
     */
    public $ErrorItemCollection;

    /**
     * Get Category
     * 
     * @see \MundiPagg\Entity\Enum\ErrorCategoryEnum
     * @return string
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * Set Category
     * 
     * @see \MundiPagg\Entity\Enum\ErrorCategoryEnum
     * @param string $Category
     * @return \MundiPagg\Entity\ErrorReport
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;
        return $this;
    }

    /**
     * Get Error Item Collection
     * 
     * @return \MundiPagg\Entity\ErrorItemCollection
     */
    public function getErrorItemCollection()
    {
        return $this->ErrorItemCollection;
    }

    /**
     * Set Error Item Collection
     * 
     * @param \MundiPagg\Entity\ErrorItemCollection $ErrorItemCollection
     * @return \MundiPagg\Entity\ErrorReport
     */
    public function setErrorItemCollection(ErrorItemCollection $ErrorItemCollection)
    {
        $this->ErrorItemCollection = $ErrorItemCollection;
        return $this;
    }
}
