<?php

namespace MundiPagg\Entity;

/**
 * BoletoTransactionData Entity
 *
 * @author Carlos Cima
 */
class BoletoTransactionData extends AbstractEntity
{
    /**
     * Valor total da transação em centavos.
     * 
     * @var int $AmountInCents
     * @access public
     */
    public $AmountInCents;

    /**
     * Valor pago em centavos.
     * 
     * @var int $AmountPaidInCents
     * @access public
     */
    public $AmountPaidInCents;

    /**
     * Número do banco.
     * 
     * @var string $BankNumber
     * @access public
     */
    public $BankNumber;

    /**
     * Linha digitável do boleto.
     * 
     * @var string $Barcode
     * @access public
     */
    public $Barcode;

    /**
     * Status do boleto dentro da plataforma One.
     * 
     * @see \MundiPagg\Entity\Enum\BoletoTransactionStatusEnum
     * @var string $BoletoTransactionStatusEnum
     * @access public
     */
    public $BoletoTransactionStatusEnum;

    /**
     * Url do boleto gerado.
     * 
     * @var string $BoletoUrl
     * @access public
     */
    public $BoletoUrl;

    /**
     * Data em que a transação foi criada.
     * 
     * @var \DateTime $CreateDate
     * @access public
     */
    public $CreateDate;

    /**
     * Código customizável para ser tratado pela loja
     * 
     * @var string $CustomStatus
     * @access public
     */
    public $CustomStatus;

    /**
     * Data de expiração do boleto.
     * 
     * @var \DateTime $ExpirationDate
     * @access public
     */
    public $ExpirationDate;

    /**
     * Número de identificação do boleto.
     * 
     * @var string $NossoNumero
     * @access public
     */
    public $NossoNumero;

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

}
