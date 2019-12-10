@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            NACP Membership Application
        @endcomponent
    @endslot

    {{-- Body --}}
    APPLICATION COMPLETED<br>

     Hi, your NACP Membership Application was successfully completed. We will get back to you soon.

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