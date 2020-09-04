@extends('layouts.app')
@section('content')
<br><hr>
<h1>Create Todo</h1>
{!! From ::open(['action' => 'TodosController@store','method' => 'POST']) !!}
{{ Form ::bsText('text')}}
{{ Form ::bsTextArea('body')}}
{{ Form ::bsText('due')}}
{{ Form ::bsSubmit('submit',['class'=>'btn btn-primary']) }}
{!! Form::close() !!}
@endsection