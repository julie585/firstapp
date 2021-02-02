@extends('template')
@section('etudiant')
<div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href=" {{route('affichageE')}}">
                    <span data-feather="home"></span>
                    Etudiants
                  </a>
                </li>
           </div>
      </div>
</div>
</nav>
@endsection
@section('Information')
<h2>Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>id</th>
              <th>nom</th>
              <th>prenom</th>
              <th>age</th>
              <th>sexe</th>
            </tr>
          </thead>
          <tbody>
                @foreach($Etudiants as $name)
                
                        <tr>
                                <td>{{$name['id']}}</td>
                                <td>{{$name['nomEtudiant']}}</td>
                                <td>{{$name['prenomEtudiant']}}</td>
                                <td>{{$name['ageEtudiant']}}</td>
                                <td>{{$name['sexeEtudiant']}}</td>
                        </tr>
             
                @endforeach
     
            
          </tbody>
        </table>
      </div>
@endsection

                