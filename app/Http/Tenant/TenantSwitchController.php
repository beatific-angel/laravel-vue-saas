<?php

namespace CreatyDev\Http\Tenant;

use Illuminate\Http\Request;
use CreatyDev\App\Controllers\Controller;
use CreatyDev\Domain\Company\Events\CompanyUserLogin;
use CreatyDev\Domain\Company\Models\Company;

class TenantSwitchController extends Controller
{
    /**
     * Switch tenant.
     *
     * @param Company $company
     * @return \Illuminate\Http\Response
     */
    public function switch(Company $company)
    {
        event(new CompanyUserLogin(
            request()->user(),
            $company
        ));

        return redirect()->route('tenant.dashboard');
    }
}
