@component('mail::message')
Thank you for subscribing to She Thinks Code Newsletter.

To verify your subscription please click the following button.

@component('mail::button', ['url' => url("subscribe/$data->verification_token"), 'color' => "primary"])
Verify
@endcomponent

Thank you,<br>
{{ config('app.name') }} Team
@endcomponent
