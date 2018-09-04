@component('mail::message')
# Hi {{ $user->name }}

You have been invited!

@component('mail::button', ['url' => 'http://nova.test/home'])
Accept
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
