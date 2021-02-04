<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Dashboard Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">juliefanho@gmail.com</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#"></a>
    </li>
  </ul>
</header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('affichageE')}}">
                          <span data-feather="home"></span>
                          ETUDIANTS
                        </a>
                      </li>
                      <!--etudiant -->
                      <section class="page-section" id="etudiant">
                        @yield('etudiant')
                    </section>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('creation')}}">
                          <span data-feather="home"></span>
                         Ajout Etudiant
                        </a>
                      </li>
                      <!--matiere -->
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('affichageM')}}">
                          <span data-feather="home"></span>
                          MATIERES
                        </a>
                      </li>
                      <section class="page-section" id="Matiere">
                        @yield('Matiere')
                    </section>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('creationM')}}">
                        <span data-feather="home"></span>
                        Ajout matiere
                      </a>
                    </li>
                    
                     <!--Professeurs-->
                     <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('afficheP')}}">
                        <span data-feather="home"></span>
                        PROFESSEURS
                      </a>
                    </li>
                     <section class="page-section" id="Professeurs">
                      @yield('Professeurs')
                  </section>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('creationP')}}">
                      <span data-feather="home"></span>
                      Ajout professeur
                    </a>
                  </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('AFFICHEpro')}}">
                        <span data-feather="users"></span>
                        Affecter un Professeurs à une matière
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('afficheEtudmat')}}">
                        <span data-feather="layers"></span>
                        Affecter un étudiant à une matière
                        </a>
                    </li>
                    </ul>            
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('Information')
              </main>
        </div>
    </div>
    



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
