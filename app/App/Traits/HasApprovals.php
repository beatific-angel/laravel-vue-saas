<?php
/**
 * Created by PhpStorm.
 * User: CreatyDev
 * Date: 1/9/2018
 * Time: 10:09 AM
 */

namespace CreatyDev\App\Traits;


use Illuminate\Database\Eloquent\Builder;

trait HasApprovals
{
    /**
     * Filter approved files.
     *
     * @param Builder $builder
     * @return Builder
     */
    public function scopeApproved(Builder $builder)
    {
        return $builder->where('approved', true);
    }

    /**
     * Filter unapproved files.
     *
     * @param Builder $builder
     * @return Builder
     */
    public function scopeUnapproved(Builder $builder)
    {
        return $builder->where('approved', false);
    }
}