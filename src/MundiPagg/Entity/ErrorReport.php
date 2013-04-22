<?php

namespace MundiPagg\Entity;

class ErrorReport extends AbstractEntity
{
    /**
     * 
     * @var string $Category
     * @access public
     */
    public $Category;

    /**
     * 
     * @var array $ErrorItemCollection
     * @access public
     */
    public $ErrorItemCollection;

    /**
     * 
     * @param string $Category
     * @param array $ErrorItemCollection
     * @access public
     */
    public function __construct($Category, $ErrorItemCollection)
    {
        $this->Category = $Category;
        $this->ErrorItemCollection = $ErrorItemCollection;
    }
}
