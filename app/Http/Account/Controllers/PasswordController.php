<?php

namespace CreatyDev\Http\Account\Controllers;

use CreatyDev\App\Controllers\Controller;
use CreatyDev\Domain\Account\Mail\PasswordUpdated;
use CreatyDev\Domain\Account\Requests\PasswordStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PasswordController extends Controller
{
    /**
     * Show the change password view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.password.index');
    }

    /**
     * Store user's new password in storage.
     *
     * @param PasswordStoreRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PasswordStoreRequest $request)
    {
        // update user password
       
    }
}
