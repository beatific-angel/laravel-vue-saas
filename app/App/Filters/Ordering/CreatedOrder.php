<?php
/**
 * Created by PhpStorm.
 * User: CreatyDev
 * Date: 12/21/2017
 * Time: 10:38 PM
 */

namespace CreatyDev\App\Filters\Ordering;


use CreatyDev\App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class CreatedOrder extends FilterAbstract
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
        return $builder->orderBy('created_at', $this->resolveOrderDirection($value));
    }
}