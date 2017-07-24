@extends('layouts.app')
@section('title','contact')

@section('style',asset("css/contact/contact.css"))
@section('back')
@include('back.back')
@endsection
@section('status')
    <div class="row" id="errorBlock">
        <div class="col-lg-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@stop
@section('content')

    @if($success != '')
        <div class="panel-body" style="background-color: {{$bgColor}};width: 200px;float: left;top: 70px;position: absolute;color: white;">
            <span class="pull-right" >{{$success}}</span>
        </div>

    @endif

    @component('ui-tab.ui-tabs')



        @slot('subject')
            Contact
        @endslot

@section('update_subject')
    {!! Form::open(['url' => 'submitContact','method' => 'post']) !!}
    {{ csrf_field() }}
    <div class="form-group">
    {!! Form::label('address', 'Add Address') !!}
    {!! Form::text('address','',array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
    {!! Form::label('email', 'Add Email Of School') !!}
    {!! Form::email('email','',array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
    {!! Form::label('telephone', 'Add Tele-Phone Number') !!}
    {!! Form::text('telephone','',array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
    {!! Form::submit('Submit',array('class'=>'btn btn-block','style' =>'background-color: lightslategrey !important;color: white')) !!}
    </div>
    {!! Form::close() !!}
@endsection

@section('add_subject')
    <center>
        <strong style="color: red;">Not Available For This</strong>
    </center>
@endsection

@section('delete_subject')
    <center>
        <strong style="color: red;">Not Available For This</strong>
    </center>
@endsection


@endcomponent




@endsection
