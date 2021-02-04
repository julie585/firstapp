@extends('template')
@section('Professeurs')
<div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href=" {{route('afficheP')}}">
                    <span data-feather="home"></span>
                
                  </a>
                </li>
           </div>
      </div>
</div>
</nav>
@endsection
@section('Information')
<h2>lISTE DES PROFESSEURS</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>id</th>
              <th>nom</th>
              <th>prenom</th>
            </tr>
          </thead>
          <tbody>
                @foreach($Profs as $name)
                
                        <tr>
                                <td>{{$name['id']}}</td>
                                <td>{{$name['nomProfesseurs']}}</td>
                                <td>{{$name['prenomProfesseurs']}}</td>
                               
                        </tr>
             
                @endforeach
     
            
          </tbody>
        </table>
      </div>
@endsection

                