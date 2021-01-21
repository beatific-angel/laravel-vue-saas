<?php

namespace CreatyDev\Http\Account\Controllers\Subscription;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use CreatyDev\App\Controllers\Controller;
use CreatyDev\Domain\Account\Mail\Subscription\SubscriptionSwapped;
use CreatyDev\Domain\Account\Requests\SubscriptionSwapStoreRequest;
use CreatyDev\Domain\Subscriptions\Models\Plan;
use CreatyDev\Domain\Users\Models\User;

class SubscriptionSwapController extends Controller
{
    /**
     * Show swap subscription form.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $plans = Plan::except($request->user()->plan->id)->active()->get();

        return view('account.subscription.swap.index', compact('plans'));
    }

    /**
     * Store new subscription in storage.
     *
     * @param SubscriptionSwapStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubscriptionSwapStoreRequest $request)
    {
        $user = $request->user();

        $plan = Plan::where('gateway_id', $request->plan)->first();

       

        return back()->withSuccess('Your subscription has been changed.');
    }

    /**
     * Check if user is downgrading from a team plan.
     *
     * @param User $user
     * @param Plan $plan
     * @return bool
     */
    public function downgradesFromTeamPlan(User $user, Plan $plan)
    {
        if ($user->plan->isForTeams() && $plan->isNotForTeams()) {
            return true;
        }

        return false;
    }
}
