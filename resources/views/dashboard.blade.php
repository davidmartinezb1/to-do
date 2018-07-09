@extends('master')

@section('title', 'Dashboard - TO-DO')

@section('content')


	<nav class="navbar">
			<div class="navbar-brand">
					
				<a class="navbar-item" href="{{ url('/test') }}">
							<img src="{!! asset('image/laravel-development.jpg') !!}" alt="application" width="112" height="28">
					</a>
					
					<div class="navbar-item is-hidden-desktop">
							<p class="control">
									<a class="button is-primary" href="#">
													<span class="icon">
															<i class="fa fa-calendar"></i>
													</span>
											<span>Date</span>
									</a>
							</p>
					</div>
					
			</div>
			
			<div class="navbar-menu">
					<div class="navbar">

							<div class="navbar-item" id="date_picker">
									<datepicker v-model="date" input-class="input"></datepicker>
							</div>

					</div>
			</div>
    </nav>

	<div id='app' class="container">
			<task-list></task-list>
	</div>


@endsection

@section('js')
	@parent
	<script src="{!! asset('js/dashboard/dashboard.js') !!}"></script>

@endsection