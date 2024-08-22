<?php

namespace App\Services;

use Omnipay\Omnipay;
use Omnipay\Sisow\Gateway;

class PaymentService
{
    protected Gateway $gateway;

    public function __construct()
    {
        $this->gateway = \Omnipay\Omnipay::create('Sisow');
//        $this->gateway->setMerchantId( env('SISOW_MERCHANT_ID', '0123456') );
//        $this->gateway->setMerchantKey( env('SISOW_MERCHANT_KEY', 'b36d8259346eawdb3c03236b37ad3a1d7a67cec6') );
//        $this->gateway->setShopId( env('SISOW_SHOP_ID', 0) );
//        $this->gateway->setTestMode( env('PAYMENT_TEST_MODE', true) );

//        $this->gateway->initialize([
//            'shopId' => 0,
//            'merchantId' => '2537617008',
//            'merchantKey' => '835a37dd228cb2d0c72e4288bcdd64eac96c3883',
//            'testMode' => true,
//        ]);
    }

    public function purchase($amount, $description, $returnUrl, $notifyUrl)
    {
        try {
            $response = $this->gateway->purchase([
//                'currency' => 'EUR',
//                'issuer' => 99,
//                'transactionId' => uniqid(),
//                'card' => array(
//                    'email' => 'barry@fruitcakestudio.nl',
//                    'firstName' => 'Barry',
//                    'lastName' => 'vd. Heuvel',
//                    'company' => 'Fruitcake Studio',
//                ),
//                'amount' => $amount,
//                'description' => $description,
//                'returnUrl' => $returnUrl,
//                'notifyUrl' => $notifyUrl,
            ])->send();


            if ($response->isRedirect()) {
                return $response->getRedirectUrl();
            } else {
                dd($response);
                throw new \Exception('__my payment error(purchase): ' . $response->getMessage());
            }
        } catch (\Exception $e) {
            dd($e);
            throw new \Exception('__my payment error(purchase): ' . $e->getMessage());
        }
    }

    public function completePurchase($transactionId)
    {
        try {
            $response = $this->gateway->completePurchase([
                'transactionId' => $transactionId,
            ])->send();

            if ($response->isSuccessful()) {
                return redirect()->route('payment.success');
                return $response->getData(); // Return payment data
            } else {
                throw new \Exception('__my payment error(completePurchase): ' . $response->getMessage());
            }
        } catch (\Exception $e) {
            throw new \Exception('__my payment error(completePurchase): ' . $e->getMessage());
        }
    }
}
