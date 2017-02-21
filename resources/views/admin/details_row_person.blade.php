<div class="m-t-10 m-b-10 p-l-10 p-r-10 p-t-10 p-b-10">
	<div class="row">
		<div class="col-md-12">
			<!-- {{ trans('backpack::crud.details_row') }} -->
			<table>
				<tr>
					<td><b>Responsable légal</b></td>
					<td>
					@if(!empty($data['people_people']))
						@foreach($data['people_people'] as $people_people)

				            	<a href="http://127.0.0.1:8000/admin/person/{{ $people_people->id }}/edit">{{ $people_people->name }} {{ $people_people->family_name }}</a>

				        	@endforeach
				    @else
						NOT FOUND
					@endif
			        </td>
			        
				</tr>
				<tr>
					<td><b>Date de naissance</b></td>
					<td>{{ $data->birthday }}</td>
				</tr>
				<tr>
					<td><b>Observation</b></td>
					<td>{{ $data->observation }}</td>
				</tr>
				<tr>
					<td><b>Droit à l'image</b></td>
					<td>{{ $data->image_right }}</td>
				</tr>
				<tr>
					<td><b>Code analytique</b></td>
					<td>{{ $data->code_analytique }}</td>
				</tr>
				<tr>
					<td><b>Ville</b></td>
					<td>{{ $data->city->name }}</td>
				</tr>
				<tr>
					<td><b>Quartier</b></td>
					<td>{{ $data->district->name }}</td>
				</tr>
				<tr>
					<td><b>Code postal</b></td>
					<td>{{ $data->postal_code }}</td>
				</tr>
				<tr>
					<td><b>Adresse</b></td>
					<td>{{ $data->adress }}</td>
				</tr>

				<tr>
					<td><b>Types</b></td>
					<td>
					@if(!empty($data['type_people']))
						@foreach($data['type_people'] as $type)

			            	<li>{{ $type->name }}</li>
		            	
			        	@endforeach
				    @else
				    	NOT fOUND
				    @endif

			        </td>

				</tr>
				

				<tr>
					<td><b>Activité</b></td>
					<td>
					@if(!empty($data['people_activities']))
						@foreach($data['people_activities'] as $activity)

				            	<li><a href="http://127.0.0.1:8000/admin/activity/{{ $activity->id }}/edit"> {{ $activity->name }}</a></li>
			            	
				        @endforeach
			        @else
			        	NOT FOUND
		        	@endIf
			        </td>
			        
				</tr>

				<tr>
					<td><b>Inscription</b></td>
					<td>
					@if(!empty($data['membership']))
							

						@foreach($data['membership'] as $membership)



				            	<li>Date de début : {{ $membership->date_start }}</li>
				            	<li>Date de fin : {{ $membership->date_end }}</li>
			            	
				        	@endforeach
				        
				    @else
						NOT FOUND
					@endif
			        </td>
				</tr>
				<tr>
					<td><b>Date de création</b></td>
					<td>{{ $data->created_at }}</td>
				</tr>
				<tr>
					<td><b>Date de mise à jour</b></td>
					<td>{{ $data->updated_at }}</td>
				</tr>


				
				

			</table>
			
	
			

	        
		</div>
	</div>
</div>
<div class="clearfix"></div>