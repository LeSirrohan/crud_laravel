@extends('app2')

@section('content')
<table class="table">
	<thead>
		<th>#</th>
		<th>Nombre</th>
		<th>Administrativo</th>
		<th>Contabilidad</th>
		<th>Nómina</th>
		<th>Acciones</th>
	</thead>
	<tbody>
	@foreach($empresas as $empresa)
		<tr>
			<td>{{$empresa->codigo}}</td>
			<td>{{$empresa->nombre}}</td>
			<td>{{$empresa->bd}}</td>
			<td>{{$empresa->bd_contabilidad}}</td>
			<td>{{$empresa->bd_nomina}}</td>
			<td><a  class="btn btn-warning" href="empresa/{{$empresa->codigo}}/edit">Editar</a> </td>
			<td><form action="{{ url('empresa/'.$empresa->codigo) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Eliminar
            </button>
        </form></td>
		</tr>
	@endforeach
	</tbody>
	
</table>
@endsection
