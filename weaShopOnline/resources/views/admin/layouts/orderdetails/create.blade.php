@extends('admin.shared.main')
@section('title')
Add new order
@endsection
@section('content')
<div class="content_yield">
    {{ Form::open(['route' => 'orderdetail.create', 'method' => 'post','enctype '=>'multipart/form-data','class' => 'col-md-12 row']) }}
    <div class="col-md-12 m-auto">
        <h3 class="mb-5 font-weight-bold">Order Detail</h3>        
        <div class="col-lg-10 col-md-12 col-sm-12 row">
            <div class="form-group">
                {{ Form::label('Quantity: ','',['class' => 'font-weight-bold']) }}
                {!! Form::text('quantity', null, [
                    'class' => 'form-control',
                    'placeholder'=>"Quantity"
                ])
                !!}
                <span class="text-danger">{{ $errors->first('quantity')}}</span>
            </div>

            <div class="form-group text-right">
                <a class="btn btn-info mt-3" href="{{ route('orderdetail.index') }}" title="back">Back to list</a>
                {{ Form::submit('Save',['class' => 'font-weight-bold text-white btn bg-color-green mt-3']) }}
            </div>
        </div>
    </div>
    {{ Form::close() }}
</div>
@endsection