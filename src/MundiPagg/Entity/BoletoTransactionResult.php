<?php

namespace MundiPagg\Entity;

/**
 * BoletoTransactionResult Entity
 *
 * @author Carlos Cima
 */
class BoletoTransactionResult extends AbstractEntity
{
    /**
     * Valor pago em centavos.
     * 
     * @var int $AmountInCents
     * @access public
     */
    public $AmountInCents;

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
     * Código customizável para ser tratado pela loja.
     * 
     * @var string $CustomStatus
     * @access public
     */
    public $CustomStatus;

    /**
     * Número de identificação do boleto.
     * 
     * @var string $NossoNumero
     * @access public
     */
    public $NossoNumero;

    /**
     * 
     * @todo check existance and comment
     * @var boolean $Success
     * @access public
     */
    public $Success;

    /**
     * Identificação da transação na plataforma One. (GUID)
     * 
     * @var string $TransactionKey
     * @access public
     */
    public $TransactionKey;

    /**
     * Identificação da transação pela loja.
     * 
     * @var string $TransactionReference
     * @access public
     */
    public $TransactionReference;

}
