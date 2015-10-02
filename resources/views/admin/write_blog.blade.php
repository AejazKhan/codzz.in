@extends('admin.header')


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>New Blog</title>
	@include('admin.css')


</head>
<body>

@section('content')
<div class="container">
		<div class="sidebar">

		</div>

<div class="col-lg-10 ">
<h1>Write a Blog</h1>

{!! Form::open(['url'=>'admin','class'=>'form-horizontal']) !!}

<div class="form-group">
{!! Form::label('title','Title',['class'=>'col-lg-2 ']) !!}
<div class="col-lg-9">
{!! Form::text('title',null,['class'=>'form-control ']) !!}
</div>
</div>


<div class="form-group ">
{!! Form::label('heading','Heading',['class'=>'col-sm-2']) !!}
<div class="col-lg-9">
{!! Form::text('heading',null,['class'=>'form-control']) !!}
</div>
</div>

<div class="form-group">
{!! Form::label('full_blog','Full Blog',['class'=>'col-sm-2']) !!}
<div class="col-lg-9">
{!! Form::textarea('full_blog',null,['class'=>'form-control','rows'=>'15']) !!}
</div>
</div>

<div class="form-group">
{!! Form::label('thumbnail','Thumbnail',['class'=>'col-sm-2']) !!}
<div class="col-lg-9">
{!! Form::file('thumbnail',['class'=>'form-control']) !!}
</div>
</div>

<div class="form-group">
{!! Form::label('images','Blog Image',['class'=>'col-sm-2']) !!}
<div class="col-lg-9">
{!! Form::file('images',['class'=>'form-control','multiple'=>'multiple']) !!}
</div>
</div>

<div class="form-group">
{!! Form::label('status','Status',['class'=>'col-lg-2 ']) !!}
<div class="col-lg-9">
{!! Form::select('status', array('1' => '1', '2' => '2'), '2',['class'=>'form-control']) !!}
</div>
</div>

<div class="form-group">
{!! Form::label('written_by','Written by',['class'=>'col-lg-2 ']) !!}
<div class="col-lg-9">
{!! Form::select('written_by', array('1' => '1', '2' => '2'), '2',['class'=>'form-control']) !!}
</div>
</div>

<div class="form-group">
{!! Form::label('updated_by','Updated by',['class'=>'col-lg-2 ']) !!}
<div class="col-lg-9">
{!! Form::select('updated_by', array('1' => '1', '2' => '2'), '2',['class'=>'form-control']) !!}
</div>
</div>

<div class="form-group">
{!! Form::label('seo_url','SEO Url',['class'=>'col-lg-2 ']) !!}
<div class="col-lg-9">
{!! Form::text('seo_url', null,['class'=>'form-control']) !!}
</div>
</div>

<div class="form-group">
{!! Form::label('published_at','Publishhed at',['class'=>'col-lg-2 ']) !!}
<div class="col-lg-9">
{!! Form::input('date','published_at',date('m-d-Y'),['class'=>'form-control']) !!}
</div>
</div>


<div class="form-group">
<div class="col-lg-2 col-lg-offset-2">
{!! Form::submit('save blog',['class'=>'btn btn-primary form-control  ']) !!}
{!! Form::close() !!}
</div>
</div>

<div class="form-group">
<div class="col-lg-9 col-lg-offset-2">
</div>
</div>
</div>
</div>

<div class="form-group">
<div class="col-lg-2 col-lg-offset-2">
@include('errors.form_errors')
</div>
</div>



	<div class="footer" >

	</div>

	@include('admin.js')


</body>
</html>
@stop
