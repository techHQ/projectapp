


@extends('layouts.app')

@section('content')


<br>

@include('inc.navbaredit')
<br><br>

<div class="container">
    <div class="row" id="project-lists">
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      
      <form method="post" action="{{route('companies.update', [$company->id])}}">
        @CSRF
        @METHOD('PUT')
    
     <div class="form-group">
        <label for="company-name">Name<span class="required">*</span></label>
      <br>
        <input 
              type="text" 
              value="{{$company->name}}" 
              name="name" 
              class="form-control"
              spell-check="false"
              id="company-name"
              required
              >
     </div>
      <br>
      

      <div class="form-group">
      <label for="company-content">Description</label>
            <br>
             <textarea 
                     name="description"  
                     class="form-control"
                     id="company-content"
                     spellcheck="false"
                     rows=10>
                     {{$company->description}}
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