@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Editar Regalo</h4>
			<p>{{$present->title}}</p>
		</header>
		<div class="card-body">
			@include('presents.form')
		</div>
	</div>
</div>
@endsection
