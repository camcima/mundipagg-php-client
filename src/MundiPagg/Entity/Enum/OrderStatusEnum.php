<?php

namespace MundiPagg\Entity\Enum;

/**
 * Order Status Enum
 *
 * @author Carlos Cima
 */
class OrderStatusEnum
{

    /**
     * Order Status Enumerator
     */
    const OPENED = 'Opened';
    const CLOSED = 'Closed';
    const PAID = 'Paid';
    const OVERPAID = 'Overpaid';
    const CANCELED = 'Canceled';
    const PARTIALPAID = 'PartialPaid';

}
