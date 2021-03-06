@extends('layouts.app')
@section('content')
<h1>Todos</h1>
@if(count($todos) > 0)
 @foreach($todos as $todo)
   <div  class="alert alert-danger" role="alert">
	   <h3>
		   	<a href="{{route('todo.show',['id'=>$todo->id])}}">{{$todo->text}}</a>
		   	<span class="alert alert-pink">{{$todo->due}}</span>
	   </h3>
   </div>
@endforeach
  @endif
@endsection