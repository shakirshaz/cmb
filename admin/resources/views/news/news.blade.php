@extends('layouts.app')
@section('title','news')

@section('style',asset("css/news/news.css"))

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
            <div class="panel-body" style="background-color: {{ $bgColor }};width: 200px;top:65px;color: white;z-index: 100;position: absolute;float: right">
                <span class="pull-right" >{{$success}}</span>
            </div>

        @endif

        @component('ui-tab.ui-tabs')

            @slot('subject')
                News
            @endslot

        @section('add_subject')
            {!! Form::open(['url' => 'addNews','method' => 'post','class' => 'form', 'files' => true]) !!}
            {{ csrf_field() }}
            <div class="form-group">
            {!! Form::label('title', 'News Title') !!}
            {!! Form::text('title','',array('class' => 'form-control')) !!}
            </div>

            <div class="form-group">
            {!! Form::label('subtitle', 'News Subtitle') !!}
            {!! Form::text('subtitle','',array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
            {!! Form::label('content', 'News Content') !!}
            {!! Form::textarea('content','',array('class' => 'form-control widgEditor','id' => 'widgEditor')) !!}
            </div>
            <div class="form-group">
            {!! Form::label('names_concerned','Names Concerned') !!}
            {!! Form::text('names_concerned','',array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
            {!! Form::label('picture','Upload Related Picture') !!}
            {!! Form::file('picture',null,array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
            {!! Form::submit('Submit',array('class'=>'btn-block btn btn-primary ','style' =>'background-color: lightslategrey !important;color: white')) !!}
            </div>
            {!! Form::close() !!}
        @endsection

        @section('update_subject')

            {!! Form::open(['url' => 'updateNews','method' => 'post','class' => 'form','files' => true]) !!}
            {{ csrf_field() }}
            <div class="form-group">
                {!! Form::label('id', 'News Id') !!}
                {!! Form::select('id',App\News\News::all()->pluck('id'),null,['placeholder' => 'Select News ID','class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <input type="radio" name="check" id="check" class="toggleText"/>
                {!! Form::label('title', 'News Title',['style' => 'display: inline']) !!}
                <input style="float: right;" type="checkbox" name="t_check[]" id="t_check" checked> <span style="float: right;padding-right: 5px"> Keep Unchanged </span>
                {!! Form::text('title','',array('class' => 'form-control onlyOne','style' =>'display: none','disabled')) !!}
            </div>

            <div class="form-group">
                <input type="radio" name="check" id="check" class="toggleText" style="width: 20px">
                {!! Form::label('subtitle', 'News Subtitle') !!}
                <input style="float: right;" type="checkbox" name="st_check[]" id="st_check" checked> <span style="float: right;padding-right: 5px"> Keep Unchanged </span>
                {!! Form::text('subtitle','',array('class' => 'form-control onlyOne','style' =>'display: none','disabled')) !!}
            </div>
            <div class="form-group">
                <input type="radio" name="check" id="check" class="toggleText" style="width: 20px">
                {!! Form::label('content', 'News Content') !!}
                <input style="float: right;" type="checkbox" name="c_check[]" id="c_check" checked> <span style="float: right;padding-right: 5px"> Keep Unchanged </span>
                {!! Form::textarea('content','',array('class' => 'form-control widgEditor onlyOne','style' =>'display: none','disabled')) !!}
            </div>
            <div class="form-group">
                <input type="radio" name="check" id="check" class="toggleText" style="width: 20px">
                {!! Form::label('names_concerned','Names Concerned') !!}
                <input style="float: right;" type="checkbox" name="nc_check[]" id="nc_check" checked> <span style="float: right;padding-right: 5px"> Keep Unchanged </span>
                {!! Form::text('names_concerned','',array('class' => 'form-control onlyOne','style' =>'display: none','disabled')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('picture','Upload Related Picture') !!}
                <input style="float: right;" type="checkbox" name="p_check[]" id="p_check" checked> <span style="float: right;padding-right: 5px"> Keep Unchanged </span>
                {!! Form::file('picture',null,array('class' => 'form-control onlyOne','style' =>'display: none','disabled')) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Submit',array('class'=>'btn-block btn btn-primary ','id' => 'submit','style' =>'background-color: lightslategrey !important;color: white')) !!}
            </div>
            {!! Form::close() !!}

        @endsection

        @section('delete_subject')
            <table class="table table-hover" style="border: 4px solid goldenrod" frame="box" rules="all">
                <thead style="background-color: lightslategrey;color: white">
                <th>Id</th>
                <th>Title</th>
                <th>Sub Title</th>
                <th>Content</th>
                <th>Feature Names</th>
                <th>Image Path</th>
                <th colspan="2">Date Posted</th>
                </thead>
                <tbody>
                @if(\App\News\News::all()->count() == 0)
                <tr>
                    <td colspan="7">
                        <span style="color: red;font-weight: bolder;">
                            <center>
                                No Content to display
                            </center>
                        </span>
                    </td>
                </tr>

                @endif
            @foreach(\App\News\News::all() as $news)

                <tr>
                    <td>{{$news->id}}</td>
                    <td>{{$news->title}}</td>
                    <td>{{$news->subtitle}}</td>
                    <td>...........</td>
                    <td>{{$news->names_concerned}}</td>
                    <td>...........</td>
                    <td>{{$news->posted_on}}</td>
                    <td>
                        <a href="{{url('news/delete/'.$news->id)}}" class="btn" style="background-color: lightslategrey">Delete</a>
                    </td>
                </tr>

            @endforeach
                </tbody>
            </table>
        @endsection


        @endcomponent

    @endsection


@section('script',asset("js/news/news.js"))
