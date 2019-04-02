@extends('layout')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <form action="{{ route('todo.save', ['id'=> $todo->id]) }}" method="post">
      {{ csrf_field() }}
      <!-- <input type="text" class="form-control input-lg" name="todo" placeholder="Creat A New Todo"> -->
      <input type="text" class="form-control input-lg" name="todo" value="{{ $todo->todo }}" placeholder="Create a new todo">
      <!-- $todo here recieved from controller -->
    </form>
  </div>
</div>

@stop
