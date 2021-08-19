<?php

namespace CreatyDev\Http\Subscription\Controllers;

use Illuminate\Http\Request;
use CreatyDev\App\Controllers\Controller;
use CreatyDev\Domain\Subscriptions\Models\Plan;

class PlanTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::active()->forTeams()->get();

        return view('subscriptions.plans.teams.index', compact('plans'));
    }
}
