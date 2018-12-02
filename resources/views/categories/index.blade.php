@extends('main')

@section('title','| All Categories')
	
@section('content')
	<div class="row">
		<div class="col-md-8">
			<h3>Categories</h3>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($categories as $category)
					<tr>
						<th>{{ $category->id }}</th>
						<td>{{ $category->name }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div> 
		<div class="col-md-3 col-md-offset-1">
			<div class="well form-spacing-top">
				<h3>New Category</h3>
				{!! Form::open(['route'=>'categories.store','method'=>'POST']) !!}
				
				{{ Form::label('name','Name:') }}	
				{{ Form::text('name',null,['class'=>'form-control','required'=>'']) }}
				{{ Form::submit('Create New Category',['class'=>'btn btn-primary btn-block btn-spacing-top']) }}
				
				{!! Form::close() !!}
			</div>
		</div>
	</div> 
@endsection