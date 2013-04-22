<?php

namespace MundiPagg\Entity;

class GetInstantBuyData extends AbstractEntity
{
    /**
     * 
     * @var GetInstantBuyDataRequest $queryCreditCardDataRequest
     * @access public
     */
    public $queryCreditCardDataRequest;

    /**
     * 
     * @param GetInstantBuyDataRequest $queryCreditCardDataRequest
     * @access public
     */
    public function __construct($queryCreditCardDataRequest)
    {
        $this->queryCreditCardDataRequest = $queryCreditCardDataRequest;
    }
}
