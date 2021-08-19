<?php
/**
 * Created by PhpStorm.
 * User: CreatyDev
 * Date: 4/28/2018
 * Time: 4:40 PM
 */

namespace CreatyDev\App\ViewComposers;

use Illuminate\View\View;

class UserCompaniesComposer
{
    private $companies;

    /**
     * Share list of roles.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        if (!$this->companies) {
            $this->companies = auth()->check() ? auth()->user()->companies : collect([]);
        }

        $view->with('user_companies', $this->companies);
    }

}