@component('mail::message')
# This IP {{ $ip }} tried to send you a message but was banned.

Thanks,<br>
##{{ config('app.name') }} Amebo!
@endcomponent
