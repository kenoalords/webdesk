<?php

namespace App\Transformers;

use App\Model\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(User $u)
    {
        return [
            'id'        => $u->id,
            'fullname'  => $u->fullname,
            'location'  => $u->city . ', ' . $u->state,
            'phone'     => $u->phone_number
        ];
    }
}
