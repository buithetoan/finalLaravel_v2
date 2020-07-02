@extends('admin.shared.main')
@section('title')
Add new order
@endsection
@section('content')
<div class="content_yield">
    {{ Form::open(['route' => 'order.create', 'method' => 'post','enctype '=>'multipart/form-data','class' => 'col-md-12 row']) }}
    <div class="col-md-12 m-auto">
        <h3 class="mb-5 font-weight-bold">Orders</h3>        
        <div class="col-lg-10 col-md-12 col-sm-12 row">
            <div class="form-group">
                {{ Form::label('Order status: ','',['class' => 'font-weight-bold']) }}
                {!! Form::text('order_status', null, [
                    'class' => 'form-control',
                    'placeholder'=>"Order status"
                ])
                !!} 
                <span class="text-danger">{{ $errors->first('order_status')}}</span>
            </div>
            
            <div class="form-group">
                {{ Form::label('Payment status: ','',['class' => 'font-weight-bold']) }}
                {!! Form::text('payment_status', null, [
                    'class' => 'form-control',
                    'placeholder'=>"Payment status"
                ])
                !!} 
                <span class="text-danger">{{ $errors->first('payment_status')}}</span>
            </div>

            <div class="form-group">
                {{ Form::label('Customer: ','',['class' => 'font-weight-bold']) }}
                {!! Form::select('customer_id', $customers, null, [
                    'class' => 'form-control',
                    'placeholder'=>"Choose Customer"
                ])
                !!} 
                <span class="text-danger">{{ $errors->first('customer_id')}}</span>
            </div>

            <div class="form-group text-right">
                <a class="btn btn-info mt-3" href="{{ route('brand.index') }}" title="back">Back to list</a>
                {{ Form::submit('Save',['class' => 'font-weight-bold text-white btn bg-color-green mt-3']) }}
            </div>
        </div>
    </div>
    {{ Form::close() }}
</div>
@endsection