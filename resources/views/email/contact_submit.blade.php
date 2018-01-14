@component('mail::message')
#New contact enquiry

Domain: {{ $domain }}

Department: {{ $department }}

Subject: {{ $title }}

***

@component('mail::panel')

{!! nl2br($message) !!}

@endcomponent

***

@endcomponent

