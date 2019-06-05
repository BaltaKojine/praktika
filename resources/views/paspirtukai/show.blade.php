@extends('layout.main')
 
@section('content')
<div class='container centras'>
<div class='showPavadinimas'>Paspirtuko pavadinimas: {{$paspirtukas->pavadinimas}}</div>
<div class='showTekstas'>Paspirtuko aprašymas: {{$paspirtukas->aprasymas}}</div>
<img class='showPaveikslas' src="{{ asset('storage/paveiksleliai/' . $paspirtukas->paveikslelis) }}">
<div class='showTekstas'>Paspirtuko kaina: {{$paspirtukas->_kaina_}} $</div> 
    <hr>
</div>
@endsection