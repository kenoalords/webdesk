<?php

namespace App\Transformers;

use App\Model\Invoice;
use App\Model\Subscription;
use App\Model\User;
use App\Transformers\SubscriptionTransformer;
use App\Transformers\UserTransformer;
use League\Fractal\TransformerAbstract;

class InvoiceTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */

    protected $defaultIncludes = ['subscription', 'user'];

    public function transform(Invoice $i)
    {
        return [
            'id'        => $i->id,
            'uid'       => $i->uid,
            'amount'    => $i->amount,
            'is_paid'   => $i->is_paid,
            'description'   => $i->description,
            'user_id'   => $i->user_id,
            'date'      => $i->created_at->toFormattedDateString()
        ];
    }

    public function includeSubscription(Invoice $i)
    {
        $p = Subscription::find($i->subscription_id);
        return $this->item($p, new SubscriptionTransformer);
    }

    public function includeUser(Invoice $i)
    {
        $p = User::find($i->user_id);
        return $this->item($p, new UserTransformer);
    }
}
