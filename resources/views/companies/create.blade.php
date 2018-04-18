

@extends('layouts.app')

@section('content')


<br>

@include('inc.navbarcreate')
<br><br>

<div class="container">
    <div class="row" id="project-lists">
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      
      <form method="post" action="{{route('companies.store')}}">
        @CSRF
    
     <div class="form-group">
        <label for="company-name">Name<span class="required">*</span></label>
      <br>
        <input 
              type="text" 
              placeholder="Enter Company's name"
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
                     placeholder="Enter description"
                     name="description"  
                     class="form-control"
                     id="company-content"
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