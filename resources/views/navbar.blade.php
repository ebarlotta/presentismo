<nav class="navbar navbar-expand-lg navbar-light db-lighit" style="background-color: #c8eea0;">
   <div class="container-fluid">
       <!-- -fluid -->
       <a class="navbar-brand" href="#"><img src="{{ asset('logo/logoPresentismoMedio.png') }}" width="150px"
               href="#"></a>

       <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
           data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
           aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                   <a class="nav-link active" aria-current="page" href="#">Inicio</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link active" href="#">Nuestra Tienda</a>
               </li>
               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                       Mas Opociones
                   </a>
                   <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                       <li><a class="dropdown-item" href="#">Opcion 1</a></li>
                       <li><a class="dropdown-item" href="#">Opcion 2</a></li>
                       <li><a class="dropdown-item" href="#">Opcion 3</a></li>
                       <li><a class="dropdown-item" href="#">Opcion 4</a></li>
                       <li>
                           <hr class="dropdown-divider">
                       </li>
                       <li><a class="dropdown-item" href="#">Otras</a></li>
                   </ul>
               </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('videos')}}">Videos</a>
                </li>
               <li class="nav-item">
                   <a class="nav-link active" href="{{ route('quienessomos')}}">Quines Somos</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link active" href="#">Contacto</a>
               </li>
               @if (Route::has('login'))
                   <li class="nav-item">
                       {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                           @auth
                               <a href="{{ url('/socios') }}" class="nav-link active">Dashboard</a>
                           @else
                               <a href="{{ route('login') }}" class="nav-link active">Ingresar</a>

                               {{-- @if (Route::has('register'))
                                   <a href="{{ route('register') }}" class="nav-link active">Register</a>
                               @endif --}}
                           @endauth
                       {{-- </div> --}}
                       {{-- <a class="nav-link active" href="login.html">Login</a> --}}
                   </li>
               @endif
               {{-- <a class="nav-link disabled">Disabled</a>
               </li> --}}
           </ul>


           <form class="d-flex">
               <input class="form-control me-2" type="search" placeholder="Ingrese texto" aria-label="Search">
               <button class="btn btn-outline-success" type="submit">Buscar</button>
           </form>
       </div>
   </div>
</nav>