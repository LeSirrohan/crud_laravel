@extends('app2')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Actualizar Empresa</div>
				<div class="panel-body">


					<form class="form-horizontal" role="form"  <form action="{{ url('empresa/'.$empresas[0]->codigo) }}" method="POST">


						<div class="form-group">
							<label class="col-md-4 control-label">Nombre Empresa</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="nombre" value="{{$empresas[0]->nombre}}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Base de datos Administratrivo</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="bd" value="{{$empresas[0]->bd}}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Base de datos Contabilidad</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="bd_contabilidad" value="{{$empresas[0]->bd_contabilidad}}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Base de datos Nomina</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="bd_nomina" value="{{$empresas[0]->bd_nomina}}">
							</div>
						</div>
						<input type="hidden" name="_method" value="PUT">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Actualizar
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


