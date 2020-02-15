@component('mail::message')
#New user subscribed.

Dear Admin,

    New user has been subscribed.
    email address is:  {{ $email }} 

Thanks,<br>
{{ config('app.name') }}
@endcomponent
