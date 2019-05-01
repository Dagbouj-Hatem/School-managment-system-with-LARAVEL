@extends('layouts.app')

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
			 	<div class="col-md-12">
			 		<img src="{{ asset('images/library.jpg')}}" class="img img-responsive">
			 	</div>
			 </div>
		<!--market updates end here-->
	</div>
</div>
@endsection
