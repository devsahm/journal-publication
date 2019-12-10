@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            NACP Paper Submission Accepted
        @endcomponent
    @endslot

    {{-- Body --}}
    Hi {{ $conference->name }},<br>

    Congratulations, your paper/article submitted for NACP Conference 2019 has been reviewed and accepted. Do reply this mail for any question.

    

    

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
