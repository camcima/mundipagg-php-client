<?php

namespace MundiPagg\Entity;

/**
 * CreateOrderRequest Entity
 *
 * @author Carlos Cima
 */
class CreateOrderRequest extends AbstractEntity
{
    /**
     * Valor total do pedido em centavos. Ex( R$ 1,00 = 100).
     * 
     * Obrigatoriedade: Todas operações.
     * 
     * @var int
     */
    public $AmountInCents;

    /**
     * Valor mínimo em centavos para ser considerar o pedido pago.
     * Caso seja enviado vazio será considerado o valor
     * referente ao campo AmountInCents.
     * 
     * Obrigatoriedade: Não obrigatório.
     * 
     * @var int 
     */
    public $AmountInCentsToConsiderPaid;

    /**
     * Parâmetros enviados caso seja uma transação de Boleto.
     * 
     * Obrigatoriedade: Geração de boleto.
     * 
     * @var \MundiPagg\Entity\BoletoTransactionCollection
     */
    public $BoletoTransactionCollection;

    /**
     * Dados do comprador.
     * 
     * Obrigatoriedade: Não obrigatório.
     * 
     * @var \MundiPagg\Entity\BuyerRequest 
     */
    public $Buyer;

    /**
     * Dados do cartão de crédito.
     * 
     * Obrigatoriedade: Autorização de Cartão de Crédito.
     * 
     * @var \MundiPagg\Entity\CreditCardTransactionCollection
     */
    public $CreditCardTransactionCollection;

    /**
     * Tipo de moeda pela ISO.
     * 
     * Obrigatoriedade: Captura Automática.
     * 
     * @see \MundiPagg\Entity\Enum\CurrencyIsoEnum
     * @var string 
     */
    public $CurrencyIsoEnum;

    /**
     * Campo utilizado para configuração de envio de e-mail
     * para o Buyer de acordo com o código informado.
     * 
     * Ex: YesIfPay,enviar e-mail caso seja confirmado o pagamento.
     * 
     * Obrigatoriedade: Não obrigatório.
     * 
     * @see \MundiPagg\Entity\Enum\EmailUpdateToBuyerEnum
     * @var string 
     */
    public $EmailUpdateToBuyerEnum;

    /**
     * Identificação da loja na plataforma One. (GUID)
     * 
     * Obrigatoriedade: Todas operações.
     * 
     * @var string
     */
    public $MerchantKey;

    /**
     * Identificação da order enviada pelo lojista.
     * Se não enviada, será gerado um número automaticamente.
     * 
     * Obrigatoriedade: Não obrigatório.
     * 
     * @var string 
     */
    public $OrderReference;

    /**
     * Números de retentativas para conclusão do pedido
     * (Default é a configuração da loja dentro da plataforma One).
     * 
     * Obrigatoriedade: Não obrigatório.
     * 
     * @var int 
     */
    public $Retries;

    /**
     * Dados do carrinho de compra.
     * 
     * Obrigatoriedade: Não obrigatório.
     * 
     * @var \MundiPagg\Entity\ShoppingCart  
     */
    public $ShoppingCart;

    /**
     * Identificador da requisição dentro da plataforma One. (GUID)
     * 
     * Obrigatoriedade: Não obrigatório.
     * 
     * @var string 
     */
    public $RequestKey;

    public function getAmountInCents()
    {
        return $this->AmountInCents;
    }

    public function setAmountInCents($AmountInCents)
    {
        $this->AmountInCents = $AmountInCents;
        return $this;
    }

    public function getAmountInCentsToConsiderPaid()
    {
        return $this->AmountInCentsToConsiderPaid;
    }

    public function setAmountInCentsToConsiderPaid($AmountInCentsToConsiderPaid)
    {
        $this->AmountInCentsToConsiderPaid = $AmountInCentsToConsiderPaid;
        return $this;
    }

    public function getBoletoTransactionCollection()
    {
        return $this->BoletoTransactionCollection;
    }

    public function setBoletoTransactionCollection(\MundiPagg\Entity\BoletoTransactionCollection $BoletoTransactionCollection)
    {
        $this->BoletoTransactionCollection = $BoletoTransactionCollection;
        return $this;
    }

    public function getBuyer()
    {
        return $this->Buyer;
    }

    public function setBuyer(\MundiPagg\Entity\BuyerRequest $Buyer)
    {
        $this->Buyer = $Buyer;
        return $this;
    }

    public function getCreditCardTransactionCollection()
    {
        return $this->CreditCardTransactionCollection;
    }

    public function setCreditCardTransactionCollection(\MundiPagg\Entity\CreditCardTransactionCollection $CreditCardTransactionCollection)
    {
        $this->CreditCardTransactionCollection = $CreditCardTransactionCollection;
        return $this;
    }

    public function getCurrencyIsoEnum()
    {
        return $this->CurrencyIsoEnum;
    }

    public function setCurrencyIsoEnum($CurrencyIsoEnum)
    {
        $this->CurrencyIsoEnum = $CurrencyIsoEnum;
        return $this;
    }

    public function getEmailUpdateToBuyerEnum()
    {
        return $this->EmailUpdateToBuyerEnum;
    }

    public function setEmailUpdateToBuyerEnum($EmailUpdateToBuyerEnum)
    {
        $this->EmailUpdateToBuyerEnum = $EmailUpdateToBuyerEnum;
        return $this;
    }

    public function getMerchantKey()
    {
        return $this->MerchantKey;
    }

    public function setMerchantKey($MerchantKey)
    {
        $this->MerchantKey = $MerchantKey;
        return $this;
    }

    public function getOrderReference()
    {
        return $this->OrderReference;
    }

    public function setOrderReference($OrderReference)
    {
        $this->OrderReference = $OrderReference;
        return $this;
    }

    public function getRetries()
    {
        return $this->Retries;
    }

    public function setRetries($Retries)
    {
        $this->Retries = $Retries;
        return $this;
    }

    public function getShoppingCart()
    {
        return $this->ShoppingCart;
    }

    public function setShoppingCart(\MundiPagg\Entity\ShoppingCart $ShoppingCart)
    {
        $this->ShoppingCart = $ShoppingCart;
        return $this;
    }

    public function getRequestKey()
    {
        return $this->RequestKey;
    }

    public function setRequestKey($RequestKey)
    {
        $this->RequestKey = $RequestKey;
        return $this;
    }


}
