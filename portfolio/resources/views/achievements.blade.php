@extends('skeleton.base')
@section('title', 'Achievements')
@section('description', 'Description for this page')

@section('styles')
	@parent

@stop

@section('lazyscripts')
	@parent

@stop


@section('content')
	<div id="main" class="page-home container-fluid"> 
		<div id="pnc-banner" class="container-fluid img-banner banner"> 
<cite>Photo Credit: Josh Rogan - Aug. 2014</cite>
</div>

<section class="container" id="content"> 
  <h1 class=""> Personal Achievements </h1>

	<section id="achievements"> 

		<?php 
// 			foreach ($achievements->achievements as $achievement){
// 					echo <<<HTML
// 					<section class='row'>
// 						<a href='{$achievement->link}' target='_blank'> 
// 							<div class='col-md-2 col-sm-2 col-xs-12 text-center'><i class='fa {$achievement->fa}'></i></div>
// 							<div class='col-md-10 col-sm-10 col-xs-12'>
// 								<h4 class='list-group-item-heading'>{$achievement->title}</h4>
// 								<p class='list-group-item-text'>{$achievement->content}</p>
// 							</div>
// 						</a>
// 					</section>
// HTML;
// 			}
		?>

	</section>

</section>
	</div>
@endsection
