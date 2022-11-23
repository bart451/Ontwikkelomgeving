@component('mail::message')
{{--    {{ $nieuwsbrieven->naam }}--}}
    Versturen naar {!! $nieuwsbrief->naam !!}
    {!!$nieuwsbrief->inhoud !!}
    Verzonden door: {!! $nieuwsbrief->afzender!!}
    Afzender email: {!!$nieuwsbrief->email !!}
    Afzender email: {!!$nieuwsbrief->email !!}

@endcomponent
