<?php

namespace MundiPagg\Test;

use MundiPagg\Client;
use MundiPagg\Entity\CreateOrderRequest;
use MundiPagg\Entity\CreditCardTransaction;
use MundiPagg\Entity\CreditCardTransactionCollection;
use MundiPagg\Entity\Enum\CreditCardBrandEnum;
use MundiPagg\Entity\Enum\CreditCardOperationEnum;
use MundiPagg\Entity\Enum\CurrencyIsoEnum;
use MundiPagg\Entity\Enum\EmailUpdateToBuyerEnum;

/**
 * Client Test
 *
 * @author Carlos Cima
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    const FIXTURE_MERCHANT_KEY = '2233CB49-1BD4-421A-B988-FB939513C562';

    /**
     * MundiPagg Client
     * 
     * @var \MundiPagg\Client
     */
    protected $client;

    protected function setUp()
    {
        parent::setUp();
        $this->client = new Client(self::FIXTURE_MERCHANT_KEY, Client::WSDL_STAGING_URL);
    }

    public function testGetSoapClient()
    {
        $this->assertInstanceOf('\Camcima\Soap\Client', $this->client->getSoapClient());
    }

    public function testCreateOrder()
    {
        $createOrderRequest = new CreateOrderRequest();
        $createOrderRequest
            ->setMerchantKey(self::FIXTURE_MERCHANT_KEY)
            ->setOrderReference('TESTESERVICOPHP')
            ->setAmountInCents(9)
            ->setAmountInCentsToConsiderPaid(0)
            ->setEmailUpdateToBuyerEnum(EmailUpdateToBuyerEnum::NO)
            ->setCurrencyIsoEnum(CurrencyIsoEnum::BRAZILIAN_REAL)
            ->setCreditCardTransactionCollection(new CreditCardTransactionCollection());

        $creditCardTransaction = new CreditCardTransaction();
        $creditCardTransaction
            ->setAmountInCents(100)
            ->setCreditCardNumber('5212701315496781')
            ->setInstallmentCount(0)
            ->setHolderName('Carlos Teste')
            ->setSecurityCode('081')
            ->setExpMonth('09')
            ->setExpYear('14')
            ->setCreditCardBrandEnum(CreditCardBrandEnum::MASTERCARD)
            ->setPaymentMethodCode(1)
            ->setCreditCardOperationEnum(CreditCardOperationEnum::AUTHORIZE_ONLY);

        $createOrderRequest
            ->getCreditCardTransactionCollection()
            ->addCreditCardTransaction($creditCardTransaction);


        $return = $this->client->createOrder($createOrderRequest);
        var_dump($return);
    }
}
