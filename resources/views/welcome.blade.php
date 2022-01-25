 <!DOCTYPE html>
 <html lang="en">

 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
         integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
     <link rel="icon" href="{{ asset('assets/img/ bal.png') }}" type="image/x-icon">

     <title>SIAPP KEC PARINGIN</title>
     <!-- Start WOWSlider.com HEAD section -->
     <link rel="stylesheet" type="text/css" href="engine1/style.css" />
     <script type="text/javascript" src="engine1/jquery.js"></script>
     <!-- End WOWSlider.com HEAD section -->
 </head>
 <header>
     <!-- Start WOWSlider.com HEAD section -->
     <link rel="stylesheet" type="text/css" href="engine1/style.css" />
     <script type="text/javascript" src="engine1/jquery.js"></script>
     <!-- End WOWSlider.com HEAD section -->

     <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
         <div class="container-fluid">

             <a class="navbar-brand" href=""><img src="{{ asset('assets/img/ bal.png') }}" width="30px" alt=""> Aset
                 Balangan</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                 aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarCollapse">
                 <ul class="navbar-nav me-auto mb-2 mb-md-0">
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="#">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">Profil</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">Galeri</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">Article</a>
                     </li>|

                     @if (Route::has('login'))
                         <li>
                             @auth
                                 <a class="nav-link" href="{{ url('/home') }}">Home</a>

                             @else
                             </li>
                             <li>
                                 <a class="nav-link" href="{{ route('login') }}">Login</a>
                             </li>
                             @if (Route::has('register'))
                                 <li>
                                     <a class="nav-link" href="{{ route('register') }}">Register</a>
                             @endif
                         @endauth
                         </li>
                     @endif
                 </ul>
                 <form class="d-flex">
                     <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                     <button class="btn btn-outline-success" type="submit">Search</button>
                 </form>
             </div>
         </div>
     </nav>

     <body>

         <style>
             .carousel-item {
                 height: 32rem;
                 background: #777;
             }

             /* .container {
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    padding-bottom: 50px;
                  } */

         </style>
         <main>
             <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                 <div class="carousel-indicators">
                     <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                         aria-current="true" aria-label="Slide 1"></button>
                     <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                         aria-label="Slide 2"></button>
                     <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                         aria-label="Slide 3"></button>
                 </div>
                 <div class="carousel-inner">
                     <div class="carousel-item active">
                         <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                             aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                             <rect width="100%" height="100%" fill="#777" />
                         </svg>

                         <div class="container">
                             <div class="carousel-caption text-start">
                                 <h1>Example headline.</h1>
                                 <p>Some representative placeholder content for the first slide of the carousel.</p>
                                 <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                             </div>
                         </div>
                     </div>
                     <div class="carousel-item">
                         <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                             aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                             <rect width="100%" height="100%" fill="#777" />
                         </svg>

                         <div class="container">
                             <div class="carousel-caption">
                                 <h1>Another example headline.</h1>
                                 <p>Some representative placeholder content for the second slide of the carousel.</p>
                                 <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                             </div>
                         </div>
                     </div>
                     <div class="carousel-item">
                         <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                             aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                             <rect width="100%" height="100%" fill="#777" />
                         </svg>

                         <div class="container">
                             <div class="carousel-caption text-end">
                                 <h1>One more for good measure.</h1>
                                 <p>Some representative placeholder content for the third slide of this carousel.</p>
                                 <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                 </button>
             </div>
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                 <path fill="#273036" fill-opacity="1"
                     d="M0,96L16,80C32,64,64,32,96,42.7C128,53,160,107,192,144C224,181,256,203,288,181.3C320,160,352,96,384,101.3C416,107,448,181,480,197.3C512,213,544,171,576,165.3C608,160,640,192,672,170.7C704,149,736,75,768,53.3C800,32,832,64,864,90.7C896,117,928,139,960,128C992,117,1024,75,1056,85.3C1088,96,1120,160,1152,170.7C1184,181,1216,139,1248,149.3C1280,160,1312,224,1344,218.7C1376,213,1408,139,1424,101.3L1440,64L1440,0L1424,0C1408,0,1376,0,1344,0C1312,0,1280,0,1248,0C1216,0,1184,0,1152,0C1120,0,1088,0,1056,0C1024,0,992,0,960,0C928,0,896,0,864,0C832,0,800,0,768,0C736,0,704,0,672,0C640,0,608,0,576,0C544,0,512,0,480,0C448,0,416,0,384,0C352,0,320,0,288,0C256,0,224,0,192,0C160,0,128,0,96,0C64,0,32,0,16,0L0,0Z">
                 </path>
             </svg>
             <div class="container">

                 <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                     <div class="col">
                         <div class="card shadow-sm">
                             <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                 xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                 preserveAspectRatio="xMidYMid slice" focusable="false">
                                 <title>Placeholder</title>
                                 <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                     fill="#eceeef" dy=".3em">Thumbnail</text>
                             </svg>

                             <div class="card-body">
                                 <p class="card-text">This is a wider card with supporting text below as a natural
                                     lead-in to additional content. This content is a little bit longer.</p>
                                 <div class="d-flex justify-content-between align-items-center">
                                     <div class="btn-group">
                                         <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                         <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                     </div>
                                     <small class="text-muted">9 mins</small>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col">
                         <div class="card shadow-sm">
                             <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                 xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                 preserveAspectRatio="xMidYMid slice" focusable="false">
                                 <title>Placeholder</title>
                                 <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                     fill="#eceeef" dy=".3em">Thumbnail</text>
                             </svg>

                             <div class="card-body">
                                 <p class="card-text">This is a wider card with supporting text below as a natural
                                     lead-in to additional content. This content is a little bit longer.</p>
                                 <div class="d-flex justify-content-between align-items-center">
                                     <div class="btn-group">
                                         <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                         <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                     </div>
                                     <small class="text-muted">9 mins</small>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col">
                         <div class="card shadow-sm">
                             <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                 xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                 preserveAspectRatio="xMidYMid slice" focusable="false">
                                 <title>Placeholder</title>
                                 <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                     fill="#eceeef" dy=".3em">Thumbnail</text>
                             </svg>

                             <div class="card-body">
                                 <p class="card-text">This is a wider card with supporting text below as a natural
                                     lead-in to additional content. This content is a little bit longer.</p>
                                 <div class="d-flex justify-content-between align-items-center">
                                     <div class="btn-group">
                                         <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                         <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                     </div>
                                     <small class="text-muted">9 mins</small>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <hr>
                 <div class="container-marketing">
                     <div class="row featurette">
                         <div class="col-md-7">
                             <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll
                                     blow your mind.</span></h2>
                             <p class="lead">Some great placeholder content for the first featurette here.
                                 Imagine some exciting prose here.</p>
                         </div>
                         <div class="col-md-5">
                             <div
                                 class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                 <div class="col p-4 d-flex flex-column position-static">
                                     <strong class="d-inline-block mb-2 text-primary">World</strong>
                                     <h3 class="mb-0">Featured post</h3>
                                     <div class="mb-1 text-muted">Nov 12</div>
                                     <p class="card-text mb-auto">This is a wider card with supporting text below as a
                                         natural lead-in to additional content.</p>
                                     <a href="#" class="stretched-link">Continue reading</a>
                                 </div>
                                 <div class="col-auto d-none d-lg-block">
                                     <svg class="bd-placeholder-img" width="200" height="250"
                                         xmlns="http://www.w3.org/2000/svg" role="img"
                                         aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                         focusable="false">
                                         <title>Placeholder</title>
                                         <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                             fill="#eceeef" dy=".3em">Thumbnail</text>
                                     </svg>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                 <path fill="#273036" fill-opacity="1"
                     d="M0,96L16,80C32,64,64,32,96,42.7C128,53,160,107,192,144C224,181,256,203,288,181.3C320,160,352,96,384,101.3C416,107,448,181,480,197.3C512,213,544,171,576,165.3C608,160,640,192,672,170.7C704,149,736,75,768,53.3C800,32,832,64,864,90.7C896,117,928,139,960,128C992,117,1024,75,1056,85.3C1088,96,1120,160,1152,170.7C1184,181,1216,139,1248,149.3C1280,160,1312,224,1344,218.7C1376,213,1408,139,1424,101.3L1440,64L1440,0L1424,0C1408,0,1376,0,1344,0C1312,0,1280,0,1248,0C1216,0,1184,0,1152,0C1120,0,1088,0,1056,0C1024,0,992,0,960,0C928,0,896,0,864,0C832,0,800,0,768,0C736,0,704,0,672,0C640,0,608,0,576,0C544,0,512,0,480,0C448,0,416,0,384,0C352,0,320,0,288,0C256,0,224,0,192,0C160,0,128,0,96,0C64,0,32,0,16,0L0,0Z">
                 </path>
             </svg>
             <footer class="py-3 my-4">
                 <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                     <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                     <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                     <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                     <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                     <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                 </ul>
                 <p class="text-center text-muted">© 2021 Aset Balangan, Inc</p>
             </footer>
         </main>





         <!-- Optional JavaScript; choose one of the two! -->

         <!-- Option 1: Bootstrap Bundle with Popper -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
         </script>

         <!-- Option 2: Separate Popper and Bootstrap JS -->
         <!--
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                                integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
                                crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
                                crossorigin="anonymous"></script>
                -->
     </body>

 </html>
