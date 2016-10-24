@extends('layouts.app')


@section('content')
	<div class="jumbotron">
		<h1>CVOED Unidades Operativas</h1>

	</div>

	<a href="/warehouses/create">Add a Wherehouse</a>
	<ul>

		@foreach ($warehouses as $warehouse)
			<li>
				{{ $warehouse->id }}
				{{ $warehouse->werehouse_name }}
				<p>
					{{ $warehouse->country }} - {{ $warehouse->state }}
				</p>

				</p>
		@endforeach
	</ul>


@endsection


