@extends('layout.main')
 
@section('content')
<div class='container centras'>
    <div class='showPavadinimas'>Paspirtuko pavadinimas: {{$elpaspirtukas->pavadinimas}}</div>
    <div class='showTekstas'>Paspirtuko aprašymas: {{$elpaspirtukas->aprasymas}}</div>
    <img class='showPaveikslas' src="{{ asset('storage/paveiksleliai/' . $elpaspirtukas->paveikslelis) }}">
     <div class='showTekstas'>Paspirtuko kaina: {{$elpaspirtukas->_kaina_}} $</div>
    <hr>
</div>
@endsection