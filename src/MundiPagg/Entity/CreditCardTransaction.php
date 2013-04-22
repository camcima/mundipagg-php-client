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

    public function getAmountInCents()
    {
        return $this->AmountInCents;
    }

    public function setAmountInCents($AmountInCents)
    {
        $this->AmountInCents = $AmountInCents;
        return $this;
    }

    public function getCaptureDelayInMinutes()
    {
        return $this->CaptureDelayInMinutes;
    }

    public function setCaptureDelayInMinutes($CaptureDelayInMinutes)
    {
        $this->CaptureDelayInMinutes = $CaptureDelayInMinutes;
        return $this;
    }

    public function getCreditCardBrandEnum()
    {
        return $this->CreditCardBrandEnum;
    }

    public function setCreditCardBrandEnum($CreditCardBrandEnum)
    {
        $this->CreditCardBrandEnum = $CreditCardBrandEnum;
        return $this;
    }

    public function getCreditCardNumber()
    {
        return $this->CreditCardNumber;
    }

    public function setCreditCardNumber($CreditCardNumber)
    {
        $this->CreditCardNumber = $CreditCardNumber;
        return $this;
    }

    public function getCreditCardOperationEnum()
    {
        return $this->CreditCardOperationEnum;
    }

    public function setCreditCardOperationEnum($CreditCardOperationEnum)
    {
        $this->CreditCardOperationEnum = $CreditCardOperationEnum;
        return $this;
    }

    public function getExpMonth()
    {
        return $this->ExpMonth;
    }

    public function setExpMonth($ExpMonth)
    {
        $this->ExpMonth = $ExpMonth;
        return $this;
    }

    public function getExpYear()
    {
        return $this->ExpYear;
    }

    public function setExpYear($ExpYear)
    {
        $this->ExpYear = $ExpYear;
        return $this;
    }

    public function getHolderName()
    {
        return $this->HolderName;
    }

    public function setHolderName($HolderName)
    {
        $this->HolderName = $HolderName;
        return $this;
    }

    public function getIataAmountInCents()
    {
        return $this->IataAmountInCents;
    }

    public function setIataAmountInCents($IataAmountInCents)
    {
        $this->IataAmountInCents = $IataAmountInCents;
        return $this;
    }

    public function getInstallmentCount()
    {
        return $this->InstallmentCount;
    }

    public function setInstallmentCount($InstallmentCount)
    {
        $this->InstallmentCount = $InstallmentCount;
        return $this;
    }

    public function getInstantBuyKey()
    {
        return $this->InstantBuyKey;
    }

    public function setInstantBuyKey($InstantBuyKey)
    {
        $this->InstantBuyKey = $InstantBuyKey;
        return $this;
    }

    public function getPaymentMethodCode()
    {
        return $this->PaymentMethodCode;
    }

    public function setPaymentMethodCode($PaymentMethodCode)
    {
        $this->PaymentMethodCode = $PaymentMethodCode;
        return $this;
    }

    public function getRecurrency()
    {
        return $this->Recurrency;
    }

    public function setRecurrency(\MundiPagg\Entity\Recurrency $Recurrency)
    {
        $this->Recurrency = $Recurrency;
        return $this;
    }

    public function getSecurityCode()
    {
        return $this->SecurityCode;
    }

    public function setSecurityCode($SecurityCode)
    {
        $this->SecurityCode = $SecurityCode;
        return $this;
    }

    public function getThirdPartyMerchantKey()
    {
        return $this->ThirdPartyMerchantKey;
    }

    public function setThirdPartyMerchantKey($ThirdPartyMerchantKey)
    {
        $this->ThirdPartyMerchantKey = $ThirdPartyMerchantKey;
        return $this;
    }

    public function getTransactionReference()
    {
        return $this->TransactionReference;
    }

    public function setTransactionReference($TransactionReference)
    {
        $this->TransactionReference = $TransactionReference;
        return $this;
    }


}
