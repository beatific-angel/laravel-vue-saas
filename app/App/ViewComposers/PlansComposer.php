<?php
/**
 * Created by PhpStorm.
 * User: CreatyDev
 * Date: 3/2/2018
 * Time: 11:51 AM
 */

namespace CreatyDev\App\ViewComposers;

use Illuminate\View\View;
use CreatyDev\Domain\Subscriptions\Models\Plan;

class PlansComposer
{
    /**
     * Implements plan collection.
     *
     * @var $plans
     */
    private $plans;

    /**
     * Bind plans to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        if(!$this->plans) {
            $this->plans = Plan::active()->get();
        }

        $view->with('plans', $this->plans);
    }
}