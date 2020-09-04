@extends('layouts.app')

@section('content')
<a class="alert alert-danger" role="alert" href="/">Go Back</a>
<br><br>
<h1><a href="todo/{{$todo->id}}">{{$todo->text}}"</a></h1>
<div class="alert alert-primary" role="alert">{{$todo->due}}</div>
<hr>
<p>{{$todo->bady}}</p>
<a herf="/todo/{($todo->id)/edit" class="btn btn-primary">Edit</a>
{!! Form::open(['action' =>['TodosController@destroy',$todo ->id],'method'=>'POST', 'class' => 'pull-right']) !!}
{{ Form::hidden('_method','DELETE') }}
{{ Form::bsSubmit ('Delete',['class'=>'btn btn-danger']) }}
{!! Form::close() !!}
@endsection