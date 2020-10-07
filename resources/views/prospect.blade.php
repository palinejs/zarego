@extends('layouts.app')

@section('content')
<div class="row">	
	<div class="container">
		<form method="POST" action="{{ route('prospect.store') }}" accept-charset="UTF-8">
			@csrf
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-5">
					<div class="form-group {{ $errors->has('name')? ' has-error ' : '' }}">
						<label for="Nombre">Nombre</label>
						<input class="form-control cust-text-rounded" placeholder="Ingrese el nombre" name="name" type="text" value="{{ old('name', '') }}">
						@if($errors->has('name'))
							<span class="text-danger">{{ $errors->first('name') }}</span>
						@endif
					</div>
				</div>
				<div class="col-sm-5">
					<div class="form-group {{ $errors->has('lastname')? ' has-error ' : '' }}">
						<label for="Apellido">Apellido</label>
						<input class="form-control cust-text-rounded" placeholder="Ingrese el apellido" name="lastname" type="text" value="{{ old('lastname', '') }}">
						@if($errors->has('lastname'))
							<span class="text-danger">{{ $errors->first('lastname') }}</span>
						@endif
					</div>			
				</div>
				<div class="col-sm-1"></div>
			</div>
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<div class="form-group {{ $errors->has('email')? ' has-error ' : '' }}">
						<label for="Mail">Mail</label>
						<input class="form-control cust-text-rounded" placeholder="Ingrese el mail" name="email" type="email" value="{{ old('email', '') }}">
						@if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif
					</div>
				</div>
				<div class="col-sm-1"></div>
			</div>
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<div class="form-group">
						<button class="btn btn-send" type="submit">Enviar</button>
					</div>
				</div>
				<div class="col-sm-1"></div>
			</div>
			

		</form>
	</div>

</div>

@endsection