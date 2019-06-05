@extends('layout.main')
 
@section('content')
<div class='container'>
    <h1 class='centras' id='neraJokiuPaspirtuku'>Paspirtukai</h1>
    <div class="row">
    @if(count($paspirtukai) > 0)
        @foreach($paspirtukai as $paspirtukas)
        <div class="col-sm-6 col-md-3 .col-lg-3 .col-xl-3">
                    <div class='konteineris'>
                    <div class='deze'>
                    <h3 class='dezesTekstas'><a href="/praktika/public/paspirtukai/{{$paspirtukas->id}}">{{$paspirtukas->pavadinimas}}</a></h3>
                    <img class='dezesPaveikslas' src="{{ asset('storage/paveiksleliai/' . $paspirtukas->paveikslelis) }}">
                    <h3 class='dezesTekstas'>$ {{$paspirtukas->_kaina_}}</h3>
                    <a class="btn btn-success" href="{{route('krepselis.edit', $paspirtukas->id)}}">Pirkti</a>
                </div>
            </div>
            </div>
        @endforeach
        {{$paspirtukai->links()}}
        </div>
    @else
        <p class='centras'>Nera jokiu paspirtukų</p>
    @endif
    </div>
@endsection