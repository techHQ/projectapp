

 
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

                    @if($project->user_id == Auth::user()->id)

                          <li class="nav-item">
                            <a class="nav-link" href="/projects/{{$project->id}}/edit">Edit</a>
                          </li>

                    @endif 

                      @if($project->user_id == Auth::user()->id)

                            <li class="nav-item">
                            <a 
                                class="nav-link" 
                                href="#"
                                onclick=" 
                                        var result = confirm('Are you sure you wish to delete this project?');
                                        if( result ){
                                              event.preventDefault();
                                              document.getElementById('delete').submit();
                                        }
                                "
                                >Delete</a>
                                <form method ="post" id="delete" action ="{{ route('projects.destroy',[$project->id])}}">
                                      @CSRF
                                    @Method('delete')
                                      
                    
                                </form>
                            </li>
                      @endif

                      <li class="nav-item">
                      <a class="nav-link" href="/projects/create">Add Projects</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="/posts">Members</a>
                      </li>

                      <li class="nav-item">
                      <a class="nav-link" href="/posts">My projects</a>
                      </li>
                      <li class="nav-item">
                     {{-- <span class="comment-count">{{count($project->comments)}}</span> --}}
                      <a class="nav-link" href="#" id="comment-content"><span class="comment-count">{{count($project->comments)}}</span> Comments</a>
                      </li>

                    </ul>

                   
                

                      
                </div>
            
        </nav>