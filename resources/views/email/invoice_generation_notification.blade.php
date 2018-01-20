@component('mail::message')
# Hi {{ $invoice['user']['fullname'] }}

You have a new invoice for {{ $invoice['subscription']['domain_name'] }} on {{ config('app.name') }}, please find below the details;

***

{!! $invoice['description'] !!}

##Total: ₦{{ number_format($invoice['amount']) }}


@component('mail::button', [ 'url' => config('app.url').'/invoice/'.$invoice['id'] ])
Click here to view
@endcomponent

Thanks,<br>
##Billings via {{ config('app.name') }}
@endcomponent
