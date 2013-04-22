<?php

namespace MundiPagg\Entity;

class GetInstantBuyDataResponse extends AbstractEntity
{
    /**
     * 
     * @var GetInstantBuyDataResponse $GetInstantBuyDataResult
     * @access public
     */
    public $GetInstantBuyDataResult;

    /**
     * 
     * @param GetInstantBuyDataResponse $GetInstantBuyDataResult
     * @access public
     */
    public function __construct($GetInstantBuyDataResult)
    {
        $this->GetInstantBuyDataResult = $GetInstantBuyDataResult;
    }
}
