<?php

namespace CreatyDev\Http\Admin\Controllers\Subscription;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use CreatyDev\App\Controllers\Controller;

class SubscriptionController extends Controller
{
    /**
     * Display all Subscription view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptions =  DB::table('subscriptions')->get();
        return view('admin.subscriptions.index', compact('subscriptions'));
    }
}
