@extends('layouts.app')
@section('title','gallery')

@section('style',asset("css/gallery/gallery.css"))

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
        <div class="panel-body" style="background-color: {{$bgColor}};width: 200px;top:65px;color: white;z-index: 100;position: absolute;float: right">
            <span class="pull-right" >{{$success}}</span>
        </div>

    @endif

    @component('ui-tab.ui-tabs')

        @slot('subject')
            Gallery
        @endslot

@section('add_subject')
    {!! Form::open(['url' => 'addGallery','method' => 'post','class' => 'form', 'files' => true]) !!}
    {{ csrf_field() }}
    <div class="form-group">
        {!! Form::label('category', 'Image Category') !!}
        {!! Form::select('category',App\Gallery\Category::all()->pluck('category','id'),null,['placeholder' => 'Select Category','class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description','',array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('alt', 'Image Alternative Content') !!}
        {!! Form::text('alt','',array('class' => 'form-control')) !!}
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

    {!! Form::open(['url' => 'updateGallery','method' => 'post','class' => 'form','files' => true]) !!}
    {{ csrf_field() }}
    <div class="form-group">
        {!! Form::label('id', 'Gallery Id') !!}
        {!! Form::select('id',App\Gallery\Gallery::all()->pluck('id','id'),null,['placeholder' => 'Select Gallery ID','class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        <input type="radio" name="check" id="check" class="toggleText"/>
        {!! Form::label('category', 'Image Category',['style' => 'display: inline']) !!}
        <input style="float: right;" type="checkbox" name="cat_check[]" id="cat_check" checked> <span style="float: right;padding-right: 5px"> Keep Unchanged </span>
        {!! Form::select('category',App\Gallery\Category::all()->pluck('category','id'),null,['placeholder' => 'Change Category To','class' => 'form-control onlyOne','style' =>'display: none','disabled']) !!}
    </div>

    <div class="form-group">
        <input type="radio" name="check" id="check" class="toggleText" style="width: 20px">
        {!! Form::label('description', 'Description') !!}
        <input style="float: right;" type="checkbox" name="desc_check[]" id="desc_check" checked> <span style="float: right;padding-right: 5px"> Keep Unchanged </span>
        {!! Form::text('description','',array('class' => 'form-control onlyOne','style' =>'display: none','disabled')) !!}
    </div>
    <div class="form-group">
        <input type="radio" name="check" id="check" class="toggleText" style="width: 20px">
        {!! Form::label('alt', 'Alternative Text') !!}
        <input style="float: right;" type="checkbox" name="alt_check[]" id="alt_check" checked> <span style="float: right;padding-right: 5px"> Keep Unchanged </span>
        {!! Form::text('alt','',array('class' => 'form-control onlyOne','style' =>'display: none','disabled')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('picture','Upload Related Picture') !!}
        <input style="float: right;" type="checkbox" name="pic_check[]" id="pic_check" checked> <span style="float: right;padding-right: 5px"> Keep Unchanged </span>
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
        <th>Category</th>
        <th>Description</th>
        <th>Alt Text</th>
        <th colspan="2">Image Path</th>
        </thead>
        <tbody>
        @if(\App\Gallery\Gallery::all()->count() == 0)
            <tr>
                <td colspan="6">
                        <span style="color: red;font-weight: bolder;">
                            <center>
                                No Content to display
                            </center>
                        </span>
                </td>
            </tr>

        @endif
        @foreach(\App\Gallery\Gallery::all() as $gallery)

            <tr>
                <td>{{$gallery->id}}</td>
                <td>{{$gallery->category}}</td>
                <td>{{$gallery->description}}</td>
                <td>{{$gallery->alt}}</td>
                <td>{{$gallery->image_path}}</td>
                <td>
                    <a href="{{url('gallery/delete/'.$gallery->id)}}" class="btn" style="background-color: lightslategrey" title="Click to Delete">Delete</a>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
@endsection



@endcomponent

@endsection
@section('addCatButton')
<div id="openAddcatDialog" class="btn btn-primary roundBottun" title="Click to Add Category">
        <p>+</p>
</div>
@stop


@section('addCategoryDialog')
    <div id="dialog-form" title="Add Gallery Category">
        {!! Form::open(['url' => 'gallery/addCategory','method' => 'post','class' => 'form','id' => 'addCategory']) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('category', 'Category',['style' => 'display: inline']) !!}
            {!! Form::text('category','',array('class' => 'form-control','placeholder' => 'Insert a one word category')) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Submit',array('class'=>'btn-block btn btn-primary ','id' => 'submit','style' =>'background-color: lightslategrey !important;color: white')) !!}
        </div>
        {!! Form::close() !!}
    </div>

@stop


@section('script',asset("js/gallery/gallery.js"))