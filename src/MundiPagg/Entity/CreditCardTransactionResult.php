<?php

namespace MundiPagg\Entity;

/**
 * CreditCardTransactionResult Entity
 *
 * @author Carlos Cima
 */
class CreditCardTransactionResult extends AbstractEntity
{
    /**
     * Mensagem de retorno da adquirente.
     * 
     * @var string $AcquirerMessage
     * @access public
     */
    public $AcquirerMessage;

    /**
     * Código retornado pela adquirente.
     * 
     * @var string $AcquirerReturnCode
     * @access public
     */
    public $AcquirerReturnCode;

    /**
     * Valor da transação em centavos.
     * 
     * @var int $AmountInCents
     * @access public
     */
    public $AmountInCents;

    /**
     * 
     * @todo check existance and comment
     * @var string $AuthorizationCode
     * @access public
     */
    public $AuthorizationCode;

    /**
     * Indica o valor autorizado em centavos
     * 
     * @var int $AuthorizedAmountInCents
     * @access public
     */
    public $AuthorizedAmountInCents;

    /**
     * Indica o valor capturado em centavos
     * 
     * @var int $CapturedAmountInCents
     * @access public
     */
    public $CapturedAmountInCents;

    /**
     * Número do cartão de crédito utilizado na transação.
     * 
     * @var string $CreditCardNumber
     * @access public
     */
    public $CreditCardNumber;

    /**
     * Tipo da operação realizada. Ex: AuthOnly.
     * 
     * @see \MundiPagg\Entity\Enum\CreditCardOperationEnum
     * @var string $CreditCardOperationEnum
     * @access public
     */
    public $CreditCardOperationEnum;

    /**
     * Status da transação de cartão de crédito na plataforma One.
     * 
     * @see \MundiPagg\Entity\Enum\CreditCardTransactionStatusEnum
     * @var string $CreditCardTransactionStatusEnum
     * @access public
     */
    public $CreditCardTransactionStatusEnum;

    /**
     * Código customizável para ser tratado pelo lojista.
     * 
     * @var string $CustomStatus
     * @access public
     */
    public $CustomStatus;

    /**
     * Data que a transação será executada.
     * 
     * @var dateTime $DueDate
     * @access public
     */
    public $DueDate;

    /**
     * 
     * @todo check existance and comment
     * @var int $ExternalTimeInMilliseconds
     * @access public
     */
    public $ExternalTimeInMilliseconds;

    /**
     * Identificador do cartão de crédito na plataforma One. (GUID)
     * 
     * @var string $InstantBuyKey
     * @access public
     */
    public $InstantBuyKey;

    /**
     * Indica o valor estornado em centavos
     * 
     * @var int $RefundedAmountInCents
     * @access public
     */
    public $RefundedAmountInCents;

    /**
     * Indica se a transação foi executada com sucesso.
     * 
     * @var boolean $Success
     * @access public
     */
    public $Success;

    /**
     * Identificação da transação na adquirente Cielo (TID).
     * 
     * @var string $TransactionIdentifier
     * @access public
     */
    public $TransactionIdentifier;

    /**
     * Identificador da transação na plataforma One. (GUID)
     * 
     * @var string $TransactionKey
     * @access public
     */
    public $TransactionKey;

    /**
     * Identificador da transação pela loja.
     * 
     * @var string $TransactionReference
     * @access public
     */
    public $TransactionReference;

    /**
     * Número Sequencial Único. (NSU)
     * Este campo é utilizado para localizar a transação na adquirente.
     * 
     * @var string $UniqueSequentialNumber
     * @access public
     */
    public $UniqueSequentialNumber;

    /**
     * Indica o valor cancelado em centavos
     * 
     * @var int $VoidedAmountInCents
     * @access public
     */
    public $VoidedAmountInCents;

    /**
     * Informações do retorno da adquirente.
     * 
     * @see \MundiPagg\Entity\OriginalAcquirerReturn
     * @var array $OriginalAcquirerReturnCollection
     * @access public
     */
    public $OriginalAcquirerReturnCollection;

}
