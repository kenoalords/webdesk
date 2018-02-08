@component('mail::message')
# Hi {{ ucwords(strtolower($subscriber->fullname)) }}

Thank you for choosing webdesk.ng to run a free audit for your website at {{ $subscriber->website }}.

Your report will be ready within the next 24hrs and emailed to this email address.

Regards,<br>
##{{ config('app.name') }}
@endcomponent
