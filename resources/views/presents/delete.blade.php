@auth

{!! Form::open(['method' => 'DELETE', 'route' => ['presents.destroy', $present->id], 'onsubmit' => 'return confirm("¿Está seguro de eliminar este regalo?")']) !!}

	<input type="submit" value="Eliminar regalo" class="btn btn-danger">

{!! Form::close() !!}

@endauth