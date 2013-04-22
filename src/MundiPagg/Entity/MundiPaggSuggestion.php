<?php

namespace MundiPagg\Entity;

class MundiPaggSuggestion extends AbstractEntity
{
    /**
     * 
     * @var int $Code
     * @access public
     */
    public $Code;

    /**
     * 
     * @var string $Message
     * @access public
     */
    public $Message;

    /**
     * 
     * @param int $Code
     * @param string $Message
     * @access public
     */
    public function __construct($Code, $Message)
    {
        $this->Code = $Code;
        $this->Message = $Message;
    }
}
