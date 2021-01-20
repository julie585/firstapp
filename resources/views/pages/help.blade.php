@inject('date','App\utilities\Date')
@extends('layouts/application')

 @section('container')
 <h1>HELP</h1>
 @foreach($last_name as $name)
           <h1>{{$name}}
        </h1>
           
       @endforeach
 @include ('shared.weekend')

@stop
    