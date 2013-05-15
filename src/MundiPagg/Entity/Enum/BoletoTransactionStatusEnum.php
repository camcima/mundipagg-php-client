<?php

namespace MundiPagg\Entity\Enum;

/**
 * Boleto Transaction Status Enum
 *
 * @author Carlos Cima
 */
class BoletoTransactionStatusEnum
{

    /**
     * Boleto Transaction Status Enumerator
     */
    const GENERATED = 'Generated';
    const VIEWED = 'Viewed';
    const UNDER_PAID = 'UnderPaid';
    const OVER_PAID = 'OverPaid';
    const PAID = 'Paid';
    const VOIDED = 'Voided';
    const WITH_ERROR = 'WithError';

}
