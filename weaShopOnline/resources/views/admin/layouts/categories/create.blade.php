@extends('admin.shared.main')
@section('title')
Add new category
@endsection
@section('content')
<div class="content_yield">
	{{ Form::open(['url' => 'admin/category', 'method' => 'post','enctype '=>'multipart/form-data','class' => 'col-md-12 row']) }}
	<div class="col-md-12 m-auto">
		<h3 class="mb-5 font-weight-bold">Category</h3>		
		<div class="col-lg-10 col-md-12 col-sm-12 row">
			<div class="form-group">
				{{ Form::label('Name: ','',['class' => 'font-weight-bold']) }}
				{!! Form::text('name', null, [
					'class' => 'form-control',
					'placeholder'=>"Name Category"
				])
				!!}
				<span class="text-danger">{{ $errors->first('name')}}</span>
			</div>
			<div class="form-group">
				{{ Form::label('Parent ID: ','',['class' => 'font-weight-bold']) }}
				{!! Form::text('parent_id', null, [
					'class' => 'form-control',
					'placeholder'=>"ParentId"
				])
				!!}
				<span class="text-danger">{{ $errors->first('parent_id')}}</span>
			</div>
			<div class="form-group">
				{{ Form::label('Display Order: ','',['class' => 'font-weight-bold']) }}
				{!! Form::text('display_order', null, [
					'class' => 'form-control',
					'placeholder'=>"Display Order"
				])
				!!}
				<span class="text-danger">{{ $errors->first('display_order')}}</span>
			</div>
			
			<div class="form-group">
				{{ Form::label('Description: ','',['class' => 'font-weight-bold']) }}
				{!! Form::text('description', null, [
					'class' => 'form-control',
					'placeholder'=>"Description"
				])
				!!}
				<span class="text-danger">{{ $errors->first('description')}}</span>
			</div>
			<div class="form-group text-right">
				<a class="btn btn-info mt-3" href="{{ route('category.index') }}" title="back"><i class="fas fa-arrow-left"></i> Back to list</a>
				{{ Form::submit('Save',['class' => 'font-weight-bold text-white btn bg-color-green mt-3']) }}
			</div>
		</div>
	</div>
	{{ Form::close() }}
</div>
@endsection