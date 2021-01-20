@inject('date','App\utilities\Date')

@extends('layouts.application')

@section('title', 'Home')


@section( 'container')
<h1> Demo </h1>
            

@include ('shared.weekend')
  {{ $name }}
@stop



