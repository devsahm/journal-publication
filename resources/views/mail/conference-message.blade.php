@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            NACP Conference 2019
        @endcomponent
    @endslot

    {{-- Body --}}
    Hi {{$conference->name }}, <br><br>
 Your conference abstracts/paper has been received.<br><br>
<b>Title:</b> {{$conference->title }}<br><br>
 Your submission will be reviewed and you will receive our response as soon as possible. Please feel free to reply this mail in case of any situation regarding this.

    {{-- Subcopy --}}
    @slot('subcopy')
        @component('mail::subcopy')
           Best Regards
        @endcomponent
    @endslot


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
           NACP Conference 2019. All right reserved
        @endcomponent
    @endslot
@endcomponent