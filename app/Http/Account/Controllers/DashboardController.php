<?php

namespace CreatyDev\Http\Account\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use CreatyDev\Domain\Users\Models\User;
use CreatyDev\App\Controllers\Controller;
use CreatyDev\Domain\Ticket\Models\Ticket;

class DashboardController extends Controller
{
    /**
     * Show the user's application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        // $user = User::find(Auth::id());
        // $tickets = DB::table('tickets')->where()->get();
        $Nbtickets = Ticket::where('user_id', Auth::user()->id)->count();
        return view('account.dashboard.index', compact('Nbtickets'));
    }
}
