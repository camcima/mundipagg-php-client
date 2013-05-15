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

    public function getAcquirerAuthorizationCode()
    {
        return $this->AcquirerAuthorizationCode;
    }

    public function setAcquirerAuthorizationCode($AcquirerAuthorizationCode)
    {
        $this->AcquirerAuthorizationCode = $AcquirerAuthorizationCode;
        return $this;
    }

    public function getAcquirerName()
    {
        return $this->AcquirerName;
    }

    public function setAcquirerName($AcquirerName)
    {
        $this->AcquirerName = $AcquirerName;
        return $this;
    }

    public function getAmountInCents()
    {
        return $this->AmountInCents;
    }

    public function setAmountInCents($AmountInCents)
    {
        $this->AmountInCents = $AmountInCents;
        return $this;
    }

    public function getAuthorizedAmountInCents()
    {
        return $this->AuthorizedAmountInCents;
    }

    public function setAuthorizedAmountInCents($AuthorizedAmountInCents)
    {
        $this->AuthorizedAmountInCents = $AuthorizedAmountInCents;
        return $this;
    }

    public function getCapturedAmountInCents()
    {
        return $this->CapturedAmountInCents;
    }

    public function setCapturedAmountInCents($CapturedAmountInCents)
    {
        $this->CapturedAmountInCents = $CapturedAmountInCents;
        return $this;
    }

    public function getCreateDate()
    {
        return $this->CreateDate;
    }

    public function setCreateDate(\DateTime $CreateDate)
    {
        $this->CreateDate = $CreateDate;
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

    public function getCreditCardTransactionStatusEnum()
    {
        return $this->CreditCardTransactionStatusEnum;
    }

    public function setCreditCardTransactionStatusEnum($CreditCardTransactionStatusEnum)
    {
        $this->CreditCardTransactionStatusEnum = $CreditCardTransactionStatusEnum;
        return $this;
    }

    public function getCustomStatus()
    {
        return $this->CustomStatus;
    }

    public function setCustomStatus($CustomStatus)
    {
        $this->CustomStatus = $CustomStatus;
        return $this;
    }

    public function getDueDate()
    {
        return $this->DueDate;
    }

    public function setDueDate(\DateTime $DueDate)
    {
        $this->DueDate = $DueDate;
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

    public function getIsReccurency()
    {
        return $this->IsReccurency;
    }

    public function setIsReccurency($IsReccurency)
    {
        $this->IsReccurency = $IsReccurency;
        return $this;
    }

    public function getRefundedAmountInCents()
    {
        return $this->RefundedAmountInCents;
    }

    public function setRefundedAmountInCents($RefundedAmountInCents)
    {
        $this->RefundedAmountInCents = $RefundedAmountInCents;
        return $this;
    }

    public function getTransactionIdentifier()
    {
        return $this->TransactionIdentifier;
    }

    public function setTransactionIdentifier($TransactionIdentifier)
    {
        $this->TransactionIdentifier = $TransactionIdentifier;
        return $this;
    }

    public function getTransactionKey()
    {
        return $this->TransactionKey;
    }

    public function setTransactionKey($TransactionKey)
    {
        $this->TransactionKey = $TransactionKey;
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

    public function getUniqueSequentialNumber()
    {
        return $this->UniqueSequentialNumber;
    }

    public function setUniqueSequentialNumber($UniqueSequentialNumber)
    {
        $this->UniqueSequentialNumber = $UniqueSequentialNumber;
        return $this;
    }

    public function getVoidedAmountInCents()
    {
        return $this->VoidedAmountInCents;
    }

    public function setVoidedAmountInCents($VoidedAmountInCents)
    {
        $this->VoidedAmountInCents = $VoidedAmountInCents;
        return $this;
    }
}
