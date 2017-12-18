@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => 'http://google.com'])
Google.com
@endcomponent

@component('mail::panel', ['url' => ''])
    Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
