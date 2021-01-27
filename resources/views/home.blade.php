@extends('layouts.app')

@section('css')
	<style>

	</style>
@endsection

@section('content')
	<div class="row">

		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-danger">
				<div class="inner">
					<h3>{{ $patients->count() }}</h3>

					<p>{{ __('label.form.home.patient') }}</p>
				</div>
				<div class="icon">
					<i class="fa fa-user-injured"></i>
				</div>
				<a href="#" class="small-box-footer">{{ __('label.buttons.more_info') }} <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>

		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-primary">
				<div class="inner">
					<h3>{{ $doctors->count() }}</h3>

					<p>{{ __('label.form.home.doctor') }}</p>
				</div>
				<div class="icon">
					<i class="fa fa-user-md"></i>
				</div>
				<a href="#" class="small-box-footer">{{ __('label.buttons.more_info') }} <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>

		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-info">
				<div class="inner">
					<h3>{{ $medicines->count() }}</h3>

					<p>{{ __('label.form.home.medicine') }}</p>
				</div>
				<div class="icon">
					<i class="fa fa-pills"></i>
				</div>
				<a href="#" class="small-box-footer">{{ __('label.buttons.more_info') }} <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>

		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-success">
				<div class="inner">
					<h3>{{ $medicines->count() }}</h3>

					<p>{{ __('label.form.home.invoice') }}</p>
				</div>
				<div class="icon">
					<i class="fa fa-file-invoice"></i>
				</div>
				<a href="#" class="small-box-footer">{{ __('label.buttons.more_info') }} <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>


	{{-- <div class="card">
		<div class="card-header">
			{{ __('Dashboard') }}
			
			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
					<i class="fas fa-minus"></i></button>
				<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
					<i class="fas fa-times"></i></button>
			</div>
		</div>

		<div class="card-body">

		</div>
	</div> --}}
@endsection

@section('js')
	<script>

		

		// // Rest Javascript
		// function makeDinner(...args) {
		// 	return `Dinner includes the following items: ${args.join(':::')}`;
		// }
		// console.log(makeDinner('1','2','3','4','5','6'));

		// // Arrow Function
		// const makeWine = (qty)=> 'Wine '.repeat(qty);
		// console.log(makeWine(5));

		// let x = 0;

		// const impure = () =>{
		// 	x++;
		// 	return x ** 2;
		// }
		// console.log(impure());


		// const pure = (x) => x ** 2;
		// console.log(pure(x));

	</script>
@endsection