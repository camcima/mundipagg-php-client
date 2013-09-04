<?php

namespace MundiPagg\Test;

use MundiPagg\Client;
use MundiPagg\Entity\CreateOrderRequest;
use MundiPagg\Entity\QueryOrderRequest;
use MundiPagg\Entity\CreditCardTransaction;
use MundiPagg\Entity\CreditCardTransactionCollection;
use MundiPagg\Entity\BoletoTransaction;
use MundiPagg\Entity\BoletoTransactionCollection;
use MundiPagg\Entity\Enum\CreditCardBrandEnum;
use MundiPagg\Entity\Enum\CreditCardOperationEnum;
use MundiPagg\Entity\Enum\CurrencyIsoEnum;
use MundiPagg\Entity\Enum\EmailUpdateToBuyerEnum;
use MundiPagg\Entity\ManageOrderRequest;
use MundiPagg\Entity\Enum\ManageOrderOperationEnum;

/**
 * Client Test
 *
 * @author Carlos Cima
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{

    const FIXTURE_MERCHANT_KEY = 'FB76E29D-427F-45B2-AD49-F99715EF46B5';

    /**
     * MundiPagg Client
     * 
     * @var \MundiPagg\Client
     */
    protected $client;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();
        $this->client = new Client(self::FIXTURE_MERCHANT_KEY, Client::WSDL_STAGING_URL);
        $this->client->getSoapClient()->setDebug(true);
        $this->client->getSoapClient()->setDebugLogFilePath(__DIR__ . '/../../../log/debug.log');
    }

    /**
     * testGetSoapClient
     */
    public function testGetSoapClient()
    {
        $this->assertInstanceOf('\Camcima\Soap\Client', $this->client->getSoapClient());
    }

    public function testCallBackBoletoOrder(){
        $transactionRef = "BOL-01-65536";
        $nossoNumero = "765543656";
        $createOrderRequest = new CreateOrderRequest();
        $createOrderRequest
            ->setMerchantKey(self::FIXTURE_MERCHANT_KEY)
            ->setOrderReference('TESTESERVICOPHP')
            ->setAmountInCents(9)
            ->setAmountInCentsToConsiderPaid(0)
            ->setEmailUpdateToBuyerEnum(EmailUpdateToBuyerEnum::NO)
            ->setCurrencyIsoEnum(CurrencyIsoEnum::BRAZILIAN_REAL)
            ->setBoletoTransactionCollection(new BoletoTransactionCollection());
        
        $boletoTransaction = new BoletoTransaction();
        $boletoTransaction
            ->setAmountInCents(1219)
            ->setInstructions("Não receber após o vencimento")
            ->setNossoNumero($nossoNumero)
            ->setDaysToAddInBoletoExpirationDate(1)
            ->setPaymentMethodCode(1)
            ->setTransactionReference($transactionRef);
        
        $createOrderRequest
            ->getBoletoTransactionCollection()
            ->addBoletoTransaction($boletoTransaction);

        $createOrderResult = $this->client->createOrder($createOrderRequest);
        /* @var $createOrderResult \MundiPagg\Entity\CreateOrderResult */
        $this->assertInstanceOf('\MundiPagg\Entity\CreateOrderResult', $createOrderResult);
        $orderKey = $createOrderResult->OrderKey;
        $requestKey = $createOrderResult->RequestKey;
        
        $queryOrderRequest = new QueryOrderRequest();
        $queryOrderRequest
            ->setMerchantKey(self::FIXTURE_MERCHANT_KEY)
            ->setOrderKey($orderKey)
            ->setRequestKey($requestKey);
        
        $queryOrderResult = $this->client->queryOrder($queryOrderRequest);
        /* @var $manageOrderResult \MundiPagg\Entity\QueryOrderResult */
        $this->assertInstanceOf('\MundiPagg\Entity\QueryOrderResult', $queryOrderResult);
        $this->assertInstanceOf('\MundiPagg\Entity\OrderDataCollection', $queryOrderResult->OrderDataCollection);
        $orderData = $queryOrderResult->OrderDataCollection->OrderData;
        $this->assertInstanceOf('\MundiPagg\Entity\OrderData', $orderData);
        $this->assertEquals($orderData->OrderStatusEnum, "Opened");
        $boletoTransactionData = $orderData->BoletoTransactionDataCollection->BoletoTransactionData;
        $this->assertInstanceOf('\MundiPagg\Entity\BoletoTransactionData', $boletoTransactionData);
        $this->assertEquals($boletoTransactionData->NossoNumero, str_pad($nossoNumero, 12, "0", STR_PAD_LEFT));
        $this->assertEquals($boletoTransactionData->TransactionReference, $transactionRef);
        $this->assertEquals($orderData->OrderStatusEnum, "Opened");
        $this->assertEquals($queryOrderResult->RequestKey, $requestKey);
        $this->assertTrue($queryOrderResult->Success);
    }
    
    /**
     * testCreateBoletoOrder
     */
    public function testCreateBoletoOrder(){
        $createOrderRequest = new CreateOrderRequest();
        $createOrderRequest
            ->setMerchantKey(self::FIXTURE_MERCHANT_KEY)
            ->setOrderReference('TESTESERVICOPHP')
            ->setAmountInCents(9)
            ->setAmountInCentsToConsiderPaid(0)
            ->setEmailUpdateToBuyerEnum(EmailUpdateToBuyerEnum::NO)
            ->setCurrencyIsoEnum(CurrencyIsoEnum::BRAZILIAN_REAL)
            ->setBoletoTransactionCollection(new BoletoTransactionCollection());
        
        $boletoTransaction = new BoletoTransaction();
        $boletoTransaction
            ->setAmountInCents(1219)
            ->setInstructions("Não receber após o vencimento")
            ->setNossoNumero("765543656") // Can be dynamic
            ->setDaysToAddInBoletoExpirationDate(1)
            ->setPaymentMethodCode(1)
            ->setTransactionReference("BOL-01-65536"); // Must be dynamic
        
        $createOrderRequest
            ->getBoletoTransactionCollection()
            ->addBoletoTransaction($boletoTransaction);

        $createOrderResult = $this->client->createOrder($createOrderRequest);
        /* @var $createOrderResult \MundiPagg\Entity\CreateOrderResult */
        $this->assertInstanceOf('\MundiPagg\Entity\CreateOrderResult', $createOrderResult);
        $this->assertInstanceOf('\MundiPagg\Entity\BoletoTransactionResultCollection', $createOrderResult->BoletoTransactionResultCollection);
        $this->assertInstanceOf('\MundiPagg\Entity\CreditCardTransactionResultCollection', $createOrderResult->CreditCardTransactionResultCollection);
        $boletoTransactionResultCollection = $createOrderResult->BoletoTransactionResultCollection;
        /* @var $boletoTransactionResultCollection \MundiPagg\Entity\BoletoTransactionResultCollection */
        $boletoTransactionResult = $boletoTransactionResultCollection->BoletoTransactionResult;
        $this->assertInternalType('object', $boletoTransactionResult);
        /* @var $firstTransactionResult \MundiPagg\Entity\BoletoTransactionResult */
        $this->assertInstanceOf('\MundiPagg\Entity\BoletoTransactionResult', $boletoTransactionResult);
        $this->assertEquals('765543656', $boletoTransactionResult->NossoNumero);
        $this->assertTrue($boletoTransactionResult->Success);
    }
    
    /**
     * testCreateOrder
     */
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

        $creditCardTransaction2 = new CreditCardTransaction();
        $creditCardTransaction2
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
            ->addCreditCardTransaction($creditCardTransaction)
            ->addCreditCardTransaction($creditCardTransaction2);


        $createOrderResult = $this->client->createOrder($createOrderRequest);
        /* @var $createOrderResult \MundiPagg\Entity\CreateOrderResult */
        $this->assertInstanceOf('\MundiPagg\Entity\CreateOrderResult', $createOrderResult);
        $this->assertInstanceOf('\MundiPagg\Entity\BoletoTransactionResultCollection', $createOrderResult->BoletoTransactionResultCollection);
        $this->assertInstanceOf('\MundiPagg\Entity\CreditCardTransactionResultCollection', $createOrderResult->CreditCardTransactionResultCollection);
        $creditCardTransactionResultCollection = $createOrderResult->CreditCardTransactionResultCollection;
        /* @var $creditCardTransactionResultCollection \MundiPagg\Entity\CreditCardTransactionResultCollection */
        $creditCardTransactionResult = $creditCardTransactionResultCollection->CreditCardTransactionResult;
        $this->assertInternalType('array', $creditCardTransactionResult);
        $this->assertCount(2, $creditCardTransactionResult);
        $firstTransactionResult = reset($creditCardTransactionResult);
        /* @var $firstTransactionResult \MundiPagg\Entity\CreditCardTransactionResult */
        $this->assertInstanceOf('\MundiPagg\Entity\CreditCardTransactionResult', $firstTransactionResult);
        $this->assertEquals('521270****6781', $firstTransactionResult->CreditCardNumber);
        $this->assertEquals('AuthOnly', $firstTransactionResult->CreditCardOperationEnum);
        $this->assertEquals('AuthorizedPendingCapture', $firstTransactionResult->CreditCardTransactionStatusEnum);
        $this->assertTrue($firstTransactionResult->Success);
    }

    /**
     * testManageOrder
     */
    public function testManageOrder()
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

        $createOrderResult = $this->client->createOrder($createOrderRequest);
        /* @var $createOrderResult \MundiPagg\Entity\CreateOrderResult */
        $this->assertInstanceOf('\MundiPagg\Entity\CreateOrderResult', $createOrderResult);
        $orderKey = $createOrderResult->OrderKey;

        $manageOrderRequest = new ManageOrderRequest();
        $manageOrderRequest->MerchantKey = self::FIXTURE_MERCHANT_KEY;
        $manageOrderRequest->OrderKey = $orderKey;
        $manageOrderRequest->ManageOrderOperationEnum = ManageOrderOperationEnum::CAPTURE;

        $manageOrderResult = $this->client->manageOrder($manageOrderRequest);
        /* @var $manageOrderResult \MundiPagg\Entity\ManageOrderResult */
        $this->assertInstanceOf('\MundiPagg\Entity\ManageOrderResult', $manageOrderResult);
        $this->assertEquals(ManageOrderOperationEnum::CAPTURE, $manageOrderResult->ManageOrderOperationEnum);
        $this->assertEquals($orderKey, $manageOrderResult->OrderKey);
        $this->assertTrue($manageOrderResult->Success);
        $creditCardTransactionResultCollection = $manageOrderResult->CreditCardTransactionResultCollection;
        /* @var $creditCardTransactionResultCollection \MundiPagg\Entity\CreditCardTransactionResultCollection */
        $creditCardTransactionResult = $creditCardTransactionResultCollection->CreditCardTransactionResult;
        /* @var $creditCardTransactionResult \MundiPagg\Entity\CreditCardTransactionResult */
        $this->assertInstanceOf('\MundiPagg\Entity\CreditCardTransactionResult', $creditCardTransactionResult);
        $this->assertEquals('521270****6781', $creditCardTransactionResult->CreditCardNumber);
        $this->assertEquals('AuthOnly', $creditCardTransactionResult->CreditCardOperationEnum);
        $this->assertEquals('Captured', $creditCardTransactionResult->CreditCardTransactionStatusEnum);
        $this->assertTrue($creditCardTransactionResult->Success);
    }
}
