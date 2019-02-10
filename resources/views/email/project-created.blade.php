@component('mail::message')
# Project {{ $project->title }} created

{{$project->description}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
