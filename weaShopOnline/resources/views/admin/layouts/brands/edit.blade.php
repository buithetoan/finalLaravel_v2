@extends('admin.shared.main')
@section('title')
Edit brand
@endsection
@section('content')
<div class="content_yield">
	{{ Form::open(['route'=>['brand.update',$brand->id],'method'=>'put','enctype '=>'multipart/form-data','class' => 'col-md-12 row']) }}
	<div class="col-md-12 m-auto">
		<h3 class="mb-5 font-weight-bold">Brand</h3>		
		<div class="col-lg-10 col-md-12 col-sm-12 row">
			<div class="form-group">
				{{ Form::label('Name: ','',['class' => 'font-weight-bold']) }}
				{!! Form::text('name', $brand->name, [
					'class' => 'form-control',
					'placeholder'=>"Name Brand"
				])
				!!}
				<span class="text-danger">{{ $errors->first('name')}}</span>
			</div>
			<div class="form-group">
				{{ Form::label('Address: ','',['class' => 'font-weight-bold']) }}
				{!! Form::text('address', $brand->address, [
					'class' => 'form-control',
					'placeholder'=>"Address"
				])
				!!}
				<span class="text-danger">{{ $errors->first('address')}}</span>
			</div>
			<div class="form-group">
				{{ Form::label('Phone No: ','',['class' => 'font-weight-bold']) }}
				{!! Form::text('phone_no', $brand->phone_no, [
					'class' => 'form-control',
					'placeholder'=>"Phone No"
				])
				!!}
				<span class="text-danger">{{ $errors->first('phone_no')}}</span>
			</div>
			<div class="form-group">
				{{ Form::label('Slug: ','',['class' => 'font-weight-bold']) }}
				{!! Form::text('slug', $brand->slug, [
					'class' => 'form-control',
					'placeholder'=>"Slug"
				])
				!!}
				<span class="text-danger">{{ $errors->first('slug')}}</span>
			</div>
			<div class="form-group">
				{{ Form::label('Logo: ','',['class' => 'font-weight-bold']) }}
            	{{ Form::file('logo', ['class' => 'form-control' ]) }}
            	<input type="hidden" value="{{$brand->logo}}" name="image"><br>
            	<span class="text-danger">{{ $errors->first('logo')}}</span>
			</div>
			<div class="form-group text-right">
				<a class="btn btn-info mt-3" href="{{ route('brand.index') }}" title="Create"><i class="far fa-eye">List</i></a>
				{{ Form::submit('Save',['class' => 'font-weight-bold text-white btn btn-warning mt-3']) }}
			</div>
		</div>
	</div>
	{{ Form::close() }}
</div>
@endsection