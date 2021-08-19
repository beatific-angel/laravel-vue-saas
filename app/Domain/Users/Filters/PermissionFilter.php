<?php
/**
 * Created by PhpStorm.
 * User: CreatyDev
 * Date: 2/18/2018
 * Time: 1:49 PM
 */

namespace CreatyDev\Domain\Users\Filters;


use CreatyDev\App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class PermissionFilter extends FilterAbstract
{

    /**
     * Apply filter.
     *
     * @param Builder $builder
     * @param $value
     *
     * @return mixed
     */
    public function filter(Builder $builder, $value)
    {
        if ($value === null) {
            return $builder;
        }

        return $builder->whereHas('permissions', function (Builder $builder) use ($value) {
            return $builder->where('permission_id', $value);
        });
    }
}