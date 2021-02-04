@extends('template')
@section('Matiere')
<div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href=" {{route('validerM')}}">
                    <span data-feather="home"></span>
                    
                  </a>
                </li>
           </div>
      </div>
</div>
</nav>
@endsection
@section('Information')
<h2>lISTE DES MATIERES</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>id</th>
              <th>nom</th>
            </tr>
          </thead>
          <tbody>
                @foreach($Mat as $name)
                
                        <tr>
                                <td>{{$name['id']}}</td>
                                <td>{{$name['nomMatière']}}</td>
                               
                        </tr>
             
                @endforeach
     
            
          </tbody>
        </table>
      </div>
@endsection

                