@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection

@section('content')
<div class="blank">
	<div class="content-header">
		<!--market updates updates-->
			 <div class="market-updates">
					<div class="col-md-4 market-update-gd">
						<div class="market-update-block clr-block-1">
							<div class="col-md-8 market-update-left">
								<h3>{{ $books }}</h3>
								<h4>Livres </h4>
								<p>Dans la bibliothèque</p>
							</div>
							<div class="col-md-4 market-update-right">
								<i class="fa fa-file-text-o"> </i>
							</div>
						  <div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-4 market-update-gd">
						<div class="market-update-block clr-block-2">
						 <div class="col-md-8 market-update-left">
							<h3>{{ $users }}</h3>
							<h4>Utilisateurs</h4>
							<p>Dans notre application</p>
						  </div>
							<div class="col-md-4 market-update-right">
								<i class="fa fa-eye"> </i>
							</div>
						  <div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-4 market-update-gd">
						<div class="market-update-block clr-block-3">
							<div class="col-md-8 market-update-left">
								<h3>{{ $msgs }}</h3>
								<h4>Messages</h4>
								<p>Publié dans le forum </p>
							</div>
							<div class="col-md-4 market-update-right">
								<i class="fa fa-envelope-o"> </i>
							</div>
						  <div class="clearfix"> </div>
						</div>
					</div>
				   <div class="clearfix"> </div>
			 </div>
			 <div class="row" style="margin-top: 50px;">
			 	<div class="blank"><!-- add class div -->
				    <h2>Calendrier des examens</h2>
				    <section class="content-header">
				        <h1>
				            
				        </h1>
				    </section>
				    <div class="blankpage-main"> 
				        <div class="box box-primary">

				            <div class="box-body">
				                <div class="row">
				                    {!! $calendar->calendar() !!}
				                </div>
				            </div>
				        </div>
				    </div>
				</div>
			 </div>
		<!--market updates end here-->
	</div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar->script() !!}
@endsection