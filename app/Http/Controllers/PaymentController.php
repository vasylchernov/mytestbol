<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PaymentService;
use Illuminate\Support\Facades\Notification;
use Illuminate\View\View;

class PaymentController extends Controller
{
    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function showPaymentPage(Request $request): View
    {
//        $request->session()->flush('start', 'start transaction');
        $request->session()->flash('start', 'start transaction');
        return \view('test.pay');
    }

    public function initiatePayment(Request $request)
    {
        // Define payment details
        $amount = 0.55; // Example amount
        $description = 'my test Order #1234'; // Example order description
        $returnUrl = route('payment.success');
        $notifyUrl = route('payment.notify');

        try {
            // Initiate the payment and get the redirect URL
            $redirectUrl = $this->paymentService->purchase($amount, $description, $returnUrl, $notifyUrl);

            // Redirect the user to the payment page
            return redirect($redirectUrl);
        } catch (\Exception $e) {
            return redirect()->back()->with('__my error(initiatePayment)', $e->getMessage());
        }
    }

    public function paymentSuccess(Request $request)
    {
        $transactionId = $request->query('trxid'); // Sisow transaction ID

        try {
            $paymentData = $this->paymentService->completePurchase($transactionId);

            // Handle successful payment (e.g., update order status, send confirmation email)
            $request->session()->flash('success2', 'Your data has been saved successfully!');
            $request->session()->flash('trxid', '$transactionId: ' . $transactionId);
            return redirect()->route('pay')->with('success', 'Payment completed successfully.');
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', $e->getMessage());
        }
    }

    public function paymentNotify(Request $request)
    {
        echo 'paymentNotify';
//        dd();
//        Notification::send();
        // Handle payment notification from Sisow
        // Update order/payment status based on the notification
    }
}
