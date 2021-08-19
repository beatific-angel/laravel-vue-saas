<?php

namespace CreatyDev\Http\Account\Controllers\Subscription;

use Stripe\Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use CreatyDev\Domain\Users\Models\User;
use CreatyDev\App\Controllers\Controller;

class SubscriptionInvoiceController extends Controller
{

    public function invoices()
    {
        try {
            $userId = Auth::id(); 
            $user = User::find($userId);
            
            $invoices = $user->invoices();

            return view('subscriptions.invoice', compact('invoices'));

        } catch (\Exception $ex) {
            return $ex->getMessage();
        }

    }

    public function invoice($invoice_id)
    {
        try {
            $userId = Auth::id(); 

            $user = User::find($userId);

            return $user->downloadInvoice($invoice_id, [
                'vendor'  => env('APP_NAME'),
                'product' => 'Subscription for Saas',
            ]);

        } catch (\Exception $ex) {
            return $ex->getMessage();
        }

    }
}
