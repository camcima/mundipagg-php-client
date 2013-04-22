<?php

namespace MundiPagg\Entity;

/**
 * ManageCreditCardTransactionRequest Entity
 *
 * @author Carlos Cima
 */
class ManageCreditCardTransactionRequest extends AbstractEntity
{
    /**
     * Valor total da transação em centavos.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var int $AmountInCents
     * @access public
     */
    public $AmountInCents;

    /**
     * Identificação da transação na plataforma One. (GUID)
     * 
     * Obrigatoriedade: Todas operações.
     * 
     * @var string $TransactionKey
     * @access public
     */
    public $TransactionKey;

    /**
     * Identificação da transação pela loja.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string $TransactionReference
     * @access public
     */
    public $TransactionReference;

}
