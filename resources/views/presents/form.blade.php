{!! Form::open(['route' => [$present->url(), $present->id], 'method' => $present->method(), 'class' => 'app-form']) !!}

	<div>
		{!! Form::label('title', 'Titulo del regalo') !!}
		{!! Form::text('title', $present->title, ['class' => 'form-control']) !!}
	</div>
	<div>
		{!! Form::label('description', 'Descripción del regalo') !!}
		{!! Form::textarea('description', $present->description, ['class' => 'form-control']) !!}
	</div>
	<div>
		{!! Form::label('links', 'Links de ejemplos') !!}
		{!! Form::textarea('links', $present->links, ['class' => 'form-control']) !!}
	</div>
	<div>
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>

{!! Form::close() !!}