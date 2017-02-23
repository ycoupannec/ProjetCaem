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
                            
                                <option value="$role->name">test</option>
                            
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
