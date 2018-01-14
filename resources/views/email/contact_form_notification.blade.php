@component('mail::message')
# New contact form enquiry form {{ $fullname }}

## Email: {{ $email }}
## Fullname: {{ $fullname }}
## Phone: {{ $phone }}
## Subject: {{ $title }}

***

{{ $message }}.

@endcomponent
