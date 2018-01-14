@component('mail::message')
Dear {{ $invoice['user']['fullname'] }},

#Thank you for subscribing for our {{ $invoice['subscription']['package']['name'] }} for {{ $invoice['subscription']['domain_name'] }}.

***

##Please find below your subscription details

{!! $invoice['description'] !!}

##Total: ₦{{ number_format($invoice['amount']) }}

***

Your website design and development for {{ $invoice['subscription']['domain_name'] }} will commence as soon as your payment is verified and completed within a week. 

Please read our [terms and conditions](https://www.google.com) for more information regarding your purchase.

@component('mail::button', ['url' => config('app.url').'/invoice/'.$invoice['id']])
View invoice
@endcomponent

Warm Regards,<br>
##{{ config('app.name') }} Team
@endcomponent
