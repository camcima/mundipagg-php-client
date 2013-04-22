<?php

namespace MundiPagg\Entity;

/**
 * Credit Card Transaction Entity
 *
 * @author Carlos Cima
 */
class CreditCardTransaction extends AbstractEntity
{
    public $AmountInCents;
    public $CaptureDelayInMinutes;
    public $CreditCardBrandEnum;
    public $CreditCardNumber;
    public $CreditCardOperationEnum;
    public $ExpMonth;
    public $ExpYear;
    public $HolderName;
    public $IataAmountInCents;
    public $InstallmentCount;
    public $InstantBuyKey;
    public $PaymentMethodCode;
    public $Recurrency;
    public $SecurityCode;
    public $ThirdPartyMerchantKey;
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

    public function setRecurrency($Recurrency)
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
