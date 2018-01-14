@component('mail::message')
# Hi {{ $fullname }}

You recently changed your password on {{ config('app.name') }}.

If you did not authorize this change, please contact support immediately otherwise, no further action is required from you.

##{{ config('app.name') }}
@endcomponent
