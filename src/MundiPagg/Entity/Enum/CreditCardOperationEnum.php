<?php

namespace MundiPagg\Entity\Enum;

/**
 * Credit Card Operation Enum
 *
 * @author Carlos Cima
 */
class CreditCardOperationEnum
{
    /**
     * Credit Card Operation Enumerator
     */
    const AUTHORIZE_ONLY = 'AuthOnly';
    const AUTHORIZE_AND_CAPTURE = 'AuthAndCapture';
    const AUTHORIZE_AND_CAPTURE_WITH_DELAY = 'AuthAndCaptureWithDelay';

}
