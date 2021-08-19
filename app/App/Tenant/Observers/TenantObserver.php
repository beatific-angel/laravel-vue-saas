<?php
/**
 * Created by PhpStorm.
 * User: CreatyDev
 * Date: 4/28/2018
 * Time: 6:12 PM
 */

namespace CreatyDev\App\Tenant\Observers;

use Illuminate\Database\Eloquent\Model;

class TenantObserver
{
    /**
     * @var Model
     */
    protected $tenant;

    /**
     * TenantObserver constructor.
     * @param Model $tenant
     */
    public function __construct(Model $tenant)
    {
        $this->tenant = $tenant;
    }

    /**
     * Listen to given tenant model creating event.
     *
     * @param Model $model
     */
    public function creating(Model $model)
    {
        $foreignKey = $this->tenant->getForeignKey();

        if (!isset($model->{$foreignKey})) {
            $model->setAttribute($foreignKey, $this->tenant->id);
        }
    }
}