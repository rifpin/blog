@extends('main')

@section('title','| Create New Post')

@section('stylesheets')

	{!! Html::style('/assets/css/parsley.css') !!}
	{!! Html::style('/assets/css/select2.min.css') !!}

	<script type="text/javascript" src="/assets/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">

		tinymce.init({
			selector:'textarea',
			plugins:'link'

		});

	</script>

@endsection

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>
			{!! Form::open(array('route' => 'posts.store','data-parsley-validate'=>'','files'=>true)) !!}

				{{ Form::label('title','Title:') }}
				{{ Form::text('title',null,array('class'=>'form-control','required'=>'','maxlength'=>'255')) }}

				{{ Form::label('slug','Slug:') }}
				{{ Form::text('slug',null,['class'=>'form-control','required'=>'','minlength'=>'5','maxlength'=>'255'])}}

				{{ Form::label('category_id','Category:') }}
				<select name='category_id' class='form-control'>
					@foreach ($categories as $category)
						<option value='{{ $category->id }}'>{{ $category->name }}</option>
					@endforeach
				</select>

				{{ Form::label('featured_image','Upload Featured Image:') }}
				{{ Form::file('featured_image',['class'=>'form-control']) }}

				{{ Form::label('tags','Tags:') }}
				<select name='tags[]' class='form-control select2-multi' multiple='true'>
					@foreach ($tags as $tag)
						<option value='{{ $tag->id }}'>{{ $tag->name }}</option>
					@endforeach
				</select>

    			{{ Form::label('body','Post body:') }}
    			{{ Form::textarea('body', null, array('class'=>'form-control','required'=>'')) }}

    			{{ Form::submit('Create Post', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top: 20px;')) }}

			{!! Form::close() !!}
		</div>
	</div>
@endsection
@section('scripts')

	{!! Html::script('/assets/js/parsley.min.js') !!}
	{!! Html::script('/assets/js/select2.min.js') !!}

	<script type="text/javascript">

		$('.select2-multi').select2();

	</script>

@endsection
