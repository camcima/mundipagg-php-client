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
     * @var \DateTime $DueDate
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

    public function getAcquirerMessage()
    {
        return $this->AcquirerMessage;
    }

    public function setAcquirerMessage($AcquirerMessage)
    {
        $this->AcquirerMessage = $AcquirerMessage;
        return $this;
    }

    public function getAcquirerReturnCode()
    {
        return $this->AcquirerReturnCode;
    }

    public function setAcquirerReturnCode($AcquirerReturnCode)
    {
        $this->AcquirerReturnCode = $AcquirerReturnCode;
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

    public function getAuthorizationCode()
    {
        return $this->AuthorizationCode;
    }

    public function setAuthorizationCode($AuthorizationCode)
    {
        $this->AuthorizationCode = $AuthorizationCode;
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

    public function getExternalTimeInMilliseconds()
    {
        return $this->ExternalTimeInMilliseconds;
    }

    public function setExternalTimeInMilliseconds($ExternalTimeInMilliseconds)
    {
        $this->ExternalTimeInMilliseconds = $ExternalTimeInMilliseconds;
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

    public function getRefundedAmountInCents()
    {
        return $this->RefundedAmountInCents;
    }

    public function setRefundedAmountInCents($RefundedAmountInCents)
    {
        $this->RefundedAmountInCents = $RefundedAmountInCents;
        return $this;
    }

    public function getSuccess()
    {
        return $this->Success;
    }

    public function setSuccess($Success)
    {
        $this->Success = $Success;
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

    public function getOriginalAcquirerReturnCollection()
    {
        return $this->OriginalAcquirerReturnCollection;
    }

    public function setOriginalAcquirerReturnCollection($OriginalAcquirerReturnCollection)
    {
        $this->OriginalAcquirerReturnCollection = $OriginalAcquirerReturnCollection;
        return $this;
    }
}
