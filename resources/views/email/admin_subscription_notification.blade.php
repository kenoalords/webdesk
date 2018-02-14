@component('mail::message')
# New subscription notification.

Domain: {{ $subscription->domain_name }}

Package: {{ ($subscription->package_id == 1) ? 'Basic Package' : 'Business Package' }}

Renew Interval: {{ $subscription->renew_interval }} Month(s)
***
Name: {{ $subscription->user->fullname }}

Email: {{ $subscription->user->email }}

State: {{ $subscription->user->state }}

Phone Number: {{ $subscription->user->phone_number }}

##{{ config('app.name') }}
@endcomponent
