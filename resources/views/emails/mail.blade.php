@component('mail::message')
# Hey Admin

- {{$mailC['name']}}
- {{$mailC['email']}}

@component('mail::panel')
{{$mailC['mess']}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
