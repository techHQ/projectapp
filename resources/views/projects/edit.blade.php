


@extends('layouts.app')

@section('content')


<br>

@include('inc.navbarproject')
<br><br>

<div class="container">
    <div class="row" id="project-lists">
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      
      <form method="post" action="{{route('projects.update', [$project->id])}}">
        @CSRF
        @METHOD('PUT')
    
     <div class="form-group">
        <label for="project-name">Name<span class="required">*</span></label>
      <br>
        <input 
              type="text" 
              value="{{$project->name}}" 
              name="name" 
              class="form-control"
              spell-check="false"
              id="project-name"
              required
              >
     </div>
      <br>
      <div class="form-group">
        <label for="project-name">Number of days<span class="required">*</span></label>
      <br>
        <input 
              type="text" 
              placeholder="Enter number of days "
              name="days" 
              value="{{$project->days}}"
              class="form-control"
              spell-check="false"
              id="project-name"
              required
              >

     </div>
      

      <div class="form-group">
      <label for="project-content">Description</label>
            <br>
             <textarea 
                     name="description"  
                     class="form-control"
                     id="project-content"
                     spellcheck="false"
                     rows=10>
                     {{$project->description}}
            </textarea>
            <br>
            <br>
            <input 
                   type="submit" 
                   value="submit" 
                   class="btn btn-success">
        </div>
      </form>
    </div>
</div>
</div>
@endsection