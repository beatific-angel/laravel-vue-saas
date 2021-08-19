<?php
/**
 * Created by PhpStorm.
 * User: CreatyDev
 * Date: 2/17/2018
 * Time: 12:44 PM
 */

namespace CreatyDev\App\ViewComposers;

use CreatyDev\Domain\Users\Filters\UserFilters;
use Illuminate\View\View;

class UserFiltersComposer
{
    public function compose(View $view)
    {
        return $view->with([
            'users_mappings' => UserFilters::mappings(),
        ]);
    }
}