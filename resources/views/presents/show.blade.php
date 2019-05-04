@extends('layouts.app')

@section('content')
	
	<div class="row justify-content-sm-center">
		<div class="col-xs-12 col-sm-10 col-md-7 col-lg-6">
			<div class="card">
				<header class="padding text-center bg-primary"></header>
				<div class="card-body padding">
					<h1 class="card-title">{{$present->title}}</h1>
					<h4 class="card-subtitle">Regalo {{$present->id}}</h4>
					<p class="card-text">{{$present->description}}</p>
					<div class="card-actions">
						<button type="button" name="button" class="btn btn-success">Elegir</button>
						@include('presents.delete')
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection