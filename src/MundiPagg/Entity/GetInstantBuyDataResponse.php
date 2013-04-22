<?php

namespace MundiPagg\Entity;

/**
 * GetInstantBuyDataResponse Entity
 *
 * @author Carlos Cima
 */
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
