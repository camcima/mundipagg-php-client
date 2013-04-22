<?php

namespace MundiPagg\Entity\Enum;

/**
 * Payment Method Code Enum
 *
 * @author Carlos Cima
 */
class PaymentMethodCodeEnum
{
    /**
     * Payment Method Code Enumerator
     */
    const SIMULATOR = 1;
    const REDECARD_KOMERCI_STAGING = 2;
    const REDECARD_KOMERCI = 3;
    const CIELO_STAGING = 4;
    const CIELO = 5;
    const CIELO_DTEF = 6;
    const REDECARD_DTEF = 7;
    const HIPERCARD_DTEF = 8;

}
