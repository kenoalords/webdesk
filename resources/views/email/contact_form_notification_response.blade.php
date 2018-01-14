@component('mail::message')
# Dear {{ $fullname }}

Thank you for contacting us.

We are currently looking at your enquiry and our customer care representative will get back to you within the shortest possible time.

Warm regards,<br>
###{{ config('app.name') }} Team
@endcomponent
