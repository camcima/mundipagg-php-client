<?php

namespace MundiPagg\Entity;

/**
 * CreditCardTransactionData Entity
 *
 * @author Carlos Cima
 */
class CreditCardTransactionData extends AbstractEntity
{
    /**
     * Código de autorização da transação enviado pela adquirente.
     * 
     * @var string $AcquirerAuthorizationCode
     * @access public
     */
    public $AcquirerAuthorizationCode;

    /**
     * Nome da adquirente em que a transação foi realizado.
     * 
     * @var string $AcquirerName
     * @access public
     */
    public $AcquirerName;

    /**
     * Valor da transação em centavos.
     * 
     * @var int $AmountInCents
     * @access public
     */
    public $AmountInCents;

    /**
     * Indica o valor autorizado em centavos
     * 
     * @var int $AuthorizedAmountInCents
     * @access public
     */
    public $AuthorizedAmountInCents;

    /**
     * Indica o valor capturado em centavos.
     * 
     * @var int $CapturedAmountInCents
     * @access public
     */
    public $CapturedAmountInCents;

    /**
     * Data em que a transação foi criada.
     * 
     * @var \DateTime $CreateDate
     * @access public
     */
    public $CreateDate;

    /**
     * Bandeira do cartão utilizado na transação.
     * 
     * @see \MundiPagg\Entity\Enum\CreditCardBrandEnum
     * @var string $CreditCardBrandEnum
     * @access public
     */
    public $CreditCardBrandEnum;

    /**
     * Número do cartão de crédito utilizado na transação.
     * 
     * @var string $CreditCardNumber
     * @access public
     */
    public $CreditCardNumber;

    /**
     * Status da transação de cartão de crédito na plataforma One.
     * 
     * @see \MundiPagg\Entity\Enum\CreditCardTransactionStatusEnum
     * @var string $CreditCardTransactionStatusEnum
     * @access public
     */
    public $CreditCardTransactionStatusEnum;

    /**
     * Código customizável para ser tratado pela loja.
     * 
     * @var string $CustomStatus
     * @access public
     */
    public $CustomStatus;

    /**
     * Data que a transação será executada.
     * 
     * @var \DateTime $DueDate
     * @access public
     */
    public $DueDate;

    /**
     * Número de parcelas da transação.
     * 
     * @var int $InstallmentCount
     * @access public
     */
    public $InstallmentCount;

    /**
     * Identificação do Buyer para comprar com InstantBuy. (GUID)
     * 
     * @var string $InstantBuyKey
     * @access public
     */
    public $InstantBuyKey;

    /**
     * Informa se a transação é ou não uma recorrência.
     * 
     * @var boolean $IsReccurency
     * @access public
     */
    public $IsReccurency;

    /**
     * Indica o valor estornado em centavos.
     * 
     * @var int $RefundedAmountInCents
     * @access public
     */
    public $RefundedAmountInCents;

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
     * Identificador da transação loja.
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
     * Indica o valor cancelado em centavos.
     * 
     * @var int $VoidedAmountInCents
     * @access public
     */
    public $VoidedAmountInCents;

}
