

@extends('layouts.app')

@section('content')


<br>

@include('inc.navbarcreate')
<br><br>

<div class="container">
    <div class="row" id="project-lists">
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      
      <form method="post" action="{{route('projects.store')}}">
        @CSRF
    
     <div class="form-group">
        <label for="project-name">Name of project<span class="required">*</span></label>
      <br>
        <input 
              type="text" 
              placeholder="Enter project's name"
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
              class="form-control"
              spell-check="false"
              id="project-name"
              required
              >

     </div>
     <br>
      @if($companies != null)
      <div class="form-group">
        <label for="project-name">Name of company<span class="required">*</span></label>
      <br>
      <select class="form-control" name="company_id">
        @foreach($companies as $company)
          <option value="{{$company->id}}">{{$company->name}}</option>
        @endforeach
      </select>
              
     </div>
     @else
      <input 
              type="hidden" 
              name="company_id" 
              value="{{$company_id}}"
           
              >
    @endif
      <div class="form-group">
      <label for="project-content">Description</label>
            <br>
             <textarea 
                     placeholder="Enter description"
                     name="description"  
                     class="form-control"
                     id="project-content"
                     spellcheck="false"
                     rows=10>
                     
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