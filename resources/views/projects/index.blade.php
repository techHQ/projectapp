
@extends('layouts.app')


@section('content')

<div class="card card-deafult">
<div class="card card-header bg-default"><h1>Projects<a href="/projects/create" class="btn btn-primary pull-right" role="button">Create Project</a></h1></div>
<div class="card-body">

@if(count($projects) > 0)
    <ul class="list-group">
        @foreach($projects as $project)
    <li class="list-group-item"><a href="/projects/{{$project->id}}">{{$project->name}}</a></li>
        @endforeach
    </ul>
@else
    <h5>No Project Listed </h5>
@endif 
</div>
</div>

@endsection()