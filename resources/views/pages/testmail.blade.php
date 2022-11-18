@component('mail::message')
    Versturen naar {!! $mailInfo['naam'] !!}
    {!!$mailInfo['inhoud'] !!}
    Verzonden door: {!! $mailInfo['afzender']!!}
    Afzender email: {!!$mailInfo['email'] !!}


@endcomponent
