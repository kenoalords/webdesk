@component('mail::message')
# Hi {{ ucwords(strtolower($user->fullname)) }}

@if($sub['progress'] == 25)
Congratulations, we are glad to inform you that your website, {{ $sub['domain_name'] }}, has kicked off at a very good pace.

Kindly check the status below.
@elseif($sub['progress'] == 50)

##Half way there!

We are glad to inform you that your website, {{ $sub['domain_name'] }} is half way complete.

Kindly check the status below.
@elseif($sub['progress'] == 75)

##Almost there!

We are glad to inform you that your website, {{ $sub['domain_name'] }} is almost complete.

Kindly check the status below.

@else

##Whew!!!

Your website is now complete! Kindly review it at {{ $sub['domain_name'] }}. 

We hope you like it as much as we enjoyed working on it.

Any additional notifications will appear below, kindly review if any.

@endif

@component('mail::panel')
{{$sub['progress_description']}}
@endcomponent

Regards,<br>
##{{ config('app.name') }} Team
@endcomponent
