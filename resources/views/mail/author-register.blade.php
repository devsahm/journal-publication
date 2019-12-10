
@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            NACP Author Registration
        @endcomponent
    @endslot

    {{-- Body --}}
    Hi {{ $writer->name }},<br>

   You just registered on NACP.ORG.NG, the official website for the Nigerian Association of Clinical Psychologists(NACP) as an author. Do login with the registration details you provided and upload your article for review. <br>

   We would also like you to update your profile with us. Click on the button below to update your profile
@component('mail::button', ['url' => url('/writer/profile')])
Update Profile
@endcomponent
    

    {{-- Subcopy --}}
    @slot('subcopy')
        @component('mail::subcopy')
           Best Regards, NACP Editorial Team
        @endcomponent
    @endslot


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
           NACP.ORG.NG. All right reserved
        @endcomponent
    @endslot
@endcomponent