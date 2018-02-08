@component('mail::message')
# Holla,

You have a new audit request from {{ $subscriber->fullname }}.

## Website: {{ $subscriber->website }}
## Email: {{ $subscriber->email }}
## Fullname: {{ $subscriber->fullname }}
## Location: {{ $subscriber->city }} {{ $subscriber->state }}, {{ $subscriber->country }}.

@component('mail::button', ['url' => $subscriber->website])
Visit Website
@endcomponent

Thanks,<br>
{{ config('app.name') }} Audit Team
@endcomponent
