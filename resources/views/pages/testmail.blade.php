@component('mail::message')
    {!! $mailQueue->naam !!}<br>
    Inhoud :<br>{!!$mailQueue->inhoud !!}
    Verzonden door: {!! $mailQueue->afzender!!}<br>
    Afzender email: {!!$mailQueue->email !!}

@endcomponent
