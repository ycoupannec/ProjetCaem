@extends('backpack::layout') @section('header')
<section class="content-header">
    <h1>
        {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
      </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
    </ol>
</section> @endsection @section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-default">
            <div class="box-header with-border">
                <div class="box-title">{{ trans('backpack::base.login_status') }}</div>
            </div>
            <div class="box-body">{{ trans('backpack::base.logged_in') }}</div>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="info-box ">
        <!-- Apply any bg-* class to to the icon to color it --><span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>
        <div class="info-box-content"> <span class="info-box-text">Nombre adhérents actif</span> <span class="info-box-number">{{$userActif}}</span> </div>
    </div>
</div>
<div class="col-md-4">
    <div class="info-box ">
        <!-- Apply any bg-* class to to the icon to color it --><span class="info-box-icon bg-orange"><i class="fa fa-building"></i></span>
        <div class="info-box-content"> <span class="info-box-text">Nombre d'habitant Planoise</span> <span class="info-box-number">{{$district}}</span> </div>
    </div>
</div>
<div class="col-md-4">
    <div class="info-box ">
        <!-- Apply any bg-* class to to the icon to color it --><span class="info-box-icon bg-orange"><i class="fa fa-calendar"></i></span>
        <div class="info-box-content"> <span class="info-box-text">nombre d'élève jeudi 17 à 18h</span> <span class="info-box-number">it's over 9000!</span> </div>
    </div>
</div>
<div class="col-md-4">
    <div class="info-box ">
        <!-- Apply any bg-* class to to the icon to color it --><span class="info-box-icon bg-orange"><i class="fa fa-music"></i></span>
        <div class="info-box-content"> <span class="info-box-text">nombre d'élève qui joue de la guitare</span> <span class="info-box-number">it's over 9000!</span> </div>
    </div>
</div>
<div class="col-md-8">
    <div class="box-body">
        <div class="chart-responsive">
            <canvas id="pieChart" height="165" width="199"> </canvas>
        </div>
    </div>
</div> @endsection

 @section('after_scripts')
<script>
     var ctx = document.getElementById("pieChart");

    var test = ({!!$district!!});
    console.log({!!$district!!});


 var myDoughnutChart = new Chart(ctx, {
     type: 'doughnut',
     data: {
        labels: {!!$district_labels!!},
        datasets: [{
            data: {!!$district!!},
            backgroundColor:{!!$district_colors!!}
        }]
     }, 
     options: {
         animation: {
             animateScale: true
         }
     }
 });
</script>@endsection