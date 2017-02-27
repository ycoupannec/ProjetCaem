@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
      
        
      </h1>
      <ol class="breadcrumb">
       
       
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Données à extraire</div>
                </div>

               

                <div class="box-body">
                    <form class="form-group" action="/admin/extract" method="get">
                        <div class="row">
                            <div class="col-md-4">
                                <h3>Type de données à exporter </h3>
                                <input type="radio" name="type" value="0" checked>Activités</br>
                                <input type="radio" name="type" value="1">Membres</br>
                                <h3>Date de début</h3>
                                <input type="date" name="sday">
                            
                                <h3>Date de fin</h3>
                                 <input type="date" name="eday">

                                 <h3>Jour</h3>
                                 <select name="days">
                                     <option value=""> - </option>
                                     <option value="Lundi">Lundi</option>
                                     <option value="Mardi">Mardi</option>
                                     <option value="Mercredi">Mercredi</option>
                                     <option value="Jeudi">Jeudi</option>
                                     <option value="Vendredi">Vendredi</option>
                                     <option value="Samedi">Samedi</option>
                                     <option value="Dimanche"></option>
                                 </select>
                            
                                <h3>Age minimum</h3>
                                <input type="number" step="1" value="0" min="0" name="agemin" >
                           
                                <h3>Age maximum</h3>
                                <input type="number" step="1" value="0" min="0" name="agemax" >
                            
                                <h3>Professeurs</h3>
                                <select name="teachers" >
                                    <option value=""> - </option>

                                @if(!empty($usersActif))
                                    @foreach($usersActif as $user)

                                        <option value="{{ $user->id }}">{{ $user->name }} {{ $user->family_name }}</option>
                                        
                                    @endforeach
                                @else
                                    NOT fOUND
                                @endif
                                   
                                </select>
                          
                                <h3>Quartiers</h3>

                                <select name="districts">
                                    <option value=""> - </option>
                                @if(!empty($districts))
                                    @foreach($districts as $district)

                                        <option value="{{ $district->id }}">{{ $district->name }} </option>
                                        
                                    @endforeach
                                @else
                                    NOT fOUND
                                @endif
                                   
                                </select>
                            
                                <h3>Instruments</h3>

                                <select name="instruments">
                                    <option value=""> - </option>

                                @if(!empty($instruments))
                                    @foreach($instruments as $instrument)

                                        <option value="{{ $instrument->id }}">{{ $instrument->name }} </option>
                                        
                                    @endforeach
                                @else
                                    NOT fOUND
                                @endif
                                   
                                </select>
                            
                                <h3>Activités</h3>
                                <select name="activities">
                                    <option value=""> - </option>

                                @if(!empty($activities))
                                    @foreach($activities as $activity)

                                        <option value="{{ $activity->id }}">{{ $activity->name }} </option>
                                        
                                    @endforeach
                                @else
                                    NOT fOUND
                                @endif
                                   
                                </select>
                            
                                <input type="submit" value="Submit">
                            
                            </div>    
                        
                    </form>
                    <div class="col-md-8">
                        <table class="table table-hover">

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
                            
                    </div>    
                </div>
            </div>
        </div>
    </div>
@endsection
