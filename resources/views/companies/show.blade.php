
@extends('layouts.app')

@section('content')


<br>

@include('inc.navbar')


<div class="jumbotron">
    <h1>{{$company->name}}</h1>
    <p class="lead">{{$company->description}} </p>
    <p><a href="" role="button" class="btn btn-danger">Get in touch</a></p>
</div>

<div class="row" id="project-lists">

@if(count($company->projects)>0)

@foreach($company->projects as $project)
<div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
    <h2>{{$project->name}}</h2>
     <p class="text-danger">{{$project->description}}</p>
     <p><a href="/projects/{{$project->id}}" role="button" class="btn btn-primary">View Project</a></p>
</div>
@endforeach

@else
<h3>No project Listed</h3>

@endif

</div>







@endsection
