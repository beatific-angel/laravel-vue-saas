<?php

namespace CreatyDev\Http\Auth\Controllers;

use CreatyDev\App\Controllers\Controller;
use CreatyDev\Domain\Auth\Events\UserRequestedActivationEmail;
use CreatyDev\Domain\Auth\Requests\ActivateResendRequest;
use CreatyDev\Domain\Users\Models\User;
use Illuminate\Http\Request;

class ActivationResendController extends Controller
{
    /**
     * Show the activation resend form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.activation.resend.index');
    }

    /**
     * Resend activation link.
     *
     * @param ActivateResendRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActivateResendRequest $request)
    {
        //find user
        $user = User::where('email', $request->email)->first();

        //send activation email
        event(new UserRequestedActivationEmail($user));

        return redirect()->route('login')->withSuccess('An activation email has been sent.');
    }
}
