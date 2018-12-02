@extends('main')

@section('title','| All Tags')
	
@section('content')
	<div class="row">
		<div class="col-md-8">
			<h3>Tags</h3>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($tags as $tag)
					<tr>
						<th>{{ $tag->id }}</th>
						<td><a href="{{ route('tags.show',$tag->id) }}">{{ $tag->name }}</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div> 
		<div class="col-md-3 col-md-offset-1">
			<div class="well form-spacing-top">
				<h3>New Tags</h3>
				{!! Form::open(['route'=>'tags.store','method'=>'POST']) !!}
				
				{{ Form::label('name','Name:') }}	
				{{ Form::text('name',null,['class'=>'form-control','required'=>'']) }}
				{{ Form::submit('Create New Tag',['class'=>'btn btn-primary btn-block btn-spacing-top']) }}
				
				{!! Form::close() !!}
			</div>
		</div>
	</div> 
@endsection