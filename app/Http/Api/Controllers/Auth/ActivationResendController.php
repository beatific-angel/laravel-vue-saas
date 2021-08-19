<?php

namespace CreatyDev\Http\Api\Controllers\Auth;

use Illuminate\Http\Request;
use CreatyDev\App\Controllers\Controller;
use CreatyDev\Domain\Auth\Events\UserRequestedActivationEmail;
use CreatyDev\Domain\Auth\Requests\ActivateResendRequest;
use CreatyDev\Domain\Users\Models\User;

class ActivationResendController extends Controller
{

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

        return response()->json(null, 204);
    }
}
