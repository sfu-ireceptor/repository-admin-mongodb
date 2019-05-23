<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Samples</title>
</head>

<body>
<table>
	<thead>
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
</body>
</html>
