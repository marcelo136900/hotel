<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hotel Las Americas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">        

        <!--llamando a bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">        

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            } 
        </style>        
    </head>
    <body class="antialiased">
      <!--@if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
              @auth
                  <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
              @else
                  <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                  @endif
              @endif
          </div>
      @endif
        -->

      <header class="p-3 bg-dark text-white">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="/">HOTEL LAS AMERICAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Disabled</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>              
              <div class="text-end">
                @guest
                  <button type="button" class="btn btn-outline-light me-2" onclick="window.location='{{ route('login') }}'">Login</button>
                  @if (Route::has('register'))
                    <button type="button" class="btn btn-warning" onclick="window.location='{{ route('register') }}'">Sign-up</button>                    
                  @endif
                @else
                  <button class="btn btn-primary" onclick="window.location='{{ url('/home') }}'">Home</button>
                @endguest                
              </div>
            </div>
          </div>
        </nav>

      </header>

      <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column p-3 bg-dark text-white my-0 d-flex h-100 text-center text-white bg-dark">
      
        <main class="px-3">
          <div class="card-body">            
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 9"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                  <img src="{{asset('img/portada-1.jpg')}}" class="d-block w-100" alt="...">                
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                  <img src="{{asset('img/portada-2.jpg')}}" class="d-block w-100" alt="...">                
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                  <img src="{{asset('img/portada-3.jpg')}}" class="d-block w-100" alt="...">                  
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                  <img src="{{asset('img/portada-4.jpg')}}" class="d-block w-100" alt="...">                
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                  <img src="{{asset('img/portada-5.jpg')}}" class="d-block w-100" alt="...">                
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                  <img src="{{asset('img/portada-6.jpg')}}" class="d-block w-100" alt="...">                
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                  <img src="{{asset('img/portada-7.jpg')}}" class="d-block w-100" alt="...">                
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                  <img src="{{asset('img/portada-8.jpg')}}" class="d-block w-100" alt="...">                
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                  <img src="{{asset('img/portada-9.jpg')}}" class="d-block w-100" alt="...">                
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
                
          <!--presentacion de servicios-->
          <div class="container marketing">                    
            <div class="row">

              <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#777"/>
                  <image href="{{asset('img/cocina.jpg')}}" whidth="100%" height="100%" />
                </svg>        
                <h2>Restaurantes de carnes en su maxima expresion</h2>
                <p>"Creo que el papel de un chef no es solo cocinar, sino crear antojos.", Chef Jean-Georges Vongerichten – Disfrute de cada rico detalle. El galardonado chef y restaurador de cuatro estrellas Jean-Georges Vongerichten le invita a experimentar la comida en un asador en su máxima expresión.</p>                
              </div><!-- /.col-lg-4 -->

              <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#777"/>
                  <image href="{{asset('img/jardin.jpg')}}" whidth="100%" height="100%" />
                </svg>        
                <h2>Cene en el corazon del Conservatorio</h2>
                <p>Este concepto de comida nunca antes hecho presenta tentadoras creaciones del talentoso equipo culinario de Bellagio y se sirve en la serena belleza del Conservatorio de Bellagio. Cada experiencia está inspirada artísticamente en cada estación del año y tiene capacidad para un máximo de cuatro personas.</p>                
              </div><!-- /.col-lg-4 -->

              <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#777"/>
                  <image href="{{asset('img/piscina.jpg')}}" whidth="100%" height="100%" />
                </svg>        
                <h2>Piscinas de lujo</h2>
                <p>Disfrute del atractivo romántico de una experiencia al aire libre junto a la piscina con infusión mediterránea. Con cinco configuraciones distintivas del patio de la piscina, venga a darse un relajante chapuzón en refrescantes aguas azules.</p>                
              </div><!-- /.col-lg-4 -->

            </div><!-- /.row -->
                
            <!--presentacion de dormitorios-->
        
            <hr class="featurette-divider">
        
            <div class="row featurette">
              <div class="col-md-7">
                <h1 class="featurette-heading"><b>Habitaciones y Suites de Hotel</b></h1>
                <h2 class="featurette-heading">Habitaciones Premier</h2>
                <p class="lead">Una experiencia es una solución holística y revolucionaria que tiene como objetivo optimizar su bienestar físico y emocional al viajar.</p>
              </div>
              <div class="col-md-5">
                <img src="{{asset('img/habitacionPremier.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">        
              </div>
            </div>
        
            <hr class="featurette-divider">
        
            <div class="row featurette">
              <div class="col-md-7">                
                <h2 class="featurette-heading">Suite Presidencial</h2>
                <p class="lead">Las grandes ventanas de nuestras suites ofrecen vistas increíbles. Estas amplias suites están diseñadas en forma de arco con un plano de planta moderno y abierto. Una sala de estar de estilo residencial es perfecta para el entretenimiento, y los baños para parejas ofrecen la opción de una ducha de vapor en uno y una bañera de hidromasaje en el otro. Personalice su estadía con iluminación ambiental, controles de clima individuales y luces de lectura, además de controles automáticos de cortina y transparencia.</p>
              </div>
              <div class="col-md-5">
                <img src="{{asset('img/suitePresidencial.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">        
              </div>
            </div>
        
            <hr class="featurette-divider">
        
            <div class="row featurette">
              <div class="col-md-7">                
                <h2 class="featurette-heading">Suite Ejecutivo</h2>
                <p class="lead">Nuestras suites Grand Lakeview de dos dormitorios exudan detalles opulentos y ofrecen vistas espectaculares de las icónicas fuentes de Bellagio y el lago. Escápese a sus dos habitaciones principales con camas king, cada una con su propio baño; uno con ducha a ras de suelo y baño de vapor, el otro con bañera de hidromasaje. Personalice su estadía con iluminación ambiental, controles de clima individuales y luces de lectura, además de controles automáticos de cortina y transparencia.</p>
              </div>
              <div class="col-md-5">
                <img src="{{asset('img/suitEjecutivo.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">        
              </div>
            </div>
        
            <hr class="featurette-divider">
        
            <!-- /END THE FEATURETTES -->
        
          </div><!-- /.container -->
        </main>
      
        <footer class="mt-auto text-white-50">
          <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
        </footer>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
    <script></script>
</html>
