@extends('layout.main')
 
@section('content')

<div class='container'>

<h3>Krepselis</h3>

<table>
   	<thead>
       	<tr>
           	<th>Pavadinimas</th>
						 <th></th>
           	<th>Vieneto kaina</th>
						 <th></th>
						 <th>Pilna kaina</th>
						 <th></th>
           	<th>Kiekis</th>
       	</tr>
   	</thead>

   	<tbody>

   		@foreach($elpaspirtukai as $elpaspirtukas)

       		<tr>
           		<td>{{$elpaspirtukas->name}}</td>
							 <td></td>
							 <td>{{$elpaspirtukas->price}}</td>
							 <td></td>
                <td>{{$elpaspirtukas->price*$elpaspirtukas->qty}}</td>
								<td></td>
                <td>{{$elpaspirtukas->qty}}</td>
				<td>
                        <form action="{{route('krepselis.destroy',$elpaspirtukas->rowId)}}"  method="POST">
                           {{csrf_field()}}
                           {{method_field('DELETE')}}
                           <input class="button small alert" type="submit" value="Delete">
                         </form>
                    </td>
       		</tr>

	   	@endforeach

		   <tr>
           		<td></td>
                <td>Pirkinių suma: {{Cart::total()}}</td>
                <td></td>
				<td></td>
       		</tr>


   	</tbody>
   	
   	
</table>


</div>

@endsection