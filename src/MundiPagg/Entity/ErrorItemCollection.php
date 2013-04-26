<?php

namespace MundiPagg\Entity;

/**
 * ErrorItemCollection Entity
 *
 * @author Carlos Cima
 */
class ErrorItemCollection extends AbstractEntity
{

    /**
     * Error Items
     *
     * @var array
     */
    public $ErrorItem = array();

    /**
     * Add Error Item
     *
     * @param \MundiPagg\Entity\ErrorItem $errorItem
     * @return \MundiPagg\Entity\ErrorItemCollection
     */
    public function addErrorItem(ErrorItem $errorItem)
    {
        $this->ErrorItem[] = $errorItem;
        return $this;
    }
}