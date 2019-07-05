@component('mail::message')
# Project Title: {{$project->title}}

##Below are the details of the deleted project
{{$project->description}}

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
