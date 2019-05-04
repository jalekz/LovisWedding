@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Agregar regalo a Mesa de Regalos</h4>
		</header>
		<div class="card-body">
			@include('presents.form')
		</div>
	</div>
</div>
@endsection
