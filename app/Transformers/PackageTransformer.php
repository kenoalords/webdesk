<?php

namespace App\Transformers;

use App\Model\Package;
use League\Fractal\TransformerAbstract;

class PackageTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Package $p)
    {
        return [
            'id'    => $p->id,
            'name'  => $p->name,
            'features'      => $p->features,
            'monthly_cost'  => (int)$p->monthly_cost,
        ];
    }
}
