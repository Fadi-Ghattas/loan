@extends('layouts.master')
@section('title')
    {{trans_choice('general.add',1)}}
    {{trans_choice('general.payment',1)}}
    {{trans_choice('general.on',1)}}
    {{trans_choice('general.account',1)}}
@endsection
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">
                {{trans_choice('general.add',1)}}
                {{trans_choice('general.payment',1)}}
                {{trans_choice('general.on',1)}}
                {{trans_choice('general.account',1)}}
            </h3>

            <div class="box-tools pull-right">

            </div>
        </div>

        {!! Form::open(array('url' => url('loan/'.$loan->id.'/payment-on-account/store'), 'method' => 'post', 'class' => 'form-horizontal',"enctype"=>"multipart/form-data")) !!}

        <div class="box-body">
            <p class="bg-navy disabled color-palette">
                {{trans_choice('general.loan',1)}}
                {{trans_choice('general.payment',1)}}
                {{trans_choice('general.on',1)}}
                {{trans_choice('general.account',1)}}
                ({{trans_choice('general.required',1)}}
                {{trans_choice('general.field',2)}}):
            </p>

            <p class="text-red"><b>{{trans_choice('general.payment',1)}} {{trans_choice('general.amount',1)}}:</b></p>

            <div class="form-group">
                {!! Form::label('payment_on_account',trans_choice('general.payment',1).' '.trans_choice('general.amount',1),array('class'=>'col-sm-3 control-label')) !!}
                <div class="col-sm-5">
                    {!! Form::text('payment_on_account', 100.00, array('class' => 'form-control touchspin', 'placeholder'=>"",'required'=>'required')) !!}
                </div>
            </div>
            <hr>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary pull-right">{{trans_choice('general.save',1)}}</button>
        </div>
        {!! Form::close() !!}
    </div>
    <!-- /.box -->

@endsection

