@extends('layout.main')
 
@section('content')
<div class='container'>
    <h1 class='centras' id='neraJokiuPaspirtuku'>Elektriniai paspirtukai</h1>
   <div class="row">
        @if(count($elpaspirtukai) > 0)
        @foreach($elpaspirtukai as $elspaspirtukas)
                <div class="col-sm-6 col-md-3 .col-lg-3 .col-xl-3">
                    <div class='konteineris'>
                    <div class='deze'>
                    <h3 class='dezesTekstas'><a href="/praktika/public/elpaspirtukai/{{$elspaspirtukas->id}}">{{$elspaspirtukas->pavadinimas}}</a></h3>
                    <img class='dezesPaveikslas' src="{{ asset('storage/paveiksleliai/' . $elspaspirtukas->paveikslelis) }}">
                    <h3 class='dezesTekstas'>$ {{$elspaspirtukas->_kaina_}}</h3>
                    <a href="{{route('krepselis.edit', $elspaspirtukas->id)}}" class="btn btn-success" >Pirkti</a>
                    </div>
                    </div>
                </div>
        @endforeach
        {{$elpaspirtukai->links()}}
        </div>
    @else
        <p class='centras'>Nera jokiu paspirtukų</p>
    @endif
</div>
@endsection