<?php

namespace CreatyDev\Http\Home\Controllers;

use Illuminate\Http\Request;
use CreatyDev\App\Controllers\Controller;
use Sarfraznawaz2005\VisitLog\Facades\VisitLog;
use CreatyDev\Domain\Subscriptions\Models\Plan;

class HomeController extends Controller
{
    /**
     * Show the application home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Log the visitor
        VisitLog::save();
        // Get Plans to show on the landing page
        $plans =  Plan::take('3')->get();
        return view('home.index', compact('plans'));
    }
}
