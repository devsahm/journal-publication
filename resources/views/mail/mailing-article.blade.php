@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            NACP Article Submission
        @endcomponent
    @endslot

    {{-- Body --}}
    Hi {{ $name }},

    {{ $subject }}

    {{ $message }}

    {{-- Subcopy --}}
    @slot('subcopy')
        @component('mail::subcopy')
           Best Regards
        @endcomponent
    @endslot


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
           NACP.ORG.NG. All right reserved
        @endcomponent
    @endslot
@endcomponent
