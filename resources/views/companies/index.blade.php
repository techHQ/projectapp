
@extends('layouts.app')


@section('content')

<div class="card card-deafult">
<div class="card card-header bg-default"><h1>Companies<a href="/companies/create" class="btn btn-primary pull-right" role="button">Create Company</a></h1></div>
<div class="card-body">

@if(count($companies) > 0)
    <ul class="list-group">
        @foreach($companies as $company)
    <li class="list-group-item"><a href="/companies/{{$company->id}}">{{$company->name}}</a></li>
        @endforeach
    </ul>
@else
    <h5>No Company Listed </h5>
@endif 
</div>
</div>

@endsection()