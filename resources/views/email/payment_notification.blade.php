@component('mail::message')
Dear {{ $invoice['user']['fullname'] }}

Thank you for choosing {{ config('app.name') }}. Here's a summary of your order

##Payment ID: {{ $id }}
##Payment Reference: {{ $ref }}
##Amount: N{{ number_format($amount) }}

@component('mail::panel')
##Description

{!! $invoice['description'] !!}

Domain: {{ $invoice['subscription']['domain_name'] }}
@endcomponent

Warm Regards,<br>
##{{ config('app.name') }}
@endcomponent
