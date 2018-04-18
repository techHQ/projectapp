
@extends('layouts.app')

@section('content')


<br>

@include('inc.navbarproject')


<div class="jumbotron">
     <h1>{{$project->name}}</h1>
    <p class="lead">{{$project->description}} </p>
    <h5><b>Project schedule/Start Date</b></h5>
      
      @if($project->date != null)
        <p>{{$project->days}}days ({{$project->created_at}})</p>
      @else
        <p>No specified number of days.</p>
      @endif

    <p><a href="" role="button" class="btn btn-danger">Get in touch</a></p>
</div>

<div class="row" id="project-lists">

<div class="col-md-12">
 <form method="post" action="{{route('comments.store')}}">
        @CSRF

        <input type="hidden" value="App\project" name="commentable_type">
        <input type="hidden" value="{{$project->id}}" name="commentable_id">

    <div class="form-group">
      <label for="comment-content">Comment</label>
            <br>
             <textarea 
                     placeholder="Enter comment"
                     name="body"  
                     class="form-control"
                     id="comment-content"
                     spellcheck="false"
                     rows=5>
                     
            </textarea>
      </div>
      <div class="form-group">
      <label for="comment-content">Proof of work done ( Url Full Path )</label>
            <br>
             <textarea 
                     placeholder="Enter url or sceenshots"
                     name="url"  
                     class="form-control"
                     id="comment-content"
                     spellcheck="false"
                     rows=5>
                     
            </textarea>
            <br>
            <br>
                  <input 
                   type="submit" 
                   value="submit" 
                   class="btn btn-success">
        </div>
         <br><br>
            {{-- @foreach($project->comments as $comment)
                  <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12" id="comments-tag">
                  <h6> {{$comment->body}} </h6>
                  <p>  {{$comment->url }}</p>
                  <em>From: {{$comment->user->name}}</em>
                  </div>
            @endforeach --}}
           
      
      </form>

</div>

@if(count($project->comments))

      <div style="display:none" class="col-md-12 col-sm-12 col-lg-12 col-xs-12" id="comment">
      <div class="card card-default">
      <div class="card card-heading" id="comment-heading">
            <h5 class="card-title" id="card-heading">
            <span class="glyphicon glyphicon-comment">
            </span>
            Recent comments
            </h5>
      </div>
      <div class="card-body">
            <ul class="media-list">

            @foreach($project->comments as $comment)

            <li class="media">
                  <div class="media-left">
                  <img src="http://placehold.it/60x60" class="img-circle">
                  </div>
                  <div class="media-body">
                  <h4 class="media-heading">
                        {{$comment->user->name}}
                        <br>
                        <small>
                        commented on <a href="#">{{$project->name}}</a>
                        <br>
                        {{$comment->created_at}}
                        <br>
                        </samll>
                  </h4>
                        <h5>{{$comment->body}}  </h5>
                        <p> <a href="{{$comment->url }}" >{{$comment->url }}</a></p>
                  </div>

            </li>
            @endforeach
            </ul>
      </div>
      </div>
      </div>

@endif









 {{-- @if(count($projects)>0)

 @foreach($projects as $project)
<div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
    <h2>{{$project->name}}</h2>
     <p class="text-danger">{{$project->description}}</p>
     <p><a href="/projects/{{$project->id}}" role="button" class="btn btn-primary">View Details</a></p>
</div>
@endforeach 

@else
<h3>No project Listed</h3>

@endif --}}

</div>
@endsection
