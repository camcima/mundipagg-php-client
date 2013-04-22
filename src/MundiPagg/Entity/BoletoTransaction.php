<?php

namespace MundiPagg\Entity;

/**
 * BoletoTransaction Entity
 *
 * @author Carlos Cima
 */
class BoletoTransaction extends AbstractEntity
{
    /**
     * Valor do boleto em centavos.
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @var int $AmountInCents
     * @access public
     */
    public $AmountInCents;

    /**
     * Número do banco.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string $BankNumber
     * @access public
     */
    public $BankNumber;

    /**
     * Dias que serão adicionados a data atual até o vencimento.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var int $DaysToAddInBoletoExpirationDate
     * @access public
     */
    public $DaysToAddInBoletoExpirationDate;

    /**
     * Instrução que irá aparecer no corpo do boleto.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string $Instructions
     * @access public
     */
    public $Instructions;

    /**
     * Número de identificação do boleto.
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @var string $NossoNumero
     * @access public
     */
    public $NossoNumero;

    /**
     * Identificador da transação pela loja.
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @var string $TransactionReference
     * @access public
     */
    public $TransactionReference;

}
