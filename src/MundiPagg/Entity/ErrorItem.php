<?php

namespace MundiPagg\Entity;

class ErrorItem extends AbstractEntity
{
    /**
     * 
     * @var string $Description
     * @access public
     */
    public $Description;

    /**
     * 
     * @var int $ErrorCode
     * @access public
     */
    public $ErrorCode;

    /**
     * 
     * @var string $ErrorField
     * @access public
     */
    public $ErrorField;

    /**
     * 
     * @var SeverityCodeEnum $SeverityCodeEnum
     * @access public
     */
    public $SeverityCodeEnum;

    /**
     * 
     * @param string $Description
     * @param int $ErrorCode
     * @param string $ErrorField
     * @param SeverityCodeEnum $SeverityCodeEnum
     * @access public
     */
    public function __construct($Description, $ErrorCode, $ErrorField, $SeverityCodeEnum)
    {
        $this->Description = $Description;
        $this->ErrorCode = $ErrorCode;
        $this->ErrorField = $ErrorField;
        $this->SeverityCodeEnum = $SeverityCodeEnum;
    }
}
