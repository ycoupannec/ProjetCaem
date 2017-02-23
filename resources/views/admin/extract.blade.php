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
                    <div class="form-group">
                        <select name="roles[]" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="User roles" style="width: 100%;" tabindex="-1" aria-hidden="true">

                        @if(!empty($usersActif))
                            @foreach($usersActif as $user)

                                <option value="{{ $user->name }}">{{ $user->name }} {{ $user->family_name }}</option>
                                
                            @endforeach
                        @else
                            NOT fOUND
                        @endif
                           
                        </select>

                        <select name="roles[]" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="User roles" style="width: 100%;" tabindex="-1" aria-hidden="true">

                        @if(!empty($districts))
                            @foreach($districts as $district)

                                <option value="{{ $district->name }}">{{ $district->name }} </option>
                                
                            @endforeach
                        @else
                            NOT fOUND
                        @endif
                           
                        </select>

                        <select name="roles[]" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="User roles" style="width: 100%;" tabindex="-1" aria-hidden="true">

                        @if(!empty($instruments))
                            @foreach($instruments as $instrument)

                                <option value="{{ $instrument->name }}">{{ $instrument->name }} </option>
                                
                            @endforeach
                        @else
                            NOT fOUND
                        @endif
                           
                        </select>

                        <select name="roles[]" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="User roles" style="width: 100%;" tabindex="-1" aria-hidden="true">

                        @if(!empty($activities))
                            @foreach($activities as $activity)

                                <option value="{{ $activity->name }}">{{ $activity->name }} </option>
                                
                            @endforeach
                        @else
                            NOT fOUND
                        @endif
                           
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
