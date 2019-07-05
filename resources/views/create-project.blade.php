@component('mail::message')
# Project Title: {{$project->title}}

## Below is the project description

{{$project->description}}

@component('mail::button', ['url' => 'http://secondapp.ms/projects/' . $project->id . '/details'])
View Project
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
