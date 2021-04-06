@component('mail::message')
# Bonjour,
Vous avez reçu un message de:

-{{ $data['name']}} <br>
-{{ $data['email']}}

The body of your message.

@component('mail::panel')
Message
-{{ $data['message']}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
