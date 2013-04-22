<?php

namespace MundiPagg\Entity;

/**
 * CreditCardTransaction Entity
 *
 * @author Carlos Cima
 */
class CreditCardTransaction extends AbstractEntity
{
    /**
     * Valor total em centavos a ser passado na transação de cartão de crédito.
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @var int 
     */
    public $AmountInCents;

    /**
     * Tempo para capturar a transação em minutos.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var int 
     */
    public $CaptureDelayInMinutes;

    /**
     * Bandeira do cartão de crédito (Ex:Master Card, Visa).
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @see \MundiPagg\Entity\Enum\CreditCardBrandEnum
     * @var string 
     */
    public $CreditCardBrandEnum;

    /**
     * Número do cartão de crédito.
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @var string 
     */
    public $CreditCardNumber;

    /**
     * Tipo da transação a ser realizada. Ex: AuthOnly.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @see \MundiPagg\Entity\Enum\CreditCardOperationEnum
     * @var string 
     */
    public $CreditCardOperationEnum;

    /**
     * Mês de expiração do cartão de crédito.
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @var int
     */
    public $ExpMonth;

    /**
     * Ano de expiração do cartão de crédito.
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @var int
     */
    public $ExpYear;

    /**
     * Nome do proprietário do cartão de crédito.
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @var string 
     */
    public $HolderName;

    /**
     * Valor total em centavos, para uma transação Iata, utilizada em companhias aéreas.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var int 
     */
    public $IataAmountInCents;

    /**
     * Número de parcelas da transação.
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @var int 
     */
    public $InstallmentCount;

    /**
     * Identificação do Buyer para comprar com InstantBuy. (GUID)
     * 
     * Obrigatoriedade: Em casos de InstantBuy.
     * 
     * @var string
     */
    public $InstantBuyKey;

    /**
     * Enviar vazio para transações em produção e “1” para transações em homologação.
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @var int 
     */
    public $PaymentMethodCode;

    /**
     * Configurações para recorrência.
     * 
     * Obrigatoriedade: Em caso de recorrências.
     * 
     * @var \MundiPagg\Entity\Recurrency 
     */
    public $Recurrency;

    /**
     * Código de segurança do cartão de crédito.
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @var string 
     */
    public $SecurityCode;

    /**
     * Utilizado para fazer split de transações. (GUID)
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string 
     */
    public $ThirdPartyMerchantKey;

    /**
     * Identificador da transação loja.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string
     */
    public $TransactionReference;

}
