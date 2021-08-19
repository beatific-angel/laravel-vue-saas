<?php

namespace CreatyDev\Domain\Users\Observers;

use CreatyDev\Domain\Users\Models\Role;
use Illuminate\Support\Str;

class RoleObserver
{
    /**
     * Listen to Role creating event.
     *
     * @param Role $role
     */
    public function creating(Role $role)
    {
        //generate role slug
        $prefix = $role->parent ? $role->parent->name . ' ' : '';
        $role->slug = Str::slug($prefix . $role->name);

        //make children role usable
        $role->usable = $role->parent ? true : false;
    }
}