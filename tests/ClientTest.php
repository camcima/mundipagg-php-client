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

    public function testPhp()
    {
//Colocar a chave da sua loja aqui
        $url = "https://staging.mundipaggone.com/MundiPaggService.svc?wsdl";

        $key = self::FIXTURE_MERCHANT_KEY;

        $soap_opt['encoding'] = 'UTF-8';
        $soap_opt['trace'] = true;
        $soap_opt['exceptions'] = true;

        $soap_client = new \SoapClient($url, $soap_opt);

//Informations about the order
        $_request["createOrderRequest"]["AmountInCents"] = "9"; // Order amount in cents
        $_request["createOrderRequest"]["AmountInCentsToConsiderPaid"] = "0"; // Order amount in cents to consider paid
//Credit card transaction data
        $_request["createOrderRequest"]["CreditCardTransactionCollection"]["CreditCardTransaction"][0]["AmountInCents"] = "100"; // Transaction amount
        $_request["createOrderRequest"]["CreditCardTransactionCollection"]["CreditCardTransaction"][0]["CreditCardBrandEnum"] = "Mastercard";
        $_request["createOrderRequest"]["CreditCardTransactionCollection"]["CreditCardTransaction"][0]["CreditCardNumber"] = "5212701315496781";
        $_request["createOrderRequest"]["CreditCardTransactionCollection"]["CreditCardTransaction"][0]["CreditCardOperationEnum"] = "AuthOnly";/** Transaction type: AuthOnly | AuthAndCapture | AuthAndCaptureWithDelay  */
        $_request["createOrderRequest"]["CreditCardTransactionCollection"]["CreditCardTransaction"][0]["ExpMonth"] = "09";
        $_request["createOrderRequest"]["CreditCardTransactionCollection"]["CreditCardTransaction"][0]["ExpYear"] = "14";
        $_request["createOrderRequest"]["CreditCardTransactionCollection"]["CreditCardTransaction"][0]["HolderName"] = "Carlos Teste";
        $_request["createOrderRequest"]["CreditCardTransactionCollection"]["CreditCardTransaction"][0]["InstallmentCount"] = "0";
        $_request["createOrderRequest"]["CreditCardTransactionCollection"]["CreditCardTransaction"][0]["PaymentMethodCode"] = "1"; // Payment method code 
        $_request["createOrderRequest"]["CreditCardTransactionCollection"]["CreditCardTransaction"][0]["SecurityCode"] = "081"; // Credit card security code
// PaymentMethodCode padrão para executar no simulador da MundiPagg
        $_request["createOrderRequest"]["CurrencyIsoEnum"] = "BRL"; //Order currency
        $_request["createOrderRequest"]["EmailUpdateToBuyerEnum"] = "No"; // Send notification email to the buyer: Yes | No | YesIfAuthorized | YesIfNotAuthorized
        $_request["createOrderRequest"]["MerchantKey"] = $key;
        $_request["createOrderRequest"]["OrderReference"] = "TESTESERVICOPHP"; // Identificação do pedido na loja
        var_dump($_request);
        return;
        //Realiza a comunicação com o WebService
        try {
            //Envia os dados para o serviço da MundiPagg
            $_response = $this->client->getSoapCliente()->CreateOrder($_request);

            //Verifica se ocorreu algum erro na solicitação
            if ($_response->CreateOrderResult->ErrorReport != null) {
                //Caso tenha ocorrido algum erro exibo na tela o erro que ocorreu
                $_errorItemCollection = $_response->CreateOrderResult->ErrorReport->ErrorItemCollection;
                foreach ($_errorItemCollection as $errorItem) {
                    echo $errorItem->Description;
                }
                exit;
            }

            if ($_response->CreateOrderResult->Success == true) {
                $resultado = "Pedido realizado com sucesso";
            } else {
                $resultado = "Pedido não realizado";
            }
            //Exibe o  resultado do pedido que foi solicitado
            echo UTF8_Encode($resultado);

            //Obtenho a coleção de transações realizadas
            $creditCardTransactionResultCollection = $_response->CreateOrderResult->CreditCardTransactionResultCollection;
            // Exibe o resultado das transações
            foreach ($creditCardTransactionResultCollection as $creditCardTransactionResult) {
                $resultado = "</br>Transaction Key : " . $creditCardTransactionResult->TransactionKey;
                $resultado = $resultado . "</br>Status da transação : " . $creditCardTransactionResult->CreditCardTransactionStatusEnum;
                $resultado = $resultado . "</br>Valor autorizado : " . $creditCardTransactionResult->AuthorizedAmountInCents;
                $resultado = $resultado . "</br>Numero Cartão : " . $creditCardTransactionResult->CreditCardNumber;
                echo UTF8_Encode("</br>" . $resultado);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            //exit;
        }
    }

    public function testGetSoapClient()
    {
        $this->assertInstanceOf('\SoapClient', $this->client->getSoapClient());
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
