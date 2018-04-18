 
 
 
 
 <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
           
              
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="/companies"> Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/companies/{{$company->id}}/edit">Edit</a>
                      </li>
                      <li class="nav-item">
                      <a 
                           class="nav-link" 
                           href="#"
                           onclick=" 
                                   var result = confirm('Are you sure you wish to delete this company?');
                                   if( result ){
                                        event.preventDefault();
                                        document.getElementById('delete').submit();
                                   }
                           "
                           >Delete</a>
                           <form method ="post" id="delete" action ="{{ route('companies.destroy',[$company->id])}}">
                                @CSRF
                               @Method('delete')
                                
              
                           </form>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="/projects/create/{{$company->id}}">Add Projects</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="/posts">Members</a>
                      </li>

                    </ul>

                   
                

                       
                </div>
            
        </nav>