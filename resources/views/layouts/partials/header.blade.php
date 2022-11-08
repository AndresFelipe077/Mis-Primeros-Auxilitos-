{{-- header --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <nav class="navbar navbar-default rounded bg-info w-100 p-3 fixed-top vh-md-100 animate__animated animate__backInDown">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home.index')}}"><img src="{{asset('img/imgs/logo.png')}}" alt="" width="65px" height="50px"></a>
          <form class="d-flex position-absolute" style="top:0;
          right:0;">
            {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> --}}
            
            <a class="rounded-circle" href="{{route('home.create')}}" style="display: flex;
                                                                            align-items: center;" > 
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-plus-circle-fill text-light" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg>
            </a>
            <button class="btn success rounded-circle"><img src="{{asset('img/profile/profile.png')}}"></button>
          </form>
        </div>
    </nav>
