<div class="m-t-10 m-b-10 p-l-10 p-r-10 p-t-10 p-b-10">
	<div class="row">
		<div class="col-md-12">
			<!-- {{ trans('backpack::crud.details_row') }} -->
			<table>
				
				<tr>
					<td>Date de naissance</td>
					<td>{{ $entry->birthday }}</td>
				</tr>
				<tr>
					<td>Observation</td>
					<td>{{ $entry->observation }}</td>
				</tr>
				<tr>
					<td>Droit à l'image</td>
					<td>{{ $entry->image_right }}</td>
				</tr>
				<tr>
					<td>Code analytique</td>
					<td>{{ $entry->code_analytique }}</td>
				</tr>
				<tr>
					<td>Ville </td>
					<td>{{ $city->name }}</td>
				</tr>
				<tr>
					<td>Quartier </td>
					<td>{{ $district->name }}</td>
				</tr>
				<tr>
					<td>Code postal</td>
					<td>{{ $entry->postal_code }}</td>
				</tr>
				<tr>
					<td>Adresse</td>
					<td>{{ $entry->adress }}</td>
				</tr>
				<tr>
					<td>Date de création</td>
					<td>{{ $entry->created_at }}</td>
				</tr>
				<tr>
					<td>Date de mise à jour</td>
					<td>{{ $entry->updated_at }}</td>
				</tr>

				<tr>
					<td>Types </td>
					<td>@foreach($types['type_people'] as $type)

			            	<li>{{ $type->name }}</li>
			        	@endforeach
			        </td>

				</tr>
				<tr>
					<td>Instruments </td>
					<td>@foreach($instruments['people_instruments'] as $instrument)

			            	<li>{{ $instrument->name }}</li>
			        	@endforeach
			        </td>
			        
				</tr>
				

			</table>
			<!-- <pre>
				{{$entry}}
			</pre> -->
	
			

	        
		</div>
	</div>
</div>
<div class="clearfix"></div>