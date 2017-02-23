<!--CALLING THE DEFAULT LAYOUT-->
@extends('layouts.default')
<!------------------------------>



<!--HEAD TITLE :-->
@section('pageTitle')
CAEM - Mon parcours musical
@endsection
<!---------------->



<!--MAIN CONTENT :-->
@section('pageContent')
<main class="container mainParcoursMusical">


<!--selection column :-->
	<aside class="col-md-3 col-sm-3 container">
		<section id="sectionInterest">

			<h2>Qu'est-ce qui vous intéresse ?</h2>

			@foreach($typeActivities as $typeActivity)
				<section>

					<h3>{{ $typeActivity->name }}</h3>

					@foreach($typeActivity->activities as $activity)
					<label data-id="{{ $activity->id }}" onchange="showActivity({{ $activity->id }});">
						<p>{{ $activity->name }}</p>
						<input class="activityLabelCheckbox" type="checkbox" value="{{ $activity->id }}">
					</label>
					@endforeach

				</section>
			@endforeach
		</section>
	</aside>


<!--selected instrument / atelier / activites :-->
	<div class="col-md-9 col-sm-9">

		@foreach($typeActivities as $typeActivity)
		@foreach($typeActivity->activities as $activity)
		<section id="{{ $activity->id }}" class="activitiesClass col-md-12 activityHide">

			<header class="col-md-12">
				<h3>{{ $activity->name }}</h3>
			</header>

			<main class="col-md-12">
				<article>
					{{ $activity->description }}
				</article>
			</main>

			<footer class="col-md-12">

				<div class="col-md-4">
					<h4>Quand ?</h4>
					<p>{{ $activity->when }} {{ $activity->hour_start }} {{ $activity->hour_end }}</p>
				</div>

				<div class="col-md-4">
					<h4>Avec qui ?</h4>
					<p>{{ $activity->person }}</p>
				</div>

				<div class="col-md-4">
					<h4>Tarifs :</h4>
					<p>{{ $activity->price }}</p>
				</div>

				<figure class="col-md-12">

					<div class="col-md-6 center-block">
						<img src="uploads/{{ $activity->picture_1 }}" />
					</div>

					<div class="col-md-6 center-block">
						<img src="uploads/{{ $activity->picture_2 }}" />
					</div>

				</figure>

			</footer>

		</section>
		@endforeach
		@endforeach

	</div>


</main>
@endsection
<!------------------>



<!--SCRIPT RELATED TO THIS PAGE ONLY :-->
@section('pageScript')
<script>


var btnSelectActivity = document.querySelectorAll(".activityLabelCheckbox:checked");

console.log(btnSelectActivity);

for (i=0 ; i < btnSelectActivity.length ; i++)
	{
		console.log(btnSelectActivity[i].value);
		console.log("debug"+i);
	};



function showActivity(activityId)
	{
//		document.getElementById(activityId).classList.toggle("activityHide");
	};



/*SNIPPETS*/

//		$('.activityLabelCheckbox').click(function(){
//			console.log( $(this).is(':checked'));
//		});

//		var test = document.getElementsByClassName('activityLabelCheckbox');
//		console.log(test);


</script>
@endsection
<!------------------------------------->
