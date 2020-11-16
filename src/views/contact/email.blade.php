@component('mail::message')
# Introduction
This mail is from {{$name}}.
<br>
Message:
{{$description}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
