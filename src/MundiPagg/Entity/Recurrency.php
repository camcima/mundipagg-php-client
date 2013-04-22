<?php

namespace MundiPagg\Entity;

class Recurrency extends AbstractEntity
{
    /**
     * 
     * @var dateTime $DateToStartBilling
     * @access public
     */
    public $DateToStartBilling;

    /**
     * 
     * @var FrequencyEnum $FrequencyEnum
     * @access public
     */
    public $FrequencyEnum;

    /**
     * 
     * @var int $Interval
     * @access public
     */
    public $Interval;

    /**
     * 
     * @var boolean $OneDollarAuth
     * @access public
     */
    public $OneDollarAuth;

    /**
     * 
     * @var int $Recurrences
     * @access public
     */
    public $Recurrences;

    /**
     * 
     * @param dateTime $DateToStartBilling
     * @param FrequencyEnum $FrequencyEnum
     * @param int $Interval
     * @param boolean $OneDollarAuth
     * @param int $Recurrences
     * @access public
     */
    public function __construct($DateToStartBilling, $FrequencyEnum, $Interval, $OneDollarAuth, $Recurrences)
    {
        $this->DateToStartBilling = $DateToStartBilling;
        $this->FrequencyEnum = $FrequencyEnum;
        $this->Interval = $Interval;
        $this->OneDollarAuth = $OneDollarAuth;
        $this->Recurrences = $Recurrences;
    }
}
