@extends('template')

@section('title', 'Samples')

@section('content')
	<h1>Samples</h1>
	<table class="table table-bordered table-striped">
		<thead class="thead-dark">
			<tr>
				@foreach ($field_list as $field => $v)
					<th class="text-nowrap">
						{{ $field }}
					</th>
				@endforeach		
			</tr>
		</thead>
		<tbody>
			@foreach ($item_list as $item)
				<tr>
					@foreach ($field_list as $field => $v)
						<td class="text-nowrap">
							@isset($item[$field])
								{{ $item[$field] }}
							@endisset
						</td>
					@endforeach
				</tr>
			@endforeach		
		</tbody>
	</table>
@stop