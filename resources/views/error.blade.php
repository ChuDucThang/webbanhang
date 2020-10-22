@extends('layouts.frontend')

@section('frontend')
<div class="container">
	<div class="alert alert-warning">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{$message}}
	</div>
</div>
@stop()