@component('mail::message')
# Hey Admin

- {{$name}}
- {{$email}}

@component('mail::panel')
{{$mess}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
