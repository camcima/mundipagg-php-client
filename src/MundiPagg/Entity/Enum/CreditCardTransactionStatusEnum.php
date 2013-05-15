<?php

namespace MundiPagg\Entity\Enum;

/**
 * Credit Card Transaction Status Enum
 *
 * @author Carlos Cima
 */
class CreditCardTransactionStatusEnum
{

    /**
     * Credit Card Transaction Status Enumerator
     */
    const AUTHORIZED_PENDING_CAPTURE = 'AuthorizedPendingCapture';
    const NOT_AUTHORIZED = 'NotAuthorized';
    const CHARGEBACK_PREVIEW = 'ChargebackPreview';
    const REFUND_PREVIEW = 'RefundPreview';
    const DEPOSIT_PREVIEW = 'DepositPreview';
    const CAPTURED = 'Captured';
    const PARTIAL_CAPTURE = 'PartialCapture';
    const REFUNDED = 'Refunded';
    const VOIDED = 'Voided';
    const DEPOSITED = 'Deposited';
    const OPENED_PENDING_AUTH = 'OpenedPendindAuth';
    const CHARGEDBACK = 'Chargedback';
    const WITH_ERROR = 'WithError';
    const INVALID = 'Invalid';
    const PENDING_VOID = 'PendingVoid';
    const PARTIAL_AUTHORIZE = 'PartialAuthorize';
    const PARTIAL_REFUND = 'PartialRefund';

    public static $statusDescription = array(
        self::AUTHORIZED_PENDING_CAPTURE => 'Transação autorizada e pendente de captura',
        self::NOT_AUTHORIZED => 'Transação não autorizada',
        self::CHARGEBACK_PREVIEW => 'Previsão de chargeback',
        self::REFUND_PREVIEW => 'Previsão de estorno',
        self::DEPOSIT_PREVIEW => 'Previsão de depósito',
        self::CAPTURED => 'Transação capturada',
        self::PARTIAL_CAPTURE => 'Transação capturada parcialmente',
        self::REFUNDED => 'Transação estornada',
        self::VOIDED => 'Transação cancelada',
        self::DEPOSITED => 'Transação depositada',
        self::OPENED_PENDING_AUTH => 'Transação agendada a ser autorizada (exemplo: recorrência)',
        self::CHARGEDBACK => 'Transação com chargeback',
        self::WITH_ERROR => 'Transação com erro de conexão',
        self::INVALID => 'Transação inválida',
        self::PENDING_VOID => 'Transação pendente de cancelamento',
        self::PARTIAL_AUTHORIZE => 'Transação parcialmente autorizada',
        self::PARTIAL_REFUND => 'Transação parcialmente estornada'
    );

}
