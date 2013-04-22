<?php

namespace MundiPagg\Entity;

class OriginalAcquirerReturn extends AbstractEntity
{
    /**
     * 
     * @var OriginalAcquirerReturnItem $OriginalAcquirerReturnItem
     * @access public
     */
    public $OriginalAcquirerReturnItem;

    /**
     * 
     * @param OriginalAcquirerReturnItem $OriginalAcquirerReturnItem
     * @access public
     */
    public function __construct($OriginalAcquirerReturnItem)
    {
        $this->OriginalAcquirerReturnItem = $OriginalAcquirerReturnItem;
    }
}
