<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Export</title>
	</head>
	<body>
		 <table>

			   <tr>
	                <td><b>Nombre d'adhérent :</b></td>
	            </tr>

	            <tr>
	                
	            </tr>

	            <tr>
	                <td><b>Activité</b></td>
	                <td><b>Types</b></td>
	                <td><b>Jour</b></td>
	                <td><b>Heure de début</b></td>
	                <td><b>Heure de fin</b></td>
	                <td><b>Année</b></td>
	                <td><b>Professeur</b></td>
	                <td><b>Membre</b></td>
	                <td><b>Total membre</b></td>
	                <td><b>Instrument</b></td>
	            </tr>
	            

	           @if(!empty($dataExtract))
	                @foreach($dataExtract as $data)

	                <tr>
	                    <td>{{ $data->act_name }} /</td>

	                    <td>{{ $data->typ_name }}</td>

	                    <td>{{ $data->act_day }}</td>

	                    <td>{{ $data->act_hour_start }}</td>

	                    <td>{{ $data->act_hour_end }}</td>

	                    <td>{{ $data->act_year }}</td>    
	                  
	                    <td>{{ $data->peo_name }} {{ $data->peo_family_name }}</td>

	                    <td>{{ $data->mem_name }} {{ $data->mem_family_name }}</td>

	                    <td>{{ $data->nbMembre }}</td>
	                    
	                    <td>{{ $data->ins_name }}</td>
	                
	                    
	                </tr>
	                @endforeach
	            @else
	                
	            @endif
               
           </table>
	</body>
</html>