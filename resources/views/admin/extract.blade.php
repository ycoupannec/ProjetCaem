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
                            <div class="col-md-6">
                                <h3>Date de début</h3>
                                <input type="date" name="sday">
                            
                                <h3>Date de fin</h3>
                                 <input type="date" name="eday">
                            
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
                    <div class="col-md-6">
                               <table>

                               @if(!empty($dataExtract))
                                    @foreach($dataExtract as $data)

                                    <tr>
                                        <td><b>Professeur</b></td>
                                        <td>{{ $data->peo_name }} {{ $data->peo_family_name }}</td>
                                        
                                    </tr>
                                    <tr>
                                        <td><b>Date de naissance</b></td>
                                        <td>{{ date('d/m/Y',strtotime($data->peo_birthday)) }}</td>
                                        
                                    </tr>
                                    <tr>
                                        <td><b>Activité</b></td>
                                        <td>{{ $data->act_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Année</b></td>
                                        <td>{{ $data->act_year }}</td>
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
