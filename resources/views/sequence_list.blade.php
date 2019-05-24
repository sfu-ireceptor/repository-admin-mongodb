@extends('template')

@section('title', 'Sequences')

@section('content')
	<h1>Sequences</h1>
	<table class="table table-bordered table-striped table-sm">
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
								@if(is_array($item[$field]))
									{{ json_encode($item[$field]) }}
								@else
									{{ $item[$field] }}
								@endif
							@endisset
						</td>
					@endforeach
				</tr>
			@endforeach		
		</tbody>
	</table>
@stop