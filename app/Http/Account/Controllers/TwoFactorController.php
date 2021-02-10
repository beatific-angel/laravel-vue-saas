<?php

namespace CreatyDev\Http\Account\Controllers;

use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Countries;
use CreatyDev\App\Controllers\Controller;
use CreatyDev\App\TwoFactor\TwoFactor;
use CreatyDev\Domain\Account\Requests\TwoFactor\TwoFactorStoreRequest;
use CreatyDev\Domain\Account\Requests\TwoFactor\TwoFactorVerifyRequest;

class TwoFactorController extends Controller
{
    /**
     * Show the two factor auth view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.twofactor.index');
    }

    /**
     * Store resource in storage.
     *
     * @param TwoFactorStoreRequest $request
     * @param TwoFactor $twoFactor
     * @return \Illuminate\Http\Response
     */
    public function store(TwoFactorStoreRequest $request, TwoFactor $twoFactor)
    {
        
    }

    /**
     * Verify phone number.
     *
     * @param TwoFactorVerifyRequest $request
     * @return \Illuminate\Http\Response
     */
    public function verify(TwoFactorVerifyRequest $request)
    {
        $request->user()->twoFactor()->update([
            'verified' => true
        ]);

        return back()->withSuccess('Your phone number has been verified.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request $request
     * @param TwoFactor $twoFactor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, TwoFactor $twoFactor)
    {
        
        return back();
    }
}
