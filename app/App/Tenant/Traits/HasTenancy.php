<?php
/**
 * Created by PhpStorm.
 * User: CreatyDev
 * Date: 6/19/2018
 * Time: 5:13 PM
 */

namespace CreatyDev\App\Tenant\Traits;

trait HasTenancy
{
    /**
     * Get user's last accessed company.
     *
     * @return mixed
     */
    public function getLastAccessedCompanyAttribute()
    {
        return $this->companies()->orderByDesc(config('tenancy.owners.last_access_column'))->first();
    }

    /**
     * Get tenants that user belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function companies()
    {
        return $this->belongsToMany(config('tenancy.tenant.model'), config('tenancy.owners.table'));
    }
}