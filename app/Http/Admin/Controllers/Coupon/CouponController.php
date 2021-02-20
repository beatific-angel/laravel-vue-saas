<?php

namespace CreatyDev\Http\Admin\Controllers\Coupon;

use CreatyDev\App\Controllers\Controller;
use CreatyDev\Domain\Coupon\Models\Coupon;
use Illuminate\Http\Request;

use Stripe;


class CouponController extends Controller
{
    public function __construct(){

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Request $request)
    {
        // $this->authorize('manage coupons', Coupon::class);

        $coupons = Coupon::all();

        return view('admin.coupons.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize('create', Coupon::class);

        return view('admin.coupons.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize('create', Coupon::class);
        

        $coupon = new Coupon([
            "name" => $request->input('name'),
            "percent_off" => $percent_off,
            "duration" => $request->input('duration'),
            "duration_in_months" => $duration_in_months,
            "gateway_id" => $request->input('gateway_id')
        ]);

        $coupon->save();

        return redirect()->back()->with("status", "Your Coupon has been created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \CreatyDev\Domain\Users\Models\Coupon $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $plan)
    {
        $this->authorize('view', $plan);

        return view('admin.coupons.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \CreatyDev\Domain\Users\Models\Coupon $plan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $this->authorize('update', Coupon::class);

        $coupon = Coupon::findOrFail($id);

        return view('admin.coupons.edit', compact('coupon', $coupon));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \CreatyDev\Domain\Users\Models\Coupon $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->authorize('update', Coupon::class);

        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

       
    

        return redirect()->back()->with("status", "Your plan has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \CreatyDev\Domain\Users\Models\Coupon $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', Coupon::class);
        $plan = Coupon::findOrFail($id);

        $stripe_plan = \Stripe\Coupon::retrieve($plan->gateway_id);
        $stripe_plan->delete();

        // Delete the plan on the database
        $plan->delete();
        return redirect()->back()->with("status", "Your plan has been deleted.");
    }
}
